
import Vue from 'vue';
import Counter from './components/Counter'

Vue.component('Counter', Counter);
const app = new Vue({
    el: '#app',
})