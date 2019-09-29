@extends('layouts.afterLogin')

@section('dasbor')
grey lighten-3
@endsection

@section('title')
Pelanggan
@endsection

@section('content')
<v-container class="mt-5">
    <v-tabs style="background-color:transparent !important">
        <v-tab>Member</v-tab>
        <v-tab>Non Member</v-tab>
        <v-tab>Semua</v-tab>

        {{-- awal tab member --}}
        <v-tab-item>
            <v-card flat>
                @if (count($pelanggans)>0)
                <div class="ma-5">
                    <v-btn dark text class="blue" @click="sheet = !sheet">Tambahkan Member</v-btn>
                </div>
                <v-simple-table>
                    <template v-slot:default>
                        <thead>
                            <tr>
                                <th class="font-weight-bold body-1">No.</th>
                                <th class="font-weight-bold body-1">Nama</th>
                                <th class="font-weight-bold body-1">Nomor HP</th>
                                <th class="font-weight-bold body-1">Alamat</th>
                                <th class="font-weight-bold body-1">Tanggal Daftar</th>
                                <th class="font-weight-bold body-1">Transaksi Terakhir</th>
                                <th class="font-weight-bold body-1">Jumlah Transaksi</th>
                                <th class="font-weight-bold body-1">Kuota</th>
                                <th class="font-weight-bold body-1 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=0;
                            @endphp
                            @foreach ($pelanggans as $pelanggan)
                            @if ($pelanggan->member== "member")
                            @php
                            $i=$i+1;
                            @endphp
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$pelanggan->nama}}</td>
                                <td>{{$pelanggan->id}}</td>
                                <td>{{$pelanggan->alamat}}</td>
                                <td>{{$pelanggan->created_at}}</td>
                                <td>{{$pelanggan->updated_at}}</td>
                                <td>{{$pelanggan->jml_transaksi}}</td>
                                <td>{{$pelanggan->kuota}}</td>
                                <td>
                                    {{-- pop up dialog --}}
                                    <v-row justify="center">
                                        <v-btn text color="primary" dark @click.stop="dialog = true">
                                            Top Up Kuota
                                        </v-btn>

                                        <v-dialog v-model="dialog" max-width="400">
                                            <v-card>
                                                <v-sheet color="blue" dark>
                                                    <v-card-title class="headline">Top Up Kuota
                                                    </v-card-title>
                                                </v-sheet>

                                                <v-card-text>
                                                    <v-text-field class="ma-3" label="Masukkan Jumlah Top Up"
                                                        name="topup" prepend-inner-icon="local_atm" filled>
                                                    </v-text-field>
                                                </v-card-text>

                                                <v-card-actions>

                                                    <v-btn color="error" text @click="dialog = false">
                                                        Batal
                                                    </v-btn>
                                                    <v-spacer></v-spacer>
                                                    <v-btn color="green darken-1" text @click="dialog = false">
                                                        Top Up
                                                    </v-btn>
                                                </v-card-actions>
                                            </v-card>
                                        </v-dialog>
                                    </v-row>
                                    {{-- end pop up dialog --}}
                                </td>
                            </tr>
                        </tbody>
                        @endif
                        @endforeach
                    </template>
                </v-simple-table>
                @else
                <p>belum ada pelanggan</p>
                @endif
            </v-card>
        </v-tab-item>
        {{-- akhir tab member --}}

        {{-- awal tab non member --}}
        <v-tab-item>
            <v-card flat>
                @if (count($pelanggans)>0)
                <v-container>
                    <v-row justify="end">
                        <v-col cols="12" lg="3" style="margin-top:-1em;margin-bottom:-2em">
                            <v-toolbar dense floating dark color="blue lighten-2">
                                <v-text-field label="Cari loket" hide-details prepend-icon="search" single-line>
                                </v-text-field>
                            </v-toolbar>
                        </v-col>
                    </v-row>
                </v-container>
                <v-container>
                    <v-simple-table>
                        <template v-slot:default>
                            <thead>
                                <tr>
                                    <th class="font-weight-bold body-1">No. </th>
                                    <th class="font-weight-bold body-1">Nama</th>
                                    <th class="font-weight-bold body-1">Nomor HP</th>
                                    <th class="font-weight-bold body-1">Alamat</th>
                                    <th class="font-weight-bold body-1">Tanggal Daftar</th>
                                    <th class="font-weight-bold body-1">Transaksi Terakhir</th>
                                    <th class="font-weight-bold body-1">Jumlah Transaksi</th>
                                    <th class="font-weight-bold body-1 text-center">Daftar Sebagai Member</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i=0;
                                @endphp
                                @foreach ($pelanggans as $pelanggan)
                                @if ($pelanggan->member== "bukan_member")
                                @php
                                $i=$i+1;
                                @endphp
                                <tr>
                                    <td>{{$i}} </td>
                                    <td>{{$pelanggan->nama}}</td>
                                    <td>{{$pelanggan->id}}</td>
                                    <td>{{$pelanggan->alamat}}</td>
                                    <td>{{$pelanggan->created_at}}</td>
                                    <td>{{$pelanggan->updated_at}}</td>
                                    <td>{{$pelanggan->jml_transaksi}}</td>
                                    <td>
                                        {{-- pop up dialog --}}
                                        <v-row justify="center">
                                            <v-btn text color="primary" dark @click.stop="dialog1 = true">
                                                Daftar
                                            </v-btn>

                                            <v-dialog v-model="dialog1" max-width="500">
                                                <v-card>
                                                        <v-sheet color="blue" dark>
                                                                <v-card-title class="headline">Daftar Sebagai Member
                                                                    </v-card-title>
                                                            </v-sheet>
                                                    

                                                    <v-card-text class="mt-5">
                                                        <v-text-field label="Scan/Input Kartu Member"
                                                            name="id_member" prepend-inner-icon="credit_card" filled>
                                                        </v-text-field>
                                                    </v-card-text>

                                                    <v-card-actions>

                                                        <v-btn color="error" text @click="dialog1 = false">
                                                            Batal
                                                        </v-btn>
                                                        <v-spacer></v-spacer>
                                                        <v-btn color="green darken-1" text @click="dialog1 = false">
                                                            Daftar
                                                        </v-btn>
                                                    </v-card-actions>
                                                </v-card>
                                            </v-dialog>
                                        </v-row>
                                        {{-- end pop up dialog --}}
                                    </td>
                                </tr>
                            </tbody>
                            @endif
                            @endforeach
                        </template>
                    </v-simple-table>
                    @else
                    <p>belum ada pelanggan</p>
                    @endif
            </v-card>
        </v-tab-item>
        {{-- akhir tab non member --}}

        {{-- awal tab semua --}}
        <v-tab-item>
            <v-card flat style="margin-top:1em">
                @if (count($pelanggans)>0)
                <v-simple-table>
                    <template v-slot:default>
                        <thead>
                            <tr>
                                <th class="font-weight-bold body-1">No. </th>
                                <th class="font-weight-bold body-1">Nama</th>
                                <th class="font-weight-bold body-1">Nomor HP</th>
                                <th class="font-weight-bold body-1">Alamat</th>
                                <th class="font-weight-bold body-1">Tanggal Daftar</th>
                                <th class="font-weight-bold body-1">Transaksi Terakhir</th>
                                <th class="font-weight-bold body-1">Jumlah Transaksi</th>
                                <th class="font-weight-bold body-1">Kuota</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=0;
                            @endphp
                            @foreach ($pelanggans as $pelanggan)
                            @php
                            $i=$i+1;
                            @endphp
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$pelanggan->nama}}</td>
                                <td>{{$pelanggan->id}}</td>
                                <td>{{$pelanggan->alamat}}</td>
                                <td>{{$pelanggan->created_at}}</td>
                                <td>{{$pelanggan->updated_at}}</td>
                                <td>{{$pelanggan->jml_transaksi}}</td>
                                <td>{{$pelanggan->kuota}}</td>
                            </tr>
                        </tbody>
                        @endforeach
                    </template>
                </v-simple-table>
                @else
                <p>belum ada pelanggan</p>
                @endif
            </v-card>
        </v-tab-item>
        {{-- akhir tab semua --}}
    </v-tabs>
</v-container>
{{-- bottom sheet --}}
<div class="text-center">

    <v-bottom-sheet v-model="sheet">
        <v-sheet style="margin-top: -2em">
            <v-form action="/pelanggan" method="post">
                @csrf
                <div class="mt-5" style="height:3em">
                    <p class="blue--text font-weight-bold body-1 pa-4">Tambahkan Member</p>
                </div>
                <div class="mx-5">
                    <v-row rows="12" sm="6" md="3">
                        <v-col cols="12" lg="3" sm="6" md="3">
                            <v-text-field label="Scan/Input Kartu Member" name="id_member" prepend-inner-icon="credit_card" filled></v-text-field>
                        </v-col>
                        <v-col cols="12" lg="3" sm="6" md="3">
                            <v-text-field label="Nama" name="nama" prepend-inner-icon="person" filled></v-text-field>
                        </v-col>
                        <v-col cols="12" lg="3" sm="6" md="3">
                            <v-text-field label="Nomor HP" name="hp" prepend-inner-icon="phone" filled></v-text-field>
                        </v-col>

                        <v-col cols="12" lg="3" sm="6" md="3">
                            <v-text-field label="Alamat" name="alamat" prepend-inner-icon="room" filled>
                            </v-text-field>
                        </v-col>
                    </v-row>
                </div>
                <div class="pl-4">
                    <v-btn type="submit" class="mb-6" color="blue" dark @click="sheet = !sheet">Tambahkan</v-btn>
                </div>
            </v-form>
        </v-sheet>
    </v-bottom-sheet>
</div>
{{-- end bottom sheet --}}
@endsection
