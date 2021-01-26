@extends('layout.principal')

@section('title', 'Meu Perfil')

@section('content')
    <!-- Técnicas de desenho -->
    <div class="container">
        <h2 class="text-center mt-5 font-weight-bold">Tecnicas para aprimoramento</h2>
    </div>
    
    <div class="col-md-10 offset-md-1 dashboard-events-container mt-3">
        @if(count($events) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Técnica</th>
                        <th scope="col">Nome</th>
                        <th scope="col text-center">ações</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($events as $event)
                        <tr>
                            <td scropt="row">{{ $loop->index + 1}}</td>
                            <td><a href="/tecnica/{{ $event->id}}">{{ $event->titulo}}</a></td>
                            <td>
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="/edit/{{ $event -> id}}" class="btn btn-primary edit-btn">Editar</a>
                                    </div>
                                    <div class="col-md-3">
                                        <form action="/tecnica/{{$event->id}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger delete-btn">Deletar</botton>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
    <!-- Minhas Obras -->
    <div class="container">
        <h2 class="text-center mt-5 font-weight-bold">Minhas Obras</h2>
    </div>
    <hr style="width:80%;text-align: center; background-color: black;">
    @if(count($desenhos) > 0)
        @foreach($desenhos as $desenho)

        <div class="col-md-4 p-3 col-block h-100 offset-md-4 mb-5">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">{{$desenho -> titulo}}</div>
                <div class="card-body h100">
                    <img class="mr-3 img-thumbnail" src="/img/desenho/{{$desenho -> image}}" alt="{{$desenho -> titulo}}">
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-4">
                            <form action="/desenho/{{$desenho->id}}" method="POST" class="align-item-bottom">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn delete-btn btn-danger">Deletar</botton>
                            </form>
                        </div>
                        <div class="col-md-4 offset-4">
                            <a href="/desenho/edit/{{ $event -> id}}" class="btn btn-primary edit-btn ml-5">Editar</a>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @endif

    
@endsection