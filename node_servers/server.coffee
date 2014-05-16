http  = require 'http'
fs    = require 'fs'
path  = require 'path'
mime  = require 'mime'
chatServer = require '../node_servers/chat_server'
#io    = require('socket.io')
cache = {}

server = http.createServer (request, response) ->
  fpath = false

  if request.url == '/'
    fpath = 'public/index.html'
  else
    fpath = 'public/' + request.url
  #console.log fpath
  absPath = '../' + fpath
  serveStatic response, cache, absPath

server.listen 3000, () ->
  console.log 'Server listening on port 3000.'

chatServer.listen server

send404 = (res) ->
  res.writeHead 404, {
    'Content-Type':'text/plain'
  }
  res.write 'Error 404: resource not found.'
  res.end()

sendFile = (res, fpath, fcontents) ->
  res.writeHead 200, {
    'Content-Type':mime.lookup path.basename fpath
  }
  res.end fcontents

serveStatic = (res, cache, absPath) ->
  if false#cache[absPath]
    sendFile res, absPath, cache[absPath]
  else
    #console.log absPath
    fs.exists absPath, (exists) ->
      #console.log exists
      if exists
        fs.readFile absPath, (err, data) ->
          if err
            send404 res
          else
            cache[absPath] = data
            sendFile res, absPath, data
      else
        send404 res