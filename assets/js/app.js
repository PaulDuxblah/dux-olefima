/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// JS
require('./images.js');
require('./lol/main.js');
require('./lol/partials/skills.js');

// CSS
import '../css/app.scss';
import '../css/main.scss';
import '../css/partials/nav.scss';

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
// const $ = require('jquery');

console.log('Hello Webpack Encore! Edit me in assets/js/app.js');
