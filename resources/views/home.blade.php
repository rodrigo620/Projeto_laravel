@extends('layout.principal')

@section('title', 'Home')

@section('content')
    <!-- Sessão 02 -->
    <div class="container">
        <h2 class="text-center mt-5 font-weight-bold">Tecnicas para aprimoramento</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <!-- Card 01 -->
            @foreach($events as $event)
            <div class="col-md-4 p-3 col-block h-100">
                <div class="card">
                    <div class="card-header bg-primary text-white">{{$event -> titulo}}</div>
                    <div class="card-body h100">
                        <p>{{substr($event -> descricao, 0, 140)}}...</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary " data-toggle="collapse" data-target="#active">Ler mais</button>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
    <!-- Linha dividindo as sessões 2 - 3 -->
    <hr style="width:80%;text-align: center; background-color: black;">
@endsection