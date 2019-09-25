@extends('layouts.afterLogin')

@section('kasir')
grey lighten-3
@endsection

@section('title')
    Kasir
@endsection

@section('content')
<style>
    .i-container{
        display: grid;
        grid-template-columns: 1fr 1fr;
        height: 100vh;
    }
</style>
    <div class="i-container">
        <div class="left"></div>
        <div class="right blue">
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
                md6
              >
              <v-form lazy-validation="true" >
                    <h2 class="white--text
              mb-4">Masuk</h1>
              <v-text-field

              {{-- background-color="white" --}}
                color="white"
                label="Nama Pengguna"
                name="login"
                filled="true"
                prepend-inner-icon="account_box"
                type="text"
                dark
                required

              ></v-text-field>
              <v-text-field

              {{-- background-color="white" --}}
                color="white"
                label="Kata sandi"
                name="login"
                filled="true"
                prepend-inner-icon="lock"
                type="password"
                dark
                required
                :append-icon="show1 ? 'visibility_off' : 'visibility'"
                @click:append="show1 = !show1"
                :type="show1 ? 'text' : 'password'"
              ></v-text-field>
              <a href="/kasir">
                <v-btn @click="submit">
                        Masuk</v-btn>
            </a>

              <v-btn text dark>Lupa kata sandi?</v-btn>
              </v-form>

              </v-flex>
            </v-layout>
          </v-container>
        </div>
    </div>
@endsection
