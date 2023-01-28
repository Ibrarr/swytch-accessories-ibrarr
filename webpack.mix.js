let mix = require('laravel-mix');

mix.js('src/js/app.js', 'dist/js').setPublicPath('dist');
mix.sass('src/css/app.scss', 'dist/css').setPublicPath('dist');

mix.options({
    postCss: [
        require('autoprefixer')({
            browsers: ['last 3 versions'],
            cascade: false
        })
    ]
});

mix.browserSync('http://localhost');

mix.disableNotifications();