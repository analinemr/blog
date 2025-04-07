@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Postagem</div>

                <!-- Página principal de Postagem -->
                <script>
                    function ConfirmDelete(){
                        return confirm('Tem certeza que deseja excluir este registro?');
                    }
                </script>

                <div class="card-body">

                    <div>
                        <a class="btn btn-success" href="{{url('postagem/create')}}">CRIAR</a>
                    </div>

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

                <table class='table'>

                    <tr>
                        <th>Categoria</th>
                        <th>Título</th>
                        <th>Descrição</th>
                    </tr>

                    @foreach ($postagens as $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <!-- relacionamento com o ID da categoria para retornar nome -->
                        <td>{{ $value->categoria->nome}}</td>
                        <td>{{ $value->titulo}}</td>
                        <td>
                            <a class="btn btn-info" href="{{ url('postagem/'.$value->id) }}">Visualizar</a>
                            <a class="btn btn-warning" href="{{ url('postagem/'.$value->id.'/edit') }}">Editar</a>

                    <form action="{{ url('postagem/' .$value->id)}}" method="post" onsubmit='return ConfirmDelete()'>
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>

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
