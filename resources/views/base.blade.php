<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', config('app.name'))</title>
</head>

<body>
    @include('incs.nav_home')
    @yield('content')
    @include('incs.footer')

    {{-- javascript code --}}
    <script
        src="https://maps.google.com/maps/api/js?key=AIzaSyAAhU2l1X6LuhOrmICxF2M2XSurtoFt4tI&amp;libraries=places&amp;callback=initAutocomplete"
        type="text/javascript">
    </script>


</body>

</html>
