import Utils from './utils';

import Vue from 'vue';

import resizeMixin from 'vue-resize-mixin';
require('vue-scroll');

function init() {

  Vue.component('vueimage', require('./image.vue'));
  Vue.component('vuecolumnscroll', require('./columnscroll.vue'));
  Vue.component('vuecard', require('./card.vue'));
  Vue.component('vueslider', require('./slider.vue'));
  Vue.component('vuecircleloader', require('./circleloader.vue'));

  new Vue({
    el: 'html',
    mixins: [resizeMixin],
    data: {
      device: false,
      orientation: false,
      label: false,
      positionTop: 0
    },
    watch: {
      'orientation': function(newVal) {
        if(newVal) {
          document.title = newVal + ' - { topbot }'
        }
      }
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
      onScroll: function(e, position) {
        this.positionTop = position.scrollTop;
        //this.$dispatch('viewScrolled', this.positionTop);
      },
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