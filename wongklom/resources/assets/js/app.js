
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import axios;

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#vue-add-singer',
    data: {
        'name': ''
    },
    submit: function () {
        axios.post('http://wongklom.dev/api/singer', {
            name: this.name
        }).then(function (response) {
            alert(response.data);
            this.name = '';
        }).catch(function (error) {
            alert('Error (see console log)');
            console.log(error);
        });
    }
});
