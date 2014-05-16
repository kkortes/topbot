divEscapeContentElement = (message) ->
  return $('<div></div>').text message

divSystemContentElement = (message) ->
  return $('<div></div>').html '<i>' + message + '</i>'

processUserInput = (chatApp, socket) ->
  message = $('#send-message').val()
  systemmessage = ''

  if message.charAt(0) is '/'
    systemMessage = chatApp.processCommand message
    if systemMessage
      $('#messages').append divSystemContentElement systemMessage
  else
    chatApp.sendMessage $('#room').text(), message
    $('#messages').append divSystemContentElement message
    $('#messages').scrollTop $('#messages').prop 'scrollHeight'

  $('#send-message').val('')

socket = io.connect()
$(document).ready ->
  chatApp = new Chat socket

  socket.on 'nameResult', (result) ->
    message = ''

    if result.success
      message = 'You are known as ' + result.name + '.'
    else
      message = result.message

    $('#messages').append divSystemContentElement message
    return

  socket.on 'joinResult', (result) ->
    $('#room').text result.room
    $('#messages').append divSystemContentElement 'Room changed.'
    return

  socket.on 'message', (message) ->
    newElement = $('<div></div>').text message.text
    $('#messages').append newElement


  socket.on 'rooms', (rooms) ->
    $('#room-list').empty()
    for room of rooms
      room = room.substring 1, room.length
      if room isnt ''
        $('#room-list').append divEscapeContentElement room

    $('#room-list div').on 'click', ->
      chatApp.processCommand '/join ' + $(this).text()
      $('#send-message').focus()
      return
    return

  setInterval ->
    socket.emit 'rooms'
    return true
  , 1000

  $('#send-message').focus()

  $('#send-form').on 'submit', ->
    processUserInput chatApp, socket
    return false

  return true