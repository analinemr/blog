<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Postagem;

class PostagemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postagens = Postagem::orderBy('titulo', 'ASC')->get();
        return view ('postagem.postagem_index', compact('postagens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('postagem.postagem_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $messages = [
            'titulo.required' => 'O nome é um campo obrigatório!',
        ];

        $validated = $request->validate([
            'categoria_id' => 'required',
            'titulo' => 'required|min:5',
            'descricao' => 'required',
        ], $messages);

        //dd($request->all());
        $postagem = new Postagem();
        $postagem->categoria_id = $request->categoria_id;
        $postagem->titulo = $request->titulo;
        $postagem->descricao = $request->descricao;
        $postagem->save();

        return redirect()->route('postagem.index')->with('message', 'Postagem cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $postagem = Postagem::find($id);
        //dd($postagem);
        return view('postagem.postagem_show', compact('postagem'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $postagem=Postagem::find($id);
        return view('postagem.postagem_edit', compact('postagem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'titulo.required' => 'O título é um campo obrigatório!',
        ];

        $validated = $request->validate([
            'titulo' => 'required|max:20',
        ], $messages);

        $postagem = Postagem::find($id);
        $postagem->postagem = $request->postagem;
        $postagem->save();

        return redirect()->route('postagem.index')->with('message', 'Postagem atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $postagem = Postagem::find($id);
        $postagem->delete();

        return redirect()->route('postagem.index')->with('message', 'Postagem excluída com sucesso!');
    }
}
