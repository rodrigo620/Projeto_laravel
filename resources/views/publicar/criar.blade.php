@extends('layout.principal')

@section('title', 'Publicar Técnica')

@section('content')
    <!-- Contatos -->
    <div class="container p-0">
        <h2 class="text-center mt-5 font-weight-bold">Registrar Técnica: </h2>
    </div>
    <div class="container">
        <div class="row">
            <div id="event-create-container" class="col-md-6 offset-md-3">
                <form action="/criar" method="POST">
                    @csrf
                    <!-- Titulo -->
                    <div class="form-group">
                        <label for="titulo">Técnica:</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Como se chama essa...">
                    </div>
                    <!-- Autor -->
                    <div class="form-group">
                        <label for="titulo">Autor:</label>
                        <input type="text" class="form-control" id="autor" name="autor" placeholder="Nome do autor...">
                    </div>
                    <!-- Descrição -->
                    <div class="form-group">
                        <label class="d-block" for="titulo">Descrição:</label>
                        <textarea name="descricao" id="descricao" rows="4" cols="56" placeholder="Descrição da Obra..."></textarea>
                    </div>
                    <!-- Botão -->
                    <input type="submit" value="Criar Publicação" class="btn btn-primary mb-5">
                </form>
            </div>
        </div>
    </div>
@endsection