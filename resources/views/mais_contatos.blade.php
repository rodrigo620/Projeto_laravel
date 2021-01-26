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
                </div>
            </div>
        </div>
    @endforeach
@endsection