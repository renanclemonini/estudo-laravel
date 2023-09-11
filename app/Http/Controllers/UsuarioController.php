<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function cadastrar()
    {
        return view('usuario.cadastro');
    }

    public function salvar(Request $request)
    {
        $request->validate([
            "nome" => "required",
            "email" => "required|email",
            "senha" => "required"
        ]);

        dd($request->all());
    }
}
