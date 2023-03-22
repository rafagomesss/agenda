<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    private function messsages(): array
    {
        return [
            'name.required' => 'O campo nome é obrigatório!',
            'email' => 'O formato do e-mail está inválido!',
            'birthdate' => 'A data informada é inválida!',
            'cpf' => 'O CPF informado é inválido!',
            'cellphone' => [
                'required' => 'O campo número de celular é obrigatório!',
                'celular_com_ddd' => 'O número de celular informado é inválido',
            ],
        ];
    }

    public function index(Request $request)
    {
        $data['contacts'] = Contact::all();
        $data['message'] = $request->session()->get('message');
        $request->session()->forget('message');
        return view('index', $data);
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'email|nullable',
                'birthdate' => 'date|nullable',
                'cpf' => 'formato_cpf|nullable',
                'cellphone' => 'required|celular_com_ddd'
            ],
            $this->messsages()
        );

        $data = $request->only(['name', 'email', 'birthdate', 'cpf', 'cellphone']);

        Contact::create($data);
        $request->session()->put('message', 'Contato adicionado com sucesso!');

        return to_route('contact.index');
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $data['contact'] = Contact::find($id);
        return view('contacts.edit', $data);
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $contact = Contact::find($id);
        if (!empty($contact)) {
            $contact->delete();
            $request->session()->put('message', 'Contato removido com sucesso!');
            return to_route('contact.index');
        }
        return to_route('contact.index')->withErrors(['Contato não encontrado!']);
    }

    public function update(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'email|nullable',
                'birthdate' => 'date|nullable',
                'cpf' => 'formato_cpf|nullable',
                'cellphone' => 'required|celular_com_ddd'
            ],
            $this->messsages()
        );

        $data = $request->only(['name', 'email', 'birthdate', 'cpf', 'cellphone']);

        $contact = Contact::find($request->id);

        if (empty($contact)) {
            return to_route('contact.index');
        }

        $contact->update($data);
        $contact->save();
        return to_route('contact.index');
    }
}
