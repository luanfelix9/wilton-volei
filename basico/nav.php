<?php
    session_start();
    
    date_default_timezone_set('America/Maceio'); 
    
    $titulo = 'CBVD - GERENCIADOR';
    $Ano = date('Y');
    $mes = date('m');
    $dia = date('d');

    include 'header.php'; 

?>
          <link rel="stylesheet" href="../css/nav.css">

    </head>
    <body>

        <!-- <div class="container-fluid imgNav">
            <div class="row">
                <div class="col-2">
                    <img src="../img/Login/icone.png" alt="icone CBVD">
                </div>
                <div class="col-10">
                    <ul>
                        <li><p>SISTEMA DE</p></li>
                        <li><p>CADASTRO</p></li>
                    </ul>
                </div>
            </div>
        </div> -->

        <nav class="navbar navbar-expand-lg navbar-blue-clean bg-blue-clean fixed-top">
            <div class="container-fluid">
                <div class="d-none d-md-block">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link logoEsquerdaNav" href="../gerenciador.php">
                                <img src="../img/Login/icone.png" alt="icone CBVD">
                            </a>
                        </li>
                        <li class="nav-item dropdown itemNav">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Equipes
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Editar Equipe</a></li>
                                <li><a class="dropdown-item" href="#">Relatório de Equipe</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown itemNav">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Funcionários
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Adicionar Funcionário</a></li>
                                <li><a class="dropdown-item" href="#">Editar Funcionário</a></li>
                                <li><a class="dropdown-item" href="#">Transferir Funcionário</a></li>
                                <li><a class="dropdown-item" href="#">Relatório de Funcionário</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown itemNav">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Eventos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Criar Evento</a></li>
                                <li><a class="dropdown-item" href="#">Inscrever no Evento</a></li>
                                <li><a class="dropdown-item" href="#">Relatório de Eventos</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="d-block d-md-none">
                    <button class="navbar-toggler d-block d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Dropdown </a>
                                    <ul class="dropdown-menu dropdown-menu-dark">
                                        <li>
                                            <a class="dropdown-item" href="#">Action</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Another action</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

<?php

    include 'footer.php'; 

?>