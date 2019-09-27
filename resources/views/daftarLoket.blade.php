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
                                    <td>asdasdas</td>
                                    <td class="text-center"><span>
                                            <v-btn icon>
                                                <v-icon>edit</v-icon>
                                            </v-btn>
                                        </span>

                                        @php
                                            $trigger = "<v-btn icon @click=";
                                            $isi = $trigger."\"deleteLoket('".$loket->nama."')\" >";
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

            </v-expansion-panel-content>
        </v-expansion-panel>
    @endforeach
</v-expansion-panels>
            </v-container>
    @else
    <P>Belum ada Loket</P>
    @endif

</v-container>

<v-dialog
      v-model="dialog"
      max-width="290"
    >
      <v-card>
        <v-card-title class="headline">Use Google's location service?</v-card-title>

        <v-card-text>
          Let Google help apps determine location. This means sending anonymous location data to Google, even when no apps are running.
        </v-card-text>

        <v-card-actions>
          <div class="flex-grow-1"></div>

          <v-btn
            color="green darken-1"
            text
            @click="dialog = false"
          >
            Disagree
          </v-btn>

          <v-btn
            color="green darken-1"
            text
            @click="dialog = false"
          >
            Agree
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
{{-- bottom sheet --}}
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
{{-- akhir bottom sheet --}}
@endsection
