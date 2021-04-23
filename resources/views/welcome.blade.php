<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>JITACT</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css">

    <style>
        body {
            font-family: 'Nunito';
            background: #f7fafc;
        }
    </style>
</head>
<body>
    <div class="container-fluid fixed-top p-4">
        <div class="col-12">
            <div class="d-flex justify-content-center">
                @if (Route::has('login'))
                    <div class="">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-muted">Tableau de bord</a>
                        @else
                            <a href="{{ route('login') }}" class="text-muted">Connexion</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-muted">Inscription</a>
                            @endif
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="container-fluid my-5 pt-5 px-5">
        <div class="row justify-content-center text-center px-4">
            <div class="col-md-12 col-lg-9 justify-content-center">
                <img src="images\Garros.svg" class="my-4 " style="width: 200px" alt="logo de l'application">  
                <div class="card shadow-sm">
                    <div class="row">
                        <div class="col-md-12 pr-0">
                            <div class="card-body  p-3 h-100">
                                <div class="d-flex flex-row bd-highlight pt-2">
                                    <div>
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="text-muted" width="32"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                    </div>
                                    <div class="pl-3">
                                        <div class="mb-2">
                                            <a href="https://laravel.com/docs" class="h5 font-weight-bolder text-dark">J'irai t'aider chez toi</a>
                                        </div>
                                        <p class="text-muted small">
                                            Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-6 pl-0">
                            <div class="card-body border-bottom p-3 h-100">
                                <div class="d-flex flex-row bd-highlight pt-2">
                                    <div>
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="text-muted" width="32"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    </div>
                                    <div class="pl-3">
                                        <div class="mb-2">
                                            <a href="https://laracasts.com" class="h5 font-weight-bolder text-dark">Numérique</a>
                                        </div>
                                        <p class="text-muted small">
                                            Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-md-6 mt-6 text-center">
                            <div class="card profile-card-5">
                                <div class="card-img-block bg-secondary">
                                    <img class="card-img-top" src="images\bricolage.png" alt="illustration bricolage">
                                </div>
                                <div class="card-body pt-0">
                                <h5 class="card-title ">Bricolage</h5>
                                <p class="card-text">Réservez le service bricolage pour toutes les réparations.</p>
                                <a href="#" class="btn btn-success">Réserver le service bricolage</a>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-6 text-center">
                            <div class="card profile-card-5">
                                <div class="card-img-block bg-secondary">
                                    <img class="card-img-top" src="images\assistance.png" alt="illustration assistance numérique">
                                </div>
                                <div class="card-body pt-0">
                                <h5 class="card-title">Assistance numérique</h5>
                                <p class="card-text">Besoins d'aides ou de conseils sur l'installation, l'utilisation de vos appareil numériques?</p>
                                <a href="#" class="btn btn-success">Assistance numérique</a>
                              </div>
                            </div>
                        </div>
 

                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
