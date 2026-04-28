<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function index()
    {
        $id = rand(1, 151);
        $response = Http::get("https://dummyjson.com/user/{$id}");
        
        if ($response->successful()) {
            $user = $response->json();

            return view('user', compact('user'));
        }
        return "erro ao buscar dados API";
    }
}
