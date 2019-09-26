@extends('layouts.afterLogin')

@section('dasbor')
grey lighten-3
@endsection

@section('title')
Daftar Loket
@endsection

@section('content')
<v-container>
    <v-expansion-panels focusable popout>
        <v-expansion-panel v-for="(Loket,i) in 5" :key="i">
            <v-expansion-panel-header>Loket</v-expansion-panel-header>
            <v-expansion-panel-content>

                {{-- Tabel --}}
                <v-container class="mt-4">
                    <v-simple-table style="background-color:transparent !important">
                        <template v-slot:default>
                            <thead>
                                <tr>
                                    <th class="font-weight-bold body-1">Nama Loket</th>
                                    <th class="font-weight-bold body-1">Nomor HP</th>
                                    <th class="font-weight-bold body-1">Alamat</th>
                                    <th class="font-weight-bold body-1">Tanggal Daftar</th>
                                    <th class="font-weight-bold body-1">Email</th>
                                    <th class="font-weight-bold body-1 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Idris Akbar Adyusman</td>
                                    <td>082169670012</td>
                                    <td>31 Agustus 2000</td>
                                    <td>Kasir</td>
                                    <td>Kasir</td>
                                    <td class="text-center"><span>
                                            <v-btn icon>
                                                <v-icon>edit</v-icon>
                                            </v-btn>
                                        </span>
                                        <v-btn icon>
                                            <v-icon>delete</v-icon>
                                        </v-btn>
                                    </td>
                                </tr>
                            </tbody>
                        </template>
                    </v-simple-table>
                </v-container>
                {{-- Akhir Tabel --}}

            </v-expansion-panel-content>
        </v-expansion-panel>
    </v-expansion-panels>
</v-container>

{{-- bottom sheet --}}
<div class="text-center">
    <v-btn color="blue" dark @click="sheet = !sheet">
        Tambahkan Loket
    </v-btn>
    <v-bottom-sheet v-model="sheet">
        <v-sheet class="text-left">
            <div class="mt-5" style="height:3em">
                <p class="blue--text font-weight-bold body-1 pa-4">Tambahkan Loket</p>
            </div>
            <div class="mx-5">
                <v-row rows="12" sm="6" md="3">
                    <v-col cols="12" lg="3" sm="6" md="3">
                        <v-text-field label="Nama Loket" prepend-inner-icon="store" filled></v-text-field>
                    </v-col>
                    <v-col cols="12" lg="3" sm="6" md="3">
                        <v-text-field label="Alamat" prepend-inner-icon="room" filled></v-text-field>
                    </v-col>
                    <v-col cols="12" lg="3" sm="6" md="3">
                        <v-text-field label="Nomor HP" prepend-inner-icon="phone" filled></v-text-field>
                    </v-col>
                    <v-col cols="12" lg="3" sm="6" md="3">
                        <v-text-field label="Email" prepend-inner-icon="email" filled></v-text-field>
                    </v-col>
                </v-row>
            </div>
            <div class="pl-4">
                <v-btn class="mb-6" color="blue" dark @click="sheet = !sheet">Tambahkan</v-btn>
            </div>


        </v-sheet>
    </v-bottom-sheet>
</div>
{{-- akhir bottom sheet --}}
@endsection
