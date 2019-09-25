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
                <v-simple-table>
                    <template v-slot:default>
                      <thead>
                        <tr>
                          <th class="font-weight-bold body-1">Nama</th>
                          <th class="font-weight-bold body-1">Nomor HP</th>
                          <th class="font-weight-bold body-1">Alamat</th>
                          <th class="font-weight-bold body-1">Tanggal Daftar</th>
                          <th class="font-weight-bold body-1">Jumlah Transaksi</th>
                          <th class="font-weight-bold body-1">Kuota</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Idris Akbar Adyusman</td>
                          <td>082169670012</td>
                          <td>jalan</td>
                          <td>31 Agustus 2000</td>
                          <td>12</td>
                          <td>12kg</td>
                        </tr>
                        <tr>
                          <td>Idris Akbar Adyusman</td>
                          <td>082169670012</td>
                          <td>jalan</td>
                          <td>31 Agustus 2000</td>
                          <td>12</td>
                          <td>12kg</td>
                        </tr>
                      </tbody>
                    </template>
                  </v-simple-table>
            </v-card>
          </v-tab-item>
        {{-- akhir tab member --}}

        {{-- awal tab non member --}}
        <v-tab-item>
            <v-card flat>
                <v-simple-table>
                    <template v-slot:default>
                      <thead>
                        <tr>
                          <th class="font-weight-bold body-1">Nama</th>
                          <th class="font-weight-bold body-1">Nomor HP</th>
                          <th class="font-weight-bold body-1">Alamat</th>
                          <th class="font-weight-bold body-1">Tanggal Transaksi</th>
                          <th class="font-weight-bold body-1">Jumlah Transaksi</th>
                          <th class="font-weight-bold body-1">Kuota</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Idris Akbar Adyusman</td>
                          <td>082169670012</td>
                          <td>jalan</td>
                          <td>31 Agustus 2000</td>
                          <td>12</td>
                        </tr>
                        <tr>
                          <td>Idris Akbar Adyusman</td>
                          <td>082169670012</td>
                          <td>jalan</td>
                          <td>31 Agustus 2000</td>
                          <td>12</td>
                        </tr>
                      </tbody>
                    </template>
                  </v-simple-table>
            </v-card>
          </v-tab-item>
        {{-- akhir tab non member --}}

        {{-- awal tab semua --}}
        <v-tab-item>
            <v-card flat>
                <v-simple-table>
                    <template v-slot:default>
                      <thead>
                        <tr>
                          <th class="font-weight-bold body-1">Nama</th>
                          <th class="font-weight-bold body-1">Nomor HP</th>
                          <th class="font-weight-bold body-1">Alamat</th>
                          <th class="font-weight-bold body-1">Tanggal Daftar</th>
                          <th class="font-weight-bold body-1">Jumlah Transaksi</th>
                          <th class="font-weight-bold body-1">Kuota</th>
                          <th class="font-weight-bold body-1">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Idris Akbar Adyusman</td>
                          <td>082169670012</td>
                          <td>jalan</td>
                          <td>31 Agustus 2000</td>
                          <td>12</td>
                          <td>12kg</td>
                          <td>member</td>
                        </tr>
                        <tr>
                          <td>Idris Akbar Adyusman</td>
                          <td>082169670012</td>
                          <td>jalan</td>
                          <td>31 Agustus 2000</td>
                          <td>12</td>
                          <td>12kg</td>
                          <td>non member</td>
                        </tr>
                      </tbody>
                    </template>
                  </v-simple-table>
            </v-card>
          </v-tab-item>
        {{-- akhir tab semua --}}
      </v-tabs>
</v-container>
@endsection