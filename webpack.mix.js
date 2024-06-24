const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css', [
    require('tailwindcss'),
]);

// Add versioning for cache busting
if (mix.inProduction()) {
    mix.version();
}
mix.browserSync('localhost:8000'); // Optional, for live reloading
