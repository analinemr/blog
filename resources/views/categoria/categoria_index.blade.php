@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categoria</div>

                <!-- Script de confirmação -->
                <script>
                    function ConfirmDelete() {
                        return confirm('Tem certeza que deseja excluir este registro?');
                    }
                </script>

                <div class="card-body">

                    <!-- Botão Criar -->
                    <a class="btn btn-success mb-3" href="{{ url('categoria/create') }}">Criar nova categoria</a>

                    <!-- Mensagens de sessão -->
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <!-- Tabela -->
                    <table class='table'>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Ações</th>
                        </tr>

                        @foreach ($categorias as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->nome }}</td>
                            <td>
                                <!-- Botões organizados em linha com espaçamento -->
                                <div style="display: flex; flex-wrap: wrap; gap: 5px;">
                                    <a class="btn btn-info btn-sm" href="{{ url('categoria/'.$value->id) }}">Visualizar</a>

                                    <a class="btn btn-warning btn-sm" href="{{ url('categoria/'.$value->id.'/edit') }}">Editar</a>

                                    <form action="{{ url('categoria/' .$value->id)}}" method="post" onsubmit="return ConfirmDelete()">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
