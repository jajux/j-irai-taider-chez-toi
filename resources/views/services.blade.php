<x-app-layout>
    <x-slot name="header">
        <h2 class=" font-weight-bold">
            {{ __('Nos services') }}
        </h2>
        <p>Description des services proposés et les modalités.</p>
    </x-slot>
    <div class="container shadow-lg">
        <div>
            <h1 class="text-center pt-5 text-capitalize">j'irai t'aider chez toi</h1>
                 <p class="card-text text-center mb-5">
                    <small class="text-muted">Ces services vous sont proposés et éxécutés par l'association.
                        <strong>
                            <a href="https::/garros-service.fr" class="text-dark" target="_blank">Garros Services</a>
                        </strong>
                    </small>
                </p>
        </div>
    </div>    
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12 col-md-6 order-2 order-lg-1">
                <img src="images\bricoleurs.png" class="img-fluid" alt="...">
            </div>
            <div class="col-12 col-md-6 order-2 order-lg-2">
                <h1 class="col-12 col-md-5 order-1 order-lg-2">Bricolage</h1>
                <p class="lead">Vous désirez effectuer des réparations ou des améliorations dans votre logement.</p>
                <p>L'association de régie de quartier Garros Services vous offre la possibilité de réserver ce services depuis cette plateforme.</p>
            </div>
            <div class="">
                <a href="{{route('reservations')}}" class="btn btn-success">Cliquez pour réserver un service bricolage</a>
            </div>
        </div>
    </div>
    <div class="pattern-bottom"></div>




</x-app-layout>
@include('incs.footer')
