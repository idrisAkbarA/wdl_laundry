@extends('layouts.afterLogin')

@section('pegawai')
grey lighten-3
@endsection
@section('title')
Pegawai
@endsection

@section('content')
<v-container class="mt-5">
<<<<<<< HEAD
<<<<<<< HEAD
<v-simple-table style="background-color:transparent !important">
    <template v-slot:default>
      <thead>
        <tr>
          <th class="font-weight-bold body-1">Nama</th>
          <th class="font-weight-bold body-1">Nomor HP</th>
          <th class="font-weight-bold body-1">Tanggal Masuk</th>
          <th class="font-weight-bold body-1">Jabatan</th>
          <th class="font-weight-bold body-1 text-center">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Idris Akbar Adyusman</td>
          <td>082169670012</td>
          <td>31 Agustus 2000</td>
          <td>Kasir</td>
          <td class="text-center"><span><v-btn icon><v-icon>edit</v-icon></v-btn></span><v-btn icon><v-icon>delete</v-icon></v-btn></td>

        </tr>
        <tr>
          <td>Idris Akbar Adyusman</td>
          <td>082169670012</td>
          <td>31 Agustus 2000</td>
          <td>Kasir</td>
          <td class="text-center"><span><v-btn icon><v-icon>edit</v-icon></v-btn></span><v-btn icon><v-icon>delete</v-icon></v-btn></td>
        </tr>
      </tbody>
    </template>
  </v-simple-table>
=======
    <v-simple-table style="background-color:transparent !important">
        <template v-slot:default>
            <thead>
                <tr>
                    <th class="font-weight-bold body-1">No.</th>
                    <th class="font-weight-bold body-1">Nama</th>
                    <th class="font-weight-bold body-1">Nomor HP</th>
                    <th class="font-weight-bold body-1">Tanggal Masuk</th>
                    <th class="font-weight-bold body-1">Jabatan</th>
                    <th class="font-weight-bold body-1 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1. </td>
                    <td>Idris Akbar Adyusman</td>
                    <td>082169670012</td>
                    <td>31 Agustus 2000</td>
                    <td>Kasir</td>
                    <td class="text-center"><span>
                            <v-btn text>
                                <v-icon>edit</v-icon>
                            </v-btn>
                        </span>
                        <v-btn text>
                            <v-icon>delete</v-icon>
                        </v-btn>
                    </td>

=======
    <v-simple-table style="background-color:transparent !important">
        <template v-slot:default>
            <thead>
                <tr>
                    <th class="font-weight-bold body-1">No.</th>
                    <th class="font-weight-bold body-1">Nama</th>
                    <th class="font-weight-bold body-1">Nomor HP</th>
                    <th class="font-weight-bold body-1">Tanggal Masuk</th>
                    <th class="font-weight-bold body-1">Jabatan</th>
                    <th class="font-weight-bold body-1 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1. </td>
                    <td>Idris Akbar Adyusman</td>
                    <td>082169670012</td>
                    <td>31 Agustus 2000</td>
                    <td>Kasir</td>
                    <td class="text-center"><span>
                            <v-btn text>
                                <v-icon>edit</v-icon>
                            </v-btn>
                        </span>
                        <v-btn text>
                            <v-icon>delete</v-icon>
                        </v-btn>
                    </td>

>>>>>>> 600451977800015a6bf9be0dc515608c9554fbbb
                </tr>
                <tr>
                    <td>2. </td>
                    <td>Idris Akbar Adyusman</td>
                    <td>082169670012</td>
                    <td>31 Agustus 2000</td>
                    <td>Kasir</td>
                    <td class="text-center"><span>
                            <v-btn text>
                                <v-icon>edit</v-icon>
                            </v-btn>
                        </span>
                        <v-btn text>
                            <v-icon>delete</v-icon>
                        </v-btn>
                    </td>
                </tr>
            </tbody>
        </template>
    </v-simple-table>
<<<<<<< HEAD
>>>>>>> 600451977800015a6bf9be0dc515608c9554fbbb
=======
>>>>>>> 600451977800015a6bf9be0dc515608c9554fbbb
</v-container>

{{-- bottom sheet --}}
<div class="text-center">
    <v-btn color="blue" dark @click="sheet = !sheet">
        Tambahkan Pegawai
    </v-btn>
    <v-bottom-sheet v-model="sheet">
        <v-sheet class="text-left">
            <div class="mt-5" style="height:3em">
                <p class="blue--text font-weight-bold body-1 pa-4">Tambahkan Pegawai</p>
            </div>
            <div class="mx-5">
                <v-row rows="12" sm="6" md="3">
                    <v-col cols="12" lg="3" sm="6" md="3">
                        <v-text-field label="Nama" prepend-inner-icon="person" filled></v-text-field>
                    </v-col>
                    <v-col cols="12" lg="3" sm="6" md="3">
                        <v-text-field label="Nomor HP" prepend-inner-icon="phone" filled></v-text-field>
                    </v-col>

                    {{-- input date --}}
                    <v-col cols="12" lg="3" sm="6" md="4">
                        <v-dialog ref="dialog" v-model="modal" :return-value.sync="date" persistent width="290px">
                            <template v-slot:activator="{ on }">
                                <v-text-field v-model="date" label="Picker in dialog" prepend-inner-icon="event"
                                    readonly filled v-on="on"></v-text-field>
                            </template>
                            <v-date-picker v-model="date" scrollable>
                                <div class="flex-grow-1"></div>
                                <v-btn text color="primary" @click="modal = false">Cancel</v-btn>
                                <v-btn text color="primary" @click="$refs.dialog.save(date)">OK</v-btn>
                            </v-date-picker>
                        </v-dialog>
                    </v-col>
                    {{-- end input date--}}

<<<<<<< HEAD
<<<<<<< HEAD
                <v-col cols="12" lg="3" sm="6" md="3">
                    <v-text-field
                      label="Jabatan"
                      prepend-inner-icon="assignment"
                      filled
                    ></v-text-field>
                  </v-col>
            </v-row>
        </div>
        <div class="pl-4">
            <v-btn
          class="mb-6"
          color="blue"
          dark
          @click="sheet = !sheet"
        >Tambahkan</v-btn>
        </div>

=======
                    <v-col cols="12" lg="3" sm="6" md="3">
                        <v-text-field label="Jabatan" prepend-inner-icon="assignment" filled></v-text-field>
                    </v-col>
                </v-row>
            </div>
            <div class="pl-4">
                <v-btn class="mb-6" color="blue" dark @click="sheet = !sheet">Tambahkan</v-btn>
            </div>
>>>>>>> 600451977800015a6bf9be0dc515608c9554fbbb


        </v-sheet>
    </v-bottom-sheet>
<<<<<<< HEAD
  </div>
=======
</div>

{{-- end bottom sheet --}}
>>>>>>> 600451977800015a6bf9be0dc515608c9554fbbb
=======
                    <v-col cols="12" lg="3" sm="6" md="3">
                        <v-text-field label="Jabatan" prepend-inner-icon="assignment" filled></v-text-field>
                    </v-col>
                </v-row>
            </div>
            <div class="pl-4">
                <v-btn class="mb-6" color="blue" dark @click="sheet = !sheet">Tambahkan</v-btn>
            </div>


        </v-sheet>
    </v-bottom-sheet>
</div>

{{-- end bottom sheet --}}
>>>>>>> 600451977800015a6bf9be0dc515608c9554fbbb

@endsection
