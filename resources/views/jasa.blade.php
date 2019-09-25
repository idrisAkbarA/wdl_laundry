@extends('layouts.afterLogin')

@section('jasa')
grey lighten-3
@endsection

@section('title')
    Jasa
@endsection

@section('content')
<v-container class="mt-5" style="width:80%">
    <v-simple-table>
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
            <tr>
                <td>Cuci</td>
                <td>Kg</td>
                <td>3000</td>
                <td class="text-center"><span><v-btn text><v-icon>edit</v-icon></v-btn></span><v-btn text><v-icon>delete</v-icon></v-btn></td>

            </tr>
            <tr>
                <td>Cuci Gosok</td>
                <td>Helai</td>
                <td>1000</td>
                <td class="text-center"><span><v-btn text><v-icon>edit</v-icon></v-btn></span><v-btn text><v-icon>delete</v-icon></v-btn></td>
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
            Tambahkan Jasa
        </v-btn>
        <v-bottom-sheet v-model="sheet">
            <v-sheet class="text-left">
            <div class="ml-5" style="height:3em">
                <p class="blue--text font-weight-bold body-1 pt-4" >Tambahkan Jasa</p>
            </div>
            <div class="mx-5">
                <v-row rows="12" sm="6" md="3">
                    <v-col cols="12" lg="4" sm="6" md="3">
                        <v-text-field
                            label="Jasa"
                            prepend-inner-icon="local_laundry_service"
                            filled
                        ></v-text-field>
                        </v-col>
                    <v-col cols="12" lg="4" sm="6" md="3">
                        <v-text-field
                            label="Satuan"
                            prepend-inner-icon="layers"
                            filled
                        ></v-text-field>
                        </v-col>
                    <v-col cols="12" lg="4" sm="6" md="3">
                        <v-text-field
                            label="Harga Satuan"
                            prepend-inner-icon="attach_money"
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
