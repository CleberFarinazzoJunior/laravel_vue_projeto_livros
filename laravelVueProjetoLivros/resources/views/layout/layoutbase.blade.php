<!DOCTYPE html>
<html>
    <head>
        <!-- TODO: Fazer imports básicos -->
    </head>
    <body>
        <div id="app" class="container">
        
            <header class="row">
                    @include('partials.header')
            </header>

            <main>

                @yield('content')

            </main>


            <footer class="row">
                @include('partials.footer')
            </footer>


        </div>
    </body>
</html>