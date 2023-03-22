<x-layout title="Autenticação">
    <x-nav-header />

    @unless(empty($message))
        <div class="row justify-content-center">
            <div class="col-6 justify-content-center">
                <x-alert type="success">
                    {{ $message }}
                </x-alert>
            </div>
        </div>
    @endunless ()

    @if ($errors->any())
        <div class="row justify-content-center">
            <div class="col-6 justify-content-center">
                <x-alert type="danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </x-alert>
            </div>
        </div>
    @endif

    <x-form.form-login title="Acessar" />


</x-layout>
