<x-app-layout>
    <x-slot name="header">
        <h2 class=" font-weight-bold">
            {{ __('Formulaire de réservations bricolage') }}
        </h2>
    </x-slot>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (Session::has('status'))
        <div class="alert alert-success">
            {{ Session::get('status') }}
            {{ Session::put('status', null) }}
        </div>
    @endif
    <section class="resa-create">
        {{-- formulaire bricolage --}}
        <div class="container-fluid my-5 pt-5 px-5">
            <div class="row justify-content-center text-center  px-4">
                <div class="card  shadow-lg p-3 ">
                    <div class="row">
                        <div class="col-md-12 pr-0">
                            <div class="card-body  p-3 h-100">
                                <div class="d-flex flex-row bd-highlight pt-2 ">
                                    <div class="mb-2 ">
                                        <h1 class="title h3" style="color: #418471">Bricolage</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-6 text-center">
                            <div class="card profile-card-5 bg-secondary">
                                <div class="card-body mt-3 mb-2 ">
                                    <h5 class="card-title font-weight-bold text-capitalize">Remplissez le formulaire
                                    </h5>
                                    <small>Tous les champs sont obligatoires *</small>
                                    <div class="card">
                                        <form action="{{ url('/enregistrer_bricolage') }}" method="POST"
                                            class="form-horizontal mr-3 ml-3">
                                            {{ csrf_field() }}
                                            <input type="hidden" id="user_id" value="{{ Auth::user()->id }}"
                                                name="user_id">
                                            <input type="hidden" id="bricolage" name="bricolage">
                                            <div class="form-group  mt-3">
                                                <label><i class="fas fa-pen-square mr-1"
                                                        style="color: #418471"></i>Description</label>
                                                <textarea name="bricolage_description" cols="30" rows="8"
                                                    class="form-control"
                                                    placeholder="décrivez votre besoin bricolage"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label><i class="fas fa-calendar-alt mr-1"
                                                        style="color: #418471"></i>date</label>
                                                <input type="date" name="date_bricolage"
                                                    placeholder="Date de rendez-vous souhaité" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label><i class="fas fa-clock mr-1" style="color: #418471"></i>Plage
                                                    horaires</label>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input class="custom-control-input" type="radio" value="Matin_brico"
                                                        id="matin_brico" name="horaire_bricolage">
                                                    <label class="custom-control-label" for="matin_brico">Matin</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input class="custom-control-input" type="radio"
                                                        value="Apres_midi_brico" id="apres_brico"
                                                        name="horaire_bricolage">
                                                    <label class="custom-control-label"
                                                        for="apres_brico">Après-midi</label>
                                                </div>
                                                <input type="submit" value="Valider" class="btn text-light"
                                                    style="background: #418471">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-6 text-center">
                        <div class="card profile-card-5" style="background: #418471">
                            <div class="card-body mt-3 mb-2 ">
                                <img src="{{ asset('images\bricolage.png') }}" class="img-fluid">
                            </div>
                        </div>
                        <div class=" btn btn-warning">
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <div class="btn btn-info">
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
