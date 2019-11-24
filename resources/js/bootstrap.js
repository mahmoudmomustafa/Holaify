import Vue from "vue"
import axios from "axios"
import Chart from "chart.js"
window.Vue = Vue;

try {
    window.Popper = require('popper.js').default;
} catch (e) {}

// init axios
window.axios = axios;
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';