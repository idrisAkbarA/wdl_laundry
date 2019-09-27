@extends('layouts.afterLogin')

@section('kasir')
grey lighten-3
@endsection

@section('title')
Kasir
@endsection

@section('content')
<v-container fluid fill-height>
    <v-row>
        <v-col cols="12">
            <v-row align="start" justify="center" class="grey lighten-5">
                <v-card class="mr-2">
                    <v-card-title>Pembayaran</v-card-title>
                    <v-card-text>
                        <v-text-field {{-- background-color="white" --}} autofocus label="Nomor Nota" name="login"
                            filled="true" prepend-inner-icon="receipt" type="text" required></v-text-field>
                        {{-- dialog proses pembayaran --}}
                        <v-dialog v-model="dialog" persistent max-width="290">
                            <template v-slot:activator="{ on }">
                                <v-btn color="blue" color="primary" dark v-on="on">proses pembayaran</v-btn>
                            </template>
                            <v-card>
                                <v-card-title class="headline">Pembayaran</v-card-title>
                                <v-card-text>
                                    <v-text-field {{-- background-color="white" --}} label="Nomor Nota"
                                        name="login" filled="true" prepend-inner-icon="receipt" type="text" required>
                                    </v-text-field>
                                </v-card-text>
                                <v-card-actions>
                                    <v-btn color="green darken-1" text @click="dialog = false">Batal</v-btn>
                                    <v-spacer></v-spacer>
                                    <v-btn color="green darken-1" text @click="dialog = false">Bayar</v-btn>
                                </v-card-actions>
                            </v-card>
                        </v-dialog>
                        {{-- end dialog --}}
                    </v-card-text>
                </v-card>

                <v-card class="ml-2" width="600">
                    <v-card-title>Order</v-card-title>
                    <v-card-text>
                        <v-text-field {{-- background-color="white" --}} autofocus label="Scan/input kartu member"
                            name="login" filled="true" prepend-inner-icon="credit_card" type="text" required>
                        </v-text-field>

                        <v-divider></v-divider>

                        <v-container>
                            <v-row dense>
                                <v-col cols="12" md="6">
                                    <v-text-field {{-- background-color="white" --}} label="Nama Pelanggan" name="login"
                                        filled="true" prepend-inner-icon="person" type="text" required></v-text-field>

                                </v-col>
                                <v-col cols="12" md="6">
                                    <v-text-field {{-- background-color="white" --}} label="Nomor Hp" name="login"
                                        filled="true" prepend-inner-icon="phone" type="text" required></v-text-field>

                                </v-col>
                                <v-col cols="12" md="12">
                                    <v-text-field {{-- background-color="white" --}} label="Alamat" name="login"
                                        filled="true" prepend-inner-icon="home" type="text" required></v-text-field>
                                </v-col>
                                <v-container>
                                    <v-layout dense row wrap>
                                        <v-row dense justify="space-around">
                                            <v-col cols="12" md="3">
                                                <v-card color="blue" dark>
                                                    <v-card-text>
                                                        Cuci + gosok
                                                        <v-text-field suffix="Kg" type="number" width="50px">
                                                        </v-text-field>
                                                        </v-card-title>
                                                </v-card>
                                            </v-col>
                                            <v-col cols="12" md="3">
                                                <v-card color="blue" dark>
                                                    <v-card-text>
                                                        Cuci + gosok
                                                        <v-text-field suffix="Kg" type="number" width="50px">
                                                        </v-text-field>
                                                        </v-card-title>
                                                </v-card>
                                            </v-col>
                                            <v-col cols="12" md="3">
                                                <v-card color="blue" dark>
                                                    <v-card-text>
                                                        Cuci + gosok
                                                        <v-text-field suffix="Kg" type="number" width="50px">
                                                        </v-text-field>
                                                        </v-card-title>
                                                </v-card>
                                            </v-col>
                                            <v-col cols="12" md="3">
                                                <v-card color="blue" dark>
                                                    <v-card-text>
                                                        Cuci + gosok
                                                        <v-text-field suffix="Kg" type="number" width="50px">
                                                        </v-text-field>
                                                        </v-card-title>
                                                </v-card>
                                            </v-col>
                                        </v-row>
                                    </v-layout>

                                </v-container>
                            </v-row>
                        </v-container>

                        <v-btn class="mt-2" color="blue" dark>proses order</v-btn>
                    </v-card-text>
                </v-card>
            </v-row>
        </v-col>
    </v-row>
</v-container>

</v-container>
@endsection
