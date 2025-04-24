@extends('adminlte::page')

@section('content')

 <!-- Rotas para o EDITOR RICH -->
<link rel="stylesheet" href="{{ url('/richtexteditor/rte_theme_default.css') }}" />
<script type="text/javascript" src="{{ url('/richtexteditor/rte.js') }}"></script>
<script type="text/javascript" src="{{ url('/richtexteditor/plugins/all_plugins.js') }}"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nova Postagem</div>

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

                <!-- Formulário de  criação de postagem-->

                <form action="{{ url('postagem') }}" method="post">

                        @csrf  <!-- Protege o formulário contra CSRF -  -->

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

                        <div class="form-group row">
                            <label for="descricao">Descrição da Postagem: </label>
                            <!-- id EDITOR RICH para edição de postagem-->
                            <textarea name="descricao" rows="4" cols="50" class="form-control" id="inp_editor1">Escreva a descrição da sua postagem</textarea>

                        </div>

                        <div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>

                    </form>

                    <!-- Renderização EDITOR RICH -->
                    <script>
                        var editor1 = new RichTextEditor("#inp_editor1");
                    </script>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

