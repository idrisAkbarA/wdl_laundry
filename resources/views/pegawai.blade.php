@extends('layouts.afterLogin')

@section('content')
<v-container>
<v-simple-table class="blue white--text">
    <template v-slot:default>
      <thead>
        <tr>
          <th class="white--text font-weight-bold body-1">Nama</th>
          <th class="white--text font-weight-bold body-1">Jabatan</th>
          <th class="white--text font-weight-bold body-1">Tanggal Masuk</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Idris Akbar Adyusman</td>
          <td>Kasir</td>
          <td>31 Agustus 2000</td>
        </tr>
        <tr>
          <td>Idris Akbar Adyusman</td>
          <td>Kasir</td>
          <td>31 Agustus 2000</td>
        </tr>
      </tbody>
    </template>
  </v-simple-table>
</v-container>
<v-container>
<div class="text-center">
    <v-btn class="blue white--text">Button</v-btn>
  </div>
</v-container>
@endsection