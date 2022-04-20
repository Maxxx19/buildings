
//require('./bootstrap');

import Vue from 'vue';
window.Vue = require('vue');
import {$,jQuery} from 'jquery';
import "../js/jquery-1.11.1.min.js"; 
//import "../js/jquery-jvectormap-1.2.2.min.js"; 
import "../js/jquery-jvectormap-us-aea-en.js"; 
import "../js/jquery-jvectormap-world-mill-en.js"; 
import "../js/jquery-migrate-1.2.1.min.js"; 
import "../js/jquery-ui-1.10.3.min.js"; 
import "../js/jquery.autogrow-textarea.js"; 
import "../js/jquery.cookies.js"; 
import "../js/jquery.dataTables.min.js";
import "../js/jquery.gritter.min.js";
import "../js/jquery.maskedinput.min.js";
import "../js/jquery.mousewheel.js";
//import "../js/jquery.prettyPhoto.js";
import "../js/jquery.sparkline.min.js";
import "../js/jquery.tagsinput.min.js";
import "../js/jquery.ui.touch-punch.min.js";
import "../js/jquery.validate.min.js";


import 'bootstrap';
import "../css/css/style.default.css";
import "../css/css/morris.css";
import "../css/css/select2.css";
import "../js/html5shiv.js";                                   
import "../js/html5shiv.js";
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';
//import "../js/respond.min.js";  js/bootstrap.min.js
//npm install bootstrap@4.0.0-beta popper.js jquery --save-dev



/*window.$ = $;
window.jQuery = jQuery;*/
import "../js/bootstrap.min.js";
/*global.jQuery = require('../node_modules/jquery/dist/jquery.js');
var $ = global.jQuery;*/

Vue.use(BootstrapVue);
Vue.component('example-component', require('../components/Index.vue').default);

const app = new Vue({
    el: '#app'
});

