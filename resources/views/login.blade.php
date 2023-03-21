<x-layout title="Autenticação">
    <x-nav-header />

    <h2 class="text-center mb-5">Acessar</h2>

    @isset($message)
        <x-alert type="success">
            {{ $message }}
        </x-alert>
    @endisset


</x-layout>