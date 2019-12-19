
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue'

import route from '../../vendor/tightenco/ziggy/src/js/route.js';


Vue.mixin({
    methods: {
        route: route,
        populateStates : function(country) {
            return axios
                .get('/geo/' + country)
                .then(({data}) => this.states = data)
        },
    }
});

window.Event = new Vue();

const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.prototype.$user = JSON.parse(document.head.querySelector('meta[name="user"]').content);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

jQuery(document).ready(function() {
    window.loader = {
        lock: function() {
            mApp.blockPage({
                overlayColor: '#000000',
                type: 'loader',
                state: 'primary',
                message: 'Processing...'
            });
        },
        unlock: function() {
            mApp.unblockPage();
        },
        lockTarget: function(target) {
            mApp.block(target, {
                overlayColor: '#000000',
                type: 'loader',
                state: 'primary',
                message: 'Processing...'
            });
        },
        unlockTarget: function(target) {
            mApp.unblock(target);
        }
    }
});

if (window.vue) {
    window.vue.$destroy(true)
}

const root = document.getElementById('app')
window.vue = new Vue({
    render: h => h(
        Vue.component(root.dataset.component), {
            props: JSON.parse(root.dataset.props)
        }
    )
}).$mount(root)
