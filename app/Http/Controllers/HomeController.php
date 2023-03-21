<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $data['contacts'] = Contact::all();
        $data['message'] = $request->session()->get('message');
        $request->session()->forget('message');
        return view('index', $data);
    }
}
