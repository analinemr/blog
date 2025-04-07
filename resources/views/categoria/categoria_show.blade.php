@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categorias - Show</div> <!-- Fechamento correto da tag div -->

                <!-- Visualização Categoria -->
                <div class="card-body">
                    <p><strong>Id: </strong>{{ $categoria->id }}</p> <!-- Exibe o id da categoria -->
                    <p><strong>Nome: </strong>{{ $categoria->nome }}</p> <!-- Exibe o nome da categoria -->
                    <p><strong>Criação: </strong>{{ $categoria->created_at }}</p> <!-- Exibe o data de criação da categoria -->
                    <p><strong>Atualização: </strong>{{ $categoria->updated_at }}</p> <!-- Exibe o nome da categoria -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

