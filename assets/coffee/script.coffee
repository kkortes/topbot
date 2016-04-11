# Checks what media query platform is running (on window resize).
getPlatform = (withorientation = false) ->
  platform = window.getComputedStyle(document.body,':before').getPropertyValue('content').replace(/'/g,'').replace(/"/g,'')
  if !withorientation
    platform = platform.split(' ')
    platform = platform[0]
  
  return platform

placeholderImage = ->
  $('img').each ->
    if !$(this).attr('src')
      $(this).attr('src', window.app_url+'assets/image/placeholder/default.jpg')

init = ->
  placeholderImage()

init()