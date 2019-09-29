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
                        <v-text-field v-model="namaLoket" name="nama" label="Nama Loket" prepend-inner-icon="store" filled></v-text-field>
                    </v-col>
                    <v-col cols="12" lg="3" sm="6" md="3">
                        <v-text-field v-model="alamat" name="alamat" label="Alamat" prepend-inner-icon="room" filled></v-text-field>
                    </v-col>
                    <v-col cols="12" lg="3" sm="6" md="3">
                        <v-text-field v-model="hp" type="tel" name="hp" label="Nomor HP" prepend-inner-icon="phone" filled></v-text-field>
                    </v-col>
                    <v-col cols="12" lg="3" sm="6" md="3">
                        <v-text-field v-model="email" name="email" label="Email" prepend-inner-icon="email" type="email" filled></v-text-field>
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

        // http: {
        //     headers: {
        //     'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
        // }},
        data: () => ({
            action      :'',
            EditSheet   :false,
            namaLoket   :null,
            alamat      :null,
            hp          :null,
            email       :null,
        }),
        methods:{
        edit(nama){
            var url = "/lokets/"+nama;
            var that = this;

            Axios({
                method:'get',
                url: url
            }).then(function(response){
                that.namaLoket= response.data[0][0].nama;
                that.alamat= response.data[0][0].alamat;
                that.hp= response.data[0][0].hp;
                that.email= response.data[1][0].email;
                that.action = '/lokets/'+that.namaLoket+"/edit";
                console.log(response.data);
            });
            console.log(nama);
            this.EditSheet = true;

        }
    }
    }
</script>
