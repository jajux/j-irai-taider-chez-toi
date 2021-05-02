<x-app-layout>
    <x-slot name="header">
        <h2 class=" font-weight-bold">
            {{ __('Nos services') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="row justify-content-center mb-5 mb-md-7">
            <div class="col-12 col-md-8 text-center">
                <h2 class="title-service mb-4">j'irai t'aider chez toi</h2>
                <p class="lead text-muted">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis expedita ipsum omnis iusto aspernatur quos consequatur fugiat ut maiores.
                </p>
            </div>
        </div>
        <div class="row row-grid align-items-center mb-5 mb-md-7 shadow-lg">
            <div class="col-12 col-md-5">
                <h2 class="font-weight-bolder mb-4">Assistance Numérique</h2>
                   <p class="lead">
                       Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam amet molestiae recusandae tempora, nemo debitis possimus odio quia placeat, minus ratione a error excepturi deserunt!
                   </p>
                <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                <a href="{{route('reservations')}}" class="btn mt-3 btn-hover">Réservation</a>
            </div>
            <div class="col-12 col-md-6 ml-md-auto">
                <img src="images/mentor.png" class="img-fluid" alt="">
            </div>
        </div>
        <div class="row row-grid align-items-center mb-5 mb-md-7 shadow-lg">
            <div class="col-12 col-md-5 order-md-2">
                <h2 class="font-weight-bolder mb-4">Bricolage</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam amet molestiae recusandae tempora, nemo debitis possimus odio quia placeat, minus ratione a error excepturi deserunt!
                    </p>
                        <a href="{{route('reservations')}}" class="btn mt-3 btn-hover">Réservation</a>
            </div>
            <div class="col-12 col-md-6 mr-lg-auto">
                <img src="images/bricolage_peinture.png" class="img-fluid" alt="">
            </div>
        </div>
        <div class="row shadow-lg text-center card-number">
            <div class="col-12 col-md-6 col-lg-4 mb-4 mt-4">
                <div class="card border-light p-4">
                    <div class="card-body">
                        <h2 class="display-2 mb-2">98%</h2><span>Pourcentage de satisfaction de l'année dernière</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-4 mt-4">
                <div class="card border-light p-4">
                    <div class="card-body">
                        <h2 class="display-2 mb-2">24/7</h2>
                        <span>Vous pouvez faire vos demandes — 7j/7 et 24h/24
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-4 mt-4">
                <div class="card border-light p-4">
                    <div class="card-body">
                        <h2 class="display-2 mb-2">+100</h2>
                        <span>Interventions de nos équipes auprès des adhérents</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@include('incs.footer')
