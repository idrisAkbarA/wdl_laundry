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
                                </v-col>
                                <v-col cols="12" md="6">
                                    <v-text-field  label="Nomor Hp" name="login"
                                        filled prepend-inner-icon="phone" type="text" required></v-text-field>

                                </v-col>
                                <v-col cols="12" md="12" style="z-index:0">
                                    <v-text-field  label="Alamat" name="login"
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
        data: ()=>({
            nama: '',
            searchquery:'',
            data_result:[]
        }),
        methods:{
            autoComplete(){
                this.data_results = [];
                if(this.searchquery.length > 2){
                Axios.get('/pelanggan/search',{params: {searchquery: this.searchquery}}).then(response => {
                    console.log(response);
                    if(response.data<1){
                        this.data_results="tidak ada data"
                    }
                this.data_results = response.data;
                });
                console.log('fired');
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
