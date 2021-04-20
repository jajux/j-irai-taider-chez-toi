<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            {{-- Champ prénom --}}
            <div>
                <x-jet-label for="firstname" value="{{ __('Prénom') }}" />
                <x-jet-input id="firstname" class="block mt-1 w-full" type="text" name="firstname"
                    :value="old('firstname')" required autofocus autocomplete="Prénom" />
            </div>

            {{-- Champ nom --}}

            <div class="mt-4">
                <x-jet-label for="lastname" value="{{ __('Nom') }}" />
                <x-jet-input id="lastname" class="block mt-1 w-full" type="text" name="lastname"
                    :value="old('lastname')" required autofocus autocomplete="Nom" />
            </div>

            {{-- Champ addresse --}}

            <div class="mt-4">
                <x-jet-label for="address" value="{{ __('Adresse') }}" />
                <x-jet-input id="autocomplete" type="tel" size="10" minlenght="10" maxlenght="10"
                    class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus
                    autocomplete="Adress" />
            </div>

            {{-- Champ téléphone --}}

            <div class="mt-4">
                <x-jet-label for="phone_number" value="{{ __('Téléphone') }}" />
                <x-jet-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number"
                    :value="old('phone_number')" required autofocus autocomplete="phone_number" />
            </div>

            {{-- Champ email --}}

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            {{-- Champ mot de passe --}}

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            {{-- Champ cofirmation mot de passe --}}

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>

            {{-- Champ termes --}}

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Terms of Service') . '</a>',
    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Privacy Policy') . '</a>',
]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            {{-- Redirection si déja inscrit vers login --}}

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                {{-- Boutton validation de l'inscription --}}
                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
