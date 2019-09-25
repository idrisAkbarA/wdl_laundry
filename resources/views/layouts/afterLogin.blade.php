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
          <v-navigation-drawer
            v-model="drawer"
            app
          >
            <v-list dense>
              <v-list-item @click="">
                <v-list-item-action>
                  <v-icon>home</v-icon>
                </v-list-item-action>
                <v-list-item-content>
                  <v-list-item-title>Home</v-list-item-title>
                </v-list-item-content>
              </v-list-item>
              <v-list-item @click="">
                <v-list-item-action>
                  <v-icon>contact_mail</v-icon>
                </v-list-item-action>
                <v-list-item-content>
                  <v-list-item-title>Contact</v-list-item-title>
                </v-list-item-content>
              </v-list-item>
            </v-list>
          </v-navigation-drawer>

          <v-app-bar
            app
            color="indigo"
            dark
          >
            <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
            <v-toolbar-title>Application</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-icon>lock</v-icon>
          </v-app-bar>

          <v-content>
            <v-container
              fluid
              fill-height
            >
              <v-layout
                align-center
                justify-center
              >
                <v-flex text-xs-center>
                    @yield('content')
                </v-flex>
              </v-layout>
            </v-container>
          </v-content>
          <v-footer
            color="indigo"
            app
          >
            <span class="white--text">&copy; 2019</span>
          </v-footer>
        </v-app>
      </div>
    <script src="{{asset('js/app.js')}}">


    </script>
</body>
</html>
