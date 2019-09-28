<template>
    <div class="text-center">

    <v-bottom-sheet v-model="EditSheet">
        <v-sheet class="text-left" style="margin-top: -2em">
            <v-form :action="action" method="get">
            <div class="mt-5" style="height:3em">
                <p class="blue--text font-weight-bold body-1 pa-4">Tambahkan Loket</p>
            </div>
            <div class="mx-5">
                <v-row rows="12" sm="6" md="3">
                    <v-col cols="12" lg="3" sm="6" md="3">
                        <v-text-field v-model="nama_jasa" name="nama_jasa" label="Nama Jasa" prepend-inner-icon="store" filled></v-text-field>
                    </v-col>
                    <v-col cols="12" lg="3" sm="6" md="3">
                        <v-text-field v-model="satuan" name="satuan" label="Satuan" prepend-inner-icon="room" filled></v-text-field>
                    </v-col>
                    <v-col cols="12" lg="3" sm="6" md="3">
                        <v-text-field v-model="harga" type="tel" name="harga" label="Harga" prepend-inner-icon="phone" filled></v-text-field>
                    </v-col>
                </v-row>
            </div>
            <div class="pl-4">
                <v-btn type="submit" class="mb-6" color="blue" dark @click="EditSheet = !EditSheet">Simpan Perubahan</v-btn>
            </div>
        </v-form>


        </v-sheet>
    </v-bottom-sheet>
</div>
</template>

<script>
import Axios from 'axios';
    export default {

        http: {
            headers: {
            'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
        }},
        data: () => ({
            action      :'',
            EditSheet   :false,
            nama_jasa   :null,
            satuan      :null,
            harga          :null,
            email       :null,
        }),
        methods:{
        edit(nama){
            var url = "/jasa/"+nama;
            console.log(url);
            var that = this;

            Axios({
                method:'get',
                url: url
            }).then(function(response){
                that.nama_jasa= response.data[0][0].nama_jasa;
                that.satuan= response.data[0][0].satuan;
                that.harga= response.data[0][0].harga;
                that.action = '/jasa/'+that.nama_jasa+"/edit";
                console.log(response.data);
            });
            console.log(nama);
            this.EditSheet = true;

        }
    }
    }
</script>
