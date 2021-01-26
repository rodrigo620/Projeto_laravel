@extends('layout.principal')

@section('title', 'Editando técinica: ' . $event -> titulo)

@section('content')
    <!-- Contatos -->
    <div class="container p-0">
        <h2 class="text-center mt-5 font-weight-bold">Editando Técnica: {{$event -> titulo}}</h2>
    </div>
    <div class="container">
        <div class="row">
            <div id="event-create-container" class="col-md-6 offset-md-3">
                <form action="/update/{{ $event -> id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <!-- Titulo -->
                    <div class="form-group">
                        <label for="titulo">Técnica:</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Como se chama essa..." value="{{ $event -> titulo}}">
                    </div>
                    <!-- Descrição -->
                    <div class="form-group">
                        <label class="d-block" for="titulo">Descrição:</label>
                        <textarea name="descricao" id="descricao" rows="13" cols="56" placeholder="Descrição da Obra...">{{ $event -> descricao}}</textarea>
                    </div>
                    <!-- Botão -->
                    <input type="submit" value="Editar Publicação" class="btn btn-primary mb-5">
                </form>
            </div>
        </div>
    </div>
@endsection