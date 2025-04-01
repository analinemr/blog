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
        return view ('postagem.categoria_index', compact('postagens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('postagem.categoria_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
 {

    // Mensagens personalizadas
    $messages = [
        'titulo.required' => 'O título da postagem é um campo obrigatório!',
        'titulo.max' => 'O título não pode ter mais de 20 caracteres.',
        'titulo.unique' => 'Já existe uma postagem com esse título.',
];

    // Regras de validação com as mensagens personalizadas
    $validated = $request->validate([
        'titulo' => 'required|max:20|unique:postagens,titulo',
    ], $messages);

    // Criar e salvar a postagem
    $postagem = new Postagem();
    $postagem->titulo = $request->titulo;
    $postagem->save();

    // Redirecionar ou retornar uma resposta, se necessário
    return redirect()->route('postagem.index')->with('success', 'Postagem cadastrada com sucesso!');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $postagem = Postagem::find($id);
        return view('postagem.categoria_show', compact('postagem'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $postagem=Postagem::find($id);
        return view('postagem.categoria_edit', compact('postagem'));
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
