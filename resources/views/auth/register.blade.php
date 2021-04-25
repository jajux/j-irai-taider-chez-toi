<x-guest-layout >
    <x-jet-authentication-card >
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-3" />

        <div class="card-body  shadow-lg">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                {{-- Champ prénom --}}
                <div class="form-group text-dark">
                    <x-jet-label value="{{ __('Prénom') }}" />

                    <x-jet-input class="{{ $errors->has('firstname') ? 'is-invalid' : '' }}" type="text"
                        name="firstname" :value="old('firstname')" required autofocus autocomplete="firstname" />
                    <x-jet-input-error for="firstname"></x-jet-input-error>
                </div>

                {{-- Champ nom --}}
                <div class="form-group text-dark">
                    <x-jet-label value="{{ __('Nom') }}" />

                    <x-jet-input class="{{ $errors->has('lastname') ? 'is-invalid' : '' }}" type="text"
                        name="lastname" :value="old('lastname')" required autofocus autocomplete="lastname" />
                    <x-jet-input-error for="lastname"></x-jet-input-error>
                </div>

                {{-- Champ adresse --}}
                <div class="form-group text-dark">
                    <x-jet-label for="autocomplete" value="{{ __('Adresse') }}" />

                    <x-jet-input class="{{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address"
                        :value="old('address')" required autofocus autocomplete="address" id="autocomplete" />
                    <x-jet-input-error for="address"></x-jet-input-error>
                </div>

                {{-- Champ numéro de téléphone --}}
                <div class="form-group text-dark">
                    <x-jet-label value="{{ __('Téléphone') }}" />

                    <x-jet-input class="{{ $errors->has('phone_number') ? 'is-invalid' : '' }}" type="tel"
                        name="phone_number" :value="old('phone_number')" required autofocus
                        autocomplete="phone_number" />
                    <x-jet-input-error for="phone_number"></x-jet-input-error>
                </div>

                                {{-- Champ email --}}
                <div class="form-group text-dark">
                    <x-jet-label value="{{ __('Email') }}" />

                    <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email"
                        :value="old('email')" required />
                    <x-jet-input-error for="email"></x-jet-input-error>
                </div>

                                {{-- Champ mot de passe --}}
                <div class="form-group text-dark">
                    <x-jet-label value="{{ __('Password') }}" />

                    <x-jet-input class="{{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                        name="password" required autocomplete="new-password" />
                    <x-jet-input-error for="password"></x-jet-input-error>
                </div>

                <div class="form-group text-dark">
                    <x-jet-label value="{{ __('Confirm Password') }}" />

                    <x-jet-input class="form-control" type="password" name="password_confirmation" required
                        autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="form-group text-dark">
                        <div class="custom-control custom-checkbox">
                            <x-jet-checkbox id="terms" name="terms" />
                            <label class="custom-control-label" for="terms">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '">' . __('Terms of Service') . '</a>',
    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '">' . __('Privacy Policy') . '</a>',
]) !!}
                            </label>
                        </div>
                    </div>
                @endif

                <div class="mb-0">
                    <div class="d-flex justify-content-end align-items-baseline">
                        <a class="text-muted mr-3 text-decoration-none" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-jet-button>
                            {{ __('Register') }}
                        </x-jet-button>
                    </div>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script type="text/javascript"
    src="https://maps.google.com/maps/api/js?key=AIzaSyAAhU2l1X6LuhOrmICxF2M2XSurtoFt4tI&amp;libraries=places&callback=initAutocomplete">
</script>
<script>
    $(document).ready(function() {
        $("#latitudeArea").addClass("d-none");
        $("#longtitudeArea").addClass("d-none");
    });

</script>
<script>
    google.maps.event.addDomListener(window, 'load', initialize);

    function initialize() {
        var input = document.getElementById('autocomplete');
        var autocomplete = new google.maps.places.Autocomplete(input);

        autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace();
            $('#latitude').val(place.geometry['location'].lat());
            $('#longitude').val(place.geometry['location'].lng());

            $("#latitudeArea").removeClass("d-none");
            $("#longtitudeArea").removeClass("d-none");
        });
    }

</script>
