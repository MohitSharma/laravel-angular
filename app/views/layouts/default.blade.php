<!DOCTYPE html>
    <head>
        <title>Welcome</title>
    <head>
    <body>
        @include('partials.menu')
        @yield('content')
        @section('sidebar')
            <h2> Side Bar </h2>
        @show
    </body>
</html>