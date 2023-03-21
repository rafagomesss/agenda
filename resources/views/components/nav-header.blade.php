<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5 p-3">
    <div class="container">
        <a class="navbar-brand" href="{{ route('contact.index') }}">Test</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('contact.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact.create') }}">Cadastro</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
