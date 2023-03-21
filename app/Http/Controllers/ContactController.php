<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email|nullable',
            'birthdate' => 'date|nullable',
            'cpf' => 'formato_cpf|nullable',
            'cellphone' => 'required|celular_com_ddd'
        ]);

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
        }

        $request->session()->put('message', 'Contato removido com sucesso!');
        return to_route('contact.index');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email|nullable',
            'birthdate' => 'date|nullable',
            'cpf' => 'formato_cpf|nullable',
            'cellphone' => 'required|celular_com_ddd'
        ]);

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
