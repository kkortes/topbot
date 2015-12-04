# checks what media query platform is running (on window resize). Returns:
# tablet-horizontal, tablet-vertical, smartphone-horizontal, smartphone-vertical or desktop
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

heartAnim = ->
  glow = $('.heart-glow')
  width = 300
  frames = 25

  i = 0
  window.myinterval = setInterval ->
    glow.css
      backgroundPosition: (i*300)+'px 0px'
    i++

    if i == 25
      i = 0

  , 50

heartClick = ->
  heartwrapper = $('.heart-wrapper')
  heartwrapper.on 'click', ->
    heartwrapper.addClass 'pulsate'
    $('.heart-static').addClass 'warm'
    return false

init = ->
  placeholderImage()
  heartAnim()
  heartClick()

init()