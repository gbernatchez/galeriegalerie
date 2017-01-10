var gulp = require('gulp');
var postcss = require('gulp-postcss'); 
var precss = require('precss'); 
var autoprefixer = require('autoprefixer'); 
var cssnano = require('cssnano'); 
var scsslint = require('gulp-scss-lint'); 
var concat = require('gulp-concat');
var favicons = require('gulp-favicons');

var preprocessor = [
	precss({}),
	//cssnano({})
]

var path = {
	//styles_theme: 'wp-content/themes/galeriegalerie/',
    styles_theme: 'wp-content/themes/galeriegalerie/',
}

gulp.task('styles', function() {
	return gulp.src(path.styles_theme + '/scss/style.scss')
	//.pipe(scsslint())
	.pipe(postcss(preprocessor))
	.pipe(concat('style.css'))
	.pipe(gulp.dest(path.styles_theme));
});

gulp.task('favicons', function () {
    gulp.src(path.styles_theme + 'images/favicon.jpg').pipe(favicons({
    	appName: 'Galerie Galerie',
    	appDescription: 'Centre de diffusion en ligne',
    	background: '#ffffff',
    	orientation: 'landscape',
    	path: path.styles_theme + 'favicons/',
    	url: 'http://www.galeriegalerieweb.com/',
        html: path.styles_theme + 'header.php'
    })).pipe(gulp.dest(path.styles_theme + 'favicons/'));
});