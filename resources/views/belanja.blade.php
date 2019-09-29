@extends('layouts.afterLogin')

@section('dasbor')
grey lighten-3
@endsection

@section('title')
Belanja
@endsection

@section('content')
<v-container>
    <v-row justify="center">
        <v-col cols="12" lg="8">
            <v-card>
                <v-sheet dark color="blue">
                    <v-card-title>Barang Belanja</v-card-title>
                </v-sheet>
                {{-- <ul v-for="barang in barangBelanja">
                <v-text-field :value="barang.nama"></v-text-field> --}}
                </ul>
                <div v-for="(barang,index) in barangBelanja">
                    <v-row class="mx-2 pb-5">
                        <v-col cols="1" lg="1" sm="1" md="1">
                            <v-avatar color="blue" size="30">
                                <span class="white--text">@{{index+1}}</span>
                            </v-avatar>
                        </v-col>
                        <v-col cols="11" lg="11" sm="11" md="11">

                            <v-text-field hide-details :value="barang.nama" label="Nama Barang" name="nama"
                                prepend-inner-icon="layers" filled></v-text-field>
                        </v-col>
                    </v-row>
                </div>
            </v-card>
            <v-card-actions>
                <v-btn style="margin-left:90%;margin-top:-3%;" fab color="blue" dark @click="tambahBelanja">
                    <v-icon>mdi-plus</v-icon>
                </v-btn>
            </v-card-actions>
            <v-card>
                <v-sheet dark color="blue">
                    <v-card-title>Total</v-card-title>
                </v-sheet>
                <v-col cols="12" lg="12" sm="12" md="12">
                    <v-text-field label="Total Belanja" name="nama" prepend-inner-icon="attach_money" filled>
                    </v-text-field>
                </v-col>
            </v-card>
            <v-btn type="submit"dark color="blue" class="mt-4" @click="iniBelanja">Simpan</v-btn>
        </v-col>
        </v-row>
</v-container>
@endsection
