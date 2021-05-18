<x-app-layout>
    <x-slot name="header">
        <h2 class=" font-weight-bold">
            {{ __('Nos services') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="container-fluid py-5 mx-auto row justify-content-center">
            <div class="col-xl-9 col-lg-10">
                <div class="card1 pl-4 pl-md-5 pr-3 shadow-lg">
                    <div class="row">
                        <div class="left-side col-md-6">
                            <p class="pt-5 mb-0">Services de proximités</p>
                            <h3 class="mb-0">
                                <strong>Association de Régie de Quartier</strong>
                            </h3>
                            <small class="">Bricolage, Assistance Numérique.</small>
                        </div>
                        <div class="right-side col-md-6 row justify-content-center">
                            <div class="d-flex">
                                <img class="girl-img fit-image img-fluid" src={{ asset('images\services_offre.png') }}>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-grid align-items-center mb-5 mb-md-7 shadow-lg">
            <div class="col-12 col-md-5 mt-5">
                @foreach ($services as $service)
                    <h1 class="font-weight-bolder mb-4">{{ $service->title_service }}</h1>
                    <h3>Objectif du service {{ $service->title_service }}</h3>
                    <p class="lead">
                        {{ $service->description_service }}.
                    </p>
                    <h3>Comment fonctionne ce service</h3>
                    <p class="lead">
                        {{ $service->role_service }}.
                    </p>
                    <a href="{{ route('reservations') }}" class="btn mt-3 mb-5 btn-primary">Réservation</a>
                @endforeach
            </div>
            <div class="col-12 col-md-6 ml-md-auto">
                <img src="images/mentor.png" class="img-fluid" alt="">
            </div>
        </div>
        <div class="container shadow-lg">
            <h4 class="h1 text-center">Quelques chiffres...</h1>
                <div class="row shadow-lg text-center card-number m-4" style="background: #418471">
                    <div class="col-12 col-md-6 col-lg-4 mb-4 mt-4 ">
                        <div class="card border-light p-4">
                            <div class="card-body">
                                <h2 class="display-2 mb-2">98%</h2><span>Pourcentage de satisfaction de l'année
                                    dernière</span>
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
                    <p class="text-light ml-3 bold">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa,
                        necessitatibus.</p>
                </div>
        </div>
    </div>
</x-app-layout>
