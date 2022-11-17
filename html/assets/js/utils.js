import $ from 'jquery';

export default class Utils {
  constructor() {
  }

  init() {
    this.placeholderImage();
  }

  static getOrientation() {
    let orientation = window.getComputedStyle(document.body, ':before').getPropertyValue('content').replace(/'/g, '').replace(/"/g, '');
    
    orientation = orientation.split(' ');
    orientation = orientation[1];
    
    return orientation;
  }
  static getDevice() {
    let device = window.getComputedStyle(document.body, ':before').getPropertyValue('content').replace(/'/g, '').replace(/"/g, '');
    
    device = device.split(' ');
    device = device[0];
    
    return device;
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