$('img').each ->
  if !$(this).attr('src')
    $(this).attr('src', window.app_url+'assets/image/placeholder/default.jpg')

createSnapsvg = ->
  s = Snap(800, 600)
  bigCircle = s.circle(150, 150, 100)

hoverEffect = ->
  $('.menu').on 'mouseover', ->
    obj = $(this)
    obj.addClass 'transform'
  $('.menu').on 'mouseout', ->
    obj = $(this)
    obj.removeClass 'transform'

init = ->
  #createSnapsvg()
  hoverEffect()

init()