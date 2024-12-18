<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('includes/head')

<body>
    @include('includes/headerperfil')
   
    <main>
        @yield('content')
    </main>
    @include('includes/footer')
</body>

</html>
