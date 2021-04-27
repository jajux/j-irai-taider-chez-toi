<x-app-layout>
    <x-slot name="header">
        <h2 class=" font-weight-bold">
            {{ __('Accueil') }}
        </h2>
        <p>Toutes les informations et services proposés par l'association de régie de quartier</p>
    </x-slot>
    <x-jet-welcome />
</x-app-layout>
@include('incs.footer')
