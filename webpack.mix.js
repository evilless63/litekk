const mix = require('laravel-mix');

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

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');

mix.js([
    'resources/js/threejs/three.js',
    'resources/js/threejs/gltfloader.js',
    'resources/js/threejs/orbitcontrols.js',
    'resources/js/threejs/scene.js',
], 'public/js/components/threebundle.js');