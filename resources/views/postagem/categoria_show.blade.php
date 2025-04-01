@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Postagens - Show</div> <!-- Fechamento correto da tag div -->

                <div class="card-body">
                    <p><strong>Id: </strong>{{ $postagem->id }}</p> <!-- Exibe o id da postagem -->
                    <p><strong>Título: </strong>{{ $postagem->titulo }}</p> <!-- Exibe o título da postagem -->
                    <p><strong>Descrição: </strong>{{ $postagem->descricao }}</p> <!-- Exibe o texto da postagem -->
                    <p><strong>Criação: </strong>{{ $postagem->created_at }}</p> <!-- Exibe o data de criação da postagem -->
                    <p><strong>Atualização: </strong>{{ $postagem->updated_at }}</p> <!-- Exibe o nome da postagem -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

