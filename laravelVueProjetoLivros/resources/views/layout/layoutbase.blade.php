<!DOCTYPE html>
<html>
    <head>

        <title>LaravelVueLivros</title>

        <!-- codificação dos caracteres -->
        <meta charset="utf-8">

        <!-- Estilos CSS padrão do Laravel, que contém também classes do bootstrap -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Responsividade -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">


    </head>
    <body>
        <div id="app" class="container">
        
            <header class="row">
                    @include('partials.header')
            </header>

            <main class="py-4">

                @yield('content')

            </main>


            <footer class="row">
                @include('partials.footer')
            </footer>


        </div>

        <!-- imports de scripts -->
        <script src="{{ asset('js/app.js') }}"></script>


    </body>
    
</html>