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
    <div class="container-fluid fixed-top p-4" style="background: #418471">
        <div class="col-12">
            <div class="d-flex justify-content-center">
                @if (Route::has('login'))
                    <div class="">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-light">Tableau de bord</a>
                        @else
                            <a href="{{ route('login') }}" class=" text-light text-uppercase">connexion</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-light text-uppercase">inscription</a>
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
                    <a href="#">
                        <img src="images\logo garros v3.png" class="img-fluid  max-width: 100% height: auto"
                            style="width: 300px" alt="logo du site garros-services.fr">
                    </a>
                    <div class="card shadow-sm">
                        <div class="row">
                            <div class="col-md-12 pr-0">
                                <div class="card-body  p-3 h-100">
                                    <div class="d-flex flex-row bd-highlight pt-2">
                                        <div class="mb-2">
                                            <img width="100" src="images\J-irai_t-aider_chez_toi_logo.png"
                                                class="img-fluid " alt="logo de l'application">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-6 text-center">
                                <div class="card profile-card-5">
                                    <div class="card-img-block bg-secondary">
                                        <img class="card-img-top" src="images\bricolage.png" alt="illustration bricolage">
                                    </div>
                                    <div class="card-body pt-0">
                                        <h5 class="card-title ">Bricolage</h5>
                                        <p class="card-text">Réservez le service bricolage pour toutes les réparations de
                                            votre domicile.</p>
                                        <a href="#" class="btn btn-success">Réserver le service bricolage</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-6 text-center">
                                <div class="card profile-card-5">
                                    <div class="card-img-block bg-secondary">
                                        <img class="card-img-top" src="images\assistance.png"
                                            alt="illustration assistance numérique">
                                    </div>
                                    <div class="card-body pt-0">
                                        <h5 class="card-title">Assistance numérique</h5>
                                        <p class="card-text">Conseils sur l'installation,
                                            l'utilisation de vos appareil numériques?</p>
                                        <a href="#" class="btn btn-success">Assistance numérique</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Footer --}}
        <footer>
                  <!-- Copyright -->
      <div class="text-center p-3 text-light" style="background: #418471;">
        <p> © {{date('Y')}} Copyright: Garros Services</p>
      </div>
      <!-- Copyright -->
        </footer>

    </body>

    </html>
