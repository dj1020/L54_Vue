/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('../bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import ElementUI from 'element-ui';
import 'element-ui/lib/theme-default/index.css';

Vue.use(ElementUI);

// Vue.component('three-level-select', require('./components/threeLevelSelect.vue'));
Vue.component('my-cascader', require('./components/myCascader.vue'));

const app = new Vue({
    el: '#root',
    data: {
        form: {
            name: '',
            parent_id: ''
        }
    }
});
