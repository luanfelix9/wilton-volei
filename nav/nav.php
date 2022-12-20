<?php
    session_start();
    
    date_default_timezone_set('America/Maceio'); 
    
    $titulo = 'CBVD - GERENCIADOR';
    $Ano = date('Y');
    $mes = date('m');
    $dia = date('d');

    include '../basico/header.php'; 

?>
        <!-- Customized Bootstrap Stylesheet -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Template Stylesheet -->
        <link href="../css/style.css" rel="stylesheet">
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

        <!-- <nav class="navbar navbar-expand-lg navbar-blue-clean bg-blue-clean fixed-top">
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
        </nav> -->

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="../gerenciador.php" class="navbar-brand mx-4 mb-3 logoEsquerdaNav">
                    <img src="../img/Login/icone.png" alt="icone CBVD">
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Nome Equipe</h6>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item">Buttons</a>
                            <a href="typography.html" class="dropdown-item">Typography</a>
                            <a href="element.html" class="dropdown-item">Other Elements</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
        <div class="content">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
            <a href="../gerenciador.php" class="navbar-brand d-flex d-lg-none me-4">
                <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
            </a>
            <a href="#" class="sidebar-toggler flex-shrink-0">
                <i class="fa fa-bars"></i>
            </a>
            <div class="navbar-nav align-items-center ms-auto">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa fa-bell me-lg-2"></i>
                        <span class="d-none d-lg-inline-flex">Funcionários</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="../adicionarFuncionario.php" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Adicionar Funcionário</h6>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Editar Funcionário</h6>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Transferir Funcionário</h6>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Confirmar Transferência</h6>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Relatório de Funcionário</h6>
                        </a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa fa-bell me-lg-2"></i>
                        <span class="d-none d-lg-inline-flex">Eventos</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="../adicionarFuncionario.php" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Criar Evento</h6>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Inscrever no Evento</h6>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Acompanhar Evento</h6>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Relatório de Eventos</h6>
                        </a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <span class="d-none d-lg-inline-flex">Nome Equipe</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">Editar Equipe</a>
                        <a href="#" class="dropdown-item">Relatório de Equipe</a>
                        <a href="#" class="dropdown-item">Sair</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->
        </div>
<?php

    include '../footer/footer.php'; 

?>