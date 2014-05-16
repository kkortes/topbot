socketio = require 'socket.io'
io = ''
guestNumber = 1
nickNames = {}
namesUsed = []
currentRoom = {}

exports.listen = (server) ->
  io = socketio.listen server
  io.set 'log level', 1
  io.sockets.on 'connection', (socket) ->
    guestNumber = assignGuestName socket, guestNumber, nickNames, namesUsed
    joinRoom socket, 'Lobby'

    handleMessageBroadcasting socket, nickNames
    handleNameChangeAttempts socket, nickNames, namesUsed
    handleRoomJoining socket

    socket.on 'rooms', () ->
      socket.emit 'rooms', io.sockets.manager.rooms
      return

    handleClientDisconnection socket, nickNames, namesUsed
    return
  return

assignGuestName = (socket, guestNumber, nickNames, namesUsed) ->
  name = 'Guest' + guestNumber
  nickNames[socket.id] = name
  socket.emit 'nameResult', {
    success : true,
    name : name
  }
  namesUsed.push name
  console.log name + ' joined!'
  return guestNumber + 1

handleNameChangeAttempts = (socket, nickNames, namesUsed) ->
  socket.on 'nameAttempt', (name) ->
    if name.indexOf('Guest') is 0
      socket.emit 'nameResult', {
        success : false,
        message : 'Names cannot begin with "Guest".'
      }
    else
      if namesUsed.indexOf(name) is -1
        previousName = nickNames[socket.id]
        previousNameIndex = namesUsed.indexOf previousName
        namesUsed.push name
        nickNames[socket.id] = name

        delete namesUsed[previousNameIndex]
        socket.emit 'nameResult', {
          success : true,
          name : name
        }
        socket.broadcast.to(currentRoom[socket.id]).emit 'message', {
          text : previousName + ' is now known as ' + name + '.'
        }
      else
        socket.emit 'nameResult', {
          success : false,
          message : 'That name is already in use.'
        }
  return

handleMessageBroadcasting = (socket) ->
  socket.on 'message', (message) ->
    console.log nickNames[socket.id] + ' wrote: "' + message.text + '"'
    socket.broadcast.to(message.room).emit 'message', {
      text : nickNames[socket.id] + ': ' + message.text
    }
    return
  return

handleRoomJoining = (socket) ->
  socket.on 'join', (room) ->
    socket.leave(currentRoom[socket.id])
    joinRoom socket, room.newRoom
    return
  return

handleClientDisconnection = (socket) ->
  socket.on 'disconnect', () ->
    nameIndex = namesUsed.indexOf nickNames[socket.id]
    name = namesUsed[nameIndex]
    delete namesUsed[nameIndex]
    delete nickNames[socket.id]
    console.log name + ' left..'
    return
  return

joinRoom = (socket, room) ->
  socket.join room
  currentRoom[socket.id] = room
  socket.emit 'joinResult', {
    room : room
  }
  socket.broadcast.to(room).emit 'message', {
    text : nickNames[socket.id] + ' has joined ' + room + '.'
  }

  usersInRoom = io.sockets.clients room
  if usersInRoom.length > 1
    usersInRoomSummary = 'Users currently in ' + room + ': '
    i = 0
    for index in usersInRoom
      userSocketId = usersInRoom[i].id
      if userSocketId isnt socket.id
        if i > 0
          usersInRoomSummary += ', '
        usersInRoomSummary += nickNames[userSocketId]
      i++
    usersInRoomSummary += '.'
    socket.emit 'message', {
      text : usersInRoomSummary
    }
  return