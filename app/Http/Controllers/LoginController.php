<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function enter(Request $request){

        $regras = [
            'email'=>'email',
            'senha'=>'required'
        ];

        $response = [
            'email.email'=>'o campo (Email) está inválido',
            'senha.required'=>'o campo (Senha) é obrigatório',
        ];

        $request->validate($regras, $response);

        $email = $request->get('email');
        $password = $request->get('senha');

        $user = User::where('email', $email)->get()->first();

        if(isset($user->name) && Hash::check($password, $user->password)){
            return "Usuário Logado";
        } else{
            return "Usuário não encontrado";
        }
    }
}
