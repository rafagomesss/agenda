<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5 p-3 text-white">
    <div class="container">
        <a class="navbar-brand" href="{{ route('contact.index') }}">Test</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @if(\Illuminate\Support\Facades\Auth::check())
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->routeIs('contact.index')) ? 'active' : '' }}" aria-current="page" href="{{ route('contact.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->routeIs('contact.create')) ? 'active' : '' }}" href="{{ route('contact.create') }}">Cadastro</a>
                    </li>
                </ul>
            </div>
            <span class="small me-5 ms-auto p-2">{{ auth()->user()->name }}</span>
            <a class="navbar-brand align-self-center me-2" href="{{ route('auth.logout') }}"><i class="fa-solid fa-arrow-right-from-bracket"></i> Sair</a>
        @endif
    </div>
</nav>
