# @codekit-prepend "../../bower_components/leaf/js/libs/waves/waves.js"
# @codekit-prepend "../../bower_components/leaf/coffee/script.coffee"

$('img').each ->
  if !$(this).attr('src')
    $(this).attr('src', window.app_url+'assets/image/dummies/dummy-rectangular.jpg')

$('.file-list li').click ->
  obj = $(this)
  target = obj.next()
  inspectFile($(this))
  if target.is(':visible') && target.is('ul')
    obj.find('span').html('+')
    target.slideUp('fast')
  else
    obj.find('span').html('-') && target.is('ul')
    target.slideDown('fast')

inspectFile = (obj) ->
  file = obj.attr('rel')
  $('.viewport div:not(.'+file+')').slideUp('fast')
  $('.viewport .'+file).slideDown('fast')