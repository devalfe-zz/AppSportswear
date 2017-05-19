const { mix } = require('laravel-mix');
mix.browserSync('localhost/overlord/public');
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.js('resources/assets/js/deval/appscripts.js', 'public/themes/deval/js')
   .sass('resources/assets/sass/deval/deval.scss', 'public/themes/deval/css');

/*
const { mix } = require('laravel-mix');
mix.browserSync('localhost/overlord/public');
mix.setResourceRoot('../');
mix.sass('resources/assets/sass/app.scss', 'public/css');
mix .js('resources/assets/js/pages/test.js', 'public/js/pages/')
.js('resources/assets/js/pages/welcome.js', 'public/js/pages/')
.js('resources/assets/js/pages/about.js', 'public/js/pages/')
.js('resources/assets/js/pages/coming-soon.js', 'public/js/pages/')
.js('resources/assets/js/pages/home.js', 'public/js/pages/')
.js('resources/assets/js/pages/wvw.js', 'public/js/pages/')
.js('resources/assets/js/pages/join.js', 'public/js/pages/')
.js('resources/assets/js/pages/builder.js', 'public/js/pages/')
.js('resources/assets/js/pages/admin.js', 'public/js/pages/')
.js('resources/assets/js/lib/hud.js', 'public/js/lib/')
.js('resources/assets/js/app.js', 'public/js')
.js('resources/assets/js/scripts.js', 'public/js');

mix.sass('resources/assets/sass/welcome.scss', 'public/css');

mix.copy('resources/assets/fonts', 'public/fonts');

mix.copy('resources/assets/img/', 'public/images', false )
.copy('resources/assets/css/shortcodes.css', 'public/css', false )
.copy('resources/assets/css/default-theme.css', 'public/css', false )
.copy('resources/assets/vendor', 'public/vendor', false );
*/