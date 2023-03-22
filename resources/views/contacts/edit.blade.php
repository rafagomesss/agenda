<x-layout title="Editar Contato">

    <x-nav-header />

    <h2 class="text-center mb-5">Editar Contato</h2>

    <x-errors-alert :errors=$errors/>

    <x-form.form-contact :contact=$contact action="{{ route('contact.update') }}">
        <x-form.text_input name="id" type="hidden" value="{{ $contact->id }}" />
    </x-form-contact>
</x-layout>