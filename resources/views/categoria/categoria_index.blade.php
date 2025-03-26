@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><Categorias/div>

                <div class="card-body">

                <table>

                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                    </tr>

                    @foreach ($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->nome }}</td>
                    </tr>
                    @endforeach

                </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
