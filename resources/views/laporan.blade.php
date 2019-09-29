@extends('layouts.afterLogin')

@section('laporan')
grey lighten-3
@endsection

@section('title')
Laporan
@endsection

@section('content')
<style>
    .minus {
        margin-bottom: -2em;
    }

</style>
<v-container fluid style="margin-top:-2em">
    <v-row>
        <v-col cols="12">
            <v-container>
                {{-- expansion Panels laporan for filter--}}
                <v-row justify="center">
                    <v-col cols="12">
                        <v-card dark class="blue">
                            <v-expansion-panels accordion>
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
                                                <v-dialog ref="dialog" v-model="modal" :return-value.sync="date"
                                                    persistent width="290px">
                                                    <template v-slot:activator="{ on }">
                                                        <v-text-field v-model="date" label="cari"
                                                            prepend-inner-icon="search" readonly filled v-on="on">
                                                        </v-text-field>
                                                    </template>
                                                    <v-date-picker v-model="date" scrollable>
                                                        <div class="flex-grow-1"></div>
                                                        <v-btn text color="primary" @click="modal = false">Cancel
                                                        </v-btn>
                                                        <v-btn text color="primary" @click="$refs.dialog.save(date)">OK
                                                        </v-btn>
                                                    </v-date-picker>
                                                </v-dialog>
                                            </v-col>
                                            <v-col cols="12" lg="3" sm="4" md="3">
                                                Berdasarkan rentang tanggal
                                                <v-dialog ref="dialog" v-model="modal" :return-value.sync="date"
                                                    persistent width="290px">
                                                    <template v-slot:activator="{ on }">
                                                        <v-text-field v-model="date1" label="Dari"
                                                            prepend-inner-icon="search" readonly filled v-on="on">
                                                        </v-text-field>
                                                    </template>
                                                    <v-date-picker v-model="date1" scrollable>
                                                        <div class="flex-grow-1"></div>
                                                        <v-btn text color="primary" @click="modal = false">Cancel
                                                        </v-btn>
                                                        <v-btn text color="primary" @click="$refs.dialog.save(date)">OK
                                                        </v-btn>
                                                    </v-date-picker>
                                                </v-dialog>
                                            </v-col>
                                            <v-col cols="12" lg="3" sm="4" md="3">
                                                <span style="visibility:hidden">s</span>
                                                <v-dialog ref="dialog" v-model="modal" :return-value.sync="date"
                                                    persistent width="290px">
                                                    <template v-slot:activator="{ on }">
                                                        <v-text-field v-model="date2" label="Sampai"
                                                            prepend-inner-icon="search" readonly filled v-on="on">
                                                        </v-text-field>
                                                    </template>
                                                    <v-date-picker v-model="date2" scrollable>
                                                        <div class="flex-grow-1"></div>
                                                        <v-btn text color="primary" @click="modal = false">Cancel
                                                        </v-btn>
                                                        <v-btn text color="primary" @click="$refs.dialog.save(date)">OK
                                                        </v-btn>
                                                    </v-date-picker>
                                                </v-dialog>
                                            </v-col>
                                        </v-row>
                                    </v-expansion-panel-content>
                                </v-expansion-panel>
                            </v-expansion-panels>
                        </v-card>
                    </v-col>
                </v-row>
                {{-- akhir expansion Panels for filter--}}
                <v-card class="mt-4 ">
                    <v-sheet dark color="blue">
                        <v-card-title>Total</v-card-title>
                    </v-sheet>
                    <v-row>
                        <v-col cols="12" sm="6">
                            <h1 class="ml-4">Transaksi</h1>
                            <v-simple-table>
                                <template v-slot:default>
                                    <tbody>
                                        <tr>
                                            <td>Jumlah Kg</td>
                                            <td>30</td>
                                        </tr>
                                        <tr>
                                            <td>aa</td>
                                            <td>bb</td>
                                        </tr>
                                        <tr>
                                            <td>aa</td>
                                            <td>bb</td>
                                        </tr>
                                    </tbody>
                                </template>
                            </v-simple-table>
                        </v-col>
                        <v-col cols="12" sm="6">
                            <h1 class="ml-4">Belanja</h1>
                            <v-simple-table>
                                <template v-slot:default>
                                    <tbody>
                                        <tr>
                                            <td>Jumlah Kg</td>
                                            <td>30</td>
                                        </tr>
                                        <tr>
                                            <td>aa</td>
                                            <td>bb</td>
                                        </tr>
                                        <tr>
                                            <td>aa</td>
                                            <td>bb</td>
                                        </tr>
                                    </tbody>
                                </template>
                            </v-simple-table>
                        </v-col>
                    </v-row>
                    <v-btn dark color="blue" class="ma-4">Lihat rincian transaksi</v-btn>

                </v-card>
                <v-card class="mt-4 ">
                    <v-sheet dark color="blue">
                        <v-card-title>Total</v-card-title>
                    </v-sheet>
                    <v-row>
                        <v-col cols="12" sm="6">
                            <h1 class="ml-4">Transaksi</h1>
                            <v-simple-table>
                                <template v-slot:default>
                                    <tbody>
                                        <tr>
                                            <td>Jumlah Kg</td>
                                            <td>30</td>
                                        </tr>
                                        <tr>
                                            <td>aa</td>
                                            <td>bb</td>
                                        </tr>
                                        <tr>
                                            <td>aa</td>
                                            <td>bb</td>
                                        </tr>
                                    </tbody>
                                </template>
                            </v-simple-table>
                        </v-col>
                        <v-col cols="12" sm="6">
                            <h1 class="ml-4">Belanja</h1>
                            <v-simple-table>
                                <template v-slot:default>
                                    <tbody>
                                        <tr>
                                            <td>Jumlah Kg</td>
                                            <td>30</td>
                                        </tr>
                                        <tr>
                                            <td>aa</td>
                                            <td>bb</td>
                                        </tr>
                                        <tr>
                                            <td>aa</td>
                                            <td>bb</td>
                                        </tr>
                                    </tbody>
                                </template>
                            </v-simple-table>
                        </v-col>
                    </v-row>
                    <v-btn dark color="blue" class="ma-4">Lihat rincian transaksi</v-btn>

                </v-card>
            </v-container>
    </v-row>

    </v-col>
    </v-row>
</v-container>

@endsection
