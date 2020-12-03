'use strict';
var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
sass.compiler = require('node-sass');
gulp.task('sass', function () {
   return gulp.src('./src/scss/*.scss')
   .pipe(concat('style.css'))
   .pipe(sass().on('error', sass.logError))
   .pipe(gulp.dest('./dist/'));
});