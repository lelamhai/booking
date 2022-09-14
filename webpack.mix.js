const mix = require('laravel-mix');

mix.js('wp-content/themes/book/assets/src/js/popup.js', 'wp-content/themes/book/assets/js')
    .sass('wp-content/themes/book/assets/src/css/popup.scss', 'wp-content/themes/book/assets/css')
    .sass('wp-content/themes/book/assets/src/css/style.scss', 'wp-content/themes/book/assets/css');