<div class="row justify-content-center">
    <div class="col-6">
        <x-button-return/>
        <form method="post" action="{{ route('contact.update') }}">
            @csrf
            <input name="id" type="hidden" value="{{ $contact->id ?? null }}">
            <x-form.text_input
                name="name"
                label="Nome"
                required="required"
                placeholder="Digite seu nome completo"
                value="{{ $contact->name ?? null }}"
            />
            <x-form.text_input
                name="email"
                label="E-mail"
                placeholder="Digite seu e-mail"
                value="{{ $contact->email ?? null }}"
            />
            <x-form.text_input
                name="birthdate"
                label="Data de Nascimento"
                placeholder=""
                value="{{ $contact->birthdate ?? null }}"
                type="date"
            />
            <x-form.text_input
                name="cpf"
                label="CPF"
                placeholder="Digite seu CPF"
                value="{{ $contact->cpf ?? null }}"
                class="cpf"
            />
            <x-form.text_input
                name="cellphone"
                label="Celular"
                required="required"
                placeholder="(99) 9 9999-9999"
                value="{{ $contact->cellphone ?? null }}"
                class="cellphone"
            />
            <div class="d-grid gap-2">
                <button class="btn btn-sm btn-primary">Salvar</button>
            </div>
        </form>
    </div>
</div>
<x-script/>
<script>
    let elCellphoneInput = document.querySelector('.cellphone');
    let im = new Inputmask('(99) 99999-9999');
    im.mask(elCellphoneInput);

    let elCpf = document.querySelector('.cpf');
    im = new Inputmask('999.999.999-99');
    im.mask(elCpf);
</script>
