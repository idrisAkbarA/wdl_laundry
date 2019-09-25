<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>

<body>
    <div id="app">
        <v-app id="inspire">
            <v-navigation-drawer v-model="drawer" app>
                <v-list dense>
                    <v-list-item @click="dasbor()" class="@yield('dasbor')">
                        <v-list-item-action>
                            <v-icon color="blue">dashboard</v-icon>
                        </v-list-item-action>
                        <v-list-item-content>
                            <v-list-item-title>Dasbor</v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>
                    <v-list-item @click="kasir()" class="@yield('kasir')">
                        <v-list-item-action>
                            <v-icon color="blue">attach_money</v-icon>
                        </v-list-item-action>
                        <v-list-item-content>
                            <v-list-item-title>Kasir</v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>
                    <v-list-item @click="pegawai()" class="@yield('pegawai')">
                        <v-list-item-action>
                            <v-icon color="blue">supervised_user_circle</v-icon>
                        </v-list-item-action>
                        <v-list-item-content>
                            <v-list-item-title>Pegawai</v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>
                    <v-list-item @click="pelanggan()" class="@yield('pelanggan')">
                        <v-list-item-action>
                            <v-icon color="blue">person</v-icon>
                        </v-list-item-action>
                        <v-list-item-content>
                            <v-list-item-title>Pelanggan</v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>
                    <v-list-item @click="daftarLoket()" class="@yield('daftarLoket')">
                        <v-list-item-action>
                            <v-icon color="blue">store</v-icon>
                        </v-list-item-action>
                        <v-list-item-content>
                            <v-list-item-title>Daftar Loket</v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>
                    <v-list-item @click="jasa()" class="@yield('jasa')">
                        <v-list-item-action>
                            <v-icon color="blue">local_laundry_service</v-icon>
                        </v-list-item-action>
                        <v-list-item-content>
                            <v-list-item-title>Jasa</v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>
                    <v-list-item @click="laporan()" class="@yield('laporan')">
                        <v-list-item-action>
                            <v-icon color="blue">view_list</v-icon>
                        </v-list-item-action>
                        <v-list-item-content>
                            <v-list-item-title>Laporan</v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>
                    <v-list-item @click="riwayat()" class="@yield('riwayat')">
                        <v-list-item-action>
                            <v-icon color="blue">receipt</v-icon>
                        </v-list-item-action>
                        <v-list-item-content>
                            <v-list-item-title>Riwayat Transaksi</v-list-item-title>
                        </v-list-item-content>

                </v-list>
            </v-navigation-drawer>

            <v-app-bar app color="blue" dark dense>
                <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
                <v-toolbar-title>@yield('title')</v-toolbar-title>
                <v-spacer></v-spacer>
                <v-btn text dark><span>
                        <v-icon>logout</v-icon>
                    </span> Keluar</v-btn>
            </v-app-bar>

            <v-content>
                <v-container fluid fill-height>
                    <v-layout align-left justify-center row wrap>
                        <v-flex text-left>
                            @yield('content')
                        </v-flex>
                    </v-layout>
                </v-container>
            </v-content>
            {{-- <v-footer
            color="blue"
            app
          >
            <span class="white--text">&copy; 2019</span>
          </v-footer> --}}
        </v-app>
    </div>
    <script src="{{asset('js/app.js')}}">


    </script>
</body>

</html>
