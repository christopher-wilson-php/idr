var gulp = require('gulp');

var concat = require('gulp-concat'),
    jshint = require('gulp-jshint'),
    minify = require('gulp-minify'),
    rename = require('gulp-rename'),
    sass   = require('gulp-sass'),
    uglify = require('gulp-uglify');

gulp.task('stylesheets', function () {
    gulp.src('src/stylesheets/app.scss')
        .pipe(sass())
        .pipe(gulp.dest('app.css'));
});



gulp.task('default', ['stylesheets']);