@extends('layout.principal')

@section('title', 'Publicar Obra')

@section('content')
<div class="container p-0">
    
    </div>
    <div class="container">
        <div class="row">
            <div class="card col-md-6 offset-md-3 mt-5">
                <div class="card-header"><h2 class="text-center font-weight-bold">Publicar Obra</h2></div>
                <div class="card-body ">
                    <form action="/criar_desenho" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- image -->
                        <div class="form-group">
                            <label for="image">Imagem:</label>
                            <input type="file" id="image" name="image" class="from-control-file">
                        </div>
                        <!-- Titulo -->
                        <div class="form-group">
                            <label for="titulo">Titulo:</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo da Obra...">
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
    </div>
@endsection