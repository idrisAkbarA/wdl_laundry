@extends('layouts.afterLogin')

@section('pegawai')
grey lighten-3
@endsection
@section('title')
    Pegawai
@endsection

@section('content')
<v-container class="mt-5">
<v-simple-table>
    <template v-slot:default>
      <thead>
        <tr>
          <th class="font-weight-bold body-1">Nama</th>
          <th class="font-weight-bold body-1">Nomor HP</th>
          <th class="font-weight-bold body-1">Tanggal Masuk</th>
          <th class="font-weight-bold body-1">Jabatan</th>
          <th class="font-weight-bold body-1">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Idris Akbar Adyusman</td>
          <td>082169670012</td>
          <td>31 Agustus 2000</td>
          <td>Kasir</td>
          <td><span><v-btn text><v-icon>edit</v-icon></v-btn></span><v-btn text><v-icon>delete</v-icon></v-btn></td>

        </tr>
        <tr>
          <td>Idris Akbar Adyusman</td>
          <td>082169670012</td>
          <td>31 Agustus 2000</td>
          <td>Kasir</td>
          <td><span><v-btn text><v-icon>edit</v-icon></v-btn></span><v-btn text><v-icon>delete</v-icon></v-btn></td>
        </tr>
      </tbody>
    </template>
  </v-simple-table>
</v-container>

{{-- bottom sheet --}}
<div class="text-center">
    <v-btn
      color="blue"
      dark
      @click="sheet = !sheet">
      Tambahkan Pegawai
    </v-btn>
    <v-bottom-sheet v-model="sheet">
      <v-sheet class="text-left">
        <div class="mt-5" style="height:3em">
          <p class="blue--text font-weight-bold body-1 pa-4" >Tambahkan Pegawai</p>
        </div>
        <div class="mx-5">
            <v-row rows="12" sm="6" md="3">
                <v-col cols="12" sm="6" md="3">
                    <v-text-field
                      label="Nama"
                      filled
                    ></v-text-field>
                  </v-col>
                <v-col cols="12" sm="6" md="3">
                    <v-text-field
                      label="Nomor HP"
                      filled
                    ></v-text-field>
                  </v-col>
                <v-col cols="12" sm="6" md="3">
                    <v-text-field
                      label="Tanggal Masuk"
                      filled
                    ></v-text-field>
                  </v-col>
                <v-col cols="12" sm="6" md="3">
                    <v-text-field
                      label="Jabatan"
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
        

      </v-sheet>
    </v-bottom-sheet>
  </div>
  
@endsection