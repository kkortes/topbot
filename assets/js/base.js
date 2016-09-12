import Utils from './utils';

import Vue from 'vue';
import VueImage from './image.vue';

import resizeMixin from 'vue-resize-mixin';

function init() {

  Vue.component('vueimage', VueImage);

  new Vue({
    el: 'html',
    mixins: [resizeMixin],
    data: {
      device: false,
      orientation: false,
      label: false
    },
    events: {
      'resize' : 'windowResize'
    },
    computed: {
      favicon: function() {
        if(this.device)
          return window.app_url+'favicon-'+this.device+'.ico';
        else
          return window.app_url+'favicon.ico'
      }
    },
    methods: {
      windowResize: function() {
        // Set device (based on the standard 767px for smartphone and 1199px for tablet)
        if(Utils.getDevice() == 'smartphone') {
          this.device = 'smartphone';
        }else if(Utils.getDevice() == 'tablet') {
          this.device = 'tablet';
        }else{
          this.device = 'desktop';
        }
        // Set orientation
        if(Utils.getOrientation() == 'vertical') {
          this.orientation = 'portrait';
        }else{
          this.orientation = 'landscape';
        }
      }
    }
  });
}

document.addEventListener('DOMContentLoaded', function() {
  let utils = new Utils();
  utils.init();
  init();
});