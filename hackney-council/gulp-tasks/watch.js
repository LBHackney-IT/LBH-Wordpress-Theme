'use strict'
const gulp = require('gulp')
const configPaths = require('../config/paths.json')

// Watch task ----------------------------
// When a file is changed, re-run the build task.
// ---------------------------------------
gulp.task('watch', () => {
  gulp.watch([configPaths.src + '**/**/*.scss'], gulp.task('styles'))
  gulp.watch([configPaths.src + '**/**/*.js'], gulp.task('scripts'))
})
