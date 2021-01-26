@extends('layout.principal')

@section('title', 'Editando Contato:' . $comments -> nome)

@section('content')    
    <div class="container">
        <h2 class="text-center mt-5 font-weight-bold">Editando o contato de: {{$comments -> nome}}</h2>
    </div>
    <div id="event-create-container" class="col-md-8">
        <form action="/contatos/update/{{$comments -> id}}" method="POST">
            @csrf
            @method('PUT')
            <!-- Botão -->
            <div class="row">
                <div class="col col-md-6 p-0">
                    <!-- Nome -->
                    <div class="col">
                        <div class="form-group">
                        <label for="nome">Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome aqui..." value="{{ $comments -> nome}}">
                        </div>
                    </div>
                    <!-- E-mail -->
                    <div class="col">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Informe seu e-maii aqui..." value="{{ $comments -> email}}">
                        </div>
                    </div>
                </div>
                <!-- Mensagem -->
                <div class="col-block col-md-6">
                    <div class="form-group">
                        <label for="comentario">Comentário:</label>
                        <textarea type="text" name="comentario" class="form-control" rows="5" id="comentario" placeholder="Digite seu comentário aqui...">{{ $comments -> comentario}}</textarea>
                    </div>
                </div>
            </div>
            
            <input type="submit" value="Editar Contato" class="btn btn-primary m-5">
            
        </form>
    </div>
@endsection