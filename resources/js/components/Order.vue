<template>
    <v-card class="ml-2" width="600">

                    <v-card-title>Order</v-card-title>
                    <v-card-text>
                        <v-text-field  autofocus label="Scan/input kartu member"
                            name="login" filled prepend-inner-icon="credit_card" type="text" required>
                        </v-text-field>

                        <v-divider></v-divider>

                        <v-container>
                            <v-row dense>
                                <v-col cols="12" md="6" style="z-index:0; position:relative;">
                                    <v-text-field v-model="searchquery" v-on:keyup="autoComplete" label="Nama Pelanggan" name="login"
                                        filled prepend-inner-icon="person" type="text" required></v-text-field>
                                        <v-card color="blue lighten-4" elevation="5" v-show="isExist" v-for="(result,index) in data_result" v-bind:key="index">
                                                <v-list-item tile two-line @click="selected(result.nama,index)">
                                                    <v-list-item-content>
                                                        <v-list-item-title>
                                                           {{result.nama}}
                                                        </v-list-item-title>
                                                        <v-list-item-subtitle>{{result.id}}</v-list-item-subtitle>
                                                    </v-list-item-content>
                                                </v-list-item>

                                        </v-card>
                                </v-col>
                                <v-col cols="12" md="6">
                                    <v-text-field v-model="searchquery2" v-on:keyup="autoCompleteHP" label="Nomor Hp" name="login"
                                        filled prepend-inner-icon="phone" type="text" required></v-text-field>
                                    <v-card color="blue lighten-4" v-show="isExist2" elevation="5" v-for="(result,index) in data_result2" v-bind:key="index">
                                                <v-list-item tile two-line @click="selectedhp(result.nama,index)">
                                                    <v-list-item-content>
                                                        <v-list-item-title>
                                                           {{result.nama}}
                                                        </v-list-item-title>
                                                        <v-list-item-subtitle>{{result.id}}</v-list-item-subtitle>
                                                    </v-list-item-content>
                                                </v-list-item>

                                        </v-card>
                                </v-col>
                                <v-col cols="12" md="12" style="z-index:0">
                                    <v-text-field  v-model="alamat" label="Alamat" name="login"
                                        filled prepend-inner-icon="home" type="text" required></v-text-field>
                                </v-col>

                                <v-container>
                                    <v-layout dense row wrap>
                                        <v-row dense justify="space-around">
                                            <v-col cols="12" md="3">
                                                <v-card color="blue" dark>
                                                    <v-card-text>
                                                        Cuci + gosok
                                                        <v-text-field suffix="Kg" type="number" width="50px">
                                                        </v-text-field>
                                                        </v-card-text>
                                                </v-card>
                                            </v-col>
                                            <v-col cols="12" md="3">
                                                <v-card color="blue" dark>
                                                    <v-card-text>
                                                        Cuci + gosok
                                                        <v-text-field suffix="Kg" type="number" width="50px">
                                                        </v-text-field>
                                                        </v-card-text>
                                                </v-card>
                                            </v-col>
                                            <v-col cols="12" md="3">
                                                <v-card color="blue" dark>
                                                    <v-card-text>
                                                        Cuci + gosok
                                                        <v-text-field suffix="Kg" type="number" width="50px">
                                                        </v-text-field>
                                                        </v-card-text>
                                                </v-card>
                                            </v-col>
                                            <v-col cols="12" md="3">
                                                <v-card color="blue" dark>
                                                    <v-card-text>
                                                        Cuci + gosok
                                                        <v-text-field suffix="Kg" type="number" width="50px">
                                                        </v-text-field>
                                                        </v-card-text>
                                                </v-card>
                                            </v-col>
                                        </v-row>
                                    </v-layout>

                                </v-container>
                            </v-row>
                        </v-container>

                        <v-btn class="mt-2" color="blue" dark>proses order</v-btn>
                    </v-card-text>
                </v-card>
</template>

<script>
    import Axios from 'axios';
    export default {
        beforeMount(){
             Axios.get('/jasa/kasir').then(response=>{
                 this.jasa_result = response.data;
                 console.log(this.jasa_result[0]);
             })
        },
        data: ()=>({
            nama: '',
            searchquery:'',
            searchquery2:'',
            alamat:'',
            data_result:[],
            data_result2:[],
            jasa_result:[],
            isExist: false,
            isExist2: false
        }),
        methods:{
            selected(nama,index){
                console.log(nama, index);
                this.searchquery2 = this.data_result[index].id;
                this.searchquery = nama;
                this.alamat = this.data_result[index].alamat;
                this.isExist=false;
            },
            selectedhp(nama,index){
                console.log(nama, index);
                this.searchquery2 = this.data_result2[index].id;
                this.searchquery = nama;
                this.alamat = this.data_result2[index].alamat;
                this.isExist2=false;
            },
            autoComplete(){

                if(this.searchquery.length > 2){
                    Axios.get('/pelanggan/search',{params: {searchquery: this.searchquery}}).then(response => {
                        this.data_result = response.data;
                        console.log(this.data_result.length);
                        if(this.data_result.length>0){
                            console.log(this.data_result[0].nama);
                            this.isExist=true;
                        }else{
                            this.isExist=false;
                        }
                    });
                }else{
                    this.isExist =false;
                    console.log("belum 2");
                }
            },
            autoCompleteHP(){

                if(this.searchquery2.length > 2){
                    Axios.get('/pelanggan/searchhp',{params: {searchquery: this.searchquery2}}).then(response => {
                        this.data_result2 = response.data;
                        console.log(this.data_result2.length);
                        if(this.data_result2.length>0){
                            console.log(this.data_result2[0].nama);
                            this.isExist2=true;
                        }else{
                            this.isExist2=false;
                        }
                    });
                }else{
                    this.isExist2 =false;
                    console.log("belum 2");
                }
            },
        }
    }
</script>
<style scoped>
    .floating{
        position: absolute;
        z-index: 999 !important;
    }
</style>
