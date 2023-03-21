<div class="row justify-content-center">
    <div class="col-8">
        <table class="table table-light table-striped table-hover mr-5">
            <tbody class="text-center">
                @if(!empty($contacts) && count($contacts))
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Data Nascimento</th>
                            <th>CPF</th>
                            <th>Celular</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->birthdate ? \Carbon\Carbon::parse($contact->birthdate)->format('d/m/Y') : null }}
                            </td>
                            <td>{{ $contact->cpf }}</td>
                            <td>{{ $contact->cellphone }}</td>
                            <td>
                                <a class="table-action" title="Editar"
                                    href="{{ route('contact.edit', ['id' => $contact->id]) }}"><i
                                        class="fa-solid fa-user-pen"></i></a>
                                <a data-name="{{$contact->name}}" class="table-action delete" title="Excluir"
                                    href="{{ route('contact.delete', ['id' => $contact->id]) }}"><i
                                        class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td>Nenhum Registro Encontrado!</td>
                    </tr>
                @endunless
            </tbody>
        </table>
    </div>
</div>
<x-script />
<script>
    $(document).ready(() => {
        $('.table-action.delete').on('click', (el) => {
            el.preventDefault();
            if (confirm(`Deseja realmente excluir '${el.currentTarget.getAttribute('data-name')}' ?`)) {
                return window.location.href = el.currentTarget.href
            }
        });
    });
</script>
