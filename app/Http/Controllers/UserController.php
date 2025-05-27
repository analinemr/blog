<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function alterarSenha(){
        return view('user.alterarSenha');
    }

    //Request $request = Imprime os dados contidos na variável 
    public function updateSenha(Request $request){
        //dd($request->all());

        $messages = [
            'password_old.required' => 'Senha antiga é um campo obrigatório',
            'password_new.required' => 'Senha nova é um campo obrigatório',
            'password_new2.required' => 'Repetir senha nova é um campo obrigatórioo',
            ];
    
        // Regras de validação com as mensagens personalizadas
        $validated = $request->validate([
            //'password_old' => 'Senha antiga é um campo obrigatório',
            //'password_new' => 'Senha nova é um campo obrigatório',
            //'password_new2' => 'Repetir senha nova é um campo obrigatórioo',

            'nome' => 'required|min:5|max:10|unique:categorias,nome',
        ], $messages);
    

    }

    public function index(){
        //
    }

    public function create(){
        //
    }

    public function store(Request $request){
        //
    }

    public function show(string $id){
        //
    }

    public function edit(string $id){
        //
    }

    public function update(Request $request, string $id){
        //
    }

    public function destroy(string $id){
        //
    }
}
