var gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
var autoprefixer = require('gulp-autoprefixer');
var cleanCSS = require('gulp-clean-css');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var browserSync = require('browser-sync').create();
gulp.task('styles', function() {
      return gulp.src('raw-assets/sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer('last 2 versions'))
        .pipe(cleanCSS())
        .pipe(rename({ suffix: '.min' })) 
        .pipe(gulp.dest('assets/css')) 
        .pipe(browserSync.reload({      
             stream: true     
         }));
});
gulp.task('scripts', function() {
      return gulp.src('assets/js/**/*')
        .pipe(concat('base.js'))
        .pipe(uglify())
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest('assets/js/**/*'))
        .pipe(browserSync.reload({
             stream: true
         }));
}); 
gulp.task('watch', function() {   
      browserSync.init({
         proxy: "http://localhost/devwp/fujigames/"
});
gulp.watch('raw-assets/sass/**/*.scss', gulp.series('styles'));
gulp.watch('assets/js/**/*', gulp.series('scripts'));
gulp.watch('**/*.php').on('change', browserSync.reload); });
gulp.task('default', gulp.parallel('styles', 'scripts', 'watch'));