// Css build
import './scss/main.scss'

// Bootstrap dependencies
window.$ = window.jQuery = require('jquery')
window.Popper = require('popper.js')
require('bootstrap')
window._ = require('underscore')
require('backbone')


$(document).ready(function(){
    let app = require("./js/app");
    (new app).run();
});