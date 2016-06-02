export default class Utils {
  constructor() {

  }
  init() {
    this.placeholderImage();
  }

  getPlatform(withorientation) {
    let getPlatform, init, placeholderImage;
    
    let platform;
    if (withorientation == null) {
      withorientation = false;
    }
    platform = window.getComputedStyle(document.body, ':before').getPropertyValue('content').replace(/'/g, '').replace(/"/g, '');
    if (!withorientation) {
      platform = platform.split(' ');
      platform = platform[0];
    }
    return platform;
  }

  placeholderImage() {
    let rand;
    rand = ['default', 'portrait', 'landscape'];
    $('img').each(function() {
      let image;
      image = Math.floor(Math.random() * 3);
      image = 1;
      if (!$(this).attr('src')) {
        $(this).attr('src', window.app_url + 'assets/image/placeholder/' + rand[image] + '.jpg');
      }
    });
  }
}