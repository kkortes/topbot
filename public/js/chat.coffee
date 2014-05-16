Chat = (socket) ->
  this.socket = socket
  return

Chat.prototype.sendMessage = (room, text) ->
  message = {
    room : room,
    text : text
  }
  this.socket.emit 'message', message
  return

Chat.prototype.changeRoom = (room) ->
  this.socket.emit 'join', {
    newRoom : room
  }
  return

Chat.prototype.processCommand = (command) ->
  words = command.split ' '
  command = words[0].substring(1, words[0].length).toLowerCase()
  message = false

  switch command
    when 'join'
      words.shift()
      room = words.join ' '
      this.changeRoom room
    when 'nick'
      words.shift()
      name = words.join ' '
      this.socket.emit 'nameAttempt', name
    else
      message = 'Unrecognized command.'

  return message