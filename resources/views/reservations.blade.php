<x-app-layout>
    <x-slot name="header">
        <h2 class=" font-weight-bold">
            {{ __('Réservations') }}
        </h2>
    </x-slot>

    <div class="container-fluid px-1 mx-auto row justify-content-center">
        <div class="col-xl-9 col-lg-10 ">
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
                            <img class="girl-img fit-image img-fluid" src="images\booking.png">
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="card2 pl-4 pl-md-5 pr-3">
                <div class="row px-3 ">
                    <div class="col-md-12">
                        <div class="blocks row d-flex rounded bg-secondary">
                            <div class="d-flex flex-column">
                                <img class="fit-image img-block" src="images\bricoleurs.png">
                            </div>
                            <div class="d-flex flex-column">
                                <img class="fit-image img-block" src="images\services_booking.png">
                            </div>
                            <div class="d-flex flex-column">
                                <img class="fit-image img-block" src="images\assistance_numerique.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</x-app-layout>
@include('incs.footer')
