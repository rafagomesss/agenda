<x-layout title="Cadastrar Contato">

    <x-nav-header />

    <h2 class="text-center mb-5">Cadastrar</h2>

    <x-errors-alert :errors=$errors/>

    <x-form.form-contact action="{{ route('contact.store') }}"/>
</x-layout>
