<div class="row justify-content-center">
    <div class="col-8">
        <div class="alert alert-{{ $type ?? 'success' }} text-center" role="alert">
            {{ $slot }}
        </div>
    </div>
</div>
