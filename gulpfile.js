const gulp = require('gulp');
const del = require('del');
const fileinclude = require('gulp-file-include');


const path = {
	dist: 'dist/',
	src: 'src/*.html'
};

function build_mails(){
	del(path.dist + '**/*.html','!dist/img', '!dist/tests');

	return gulp.src(path.src)
		.pipe(fileinclude({prefix: '@@'}))
		.pipe(gulp.dest(path.dist));
}

function watch(){
	gulp.watch(path.src, build_mails);
}

gulp.task('build', build_mails);

gulp.task('watch', function (cb) {
	watch();
});