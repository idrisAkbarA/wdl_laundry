@extends('layouts.afterLogin')

@section('riwayat')
grey lighten-3
@endsection

@section('title')
Riwayat
@endsection

@section('content')
<v-container fluid style="margin-top:-2em">
    {{-- expansion Panels riwayat for filter--}}
    <v-row justify="center">
        <v-col cols="12">
            <v-container class="pa-5">
                <v-card dark class="blue">
                    <v-expansion-panels accordion >
                        <v-expansion-panel>
                            <v-expansion-panel-header class="blue">
                                <v-col col="12">
                                    <span>
                                        <v-icon dark>filter_list</v-icon>
                                    </span> FILTER
                                </v-col>
                            </v-expansion-panel-header>
                            <v-expansion-panel-content dark class="blue">
                                <v-row>
                                    <v-col col="12" lg="2" sm="2" md="3">

                                        <v-menu top :close-on-click="closeOnClick">
                                            <template v-slot:activator="{ on }">
                                                <v-btn text v-on="on">
                                                    Bulan
                                                </v-btn>
                                            </template>

                                            <v-list>
                                                <v-list-item>
                                                    <v-list-item-title>
                                                        january
                                                    </v-list-item-title>
                                                </v-list-item>
                                            </v-list>
                                        </v-menu>
                                        <v-btn text>Minggu ini</v-btn>
                                        <v-btn text>Hari ini</v-btn>
                                    </v-col>
                                    <v-col cols="12" lg="3" sm="4" md="3">
                                        Berdasarkan tanggal
                                        <v-dialog ref="dialog" v-model="modal" :return-value.sync="date" persistent
                                            width="290px">
                                            <template v-slot:activator="{ on }">
                                                <v-text-field v-model="date" label="cari" prepend-inner-icon="search"
                                                    readonly filled v-on="on"></v-text-field>
                                            </template>
                                            <v-date-picker v-model="date" scrollable>
                                                <div class="flex-grow-1"></div>
                                                <v-btn text color="primary" @click="modal = false">Cancel</v-btn>
                                                <v-btn text color="primary" @click="$refs.dialog.save(date)">OK</v-btn>
                                            </v-date-picker>
                                        </v-dialog>
                                    </v-col>
                                    <v-col cols="12" lg="3" sm="4" md="3">
                                        Berdasarkan rentang tanggal
                                        <v-dialog ref="dialog" v-model="modal" :return-value.sync="date" persistent
                                            width="290px">
                                            <template v-slot:activator="{ on }">
                                                <v-text-field v-model="date1" label="Dari" prepend-inner-icon="search"
                                                    readonly filled v-on="on"></v-text-field>
                                            </template>
                                            <v-date-picker v-model="date1" scrollable>
                                                <div class="flex-grow-1"></div>
                                                <v-btn text color="primary" @click="modal = false">Cancel</v-btn>
                                                <v-btn text color="primary" @click="$refs.dialog.save(date)">OK</v-btn>
                                            </v-date-picker>
                                        </v-dialog>
                                    </v-col>
                                    <v-col cols="12" lg="3" sm="4" md="3">
                                        <span style="visibility:hidden">s</span>
                                        <v-dialog ref="dialog" v-model="modal" :return-value.sync="date" persistent
                                            width="290px">
                                            <template v-slot:activator="{ on }">
                                                <v-text-field v-model="date2" label="Sampai" prepend-inner-icon="search"
                                                    readonly filled v-on="on"></v-text-field>
                                            </template>
                                            <v-date-picker v-model="date2" scrollable>
                                                <div class="flex-grow-1"></div>
                                                <v-btn text color="primary" @click="modal = false">Cancel</v-btn>
                                                <v-btn text color="primary" @click="$refs.dialog.save(date)">OK</v-btn>
                                            </v-date-picker>
                                        </v-dialog>
                                    </v-col>
                                </v-row>
                            </v-expansion-panel-content>
                        </v-expansion-panel>
                    </v-expansion-panels>
                </v-card>
            </v-container>
        </v-col>
    </v-row>
    {{-- akhir expansion Panels for filter--}}

    {{-- Tabel --}}
    <v-container class="mt-4">
        <v-simple-table style="background-color:transparent !important">
            <template v-slot:default>
                <thead>
                    <tr>
                        <th class="font-weight-bold body-1">No. </th>
                        <th class="font-weight-bold body-1">Nomor Nota</th>
                        <th class="font-weight-bold body-1">Tanggal</th>
                        <th class="font-weight-bold body-1">Nama</th>
                        <th class="font-weight-bold body-1">Nomor HP</th>
                        <th class="font-weight-bold body-1">Alamat</th>
                        <th class="font-weight-bold body-1">Total Bayar</th>
                        <th class="font-weight-bold body-1">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1. </td>
                        <td>0010010011</td>
                        <td>31 Agustus 2000</td>
                        <td>Katak</td>
                        <td>082169670012</td>
                        <td>Jl. jalan</td>
                        <td>Rp. 80000</td>
                        <td>Lunas</td>
                    </tr>
                </tbody>
            </template>
        </v-simple-table>
    </v-container>
    {{-- Akhir Tabel --}}
</v-container>
@endsection
