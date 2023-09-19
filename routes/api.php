<?php

use App\Http\Controllers\API\UsuarioAPI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Model\UsuarioModel;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('v1')->group(function(){
    Route::get('lista', function(){
        return UsuarioModel::listar(10);
    });

    Route::post('cadastrar', [UsuarioAPI::class, 'salvar']);
});

