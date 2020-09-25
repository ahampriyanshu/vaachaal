//Import

const gulp = require('gulp');
const sass = require('gulp-sass');
const sourceMaps = require('gulp-sourcemaps');
const autoprefixer = require('gulp-autoprefixer');
const browserSync = require('browser-sync');

//SCSS

function style() {
    return gulp.src('./essentials/scss/*.scss')
    .pipe(sourceMaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(sourceMaps.write('./'))
    .pipe(gulp.dest('./essentials/css'))
    .pipe(browserSync.stream());
}

//Serve and watch

function watch() {
    browserSync.init({
        server: {
            baseDir: './',
        },
        startPath: './index.php',
        ghostMode: false,
        notify: false
    });
    gulp.watch('./essentials/scss/*.scss', style);
    gulp.watch('./*.html').on('change', browserSync.reload);
    gulp.watch('./essentials/js/*.js').on('change', browserSync.reload);

}

exports.style = style;
exports.watch = watch;
