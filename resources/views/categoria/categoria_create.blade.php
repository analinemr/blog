@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Novos produtos</div> <!-- Fechamento correto da tag div -->

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
                    
                <!-- Formulário de criação de categoria -->
                    <form action="{{ url('categoria') }}" method="post">
                        @csrf  <!-- Protege o formulário contra CSRF -->
                        
                        <div class="form-group">
                            <label for="nome">Nome da Categoria: </label>
                            <input type="text" id="nome" name="nome" class="form-control">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

