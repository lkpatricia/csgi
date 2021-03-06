/* == Vars == */

 // **** PUT YOUR LOCAL DEV URL HERE.
var devURL = 'http://csgi.dev';

// include gulp
var gulp = require('gulp'); 

// include plugins
var jshint = require('gulp-jshint');
var sass = require('gulp-sass');
var sassImporter = require('sass-importer-npm');
var minifycss = require('gulp-clean-css');
var sourcemaps = require('gulp-sourcemaps');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');


/* == Tasks == */

// Lint Task
gulp.task('lint', function() {
    return gulp.src('src/js/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});


// sass compilation for dev, with sourcemaps and unminified
gulp.task('sass', function() {
    gulp.src('src/scss/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass({ importer: sassImporter }).on('error', sass.logError))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('dist/css'));
});


// sass compilation for dev, with sourcemaps and unminified
gulp.task('minify-css', function() {
    
    return gulp.src('dist/css/main.css')
    .pipe(rename('main.min.css'))
    .pipe(minifycss())
    .pipe(gulp.dest('dist/css/'));
});

// JS
gulp.task('scripts', function() {
    return gulp.src([
	    		'../../node_modules/magnific-popup/dist/jquery.magnific-popup.min.js',
            'src/js/main.js'
        ])
        .pipe(concat('app.js'))
        .pipe(gulp.dest('dist/js/'))
        .pipe(rename('app.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('dist/js/'));
});

// Search JS
gulp.task('search', function() {
    return gulp.src([
            'src/js/search-results.js'
        ])
        .pipe(rename('search.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('dist/js/'));
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('src/js/*.js', ['lint', 'search', 'scripts']);
    gulp.watch('**/*.scss', ['sass', 'minify-css']);
});

// Default Task
gulp.task('default', ['watch']);