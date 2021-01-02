@extends('layout.principal')

@section('title', 'Compartilhar conteúdo')
    
@section('content') 
    <div class="container">
        <div class="row d-flex justify-content-around mt-5">
        <div class="card d-flex ">
            <h5 class="card-header">Escolha uma ação:</h5>
            <div class="card-body">
                <h5 class="card-title">Desejá compartilhar algum conteúdo?</h5>
                <p class="card-text">Escolha a opção de acordo com o conteúdo que você deseja compartilhar, se descidir cancelar, precione: "Não compartilhar"</p>
                <div class="container-fluid">
                <div class="row">
                    <div class="col"><a href="/tecnica" class="btn btn-primary">Enviar Técnica</a></div>
                    <div class="col"><a href="/" class="btn btn-primary">Não compartilhar</a></div>
                    <div class="col"><a href="/desenho" class="btn btn-primary">Enviar Obra</a></div>
                
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection