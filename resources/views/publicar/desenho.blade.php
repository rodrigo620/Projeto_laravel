@extends('layout.principal')

@section('title', 'Publicar Obra')

@section('content')
<div class="container p-0">
        <h2 class="text-center mt-5 font-weight-bold">Registrar Técnica: </h2>
    </div>
    <div class="container">
        <div class="row">
            <div id="event-create-container" class="col-md-6 offset-md-3">
                <form action="/criar_desenho" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- image -->
                    <div class="form-group">
                        <label for="image">Técnica:</label>
                        <input type="file" id="image" name="image" class="from-control-file">
                    </div>
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
                    <!-- Botão -->
                    <input type="submit" value="Criar Publicação" class="btn btn-primary mb-5">
                </form>
            </div>
        </div>
    </div>
@endsection