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
                    <v-col cols="12" lg="4" sm="6" md="4">
                        <v-text-field v-model="nama" name="nama" label="Nama Pegawai" prepend-inner-icon="person" filled></v-text-field>
                    </v-col>
                    <v-col cols="12" lg="4" sm="6" md="4">
                        <v-text-field v-model="hp" name="hp" label="Nomor Hp" prepend-inner-icon="phone" filled></v-text-field>
                    </v-col>
                    <v-col cols="12" lg="4" sm="6" md="4">
                        <v-text-field v-model="loket" type="tel" name="loket" label="Loket" prepend-inner-icon="store" filled></v-text-field>
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
            nama   :null,
            hp      :null,
            loket          :null,
        }),
        methods:{
        edit(nama){
            var url = "/pegawai/"+nama;
            console.log(url);
            var that = this;

            Axios({
                method:'get',
                url: url
            }).then(function(response){
                that.nama= response.data[0][0].nama;
                that.hp= response.data[0][0].hp;
                that.loket= response.data[0][0].loket;
                that.action = '/pegawai/'+that.nama+"/edit";
                console.log(response.data);
            });
            console.log(nama);
            this.EditSheet = true;

        }
    }
    }
</script>
