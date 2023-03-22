@if ($errors->any())
    <x-alert type="danger">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </x-alert>
@endif
