<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot>

    <x-slot name="form">

        <x-jet-action-message on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div class="form-group" x-data="{photoName: null, photoPreview: null}">
                <!-- Profile Photo File Input -->
                <input type="file" hidden
                       wire:model="photo"
                       x-ref="photo"
                       x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" class="rounded-circle" height="80px" width="80px">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview">
                    <img x-bind:src="photoPreview" class="rounded-circle" width="80px" height="80px">
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
				</x-jet-secondary-button>
				
				@if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <div class="w-md-75">
            
            <!-- Modification du Prénom -->
            <div class="form-group">
                <x-jet-label for="firstname" value="{{ __('Prénom') }}" />
                <x-jet-input id="firstname" type="text" class="{{ $errors->has('firstname') ? 'is-invalid' : '' }}" wire:model.defer="state.firstname" autocomplete="firstname" />
                <x-jet-input-error for="firstname" />
            </div>

            <!-- Modification du Nom -->
            <div class="form-group">
                <x-jet-label for="lastname" value="{{ __('Name') }}" />
                <x-jet-input id="lastname" type="text" class="{{ $errors->has('lastname') ? 'is-invalid' : '' }}" wire:model.defer="state.lastname" autocomplete="lastname" />
                <x-jet-input-error for="lastname" />
            </div>

            <!-- Modification de l'adresse -->
            <div class="form-group">
                <x-jet-label for="address" value="{{ __('adresse') }}" />
                <x-jet-input id="address" type="text" class="{{ $errors->has('address') ? 'is-invalid' : '' }}" wire:model.defer="state.address" autocomplete="address" />
                <x-jet-input-error for="address" />
            </div>

            <!-- Modification numéro de téléphone -->
            <div class="form-group">
                <x-jet-label for="phone_number" value="{{ __('Téléphone') }}" />
                <x-jet-input id="address" type="text" class="{{ $errors->has('phone_number') ? 'is-invalid' : '' }}" wire:model.defer="state.phone_number" autocomplete="phone_number" />
                <x-jet-input-error for="phone_number" />
            </div>

            <!--Modification Email -->
            <div class="form-group">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" type="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" wire:model.defer="state.email" />
                <x-jet-input-error for="email" />
            </div>
        </div>
    </x-slot>

    <x-slot name="actions">
		<div class="d-flex align-items-baseline">
			<x-jet-button>
				{{ __('Save') }}
			</x-jet-button>
		</div>
    </x-slot>
</x-jet-form-section>