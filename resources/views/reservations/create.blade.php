<x-app-layout>
    <x-slot name="header">
        <h2 class=" font-weight-bold">
            {{ __('Formulaire de réservations') }}
        </h2>
    </x-slot>
    <div class="container shadow-lg p-5">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="col ">
            <h4 class="text-center">Suivez les indications, tous les champs sont obligatoires <span
                    style="color: red">*</span></h4>
            <br>
            {{-- checkbox --}}
            <div class="card p-4">
                <div class="card-header">
                    <h6>Choissisez un ou plusieurs services:</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <form action="{{ url('/reservations/enregistrer_reservation') }}" method="post">
                            @csrf
                            <input type="hidden" id="user_id" value="{{ Auth::user()->id }}" name="user_id">
                            <div class="form-group form-check form-check-inline">
                                <label class="form-group">Assistance numérique</label>
                                <input class="form-control" type="text" name="assistance">
                            </div>
                    </div>
                </div>
            </div>
            {{-- /checkbox --}}
            {{-- description --}}
            <div class="card ">
                <div class="card-header">
                    <div class="form-group">
                        <label>Description de votre demande</label>
                        <div class="card-body">
                            <textarea class="form-control" name="description"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            {{-- /description --}}
            {{-- date reservation --}}
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="form-group">
                                <label>Choissisez une date d'éxécution de la demande:</label>
                            </div>
                            <div class="card-body">
                                <input type="date" name="date_rdv">
                            </div>
                        </div>
                        {{-- / date reservation --}}
                        {{-- Plage horaires --}}
                        <div class="form-group m-4">
                            <label>Choissisez la période d'intervention</label>
                            <select class="form-control" name="horaire">
                                <option>Horaires</option>
                                <option>Matin</option>
                                <option>Après-midi</option>
                            </select>
                        </div>
                    </div>
                </div>
                {{-- /Plage horaires --}}
                {{-- Confirmation des coordonnées --}}
                {{-- Confirmation des coordonnées --}}
            </div>
        </div>
        {{-- Validation reservation --}}
        <input type="submit" value="Valider" class="btn btn-primary">
        {{-- /Validation reservation --}}
        {{-- Annulation reservation --}}
        {{-- Annulation reservation --}}
        <input type="submit" value="Annuler" class="btn btn-danger">
        </form>
</x-app-layout>
