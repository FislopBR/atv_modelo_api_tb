<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;


Route::get('user/{nome}', function ($nome) {
    $response = Http::get("https://dummyjson.com/user
    {$nome}");

    if ($response->successful()) {
        $dados = $response->json();
        return response()->json([
            'status' => 'Conectado com sucesso',
            'resultado' => [
                'identificador' => $dados['id'],
                'nome_do_user' => ucfirst($dados['firstName']),
                'foto' => $dados['image'],
            ]
        ], 200);
    }

    return response()->json(['error' => 'User não 
    encontrado'], 404);
});

Route::post('user/novo', function (Request $request) {
    $dados = $request->validate([
        'nome' => 'required|string|min:3',
        'age' => 'required|string',
        'tell' => 'required|integer'
    ]);

    return response()->json([
        'mensagem' => 'User criado com sucesso',
        'id_gerado' => rand(1000, 9999),
        'dados_recebidos' => $dados
    ], 201);
});


// Route::get('/', function () {
//     return view('welcome');
// });
