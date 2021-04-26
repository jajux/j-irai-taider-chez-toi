@extends('base')
@section('title')
    Accueil
@endsection
@section('content')
    <div class="container-fluid fixed-top p-4">
        <div class="col-12">
            <div class="d-flex justify-content-center">
                @if (Route::has('login'))
                    <div>
                        <a href="{{ route('login') }}" class=" text-uppercase" style="color: #418471">connexion</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-dark text-uppercase">inscription</a>
                        @endif
                @endif
            </div>
            @endif
        </div>
    </div>
    </div>
    <!-- Jumbotron Header -->
    <header class="jumbotron my-4 container">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-7 ">
                <img src="images\logo garros v3.png" class="img-fluid  max-width: 100% height: auto " style="width: 300px"
                    alt="logo du site garros-services.fr">
                <p class="lead pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in
                    quo sunt
                    possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat
                    numquam
                    repellat.</p>
                <a href="{{ route('register') }}" class="btn btn-dark btn-lg bg-info ">inscription</a>
                <a href="{{ route('login') }}" class="btn btn-dark btn-lg bg-success">connexion</a>

            </div>
            <div class="col-md-5 col-lg-5 my-4 ">
                <img src="images\hero.png" class="img-fluid  max-width: 100% height: auto" alt="">
            </div>
        </div>
    </header>
@endsection
