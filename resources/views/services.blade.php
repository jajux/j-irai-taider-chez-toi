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
            <p class="card-text text-center mb-5"><small class="text-muted">Ces services vous sont proposés et éxécutés par l'association <strong><a href="https:://garros-service.fr" class="text-dark" target="_blank">Garros Services</a></strong></small></p>
        </div>



        <div class="card mb-3 h-100">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="images\bricoleurs.png" class="img-fluid" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">bricolage</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3 h-100">
            <div class="row no-gutters">
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">assistance numérique</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="col-md-4 img-fluid">
                    <img src="images\assistance_numerique.png" class="img-fluid" alt="...">
                </div>
            </div>
        </div>


    </div>
</x-app-layout>
@include('incs.footer')
