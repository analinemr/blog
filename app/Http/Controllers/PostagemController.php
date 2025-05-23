<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Inclui o model de categoria para
use App\Models\Categoria;
//Inclui o model de postagem
use App\Models\Postagem;

class PostagemController extends Controller
{
    //Página principal de postagem
    public function index()
    {
        $postagens = Postagem::orderBy('titulo', 'ASC')->get();
        return view ('postagem.postagem_index', compact('postagens'));
    }

    //Criar nova postagem
    public function create()
    {
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        return view ('postagem.postagem_create', compact('categorias'));
    }

    //Puxa dados para os SHOW
    public function store(Request $request)
    {
    // Mensagens personalizadas
        $messages = [
            'titulo.required' => 'O nome é um campo obrigatório!',
        ];

    // Regras de validação com as mensagens personalizadas
        $validated = $request->validate([
            'categoria_id' => 'required',
            'titulo' => 'required|min:5',
            'descricao' => 'required',
        ], $messages);

        //Criar e Salvar Postagem
        //dd($request->all());
        $postagem = new Postagem();
        $postagem->categoria_id = $request->categoria_id;
        $postagem->user_id = auth()->user()->id;
        $postagem->titulo = $request->titulo;
        $postagem->descricao = $request->descricao;
        $postagem->save();

     // Redirecionar ou retornar uma resposta, se necessário
        return redirect()->route('postagem.index')->with('message', 'Postagem cadastrada com sucesso!');
    }

    //viasualizar postagens
    public function show(string $id)
    {
        $postagem = Postagem::find($id);
        //dd($postagem);
        return view('postagem.postagem_show', compact('postagem'));
    }

    //Edita postagens
    public function edit(string $id)
    {
        $postagem=Postagem::find($id);
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        return view('postagem.postagem_edit', compact('postagem', 'categorias'));
    }

    //Altera de postagens na edição
    public function update(Request $request, string $id)
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
        $postagem = Postagem::find($id);
        $postagem->categoria_id = $request->categoria_id;
        $postagem->titulo = $request->titulo;
        $postagem->descricao = $request->descricao;
        $postagem->save();

        return redirect()->route('postagem.index')->with('message', 'Postagem atualizada com sucesso!');
    }

    //Deletar postagens
    public function destroy(string $id)
    {
        $postagem = Postagem::find($id);
        $postagem->delete();

        return redirect()->route('postagem.index')->with('message', 'Postagem excluída com sucesso!');
    }
}
