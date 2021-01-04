<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Blibioteca Bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body class="p-0">
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
                    <nav class="navbar navbar-expand-lg navbar-light justify-content-end p-0">
                        
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="true">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="navbar-collapse collapse show" id="navb" style="">
                        
                            <a href="/"><button type="button" class="btn btn-primary"><font class="border-right pr-3">inicio</font></button></a>
                            <a href="/compartilhar"><button type="button" class="btn btn-primary p-0"><font class="border-right pr-3">Compartilhar</font></button></a>
                            <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">Contatos</button>
                        </div>
                    </nav>
                    
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
    @if(session('msg'))
        <div class="alert alert-success">
            <strong>Sucesso!</strong> Compartilhamento bem sucedido.
        </div>
    @endif
    @yield('sessao1')
    @yield('content')

    <!-- Rodapé -->
    <div class="container-fluid fixed-bottom">
        <div class="row">
            <div class="col bg-dark p-3">
                <div class="copyright text-center">
                    <font style="vertical-align: inherit;">
                        <font class="text-capitalize text-white-50" style="vertical-align: inherit;">scorpion tec - 2020 - todos os direitos reservados.</font>
                    </font>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Arquivos mportantes do layout -->
    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>