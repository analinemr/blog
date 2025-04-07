@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Postagem</div> 
                
                <div class="card-body">

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                <!-- Formulário de edição -->
                <form action="{{ url('postagem/' . $postagem->id) }}" method="post">
                    @method('PUT')
                    @csrf

                        <!-- 'select' para inluir a cetegoria -->
                        <div class="form-group">
                            <select name="categoria_id" class="form-control">
                                @foreach ($categorias as $value)

                                    <!-- IF para vincular o 'select' e retonar corretamente os dados -->
                                    @if ($value->id == $postagem->categoria_id)
                                        <option selected value="{{ $value->id }}">{{ $value->nome }}</option>
                                    @else
                                        <option value="{{ $value->id }}">{{ $value->nome }}</option>
                                    @endif

                                @endforeach
                              </select>
                        </div>

                        <div class="form-group">
                            <label for="titulo">Título da Postagem:</label>
                            <input type="text" value="{{ $postagem->titulo }}" name="titulo" class="form-control">                        </div>


                        <div class="form-group">
                            <label for="descricao">Descrição da Postagem: </label>
                            <textarea name="descricao" rows="5" cols="33" class="form-control">
                                {{ $postagem->descricao }}
                            </textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Salvar</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

