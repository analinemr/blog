@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Alterar a senha de <strong>{{auth()->user()->name}}</strong></div> <!-- Fechamento correto da tag div -->

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
                    
                <!-- Formulário de alteração de senha -->
                    <form action="{{ url('admin/updateSenha') }}" method="post">
                    @method('PUT')    
                    @csrf  <!-- Protege o formulário contra CSRF -->
                        
                        <div class="form-group">
                            <label for="nome">Senha antiga: </label>
                            <input type="text" name="password_old" class="form-control">

                            <label for="nome">Senha nova: </label>
                            <input type="text" name="password_new" class="form-control">

                            <label for="nome">Senha nova (repetir): </label>
                            <input type="text" name="password_new2" class="form-control">


                        </div>
                        
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

