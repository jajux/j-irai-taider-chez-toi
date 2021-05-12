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
        @if (Session::has('status'))
            <div class="alert alert-success">
                {{Session::get('status')}}
            </div>
    @endif
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col-md-8">
                <form action="{{url ('/reservations/enregistrer_reservation')}}" method="POST" class=" shadow-lg">
                    @csrf
                    <h1 id="register">Répondez aux questions pour votre demande.</h1>
                    <div class="all-steps" id="all-steps">
                        <span class="step"><i class="fas fa-house-user"></i></span>
                        <span class="step"><i class="fas fa-pen-alt"></i></span>
                        <span class="step"><i class="fas fa-calendar-check"></i></span>
                        <span class="step"><i class="fas fa-people-arrows"></i></span>
                        {{-- <span class="step"><i class="fas fa-comment-dots"></i></span> --}}
                    </div>
                    <div class="tab">
                        <h6>Sélectionner un service ?</h6>
                        <select name="assistance">
                            <option value="service">Choisissez</option>
                            <option value="assistance">assistance numérique</option>
                            <option value="bricolage">bricolage</option>
                        </select>
                    </div>
                    <div class="tab">
                        <h6>Description</h6>
                        <div style="width: 100">
                            <textarea name="resa_description"></textarea>
                        </div>
                    </div>
                    {{-- <div class="tab">
                        <h6>Description</h6>
                        <textarea name="" id="" cols="90" rows="10"></textarea>ù
                    </div> --}}
                    <div class="tab">
                        <h6>A quelle date souhaitez-vous l'intervention?</h6>
                        <small>en fonction du calendrier et des disponibilités des équipes *</small>
                        <p><input type="date" name="date_rdv"></p>
                    </div>
                    <div class="tab">
                        <h6>Préférence du moment de l'intervention</h6>
                        <small>en fonction du calendrier et des disponibilités des équipes *</small>
                        <br>
                        <select class="mt-3" name="service_id">                            
                            <option value="service">Créneau</option>
                            <option name="matin" value="matin">matin</option>
                            <option name="apres_midi" value="après-midi">après-midi</option>
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
                        <img src="{{asset ('images/icones/4.png')}}" width="100" class="mb-4">
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
