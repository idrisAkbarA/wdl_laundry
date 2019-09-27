@extends('layouts.afterLogin')

@section('jasa')
grey lighten-3
@endsection

@section('title')
Jasa
@endsection

@section('content')
<v-container class="mt-5" style="width:80%">
    <v-tooltip left>
        <template v-slot:activator="{ on }">
            <v-btn style="margin-bottom:4em;margin-left:5em;" absolute fixed dark fab bottom right color="blue" dark
                v-on="on" @click="sheet = !sheet">
                <v-icon>mdi-plus</v-icon>
            </v-btn>
        </template>
        <span>Tambahkan Jasa</span>
    </v-tooltip>

    @if(count($jasas)>0)
    <v-simple-table style="background-color:transparent !important">
        <template v-slot:default>
            <thead>
                <tr>
                    <th class="font-weight-bold body-1">Jasa</th>
                    <th class="font-weight-bold body-1">Satuan</th>
                    <th class="font-weight-bold body-1">Harga Satuan</th>
                    <th class="font-weight-bold body-1 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jasas as $jasa)
                <tr>
                    <td>{{$jasa->nama_jasa}}</td>
                    <td>{{$jasa->satuan}}</td>
                    <td>{{$jasa->harga}}</td>
                    <td class="text-center"><span>
                            <v-tooltip top>
                                <template v-slot:activator="{ on }">
                                    <v-btn icon v-on="on">
                                        <v-icon>edit</v-icon>
                                    </v-btn>
                                </template>
                                <span>Edit</span>
                            </v-tooltip>
                        </span>
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
                @endforeach
            </tbody>
        </template>
    </v-simple-table>


    @else
    <p>Tidak Ada Jasa</p>
    @endif
    </tbody>
    </template>
    </v-simple-table>
</v-container>

<div class="text-center">

    <v-bottom-sheet v-model="sheet">
        <v-sheet class="text-left" style="margin-top: -2em">
            <v-form action="/jasa" method="post">
                @csrf
                <div class="mt-5" style="height:3em">
                    <p class="blue--text font-weight-bold body-1 pa-4">Tambahkan Jasa</p>
                </div>
                <div class="mx-5">
                    <v-row rows="12" sm="6" md="3">
                        <v-col cols="12" lg="4" sm="6" md="3">
                            <v-text-field label="Jasa" name="nama_jasa" prepend-inner-icon="local_laundry_service" filled>
                            </v-text-field>
                        </v-col>
                        <v-col cols="12" lg="4" sm="6" md="3">
                            <v-text-field label="Satuan" name="satuan" prepend-inner-icon="layers" filled>
                            </v-text-field>
                        </v-col>
                        <v-col cols="12" lg="4" sm="6" md="3">
                            <v-text-field label="Harga Satuan" name="harga" prepend-inner-icon="attach_money" filled>
                            </v-text-field>
                        </v-col>
                    </v-row>
                </div>
                <div class="pl-4">
                    <v-btn class="mb-6" type="submit" color="blue" dark @click="sheet = !sheet">Tambahkan</v-btn>
                </div>
            </v-form>
        </v-sheet>
    </v-bottom-sheet>
</div>
@endsection
