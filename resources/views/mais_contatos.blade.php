@extends('layout.principal')

@section('title', 'Contatos')

@section('content')
    @foreach($comments as $comment)
        <div class="col-md-4 p-3 col-block offset-4">
            <div class="card">
                <div class="card-header bg-primary text-white">Contato de: {{$comment->nome}}</div>
                <div class="card-body">
                    <h5><font style="vertical-align: inherit;">Email: {{$comment->email}}</font></h5>

                    <h5><font style="vertical-align: inherit;">Comentário:</font></h5>
                    <hr style="width:100%; background-color: black;">
                    <p>{{$comment->comentario}}</p>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-4">
                            <form action="/contatos/{{$comment->id}}" method="POST" class="align-item-bottom">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn delete-btn btn-danger">Deletar</botton>
                            </form>
                        </div>
                        <div class="col-md-4 offset-4">
                            <a href="/contatos/edit/{{ $comment -> id}}" class="btn btn-primary edit-btn ml-5">Editar</a>
                        </div>  
                    </div>

                </div>
            </div>
        </div>
    @endforeach
@endsection