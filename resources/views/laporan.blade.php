@extends('layouts.afterLogin')

@section('laporan')
grey lighten-3
@endsection

@section('title')
    Laporan
@endsection

@section('content')
    <v-container fluid>
        <v-row>
            <v-col cols="12">
                <v-row align="start" justify="center">
                        <v-toolbar dense class="ma-4">
                                <v-toolbar-title>Title</v-toolbar-title>

                                <div class="flex-grow-1"></div>

                                <v-btn icon>
                                  <v-icon>mdi-magnify</v-icon>
                                </v-btn>

                                <v-btn icon>
                                  <v-icon>mdi-heart</v-icon>
                                </v-btn>

                                <v-btn icon>
                                  <v-icon>mdi-dots-vertical</v-icon>
                                </v-btn>
                              </v-toolbar>
                </v-row>

            </v-col>
        </v-row>
    </v-container>
@endsection
