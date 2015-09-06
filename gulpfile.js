(function () {
'use strict';

var gulp        = require("gulp"),
	jade        = require('gulp-jade'),
	prettify    = require('gulp-prettify'),
	wiredep     = require('wiredep').stream,
	useref      = require('gulp-useref'),
	uglify      = require('gulp-uglify'),
	clean       = require('gulp-clean'),
	gulpif      = require('gulp-if'),
	filter      = require('gulp-filter'),
	size        = require('gulp-size'),
	imagemin    = require('gulp-imagemin'),
	sass        = require('gulp-sass'),
	concatCss   = require('gulp-concat-css'),
	minifyCss   = require('gulp-minify-css'),
	browserSync = require('browser-sync'),
	reload      = browserSync.reload;

//*******************************************
//*************** Обработка *****************
//*******************************************

// Компилируем Jade в html
gulp.task('jade', function() {
	gulp.src('app/templates/pages/*.jade')
		.pipe(jade())
		.on('error', log)
		.pipe(prettify({indent_size: 2}))
		.pipe(gulp.dest('app/'))
		.pipe(reload({stream: true}));
});

// Компилируем SASS в css

gulp.task('sass', function () {
	gulp.src('app/sass/main.scss')
		.pipe(sass())
		.on('error', log)
		.pipe(gulp.dest('app/css/'))
		.pipe(reload({stream: true}));
});

// Подключаем ссылки на bower components
gulp.task('wiredep', function () {
	gulp.src('app/templates/common/*.jade')
		.pipe(wiredep({
			ignorePath: /^(\.\.\/)*\.\./
		}))
		.pipe(gulp.dest('app/templates/common/'));
});

// Запускаем локальный сервер (только после компиляции jade)
gulp.task('server', ['jade'], function () {
	browserSync({
		notify: false,
		port: 9000,
		server: {
			baseDir: 'app'
		}
	});
});

// слежка и запуск задач
gulp.task('watch', function () {
	gulp.watch('app/templates/**/*.jade', ['jade']);
	gulp.watch('bower.json', ['wiredep']);
	gulp.watch('app/sass/**/*.scss', ['sass']);
	gulp.watch([
		'app/js/**/*.js',
		'app/css/**/*.css'
	]).on('change', reload);
});

// Задача по-умолчанию
gulp.task('default', ['server', 'watch']);

//*******************************************
//*************** Cборка ********************
//*******************************************

// Очистка папки
gulp.task('clean', function () {
	return gulp.src('dist')
		.pipe(clean());
});

// Переносим HTML, CSS, JS в папку dist
gulp.task('useref', function () {
	var assets = useref.assets();
	return gulp.src('app/*.html')
		.pipe(assets)
		.pipe(gulpif('*.js', uglify()))
		.pipe(gulpif('*.css', minifyCss({compatibility: 'ie8'})))
		.pipe(assets.restore())
		.pipe(useref())
		.pipe(gulp.dest('dist'));
});

// Перенос шрифтов
gulp.task('fonts', function() {
	gulp.src('app/fonts/**/*')
		// .pipe(filter(['*.eot','*.svg','*.ttf','*.woff','*.woff2']))
		.pipe(gulp.dest('dist/fonts/'));
});

// Картинки
gulp.task('images', function () {
	return gulp.src('app/images/**/*')
		.pipe(imagemin({
			progressive: true,
			interlaced: true
		}))
	.pipe(gulp.dest('dist/images'));
});

// Остальные файлы, такие как favicon.ico и пр.
gulp.task('extras', function () {
	return gulp.src([
		'app/*.*',
		'!app/*.html'
	]).pipe(gulp.dest('dist'));
});

// Сборка и вывод размера содержимого папки dist
gulp.task('dist', ['useref', 'images', 'fonts', 'extras'], function () {
	return gulp.src('dist/**/*').pipe(size({title: 'build'}));
});

// Собираем папку DIST (только после компиляции Jade)
gulp.task('build', ['clean', 'jade'], function () {
	gulp.start('dist');
});

// Проверка сборки
gulp.task('server-dist', function () {
	browserSync({
		notify: false,
		port: 9000,
		server: {
			baseDir: 'dist'
		}
	});
});

//*******************************************
//*************** Функции *******************
//*******************************************

// Более наглядный вывод ошибок
var log = function (error) {
	console.log([
		'',
		"----------ERROR MESSAGE START----------",
		("[" + error.name + " in " + error.plugin + "]"),
		error.message,
		"----------ERROR MESSAGE END----------",
		''
	].join('\n'));
	this.end();
};

}());
