<x-app-layout>
    <x-slot name="header">
        <h2 class=" font-weight-bold">
            {{ __('Réservations') }}
        </h2>
    </x-slot>

    <div class="container-fluid px-1 mx-auto row justify-content-center">
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
                            <img class="girl-img fit-image img-fluid" src={{asset("images\info_booking.png")}}>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4" style="background-color: #417471">
            <h4 class="h2 text-center text-uppercase text-light">Ajouter le ou les services souhaités</h4>
    </div>
    <!--Section: Block Content-->
    <section>        
        <div class="container mt-5 shadow-lg">
            {{-- Reservation card --}}
            <div class="row mb-4">
                <div class="col-md-5 col-lg-3 col-xl-3">
                    <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                        <img class="img-fluid w-100 m-4" src={{asset("images/booking_num.png")}}>
                    </div>
                </div>
                <div class="col-md-7 col-lg-9 col-xl-9">
                    <div class="row ">
                        <div class="col-lg-7 col-xl-7 ">
                            <h5 class="mt-4">Assistance Numérique</h5>
                            <p class="mb-2 text-muted text-uppercase small">Services de proximités</p>
                            <hr>
                            <p class="mb-lg-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam,
                                sapiente illo. Sit error voluptas repellat rerum quidem, soluta enim perferendis
                                voluptates laboriosam. Distinctio, officia quis dolore quos sapiente tempore alias.
                            </p>
                        </div>
                        <div class="col-lg-5 col-xl-5">
                                <a class="mt-5 btn btn-primary" href="{{URL::to('/formulaire_reservation_assistance') }}">
                                    <i class="fas fa-shopping-cart pr-2 mr-2"></i> Réserver un service assistance numérique
                                </a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row mb-4">
                <div class="col-md-5 col-lg-3 col-xl-3">
                    <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                        <img class="img-fluid w-100 m-4" src={{asset("images/worker.png")}}>
                    </div>
                </div>
                <div class="col-md-7 col-lg-9 col-xl-9">
                    <div class="row">
                        <div class="col-lg-7 col-xl-7">

                            <h5  class="mt-4">Bricolage</h5>
                            <p class="mb-2 text-muted text-uppercase small">Services de proximités</p>
                            <hr>
                            <p class="mb-lg-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam,
                                sapiente illo. Sit error voluptas repellat rerum quidem, soluta enim perferendis
                                voluptates laboriosam. Distinctio, officia quis dolore quos sapiente tempore alias.
                            </p>
                        </div>
                        <div class="col-lg-5 col-xl-5">
                            <a class="mt-5 btn btn-primary" href="{{URL::to('/formulaire_reservation_bricolage') }}">
                                <i class="fas fa-shopping-cart pr-2 mr-2"></i> Réserver un service bricolage
                            </a>
                    </div>
                </div>
                </div>
            </div>            
        </div>
    </section>
    <!--Section: Block Content-->
</x-app-layout>
