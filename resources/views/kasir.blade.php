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
                            filled prepend-inner-icon="receipt" type="text" required></v-text-field>
                        {{-- dialog proses pembayaran --}}
                        <v-dialog v-model="dialog" persistent max-width="290">
                            <template v-slot:activator="{ on }">
                                <v-btn color="blue" dark v-on="on">proses pembayaran</v-btn>
                            </template>
                            <v-card>
                                <v-sheet color="blue" dark>
                                    <v-card-title class="headline">Detail Pembayaran </v-card-title>
                                </v-sheet>
                                <v-card-text>
                                    <v-btn color="blue" disabled>Cuci</v-btn>
                                </v-card-text>
                                <v-card-actions>
                                    <v-btn color="error" @click="dialog = false">Batal</v-btn>
                                    <v-spacer></v-spacer>
                                    <v-btn color="primary" @click="dialog = false">Bayar</v-btn>
                                </v-card-actions>
                            </v-card>
                        </v-dialog>

                    </v-card-text>
                </v-card>

                <order></order>
            </v-row>
        </v-col>
    </v-row>
</v-container>

</v-container>
@endsection
