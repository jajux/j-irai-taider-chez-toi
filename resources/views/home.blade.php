@extends('base')
@section('title', 'Accueil')

@section('content')
    <div class="card mb-3 mt-5 " style="background-color: #f3969a;">
        <div class="row no-gutters">
            <div class="col-md-5">
                <img class="img-fluid" src="images/home_page.jpg" alt="">
            </div>
            <div class="jumbotron text-center mt-5 col-md-7">
                <h1 class="display-4 ">J'irai t'aider chez toi</h1>
                <h2>Plateforme de réservations</h1>
                    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra
                        attention to
                        featured content or information.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, ullam. Molestiae nesciunt eius quo
                        molestias consequatur, veritatis tempora velit ducimus cupiditate aliquid nihil accusamus similique,
                        modi non? Sequi, nisi aliquam.</p>
                    <hr class="my-4">
                    <p>Cliquez sur le bouton correspondant à votre situation.</p>
                    <a class="btn btn-primary  btn-md" href="#" role="button">Je
                        me
                        connecte</a>
                    <span>ou</span>
                    <a class="btn btn-secondary btn-primary  btn-md" href="#" role="button"> Je
                        m'inscris</a>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-body text-center">
            <h3>Nos services sont éxécutés par du personnel qualifiés</h3>
        </div>
    </div>

    {{-- Présentation des services disponibles à la réservation Livraison à domicile --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="images/46.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Livraisons à domicile</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique
                            repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in
                            pariatur. Incidunt repellendus praesentium quae!</p>
                        <a href="" class="btn btn-outline-info btn-sm">Réserver une livraison</a>
                    </div>
                </div>
            </div>

            {{-- Présentation des services disponibles à la réservation petit bricolage --}}
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="images/47.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Petit Bricolage</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique
                            repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in
                            pariatur. Incidunt repellendus praesentium quae!</p>
                        <a href="" class="btn btn-outline-info btn-sm">Réserver un bricolage</a>
                    </div>
                </div>
            </div>

            {{-- Présentation des services disponibles à la réservation Assistance numérique --}}
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="images/48.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Assistance Numérique</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique
                            repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in
                            pariatur. Incidunt repellendus praesentium quae!</p>
                        <a href="#" class="btn btn-outline-info btn-sm">Réserver une assistance</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
