@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Postagem - SHOW</div>


                <div class="card-body">
                    <!-- Visualização de postagem -->

                    <p><strong>Id: </strong>{{ $postagem->id }}</p>
                    <!-- retorna nome da categoria atravél de comando do Model - Relacionamento 1x1 -->
                    <p><strong>Categoria: </strong>{{ $postagem->categoria->nome }}</p>
                    <p><strong>Autor: </strong>{{ $postagem->autor->name }}</p>
                    <p><strong>Título: </strong>{{ $postagem->titulo }}</p>
                    <!-- !! - Serve para redenrizar os códigos no EDITOR RICH -->
                    <p><strong>Descrição: </strong>{!! $postagem->descricao!!}</p>
                    <p><strong>Criação: </strong>{{ $postagem->created_at }}</p>
                    <p><strong>Atualização: </strong>{{ $postagem->updated_at }}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
