<!DOCTYPE html>
    <head>
        <title>Welcome</title>
    <head>
    <body>
        @include('partials.menu')
        @yield('content')
        @section('sidebar')
        @show
    </body>
</html>