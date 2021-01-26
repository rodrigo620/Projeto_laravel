@extends('layout.principal')

@section('title', $events -> titulo)

@section('content')
    <div class="col-md-8 p-3 col-block h-100 offset-2 mb-5">
        <div class="card">
            <div class="card-header bg-primary text-white">{{$events -> titulo}}</div>
            <div class="card-body h100">
                <p>{{$events -> descricao}}</p>
            </div>
            <div class="card-footer">
                <h5>{{$eventOwner['name']}}</h5>
            </div>
        </div>
    </div>

@endsection