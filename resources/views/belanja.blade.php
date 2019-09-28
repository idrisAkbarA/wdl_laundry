@extends('layouts.afterLogin')

@section('dasbor')
grey lighten-3
@endsection

@section('title')
Belanja
@endsection

@section('content')
<v-container>
    <v-row>
        <v-col cols="12" sm="6">
            <v-card>
                <v-card-title>Barang Belanja</v-card-title>
                <v-row rows="12" sm="6" md="3" style="margin-left:1em">
                    <v-col cols="12" lg="4" sm="6" md="4">
                        <v-text-field label="Nama" name="nama" prepend-inner-icon="person" filled></v-text-field>
                    </v-col>
                </v-row>
                <v-card-actions>
                    </v-card-actions>
            </v-card>
        </v-col>
        <v-col cols="12" sm="6">
            <v-card>
                <v-card-title>Total</v-card-title>
                <v-card-text>I'm card text</v-card-text>
                <v-card-actions>
                    <v-btn text>Click</v-btn>
                </v-card-actions>
            </v-card>
        </v-col>
    </v-row>
</v-container>
@endsection
