<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>j'irai t'aider chez toi</title>
        <meta name="description" content="plateforme de réservations de services de proximités de l'association de régie de quartier Garros Services">
        <meta name="author" content="Jawad EL HATTAB">
        <meta name="copyright" content="Tous droits réservés">
        <meta name="rating" content="general">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
            <!-- Style resources\views\reservations\reservations.blade.php -->
    <link rel="stylesheet" href="{{ asset('css/reservations.css') }}">

        <!-- Style footer -->
         <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
        <!-- Tailwind styles to bootstrap -->
        <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css">
        


        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="bg-light font-sans antialiased">
        {{ $slot }}
    </body>
</html>