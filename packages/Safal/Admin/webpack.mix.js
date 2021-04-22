const mix = require('laravel-mix');

let publicPath;
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

if (mix.inProduction()) {
    publicPath = 'public/assets';
} else {
    publicPath = "../../../public/vendor/safal/admin/assets";
}

mix.setPublicPath(publicPath);

mix.js(__dirname +'/src/Resources/assets/js/app.js', 'js/admin.js')
    .postCss(__dirname + '/src/Resources/assets/css/app.css', 'css/admin.css', [
        require("tailwindcss"),
    ]);
