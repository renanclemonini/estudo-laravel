<?php

namespace App\Models\Model;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioModel extends Model
{
    protected $connection = 'sqlite';
    protected $table = 'usuario';

    public static function listar(int $limite)
    {
        $sql = self::select([
            "id",
            "nome",
            "email",
            "senha",
            "data_cadastro"
        ])
        ->limit($limite)->get();

        return $sql;
    }

    public static function cadastrar(Request $request)
    {
        return self::insert([
            "nome" => $request->input('nome'),
            "email" => $request->input('email'),
            "senha" => Hash::make($request->input('senha')),
            "data_cadastro" => new Carbon
        ]); 
    }
}
