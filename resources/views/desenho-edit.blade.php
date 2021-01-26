@extends('layout.principal')

@section('title', 'Editar Obra: ' . $desenho -> titulo)

@section('content')
<div class="container p-0">
    
    </div>
    <div class="container">
        <div class="row">
            <div class="card col-md-6 offset-md-3 mt-5">
                <div class="card-header"><h2 class="text-center font-weight-bold">Editar Obra: {{ $desenho -> titulo}}</h2></div>
                <div class="card-body ">
                    
                    <form action="/desenho/update/{{ $desenho -> id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!-- image -->
                        <div class="form-group">
                            <label for="image">Imagem:</label>
                            <input type="file" id="image" name="image" class="from-control-file">
                            <div class="row">
                                <div class="col-10">
                                    <img src="img/desenho/{{ $desenho -> image}}" alt="{{$desenho -> titulo}}" class="img-preview img-thumbnail">
                                </div>
                            </div>
                        </div>
                        
                        <!-- Titulo -->
                        <div class="form-group">
                            <label for="titulo">Titulo:</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo da Obra..." value="{{ $desenho -> titulo}}">
                        </div>
                        
                        <!-- Botão -->
                        <input type="submit" value="Editar Publicação" class="btn btn-primary mb-5">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection