<?php
    session_start();
    
    date_default_timezone_set('America/Maceio'); 
    
    $Ano = date('Y');
    $mes = date('m');
    $dia = date('d');
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Sistema de cadastro e gerenciamento de equipes.">
        <meta name="keywords" content="CAMPEONATO BRASILEIRO DE VOLEIBOL SENTADO, CBVD">
        <meta name="author" content="Luan Felix e Vitor">
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="content-language" content="pt-br" />
        <meta http-equiv="imagetoolbar" content="no" />
        <meta name="copyright" content="© CBVD" />
        <meta name="robots" content="all">

        <title>CBVD - GERENCIADOR</title>

        <!--Icone na Barra do Site-->
        <link rel="shortcut icon" href="img/Login/icone.png" />
        
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
        
        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
        
        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">

        <link rel="stylesheet" href="footer/rodape.css">
    </head>
    <body>

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar ">
                <a href="gerenciador.php" class="navbar-brand mx-4 mb-3 logoEsquerdaNav">
                    <img src="img/Login/icone.png" alt="icone CBVD">
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/Login/icone.png" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Nome Equipe</h6>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="gerenciador.php" class="nav-item nav-link active"><i class="bi bi-house me-2"></i> Início</a>
                    <div class="nav-item dropdown">
                        <a href="equipe.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-people-fill"></i> Equipe</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="editarEquipe.php" class="dropdown-item"><i class="bi bi-pencil-square"></i> Editar Equipe</a>
                            <a href="#" class="dropdown-item"><i class="bi bi-file-earmark-medical"></i> Relatório de Equipe</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="pessoa.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-person-badge me-2"></i> Pessoas</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="adicionarPessoa.php" class="dropdown-item"><i class="bi bi-person-add"></i> Adicionar Pessoa</a>
                            <a href="editarPessoa.php" class="dropdown-item"><i class="bi bi-person-dash"></i> Editar Pessoa</a>
                            <a href="transferirPessoa.php" class="dropdown-item"><i class="bi bi-repeat"></i> Transferir Pessoa</a>
                            <a href="confirmarTransferencia.php" class="dropdown-item"><i class="bi bi-save-fill"></i> Confirmar Transferência</a>
                            <a href="relatorioPessoa.php" class="dropdown-item"><i class="bi bi-file-earmark-medical"></i> Relatório de Pessoa</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="evento.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-calendar3"></i> Eventos</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="#" class="dropdown-item"><i class="bi bi-calendar-plus"></i> Criar Evento</a>
                            <a href="#" class="dropdown-item"><i class="bi bi-pen"></i> Inscrever no Evento</a>
                            <a href="#" class="dropdown-item"><i class="bi bi-bell"></i> Acompanhar Evento</a>
                            <a href="#" class="dropdown-item"><i class="bi bi-file-earmark-medical"></i> Relatório de Eventos</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand sticky-top px-4 py-0 topNav">
                <a href="gerenciador.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="pessoa.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="bi bi-person-badge"></i>
                            <span class="d-none d-lg-inline-flex">Pessoas</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end border-0 rounded-0 rounded-bottom m-0">
                            <a href="adicionarPessoa.php" class="dropdown-item">
                                <h6 class="fw-normal mb-0"><i class="bi bi-person-add"></i> Adicionar Pessoa</h6>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="editarPessoa.php" class="dropdown-item">
                                <h6 class="fw-normal mb-0"><i class="bi bi-person-dash"></i> Editar Pessoa</h6>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="transferirPessoa.php" class="dropdown-item">
                                <h6 class="fw-normal mb-0"><i class="bi bi-repeat"></i> Transferir Pessoa</h6>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="confirmarTransferencia.php" class="dropdown-item">
                                <h6 class="fw-normal mb-0"><i class="bi bi-save-fill"></i> Confirmar Transferência</h6>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="relatorioPessoa.php" class="dropdown-item">
                                <h6 class="fw-normal mb-0"><i class="bi bi-file-earmark-medical"></i> Relatório de Pessoa</h6>
                            </a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="evento.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="bi bi-calendar3"></i>
                            <span class="d-none d-lg-inline-flex">Eventos</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0"><i class="bi bi-calendar-plus"></i> Criar Evento</h6>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0"><i class="bi bi-pen"></i> Inscrever no Evento</h6>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0"><i class="bi bi-bell"></i> Acompanhar Evento</h6>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0"><i class="bi bi-file-earmark-medical"></i> Relatório de Eventos</h6>
                            </a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="equipe.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/Login/icone.png" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Nome Equipe</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end border-0 rounded-0 rounded-bottom m-0">
                            <a href="editarEquipe.php" class="dropdown-item"><i class="bi bi-pencil-square"></i> Editar Equipe</a>
                            <a href="#" class="dropdown-item"><i class="bi bi-file-earmark-medical"></i> Relatório de Equipe</a>
                            <a href="#" class="dropdown-item">Sair</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col">
                        <a href="">
                            <div class="topNav rounded d-flex align-items-center justify-content-between p-4 menuPrincipal">
                                <i class="bi bi-house fa-3x text-secondary"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Início</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="equipe.php">
                            <div class="topNav rounded d-flex align-items-center justify-content-between p-4">
                                <i class="bi bi-people-fill fa-3x text-secondary"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Equipe</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col">
                        <a href="pessoa.php">
                            <div class="topNav rounded d-flex align-items-center justify-content-between p-4">
                                <i class="bi bi-person-badge fa-3x text-secondary"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Pessoas</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="evento.php">
                            <div class="topNav rounded d-flex align-items-center justify-content-between p-4">
                                <i class="bi bi-calendar3 fa-3x text-secondary"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Eventos</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->

        </div>
        <!-- <footer id="footer">
            <p>Desenvolvido pela Confederação Brasileira de Voleibol para Deficientes &copy; CBVD <?php echo $Ano?></p>
        </footer> -->
        <div vw class="enabled">
            <div vw-access-button class="active"></div>
            <div vw-plugin-wrapper>
                <div class="vw-plugin-top-wrapper"></div>
            </div>
        </div>
        <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
        <script>
            new window.VLibras.Widget('https://vlibras.gov.br/app');
        </script>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/chart/chart.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>