var getPlatform, init, placeholderImage;

getPlatform = function(withorientation) {
  var platform;
  if (withorientation == null) {
    withorientation = false;
  }
  platform = window.getComputedStyle(document.body, ':before').getPropertyValue('content').replace(/'/g, '').replace(/"/g, '');
  if (!withorientation) {
    platform = platform.split(' ');
    platform = platform[0];
  }
  return platform;
};

placeholderImage = function() {
  var rand;
  rand = ['default', 'portrait', 'landscape'];
  return $('img').each(function() {
    var image;
    image = Math.floor(Math.random() * 3);
    image = 1;
    if (!$(this).attr('src')) {
      return $(this).attr('src', window.app_url + 'assets/image/placeholder/' + rand[image] + '.jpg');
    }
  });
};

init = function() {
  return placeholderImage();
};

document.addEventListener('DOMContentLoaded', function() {
  init();
});
