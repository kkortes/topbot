(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

var _utils = require('./utils');

var _utils2 = _interopRequireDefault(_utils);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

document.addEventListener('DOMContentLoaded', function () {
  var utils = new _utils2.default();
  utils.init();
});

},{"./utils":2}],2:[function(require,module,exports){
'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Utils = function () {
  function Utils() {
    _classCallCheck(this, Utils);
  }

  _createClass(Utils, [{
    key: 'init',
    value: function init() {
      this.placeholderImage();
    }
  }, {
    key: 'getPlatform',
    value: function getPlatform(withorientation) {
      var getPlatform = void 0,
          init = void 0,
          placeholderImage = void 0;

      var platform = void 0;
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
  }, {
    key: 'placeholderImage',
    value: function placeholderImage() {
      var rand = void 0;
      rand = ['default', 'portrait', 'landscape'];
      $('img').each(function () {
        var image = void 0;
        image = Math.floor(Math.random() * 3);
        image = 1;
        if (!$(this).attr('src')) {
          $(this).attr('src', window.app_url + 'assets/image/placeholder/' + rand[image] + '.jpg');
        }
      });
    }
  }]);

  return Utils;
}();

exports.default = Utils;

},{}]},{},[1])
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm5vZGVfbW9kdWxlcy9icm93c2VyLXBhY2svX3ByZWx1ZGUuanMiLCJhc3NldHMvanMvYmFzZS5qcyIsImFzc2V0cy9qcy91dGlscy5qcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTs7O0FDQUEsQUFBTyxBQUFXOzs7Ozs7QUFFbEIsU0FBQSxBQUFTLGlCQUFULEFBQTBCO01BQ3BCLFFBRG1ELEFBQ25ELEFBQVEsQUFBSSxBQUNoQjtRQUZGLEFBQThDLEFBQVcsQUFFdkQsQUFBTSxPQUZpRCxBQUN2RDtDQUQ0Qzs7Ozs7Ozs7Ozs7OztJQ0YvQixBQUFNLEFBQU0sQUFDekI7bUJBQUEsQUFBYyxBQUdkOzs7Ozs7MkJBQU8sQUFDTDtXQURGLEFBQU8sQUFDTCxBQUFLLEFBR1A7Ozs7Z0NBQUEsQUFBWTtVQUNWLEFBQUk7VUFBSixBQUFpQjtVQURVLEFBQzNCLEFBQXVCLEFBRXZCOztVQUgyQixBQUczQixBQUFJLEFBQ0o7VUFBSSxtQkFBQSxBQUFtQjswQkFBdkIsQUFBNkIsQUFDM0IsQUFBa0IsQUFFcEIsTUFINkIsQUFDM0I7O2lCQUVTLE9BQUEsQUFBTyxpQkFBaUIsU0FBQSxBQUFTLE1BQWpDLEFBQXVDLFdBQXZDLEFBQWtELGlCQUFsRCxBQUFtRSxXQUFuRSxBQUE4RSxRQUE5RSxBQUFzRixNQUF0RixBQUE0RixJQUE1RixBQUFnRyxRQUFoRyxBQUF3RyxNQVB4RixBQU8zQixBQUFXLEFBQThHLEFBQ3pIO1VBQUksQ0FBQSxBQUFDLGlCQUFpQixBQUNwQjttQkFBVyxTQUFBLEFBQVMsTUFEQSxBQUNwQixBQUFXLEFBQWUsQUFDMUI7bUJBQVcsU0FGYixBQUFzQixBQUVwQixBQUFXLEFBQVMsQUFFdEI7O2FBWkYsQUFBNkIsQUFZM0IsQUFBTyxBQUdULFNBZjZCLEFBQzNCOzs7OztVQWNpQixBQUNqQixBQUFJLEFBQ0o7YUFBTyxDQUFBLEFBQUMsV0FBRCxBQUFZLFlBRkYsQUFFakIsQUFBTyxBQUF3QixBQUMvQjtRQUFBLEFBQUUsT0FBRixBQUFTO1lBQWdCLEFBQ3ZCLEFBQUksQUFDSjtnQkFBUSxLQUFBLEFBQUssTUFBTSxLQUFBLEFBQUssV0FGRCxBQUV2QixBQUFtQixBQUFnQixBQUNuQztnQkFIdUIsQUFHdkIsQUFBUSxBQUNSLEVBSnVCLEFBQ3ZCO1lBR0ksQ0FBQyxFQUFBLEFBQUUsTUFBRixBQUFRLEtBQVQsQUFBQyxBQUFhLFFBQVEsQUFDeEI7WUFBQSxBQUFFLE1BQUYsQUFBUSxLQUFSLEFBQWEsT0FBTyxPQUFBLEFBQU8sVUFBUCxBQUFpQiw4QkFBOEIsS0FBL0MsQUFBK0MsQUFBSyxTQS9CakUsQUF1QmIsQUFBbUIsQUFHakIsQUFBYyxBQUlaLEFBQTBCLEFBQ3hCLEFBQW9CLEFBQTZEOztPQUx2RSxFQUhHLEFBQ2pCIiwiZmlsZSI6ImdlbmVyYXRlZC5qcyIsInNvdXJjZVJvb3QiOiIiLCJzb3VyY2VzQ29udGVudCI6WyIoZnVuY3Rpb24gZSh0LG4scil7ZnVuY3Rpb24gcyhvLHUpe2lmKCFuW29dKXtpZighdFtvXSl7dmFyIGE9dHlwZW9mIHJlcXVpcmU9PVwiZnVuY3Rpb25cIiYmcmVxdWlyZTtpZighdSYmYSlyZXR1cm4gYShvLCEwKTtpZihpKXJldHVybiBpKG8sITApO3ZhciBmPW5ldyBFcnJvcihcIkNhbm5vdCBmaW5kIG1vZHVsZSAnXCIrbytcIidcIik7dGhyb3cgZi5jb2RlPVwiTU9EVUxFX05PVF9GT1VORFwiLGZ9dmFyIGw9bltvXT17ZXhwb3J0czp7fX07dFtvXVswXS5jYWxsKGwuZXhwb3J0cyxmdW5jdGlvbihlKXt2YXIgbj10W29dWzFdW2VdO3JldHVybiBzKG4/bjplKX0sbCxsLmV4cG9ydHMsZSx0LG4scil9cmV0dXJuIG5bb10uZXhwb3J0c312YXIgaT10eXBlb2YgcmVxdWlyZT09XCJmdW5jdGlvblwiJiZyZXF1aXJlO2Zvcih2YXIgbz0wO288ci5sZW5ndGg7bysrKXMocltvXSk7cmV0dXJuIHN9KSIsImltcG9ydCBVdGlscyBmcm9tICcuL3V0aWxzJztcblxuZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignRE9NQ29udGVudExvYWRlZCcsIGZ1bmN0aW9uKCkge1xuICBsZXQgdXRpbHMgPSBuZXcgVXRpbHMoKTtcbiAgdXRpbHMuaW5pdCgpO1xufSk7IiwiZXhwb3J0IGRlZmF1bHQgY2xhc3MgVXRpbHMge1xuICBjb25zdHJ1Y3RvcigpIHtcblxuICB9XG4gIGluaXQoKSB7XG4gICAgdGhpcy5wbGFjZWhvbGRlckltYWdlKCk7XG4gIH1cblxuICBnZXRQbGF0Zm9ybSh3aXRob3JpZW50YXRpb24pIHtcbiAgICBsZXQgZ2V0UGxhdGZvcm0sIGluaXQsIHBsYWNlaG9sZGVySW1hZ2U7XG4gICAgXG4gICAgbGV0IHBsYXRmb3JtO1xuICAgIGlmICh3aXRob3JpZW50YXRpb24gPT0gbnVsbCkge1xuICAgICAgd2l0aG9yaWVudGF0aW9uID0gZmFsc2U7XG4gICAgfVxuICAgIHBsYXRmb3JtID0gd2luZG93LmdldENvbXB1dGVkU3R5bGUoZG9jdW1lbnQuYm9keSwgJzpiZWZvcmUnKS5nZXRQcm9wZXJ0eVZhbHVlKCdjb250ZW50JykucmVwbGFjZSgvJy9nLCAnJykucmVwbGFjZSgvXCIvZywgJycpO1xuICAgIGlmICghd2l0aG9yaWVudGF0aW9uKSB7XG4gICAgICBwbGF0Zm9ybSA9IHBsYXRmb3JtLnNwbGl0KCcgJyk7XG4gICAgICBwbGF0Zm9ybSA9IHBsYXRmb3JtWzBdO1xuICAgIH1cbiAgICByZXR1cm4gcGxhdGZvcm07XG4gIH1cblxuICBwbGFjZWhvbGRlckltYWdlKCkge1xuICAgIGxldCByYW5kO1xuICAgIHJhbmQgPSBbJ2RlZmF1bHQnLCAncG9ydHJhaXQnLCAnbGFuZHNjYXBlJ107XG4gICAgJCgnaW1nJykuZWFjaChmdW5jdGlvbigpIHtcbiAgICAgIGxldCBpbWFnZTtcbiAgICAgIGltYWdlID0gTWF0aC5mbG9vcihNYXRoLnJhbmRvbSgpICogMyk7XG4gICAgICBpbWFnZSA9IDE7XG4gICAgICBpZiAoISQodGhpcykuYXR0cignc3JjJykpIHtcbiAgICAgICAgJCh0aGlzKS5hdHRyKCdzcmMnLCB3aW5kb3cuYXBwX3VybCArICdhc3NldHMvaW1hZ2UvcGxhY2Vob2xkZXIvJyArIHJhbmRbaW1hZ2VdICsgJy5qcGcnKTtcbiAgICAgIH1cbiAgICB9KTtcbiAgfVxufSJdfQ==
