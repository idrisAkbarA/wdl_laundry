@extends('layouts.afterLogin')

@section('laporan')
grey lighten-3
@endsection

@section('title')
Laporan
@endsection

@section('content')
<v-container fluid style="margin-top:-2em">
    <v-row>
        <v-col cols="12">
            <v-container class="pa-5">
               <v-card dark color="blue">
                    <v-container>
                        <v-col col="12"><span><v-icon>filter_list</v-icon></span> Filter </v-col>
                        <v-row>
                            <v-col col="12" lg="2">

                                    <v-menu top :close-on-click="closeOnClick">
                                            <template v-slot:activator="{ on }">
                                              <v-btn
                                                text
                                                v-on="on"
                                              >
                                                Bulan
                                              </v-btn>
                                            </template>

                                            <v-list>
                                              <v-list-item
                                              >
                                                <v-list-item-title>
                                                    january
                                                </v-list-item-title>
                                              </v-list-item>
                                            </v-list>
                                          </v-menu>
                            <v-btn text>Minggu ini</v-btn>
                            <v-btn text>Hari ini</v-btn>
                            </v-col>
                            <v-col cols="12" lg="3" sm="6" md="4">
                                    Cari berdasarkan tanggal
                                    <v-dialog
                                      ref="dialog"
                                      v-model="modal"
                                      :return-value.sync="date"
                                      persistent
                                      width="290px"
                                    >
                                      <template v-slot:activator="{ on }">
                                        <v-text-field
                                          v-model="date"
                                          label="cari"
                                          prepend-inner-icon="search"
                                          readonly
                                          filled
                                          v-on="on"
                                        ></v-text-field>
                                      </template>
                                      <v-date-picker v-model="date" scrollable>
                                        <div class="flex-grow-1"></div>
                                        <v-btn text color="primary" @click="modal = false">Cancel</v-btn>
                                        <v-btn text color="primary" @click="$refs.dialog.save(date)">OK</v-btn>
                                      </v-date-picker>
                                    </v-dialog>
                                  </v-col>
                                  <v-col cols="12" lg="3" sm="6" md="4">
                                        Cari berdasarkan rentang tanggal
                                        <v-dialog
                                          ref="dialog"
                                          v-model="modal"
                                          :return-value.sync="date"
                                          persistent
                                          width="290px"
                                        >
                                          <template v-slot:activator="{ on }">
                                            <v-text-field
                                              v-model="date"
                                              label="Dari"
                                              prepend-inner-icon="search"
                                              readonly
                                              filled
                                              v-on="on"
                                            ></v-text-field>
                                          </template>
                                          <v-date-picker v-model="date" scrollable>
                                            <div class="flex-grow-1"></div>
                                            <v-btn text color="primary" @click="modal = false">Cancel</v-btn>
                                            <v-btn text color="primary" @click="$refs.dialog.save(date)">OK</v-btn>
                                          </v-date-picker>
                                        </v-dialog>
                                      </v-col>
                                  <v-col cols="12" lg="3" sm="6" md="4">
                                      <span style="visibility:hidden">s</span>
                                        <v-dialog
                                          ref="dialog"
                                          v-model="modal"
                                          :return-value.sync="date"
                                          persistent
                                          width="290px"
                                        >
                                          <template v-slot:activator="{ on }">
                                            <v-text-field
                                              v-model="date"
                                              label="Sampai"
                                              prepend-inner-icon="search"
                                              readonly
                                              filled
                                              v-on="on"
                                            ></v-text-field>
                                          </template>
                                          <v-date-picker v-model="date" scrollable>
                                            <div class="flex-grow-1"></div>
                                            <v-btn text color="primary" @click="modal = false">Cancel</v-btn>
                                            <v-btn text color="primary" @click="$refs.dialog.save(date)">OK</v-btn>
                                          </v-date-picker>
                                        </v-dialog>
                                      </v-col>
                        </v-row>
                    </v-container>
               </v-card>
            </v-container>
    </v-row>

    </v-col>
    </v-row>
</v-container>
@endsection
