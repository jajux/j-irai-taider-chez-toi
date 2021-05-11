<x-app-layout>
    <x-slot name="header">
        <h2 class=" font-weight-bold">
            {{ __('Formulaire de réservations') }}
        </h2>
    </x-slot>
    <div class="container mt-5">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $errors }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col-md-8">
                <form id="regForm" class=" shadow-lg">
                    <h1 id="register">Répondez</h1>
                    <div class="all-steps" id="all-steps">
                        <span class="step"><i class="fas fa-house-user"></i></span>
                        <span class="step"><i class="fas fa-pen-alt"></i></span>
                        <span class="step"><i class="fas fa-calendar-check"></i></span>
                        <span class="step"><i class="fas fa-people-arrows"></i></span>
                        {{-- <span class="step"><i class="fas fa-comment-dots"></i></span> --}}
                    </div>
                    <div class="tab">
                        <h6>Sélectionner un service ?</h6>
                        <select name="service">
                            <option value="service">Choisissez</option>
                            <option value="">assistance numérique</option>
                            <option value="">bricolage</option>
                        </select>
                    </div>
                    <div class="tab">
                        <h6>Description</h6>
                            <label for="exampleFormControlTextarea5"></label>
                            <textarea  id="exampleFormControlTextarea5" rows="3" cols="15"></textarea>
                    </div>
                    {{-- <div class="tab">
                        <h6>Description</h6>
                        <textarea name="" id="" cols="90" rows="10"></textarea>
                    </div> --}}
                    <div class="tab">
                        <h6>A quelle date souhaitez-vous l'intervention?</h6>
                        <small>en fonction du calendrier et des disponibilités des équipes *</small>
                        <p><input type="date" placeholder="Favourite Shopping site" name="email">
                        </p>
                    </div>
                    <div class="tab">
                        <h6>Préférence du moment de l'intervention</h6>
                        <small>en fonction du calendrier et des disponibilités des équipes *</small>
                        <br>
                        <select class="mt-3" name="service">                            
                            <option value="service">Créneau</option>
                            <option value="matin">matin</option>
                            <option value="après-midi">après-midi</option>
                        </select>
                    </div>
                    {{-- <div class="tab">
                        <h6>What's your Favourite Song?</h6>
                        <p><input placeholder="Favourite Song" name="uname"></p>
                    </div>
                    <div class="tab">
                        <h6>What's your Favourite Mobile brand?</h6>
                        <p><input placeholder="Favourite Mobile Brand" name="uname">
                        </p>
                    </div> --}}
                    <div class="thanks-message text-center" id="text-message">
                        <img src="images\J-irai_t-aider_chez_toi_logo.png" width="100" class="mb-4">
                        <h3>Réservation Validée !!!!</h3>
                        <span>Nos équipes vont rapidement traité votre demande et vous contacter prochainement.</span>
                    </div>
                    <div style="overflow:auto;" id="nextprevious">
                        <div style="float:right;">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">
                                <i class="fa fa-angle-double-left"></i>
                            </button> <button type="button" id="nextBtn" onclick="nextPrev(1)">
                                <i class="fa fa-angle-double-right"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
