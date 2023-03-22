<x-layout title="Autenticação">
    <x-nav-header />

    @if ($errors->any())
        <x-alert type="danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </x-alert>
    @endif

    <x-form.form-register title="Cadastre-se"/>


</x-layout>