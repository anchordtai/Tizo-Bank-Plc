const mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");

mix.js("resources/js/app.js", "public/js").css(
    "resources/sass/app.css", // Compile SCSS file
    "public/css"
).options({
    postCss: [tailwindcss], // TailwindCSS as a PostCSS plugin
});

// Add versioning for cache busting in production
if (mix.inProduction()) {
    mix.version();
}

// Optional: BrowserSync for live reloading (change URL if necessary)
mix.browserSync("localhost:8000");
