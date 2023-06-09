<div class="row justify-content-center">
    <div class="col-6 justify-content-center">
        <div class="card">
            <h2 class="bg-dark text-light card-header text-center">{{ $title ?? '' }}</h2>
            <div class="card-body">
                <form action="{{ route('auth.access') }}" method="post">
                    @csrf
                    <x-form.text_input name="email" label="E-mail:" type="email" required="required"
                        placeholder="Digite seu e-mail" />
                    <x-form.text_input name="password" label="Senha:" type="password" required="required"
                        placeholder="Digite sua senha" />
                    <div class="d-grid gap-2">
                        <button class="btn btn-sm btn-primary">Entrar</a>
                    </div>
                </form>
            </div>
            <div class="card-footer text-muted text-center">
                <a href="{{route('auth.register')}}">Não possui uma conta? Registre-se</a>
            </div>
        </div>
    </div>
</div>
