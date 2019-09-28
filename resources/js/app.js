/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue'
import Vuetify from 'vuetify'
import Axios from 'axios';

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
Vue.component('ikarin-sheet', require('./components/SheetEdit.vue').default);
Vue.component('ikarin-sheet-jasa', require('./components/SheetEditJasa.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const vuetify = new Vuetify();
const app = new Vue({
    el: '#app',
    vuetify,
    http: {
        headers: {
        'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
    }},
    data: () => ({

        barangBelanja:[{nama:"",kucing:"cimey"}],

        sheet2: false,
        dialog:false,

        del:'nama loket untuk dihapus',
        buang:'nama pegawai untuk dihapus',
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

        tambahBelanja(){
            this.barangBelanja.push({nama:""})
            console.log(this.barangBelanja)
            
        },

        callEditSheet(nama){
            this.$refs.child.edit(nama);
        },
        callEditSheetJasa(nama){
            this.$refs.child2.edit(nama);
        },

        deleteLoket(){

            this.dialog = false;
            var url = '/lokets/'+this.del;
            Axios({
                method: 'delete',
                url: url
            }).then(function(){
                window.location.href = '/daftarLoket';
            });
        },
        initDeleteLoket(id){
            this.del= id;
            this.dialog = true;
        },

        editLoket(id){
            this.delete= id;
            this.sheet2 = true;
        },
        deleteJasa(){

            this.dialog = false;
            var url = '/jasa/'+this.del;
            Axios({
                method: 'delete',
                url: url
            }).then(function(){
                window.location.href = '/jasa';
            });
        },
        initDeleteJasa(id){
            this.del= id;
            this.dialog = true;
        },

        editJasa(id){
            this.delete= id;
            this.sheet2 = true;
        },
        iniBelanja(){
            var a = "";
            var temp = "";
            var i = "";
            for(i=0;i<this.barangBelanja.length;i++){
                temp = this.barangBelanja[0].nama;
                a = a + "-" + temp;
            }
            Axios({
                url: '/belanja',
                method: 'post',
                data:{
                    data: a
                }
            }).then(function(response){
                console.log(a);
                console.log(response.data);
            });
        },
        deletePegawai(){
            this.dialog = false;
            var url = '/pegawai/'+this.buang;
            Axios({
                method: 'delete',
                url: url
            }).then(function(){
                window.location.href = '/pegawai';
            });
        },
        initDeletePegawai(id){
            this.buang= id;
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
        belanja(){


            this.firstFunction(function() {
                window.location.href = '/belanja';
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
