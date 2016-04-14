# Checks what media query platform is running (on window resize).
getPlatform = (withorientation = false) ->
  platform = window.getComputedStyle(document.body,':before').getPropertyValue('content').replace(/'/g,'').replace(/"/g,'')
  if !withorientation
    platform = platform.split(' ')
    platform = platform[0]
  
  return platform

placeholderImage = ->
  rand = ['default', 'portrait', 'landscape']

  $('img').each ->
    image = Math.floor((Math.random() * 3))

    #locked to certain orientation
    image = 1

    if !$(this).attr('src')
      $(this).attr('src', window.app_url+'assets/image/placeholder/'+rand[image]+'.jpg')

init = ->
  placeholderImage()

init()