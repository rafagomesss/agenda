<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{
    Auth,
    Hash
};
use App\Models\User;

class AuthController extends Controller
{
    private function messsages(): array
    {
        return [
            'name.required' => 'O campo nome é obrigatório',
            'email.required' => 'O valor de e-mail é inválido',
            'password' => [
                'min' => 'A senha deve conter no mínimo 6 caracteres',
                'required' => 'O campo senha é obrigatório',
                'confirmed' => 'As senhas não são iguais',
            ]
        ];
    }

    public function index(Request $request)
    {
        if (Auth::check()) {
            return to_route('contact.index');
        }
        $data['message'] = $request->session()->get('message') ?? null;
        $request->session()->forget('message');
        return view('auth.login', $data);
    }

    public function login(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($validator)) {
            return to_route('contact.index');
        }

        return to_route('login')->withErrors([
            'email' => 'E-mail e/ou senha inválido(s).',
        ]);
    }

    public function register()
    {
        if (Auth::check()) {
            return to_route('contact.index');
        }
        return view('auth.register');
    }

    public function create(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6|confirmed',
            ],
            $this->messsages()
        );

        $data = $request->only(['name', 'email', 'password']);
        $data['password'] = Hash::make($data['password']);

        User::create($data);
        $request->session()->put('message', 'Usuário criado com sucesso!');

        return to_route('contact.index');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return to_route('login');
    }
}
