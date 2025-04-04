@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nova Postagem</div> <!-- Fechamento correto da tag div -->

                <div class="card-body">

                <!-- /resources/views/post/create.blade.php -->
                     @if ($errors->any())
                     <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                <!-- Create Post Form -->
                    <form action="{{ url('postagem') }}" method="post">
                        @csrf  <!-- Protege o formulário contra CSRF -->
                        
                        <div class="form-group">                       
                        <select name="categoria_id" class="form-control">
                            @foreach ($categorias as $value)              
                                <option value="{{$value->id}}">{{$value->nome}}</option>
                            @endforeach 
                        </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="titulo">Título da Postagem: </label>
                            <input type="text" id="titulo" name="titulo" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="descricao">Descrição da Postagem: </label>
                            <textarea id="descricao" name="descricao" rows="4" cols="50" class="form-control">
                                TESTE - Descrição da postagem
                            </textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Enviar</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

