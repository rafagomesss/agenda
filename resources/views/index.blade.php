<x-layout title="Home">
    <x-nav-header />

    <h2 class="text-center mb-5">Contatos</h2>

    <div class="row mb-2">
        <div class="col-2"></div>
        <div class="col-8 d-flex justify-content-end">
            <a title="Adicionar Contato" class="btn btn-success px-5 py-1 white" href="{{ route('contact.create') }}">
                <i class="fa-inverse fa-solid fa-user-plus"></i>
            </a>
        </div>
        <div class="col-2"></div>
    </div>

    @isset($message)
        <x-alert type="success">
            {{ $message }}
        </x-alert>
    @endisset

    <x-table-contacts :contacts=$contacts />
</x-layout>
