@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Postagem</div> <!-- Fechamento correto da tag div -->

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
                    <form action="{{ url('postagem/' . $postagem->id) }}" method="post">
                        @method('PUT')
                        @csrf

                        <label>Título:</label>
                        <input type="text" name="titulo" value="{{ $postagem->titulo }}"class="form-control">

                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

