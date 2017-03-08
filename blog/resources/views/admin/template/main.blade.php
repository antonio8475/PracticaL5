<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        
        <title> @yield('title', "Default") | Panel de Administración</title>
        <link rel="stylesheet" href="{{ asset('plugins/Bootstrap/css/bootstrap.css')  }}">
    </head>
    <body>

        @include('admin.template.partials.nav')

        <section>
            @yield('content')
        </section>

        <footer>
            @yield('footer')
        </footer>

        <script src="{{ asset('plugins/jquery/js/jquery-3.1.1.js') }}"></script>
        <script src="{{ asset('plugins/Bootstrap/js/bootstrap.js') }}"></script>

    </body>
</html>
