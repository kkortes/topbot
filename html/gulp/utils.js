import notify from 'gulp-notify'
import config from './config'

module.exports = {
  handleError: function (error) {
    if (!config.production) {
      notify.onError({
        title: 'Blender',
        message: '<%= error.message %>'
      })(error);
    }

    this.emit('end');
  }
}