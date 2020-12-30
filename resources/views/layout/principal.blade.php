<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Blibioteca Bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <!-- Menu -->
    <!-- Menu -->
    <div class="container-fluid bg-primary sticky-top">
        <header>
            <div class="row">
                <!-- Logo -->
                <div class="ml-5 col-md-inline">
                    <a class="" href="#">
                        <img src="/img/nome-logo.png" width="100" height="60" alt="" loading="lazy">
                    </a>
                </div>
                <!-- Botões -->
                <div class="col d-flex justify-content-end">
                    <div>
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="/" class="nav-link text-white">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/publicar/topico" class="nav-link text-white">Criar Topico</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/" class="nav-link text-white">Entrar</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/" class="nav-link text-white">Publicar Arte</a>
                                </li>
                                <!-- Modal Contatos -->
                                <li class="nav-item">
                                    <a href="/" class="nav-link text-white" data-toggle="modal" data-target="#exampleModal">contato</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
                <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="exampleModalLabel">Contatos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-block">
                                <h6>Telefone:</h6>
                                <p>(89) 99432****</p>
                            </div>
                            <div class="col-md-6 col-block">
                                <h6>Instagram:</h6>
                                <a href="https://www.instagram.com/rodrigosilva.br/?hl=pt-br"><p>@rodrigosilva.br</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Conteudo -->
    @yield('content')
    <!-- Arquivos mportantes do layout -->
    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>