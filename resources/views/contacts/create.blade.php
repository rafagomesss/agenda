<x-layout title="Cadastrar Contato">

    <x-nav-header />

    <h2 class="text-center mb-5">Cadastrar</h2>

    @if ($errors->any())
        <x-alert type="danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </x-alert>
    @endif

    <x-form-contact />
</x-layout>
