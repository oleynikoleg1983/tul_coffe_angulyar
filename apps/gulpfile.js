var gulp = require('gulp');
var concat = require('gulp-concat');

gulp.task('prod', function () {
  console.log('starst');
  return gulp.src(['./dist/inline*.js',
                   './dist/0*.js',
                   './dist/1*.js',
                   './dist/2*.js',
                   './dist/3*.js',
                   './dist/polyfills*.js',
                   './dist/main*.js',
                   './dist/*.js'])
    .pipe(concat('all.js'))
    .pipe(gulp.dest('../js/site/'));
});
