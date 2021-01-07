@extends('layout.principal')

@section('title', 'Escorpion Tec - Técinas e Estilos')

@section('content')
<div class="container-fluid">
        <div class="row p-5">
            <!-- Carrossel -->
            <div class="col-md-7 p-0">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                    </ol>
                    <!-- Imagens -->
                    <div class="carousel-inner bg-primary">
                        <!-- Imagem 01 -->
                      <div class="carousel-item active">
                        <img class="d-block w-50 rounded mx-auto img-fluid" src="/img/desenhos/auto-retrato.jpg" class="rounded mx-auto d-block" alt="1 slide">
                      </div>
                      <!-- Imagem 01 -->
                      <div class="carousel-item">
                        <img class="d-block w-50 rounded mx-auto img-fluid" src="/img/desenhos/ohana.jpg" alt="2 slide">
                      </div>
                      <!-- Imagem 01 -->
                      <div class="carousel-item">
                        <img class="d-block w-50 rounded mx-auto img-fluid" src="/img/desenhos/mandala.jpg" alt="3 slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!-- Video Youtube -->
            <div class="col-md offset-md-1 mt-md-0 mt-5 embed-responsive embed-responsive-16by9">  
                <iframe class="embed-responsive-item align-middle"  src="https://www.youtube.com/embed/9nb8rFU7iVs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
<div class="container">
        <h2 class="text-center m-5 font-weight-bold">Desenhos</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <!-- Do sm para telas maiores, ele tera o peso 3 -->
            <!-- Imagem 01 -->
            @foreach ($desenhos as $desenho)
                <div class="col-md-3 col-block mb-5">
                    <img src="/img/desenho/{{$desenho -> image}}" class="img-thumbnail rounded-circle img-fluid" alt="Cinque Terre">
                    <div class="col"><h2 class="text-center"><strong>{{$desenho -> titulo}}</strong></h2></div>
                </div>
            @endforeach
        </div>
    </div>


    <!-- Linha dividindo as sessões 1 - 2 -->
    <hr style="width:80%;text-align: center; background-color: black;">
    
    
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

    <!-- Contatos -->
    <div class="container">
        <h2 class="text-center mt-5 font-weight-bold">Contatos</h2>
    </div>
    <div id="event-create-container" class="col-md-8">
                <form action="/comentar" method="POST">
                    @csrf
                    <!-- Botão -->
                    <div class="row">
                        <div class="col col-md-6 p-0">
                            <!-- Nome -->
                            <div class="col">
                                <div class="form-group">
                                <label for="nome">Nome:</label>
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome aqui...">
                                </div>
                            </div>
                            <!-- E-mail -->
                            <div class="col">
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Informe seu e-maii aqui...">
                                </div>
                            </div>
                        </div>
                        <!-- Mensagem -->
                        <div class="col-block col-md-6">
                            <div class="form-group">
                                <label for="comentario">Comentário:</label>
                                <textarea type="text" name="comentario" class="form-control" rows="5" id="comentario" placeholder="Digite seu comentário aqui..."></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <input type="submit" value="Comentar" class="btn btn-primary m-5">
                    
                </form>
            </div>

    
        <div class="media border p-3 m-5">
            <div class="container">
                <div class="row">
                @foreach($comments as $comment)
                    <div class="col">
                        <img src="img_avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                        <div class="media-body">
                            <h4>{{$comment -> nome}}: <small><i>Postado - {{$comment -> created_at}}</i></small></h4>
                            <p>{{$comment -> comentario}}</p>
                        </div>
                        </div>
                    </div>
                @endforeach    
            </div>
        
        </div>
  
@endsection