<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Inclui o model de categoria
use App\Models\Categoria;

class CategoriaController extends Controller
{

    //Página principal de categoria
    public function index()
    {
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        return view ('categoria.categoria_index', compact('categorias'));
    }

    //Criar nova categoria
    public function create()
    {
        return view ('categoria.categoria_create');
    }


    //Retorna dados
    public function store(Request $request)
 {

    // Mensagens personalizadas
    $messages = [
        'nome.required' => 'O nome da categoria é um campo obrigatório!',
        'nome.min' => 'O nome deve ter pelo menos 5 caracteres.',
        'nome.max' => 'O nome não pode ter mais de 10 caracteres.',
        'nome.unique' => 'Já existe uma categoria com esse nome.',
];

    // Regras de validação com as mensagens personalizadas
    $validated = $request->validate([
        'nome' => 'required|min:5|max:10|unique:categorias,nome',
    ], $messages);

    // Criar e salvar a categoria
    $categoria = new Categoria();
    $categoria->nome = $request->nome;
    $categoria->save();

    // Redirecionar ou retornar uma resposta, se necessário
    return redirect()->route('categoria.index')->with('success', 'Categoria cadastrada com sucesso!');


    }

    //Visualizar Categoria
    public function show(string $id)
    {
        $categoria = Categoria::find($id);
        return view('categoria.categoria_show', compact('categoria'));
    }

    //Editar categoria
    public function edit(string $id)
    {
        $categoria=Categoria::find($id);
        return view('categoria.categoria_edit', compact('categoria'));
    }

    //Alterar categoria
    public function update(Request $request, string $id)
    {
        $messages = [
            'nome.required' => 'O nome é um campo obrigatório!',
        ];

        $validated = $request->validate([
            'nome' => 'required|min:5',
        ], $messages);

        $categoria = Categoria::find($id);
        $categoria->nome = $request->nome;
        $categoria->save();

        return redirect()->route('categoria.index')->with('message', 'Categoria atualizada com sucesso!');
    }

    //Deletar categoria
    public function destroy(string $id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();

        return redirect()->route('categoria.index')->with('message', 'Categoria excluída com sucesso!');
    }
}
