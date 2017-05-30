var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('default', [
  'sass',
  'watch'
]);

gulp.task('sass', function () {
  gulp.src('./css/scss/style.scss')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(gulp.dest('./css'));
});

gulp.task('watch', function () {
  gulp.watch('./css/scss/**/*.scss', [
    'sass'
  ]);
});
