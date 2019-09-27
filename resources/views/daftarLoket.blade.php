@extends('layouts.afterLogin')

@section('daftarLoket')
grey lighten-3
@endsection

@section('title')
Daftar Loket
@endsection

@section('content')


<v-container>
    {{-- tooltip for FAB --}}
    <v-tooltip left>
        <template v-slot:activator="{ on }">
            {{-- floating action button --}}
            <v-btn style="margin-bottom:4em;margin-left:5em;" absolute fixed dark fab bottom right color="blue" dark
                v-on="on" @click="sheet = !sheet">
                <v-icon>mdi-plus</v-icon>
            </v-btn>
            {{-- end FAB --}}
        </template>
        <span>Tambahkan Loket</span>
    </v-tooltip>
    {{-- end tooltip --}}

        @if(count($lokets)>0)
        <v-container>
                <v-toolbar dense floating dark color="blue lighten-2">
                    <v-text-field label="Cari loket" hide-details prepend-icon="search" single-line></v-text-field>
                </v-toolbar>
            </v-container>
            <v-container>
                    <v-expansion-panels focusable popout>
        @foreach ($lokets as $loket)

        <v-expansion-panel>
            <v-expansion-panel-header class="blue lighten-2 white--text">{{$loket->nama}}</v-expansion-panel-header>
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
                                    <td>{{$loket->nama}}</td>
                                    <td>{{$loket->hp}}</td>
                                    <td>{{$loket->alamat}}</td>
                                    <td>{{$loket->created_at}}r</td>
                                    <td>{{"sementara"}}</td>
                                    <td class="text-center"><span>

                                        {{-- edit loket pakai yg ini--}}

                                        @php
                                            $trigger = "<v-btn icon @click=";
                                            $isi = $trigger."\"editLoket('".$loket->nama."')\" >";
                                        @endphp
                                    {!! $isi !!}

                                                <v-icon>edit</v-icon>
                                            </v-btn>
                                        </span>

                                        {{--end edit loket--}}

                                        @php
                                            $trigger = "<v-btn icon @click=";
                                            $isi = $trigger."\"initDeleteLoket('".$loket->nama."')\" >";
                                        @endphp

                                    {!! $isi !!}
                                    <v-icon >delete</v-icon>
                                            </v-btn>
                                    </td>
                                </tr>
                            </tbody>
                        </template>
                    </v-simple-table>
                </v-container>
                {{-- Akhir Tabel --}}

{{-- popup dialog --}}
<v-dialog
      v-model="dialog"
      max-width="400"
    >
      <v-card>
          <v-sheet color="error" dark>
                <v-card-title class="headline">Hapus Loket @{{del}} </v-card-title>
          </v-sheet>


        <v-card-text>
          apakah anda yakin akan menghapus loket @{{del}}?
        </v-card-text>

        <v-card-actions>


          <v-btn
            color="green darken-1"
            text
            @click="dialog = false"
          >
            Batal
          </v-btn>
          <v-spacer></v-spacer>
          <v-btn height="50"
            width="120"
            color="error"

            @click="deleteLoket"
          >
            <v-icon>delete</v-icon>Hapus
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
</v-expansion-panel-content>
</v-expansion-panel>
@endforeach
</v-expansion-panels>
    </v-container>
@else
<P>Belum ada Loket</P>
@endif

</v-container>
<div class="text-center">

    <v-bottom-sheet v-model="sheet">
        <v-sheet class="text-left" style="margin-top: -2em">
            <v-form action="/lokets" method="post">@csrf
            <div class="mt-5" style="height:3em">
                <p class="blue--text font-weight-bold body-1 pa-4">Tambahkan Loket</p>
            </div>
            <div class="mx-5">

                <v-row rows="12" sm="6" md="3">
                    <v-col cols="12" lg="3" sm="6" md="3">
                        <v-text-field name="nama" label="Nama Loket" prepend-inner-icon="store" filled></v-text-field>
                    </v-col>
                    <v-col cols="12" lg="3" sm="6" md="3">
                        <v-text-field name="alamat" label="Alamat" prepend-inner-icon="room" filled></v-text-field>
                    </v-col>
                    <v-col cols="12" lg="3" sm="6" md="3">
                        <v-text-field type="tel" name="hp" label="Nomor HP" prepend-inner-icon="phone" filled></v-text-field>
                    </v-col>
                    <v-col cols="12" lg="3" sm="6" md="3">
                        <v-text-field name="email" label="Email" prepend-inner-icon="email" type="email" filled></v-text-field>
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

{{-- sheet 2 disini--}}
<div class="text-center">

    <v-bottom-sheet v-model="sheet2">
        <v-sheet class="text-left" style="margin-top: -2em">
            <v-form action="/lokets" method="post">@csrf
            <div class="mt-5" style="height:3em">
                <p class="blue--text font-weight-bold body-1 pa-4">Tambahkan Loket</p>
            </div>
            <div class="mx-5">

                <v-row rows="12" sm="6" md="3">
                    <v-col cols="12" lg="3" sm="6" md="3">
                        <v-text-field name="nama" label="Nama Loket" prepend-inner-icon="store" filled></v-text-field>
                    </v-col>
                    <v-col cols="12" lg="3" sm="6" md="3">
                        <v-text-field name="alamat" label="Alamat" prepend-inner-icon="room" filled></v-text-field>
                    </v-col>
                    <v-col cols="12" lg="3" sm="6" md="3">
                        <v-text-field type="tel" name="hp" label="Nomor HP" prepend-inner-icon="phone" filled></v-text-field>
                    </v-col>
                    <v-col cols="12" lg="3" sm="6" md="3">
                        <v-text-field name="email" label="Email" prepend-inner-icon="email" type="email" filled></v-text-field>
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
{{-- akhir bottom sheet --}}
@endsection
