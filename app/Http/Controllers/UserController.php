<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
            'password_new2.required' => 'Repetir senha nova é um campo obrigatório',
            ];
    
        // Regras de validação com as mensagens personalizadas
        $validated = $request->validate([
            'password_old' => 'required|min:5',
            'password_new' => 'required|min:5|same:password_new2',
            'password_new2' => 'required|min:5|same:password_new',
        ], $messages);

        //dd(auth()->user()->password);

       if (Hash::check($request->password_old, auth()->user()->password)) {
        //dd('É igual!');
        $user=auth()->user();
        $user->password = Hash::make($request->password_new);
        $user->save();
        return redirect()->back()->with('message1', 'A senha foi alterada com sucesso!');
       }else{
        return redirect()->back()->with('message2', 'A senha inserida não confere!');
       }

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
