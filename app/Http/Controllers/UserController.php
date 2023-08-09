<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){

        $status = [
            200=>"Usuário Cadastrado",
            300=>"Dados não aceitos",
        ];
        
        $user = User::create([
            'name'=> $request->name,
            'email'=> $request->mail,
            'password'=> "123",
            'created_at'=> date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")	
        ]);

        if($user->id){
            $result = 200;
        }

        return $status[$result];

    }

    public function logIn(){
        
    }

    public function update(){
        
    }

    public function delete(){
        
    }
}
