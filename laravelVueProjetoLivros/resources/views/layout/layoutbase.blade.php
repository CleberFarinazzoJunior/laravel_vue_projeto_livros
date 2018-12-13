<!DOCTYPE html>
<html>
    <head>

        <title>LaravelVueLivros</title>

        <!-- codificação dos caracteres -->
        <meta charset="utf-8">

        <!-- Estilos CSS padrão do Laravel, que contém também classes do bootstrap -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Estilos CSS criados em outro arquivo -->
        <link href="/css/estilo.css" rel="stylesheet">

        <!-- Responsividade -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">


    </head>
    <body>
        <div class="container-bg">
            <div id="app" class="container">
            
                <header class="py-5">
                        @include('partials.header')
                </header>

                <!-- nessa classe "py", o "p" representa padding e o "y" representa eixo y -->
                <!-- O numero representa o tamanho do padding -->
                <main class="py-5">
                    
                    @yield('content')

                </main>


                <footer class="row fixed-bottom justify-content-center bg-dark">
                    @include('partials.footer')
                </footer>


            </div>
        <div class="container-bg">
        <!-- imports de scripts -->
        <script src="{{ asset('js/app.js') }}"></script>


    </body>
    
</html>