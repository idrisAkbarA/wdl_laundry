/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue'
import Vuetify from 'vuetify'

Vue.use(Vuetify)


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const vuetify = new Vuetify();
const app = new Vue({
    el: '#app',
    vuetify,
    data: () => ({

        sheet2: false,
        dialog:false,

        delete:'nama untuk dihapus',
        //animasi
        fad: false,
        loading:false,
        // navigation
        drawer: false,
        //password
        show1: false,
        //bottom sheet
        sheet: false,
        //filter
        closeOnClick: true,
        // date picker
        date: new Date().toISOString().substr(0, 10),
        modal: false,
        date1: new Date().toISOString().substr(0, 10),
        date2: new Date().toISOString().substr(0, 10),
      }),
      created(){
        //fad = !fad;
        setTimeout(() => this.fad = !this.fad, 100)
      },
    methods:{

        deleteLoket(id){
            this.delete= id;
            this.dialog = true;
        },

        editLoket(id){
            this.delete= id;
            this.sheet2 = true;
        },
        deleteJasa(id){
            this.delete= id;
            this.dialog = true;
        },

        editJasa(id){
            this.delete= id;
            this.sheet2 = true;
        },
        deletePegawai(id){
            this.delete= id;
            this.dialog = true;
        },

        editPegawai(id){
            this.delete= id;
            this.sheet2 = true;
        },

        firstFunction(_callback){
            // do some asynchronous work
            // and when the asynchronous stuff is complete
            this.loading=true;
            this.drawer=!this.drawer;
            this.fad=!this.fad;
            console.log('test'+this.drawer);
            _callback();
        },
        dasbor(){
            this.firstFunction(function() {
                window.location.href = '/dasbor';
            });

        },
        kasir(){

            this.firstFunction(function() {
                window.location.href = '/kasir';
            });
        },
        pegawai(){


            this.firstFunction(function() {
                window.location.href = '/pegawai';
            });
        },
        pelanggan(){


            this.firstFunction(function() {
                window.location.href = '/pelanggan';
            });
        },
        daftarLoket(){


            this.firstFunction(function() {
                window.location.href = '/daftarLoket';
            });
        },
        jasa(){


            this.firstFunction(function() {
                window.location.href = '/jasa';
            });
        },
        laporan(){


            this.firstFunction(function() {
                window.location.href = '/laporan';
            });
        },
        riwayat(){


            this.firstFunction(function() {
                window.location.href = '/riwayat';
            });
        },
    }

});
