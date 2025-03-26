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
                    @foreach ($categorias as $value)
                    <tr>
                        <td>0001</td>
                        <td>Ana Maria Teste</td>
                    </tr>
                    @endforeach

                </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
