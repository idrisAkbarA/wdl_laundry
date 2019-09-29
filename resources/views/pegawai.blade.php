@extends('layouts.afterLogin')

@section('pegawai')
grey lighten-3
@endsection
@section('title')
Pegawai
@endsection

@section('content')
<v-container class="mt-5">
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
        <span>Tambahkan Pegawai</span>
    </v-tooltip>
    {{-- end tooltip --}}
    @if (count($pegawais)>0)

    <v-simple-table style="background-color:transparent !important">
        <template v-slot:default>
            <thead>
                <tr>
                    <th class="font-weight-bold body-1">No.</th>
                    <th class="font-weight-bold body-1">Nama</th>
                    <th class="font-weight-bold body-1">Nomor HP</th>
                    <th class="font-weight-bold body-1">Tanggal Masuk</th>
                    <th class="font-weight-bold body-1">Nama Loket</th>
                    <th class="font-weight-bold body-1 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i=0;
                @endphp
                @foreach ($pegawais as $pegawai)
                @php
                $i=$i+1;
                @endphp
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$pegawai->nama}}</td>
                    <td>{{$pegawai->hp}}</td>
                    <td>{{$pegawai->created_at}}</td>
                    <td>{{$pegawai->loket}}</td>
                    <td class="text-center"><span>
                            @php
                            $trigger = "<v-btn icon @click=";
                            $isi = $trigger." \"callEditSheetPegawai('".$pegawai->nama."')\" >";
                                @endphp
                                {!! $isi !!}
                                <v-tooltip top>
                                    <template v-slot:activator="{ on }">
                                        <v-btn icon v-on="on">
                                            <v-icon>edit</v-icon>
                                        </v-btn>
                                    </template>
                                    <span>Edit</span>
                                </v-tooltip>
                        </span>
                        @php
                        $trigger = "<v-btn icon @click=";
                                    $isi = $trigger." \"initDeletePegawai('".$pegawai->nama."')\" >";
                            @endphp

                            {!! $isi !!}
                            <v-tooltip top>
                                <template v-slot:activator="{ on }">
                                    <v-btn icon v-on="on">
                                        <v-icon>delete</v-icon>
                                    </v-btn>
                                </template>
                                <span>Delete</span>
                            </v-tooltip>
                    </td>
                </tr>
            </tbody>
            {{-- end table --}}
            {{-- popup dialog --}}
            <v-dialog v-model="dialog" max-width="400">
                <v-card>
                    <v-sheet color="error" dark>
                        <v-card-title class="headline">Hapus Pegawai @{{buang}} </v-card-title>
                    </v-sheet>


                    <v-card-text>
                        apakah anda yakin akan menghapus pegawai @{{buang}}?
                    </v-card-text>

                    <v-card-actions>


                        <v-btn color="green darken-1" text @click="dialog = false">
                            Batal
                        </v-btn>
                        <v-spacer></v-spacer>
                        <v-btn height="50" width="120" color="error" @click="deletePegawai">
                            <v-icon>delete</v-icon>Hapus
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </v-dialog>
            @endforeach
        </template>
    </v-simple-table>
</v-container>
@else
<P>Belum ada Pegawai</P>
@endif

</v-container>
{{-- end popup dialog --}}
{{-- bottom sheet --}}
<div class="text-center">

    <v-bottom-sheet v-model="sheet">
        <v-sheet style="margin-top: -2em">
            <v-form action="/pegawai" method="post">
                @csrf
                <div class="mt-5" style="height:3em">
                    <p class="blue--text font-weight-bold body-1 pa-4">Tambahkan Pegawai</p>
                </div>
                <div class="mx-5">
                    <v-row rows="12" sm="6" md="3">
                        <v-col cols="12" lg="4" sm="6" md="4">
                            <v-text-field label="Nama" name="nama" prepend-inner-icon="person" filled></v-text-field>
                        </v-col>
                        <v-col cols="12" lg="4" sm="6" md="4">
                            <v-text-field label="Nomor HP" name="hp" prepend-inner-icon="phone" filled></v-text-field>
                        </v-col>

                        <v-col cols="12" lg="4" sm="6" md="4">
                            <v-text-field label="Nama Loket" name="loket" prepend-inner-icon="store" filled>
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
{{-- sheet 2 disini--}}
<ikarin-sheet-pegawai ref="child3"></ikarin-sheet-pegawai>
{{-- akhir bottom sheet 2--}}
@endsection
