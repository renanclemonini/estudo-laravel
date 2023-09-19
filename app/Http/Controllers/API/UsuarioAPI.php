<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Model\UsuarioModel;

class UsuarioAPI extends Controller
{
    public function salvar(Request $request)
    {
        if (UsuarioModel::cadastrar($request))
        {
            return response("ok", 201);
        } else
        {
            return response("erro", 409);
        }
    }
}
