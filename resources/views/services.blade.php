<x-app-layout>
    <x-slot name="header">
        <h2 class=" font-weight-bold">
            {{ __('Nos services') }}
        </h2>
        <p>Description des services proposés et les modalités.</p>
    </x-slot>

    <x-jet-welcome />
</x-app-layout>
@include('incs.footer')