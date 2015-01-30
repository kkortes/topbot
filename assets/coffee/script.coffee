# @codekit-prepend "../../bower_components/leaf-css-framework/js/libs/Waves-master/dist/waves.js"
# @codekit-prepend "../../bower_components/leaf-css-framework/coffee/script.coffee"

placeholderImage = ->
  $('img').each ->
    if !$(this).attr('src')
      $(this).attr('src', window.app_url+'assets/image/placeholder/default.jpg')

init = ->
  placeholderImage()

init()