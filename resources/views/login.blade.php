<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
<style>
    .i-container{
        display: grid;
        grid-template-columns: 1fr 1fr;
        height: 100vh;
    }
</style>
</head>
<body>
        <v-app id="app">
            <div class="i-container">
                <div class="left"></div>
                <div class="right indigo">
                    <v-container
                    fluid
                    fill-height
                  >
                    <v-layout
                      align-center
                      justify-center
                    >
                      <v-flex
                        xs12
                        sm12
                        md4
                      >
                      <h1 class="white--text">Masuk</h1>
                      <v-text-field

                      {{-- background-color="white" --}}
                        color="white"
                        label="Nama Pengguna"
                        name="login"
                        filled="true"
                        prepend-inner-icon="account_box"
                        type="text"
                        dark

                      ></v-text-field>
                      <v-text-field

                      {{-- background-color="white" --}}
                        color="white"
                        label="Kata sandi"
                        name="login"
                        filled="true"
                        prepend-inner-icon="lock"
                        type="text"
                        dark
                      ></v-text-field>
                      <a href="/kasir">
                        <v-btn @click="kasir">
                                Masuk</v-btn>
                    </a>

                      <v-btn text dark>Lupa kata sandi?</v-btn>
                      </v-flex>
                    </v-layout>
                  </v-container>
                </div>
            </div>
        </v-app>


    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
