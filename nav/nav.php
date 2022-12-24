<?php
    session_start();
    
    date_default_timezone_set('America/Maceio'); 
    
    $titulo = 'CBVD - GERENCIADOR';
    $Ano = date('Y');
    $mes = date('m');
    $dia = date('d');

    require_once('basico/header.php'); 

?>
        <!-- Customized Bootstrap Stylesheet -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Template Stylesheet -->
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <body>

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar ">
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
                    <a href="gerenciador.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Início</a>
                    <div class="nav-item dropdown">
                        <a href="equipe.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-people-fill"></i> Equipe</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="#" class="dropdown-item">Editar Equipe</a>
                            <a href="#" class="dropdown-item">Relatório de Equipe</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-person-badge"></i> Pessoa</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item">Adicionar Pessoa</a>
                            <a href="typography.html" class="dropdown-item">Editar Pessoa</a>
                            <a href="element.html" class="dropdown-item">Transferir Pessoa</a>
                            <a href="element.html" class="dropdown-item">Confirmar Transferência</a>
                            <a href="element.html" class="dropdown-item">Relatório de Pessoa</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="evento.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-joystick"></i> Eventos</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="#" class="dropdown-item">Criar Evento</a>
                            <a href="#" class="dropdown-item">Inscrever no Evento</a>
                            <a href="#" class="dropdown-item">Acompanhar Evento</a>
                            <a href="#" class="dropdown-item">Acompanhar Evento</a>
                            <a href="#" class="dropdown-item">Relatório de Eventos</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand sticky-top px-4 py-0 topNav">
                <a href="../gerenciador.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="bi bi-person-badge"></i>
                            <span class="d-none d-lg-inline-flex">Pessoa</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end border-0 rounded-0 rounded-bottom m-0">
                            <a href="adicionarFuncionario.php" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Adicionar Pessoa</h6>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Editar Pessoa</h6>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Transferir Pessoa</h6>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Confirmar Transferência</h6>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Relatório de Pessoa</h6>
                            </a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="evento.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="bi bi-joystick"></i>
                            <span class="d-none d-lg-inline-flex">Eventos</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
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
                        <a href="equipe.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Nome Equipe</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">Editar Equipe</a>
                            <a href="#" class="dropdown-item">Relatório de Equipe</a>
                            <a href="#" class="dropdown-item">Sair</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

