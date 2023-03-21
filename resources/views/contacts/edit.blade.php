<x-layout title="Editar Contato">

    <x-nav-header />

    <h2 class="text-center mb-5">Editar Contato</h2>

    @if ($errors->any())
        <x-alert type="danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </x-alert>
    @endif

    <x-form-contact-edit :contact=$contact />
</x-layout>
