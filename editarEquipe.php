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

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                            <a href="relatorioEquipe.php" class="dropdown-item"><i class="bi bi-file-earmark-medical"></i> Relatório de Equipe</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-person-badge me-2"></i> Pessoas</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item"><i class="bi bi-person-add"></i> Adicionar Pessoa</a>
                            <a href="typography.html" class="dropdown-item"><i class="bi bi-person-dash"></i> Editar Pessoa</a>
                            <a href="element.html" class="dropdown-item"><i class="bi bi-repeat"></i> Transferir Pessoa</a>
                            <a href="element.html" class="dropdown-item"><i class="bi bi-save-fill"></i> Confirmar Transferência</a>
                            <a href="element.html" class="dropdown-item"><i class="bi bi-file-earmark-medical"></i> Relatório de Pessoa</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="evento.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-calendar3"></i> Eventos</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="#" class="dropdown-item"><i class="bi bi-calendar-plus"></i> Criar Evento</a>
                            <a href="inscricaoEvento.php" class="dropdown-item"><i class="bi bi-pen"></i> Inscrever no Evento</a>
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
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="bi bi-person-badge"></i>
                            <span class="d-none d-lg-inline-flex">Pessoas</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end border-0 rounded-0 rounded-bottom m-0">
                            <a href="adicionarFuncionario.php" class="dropdown-item">
                                <h6 class="fw-normal mb-0"><i class="bi bi-person-add"></i> Adicionar Pessoa</h6>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0"><i class="bi bi-person-dash"></i> Editar Pessoa</h6>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0"><i class="bi bi-repeat"></i> Transferir Pessoa</h6>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0"><i class="bi bi-save-fill"></i> Confirmar Transferência</h6>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
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
                            <a href="inscricaoEvento.php" class="dropdown-item">
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
                            <a href="relatorioEquipe.php" class="dropdown-item"><i class="bi bi-file-earmark-medical"></i> Relatório de Equipe</a>
                            <a href="#" class="dropdown-item">Sair</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <script> 
                swal({
                    title: "ATENÇÃO!",
                    text: "Além do preenchimento do formulário, é necessário enviar cópia de documentação do clube. Após aprovação do cadastro, login e senha serão enviados para os e-mails cadastrados Documentação jurídica exigida: Cópia simples do Estatuto do clube/associação; Cópia simples da Ata de Fundação do clube/associação; Cópia simples da Ata de eleição e posse da atual diretoria; Cópia do CNPJ da entidade disponível",
                    icon: "info",
                });
            </script>

            <div class="container">
                <div class="row">
                    <div class="col Title">
                        <h1>Dados do Clube</h1>
                    </div>
                </div>
                <form action="#">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <div class="form-group col-md-15">
                                    <input class="form-control" type="text" name="nomeRC" id="nomeRC" autocomplete="off" maxlength="140" required="required" placeholder="*Nome Completo:">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group col-md-15">
                                    <input class="form-control" type="email" name="emailRC" id="emailRC" autocomplete="off" maxlength="140" required="required" placeholder="*E-mail:">
                                    <p id="info"><span class="obrigatorio">⚠️</span>(Seu Login e Senha serão enviados para este e-mail)</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group col-md-8 inputBottom">
                                    <input class="form-control" type="text" name="cnpjRC" id="cnpjRC" autocomplete="off" maxlength="18" required="required" placeholder="*CNPJ:">
                                </div>
                            </div>
                            <div class="col">
                                <div id="siglaRC" class="form-group col-md-10 inputBottom">
                                    <input class="form-control" type="text" name="siglaRC" id="siglaRC" autocomplete="off" maxlength="10" required="required" placeholder="*Sigla:">
                                </div>
                            </div>
                            <div class="col">
                                <div id="dataF" class="form-group col-md-3 inputBottom">
                                    <input class="form-control" type="date" name="dataF" id="dataF" maxlength="10" required="required" placeholder="*Data de Fundação:">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group col-md-7 inputBottom">
                                    <input class="form-control" type="text" name="foneRC" id="foneRC" autocomplete="off" maxlength="14" required="required" placeholder="Telefone:">
                                </div>
                            </div>
                            <div class="col">
                                <div id="div-cellRC" class="form-group col-md-10 inputBottom">
                                    <input class="form-control" type="text" name="cellRC" id="cellRC" autocomplete="off" maxlength="15" required="required" placeholder="Celular:">
                                </div>
                            </div>
                            <div class="col">
                                <div id="siteRC" class="form-group col-md-6 inputBottom">
                                    <input class="form-control" type="text" name="siteRC" id="siteRC" autocomplete="off" maxlength="140" placeholder="Site:">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group col-md-10 inputBottom">
                                    <input class="form-control" type="text" name="lograRC" id="lograRC" autocomplete="off" maxlength="140" required="required" placeholder="*Logradouro:">
                                    <p id="info"><span class="obrigatorio">⚠️</span>(Logradouro: rua, avenida, etc)</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group col-md-10 inputBottom">
                                    <input class="form-control" type="text" name="bairroRC" id="bairroRC" autocomplete="off" maxlength="140" required="required" placeholder="*Bairro:">
                                </div> 
                            </div>
                            <div class="col">
                                <div name="cidade" class="form-group col-md-10 inputBottom">
                                    <input class="form-control" type="text" name="cidade" id="cidade" required="required" placeholder="*Cidade:">
                                </div>
                            </div>
                            <div class="col">
                                <div name="estado" class="form-group col-md-10 inputBottom">
                                    <input class="form-control" list="datalistOptionsNUF" name="uf" id="uf" required="required" onChange="selectUF()" placeholder="Estado:">
                                    <datalist id="datalistOptionsNUF">
                                        <option id="opp01" value="AC">AC - Acre</option>
                                        <option id="opp02" value="AL">AL - Alagoas</option>
                                        <option id="opp03" value="AP">AP - Amapá</option>
                                        <option id="opp04" value="AM">AM - Amazonas</option>
                                        <option id="opp05" value="BA">BA - Bahia</option>
                                        <option id="opp06" value="CE">CE - Ceará</option>
                                        <option id="opp07" value="DF">DF - Distrito Federal</option>
                                        <option id="opp08" value="ES">ES - Espírito Santo</option>
                                        <option id="opp09" value="GO">GO - Goiás</option>
                                        <option id="opp10" value="MA">MA - Maranhão</option>
                                        <option id="opp11" value="MT">MT - Mato Grosso</option>
                                        <option id="opp12" value="MS">MS - Mato Grosso do Sul</option>
                                        <option id="opp13" value="MG">MG - Minas Gerais</option>
                                        <option id="opp14" value="PA">PA - Pará</option>
                                        <option id="opp15" value="PB">PB - Paraíba</option>
                                        <option id="opp16" value="PR">PR - Paraná</option>
                                        <option id="opp17" value="PE">PE - Pernambuco</option>
                                        <option id="opp18" value="PI">PI - Piauí</option>
                                        <option id="opp19" value="RJ">RJ - Rio de Janeiro</option>
                                        <option id="opp20" value="RN">RN - Rio Grande do Norte</option>
                                        <option id="opp21" value="RS">RS - Rio Grande do Sul</option>
                                        <option id="opp22" value="RO">RO - Rondônia</option>
                                        <option id="opp23" value="RR">RR - Roraima</option>
                                        <option id="opp24" value="SC">SC - Santa Catarina</option>
                                        <option id="opp25" value="SP">SP - São Paulo</option>
                                        <option id="opp26" value="SE">SE - Sergipe</option>
                                        <option id="opp27" value="TO">TO - Tocantins</option>
                                    </datalist>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group col-md-10 inputBottom">
                                    <input class="form-control" type="text" name="cepRC" id="cepRC" autocomplete="off" maxlength="9" required="required" placeholder="*CEP:">
                                </div>
                            </div>
                            <div class="col">
                                <div id="nRC" class="form-group col-md-10 inputBottom">
                                    <input class="form-control" type="text" name="nRC" id="nRC" autocomplete="off" maxlength="5" required="required" placeholder="*Número:">
                                </div>
                            </div>
                            <div class="col">
                                <div id="comRC" class="form-group col-md-10 inputBottom">
                                    <input class="form-control" type="text" name="nRC" id="nRC" autocomplete="off" maxlength="5" required="required" placeholder="*Complemento::">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-12">
                                <p id="infoDados">Modalidades</p>
                            </div>
                            <div class="col">
                                <div id="div-checkbox" class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label id="label-checkbox" class="form-check-label" for="defaultCheck1">
                                        VOLEIBOL DE QUADRA - MASCOLINO
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <div id="div-checkbox" class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                    <label id="label-checkbox" class="form-check-label" for="defaultCheck2">
                                        VOLEIBOL DE QUADRA - FEMININO
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <div id="div-checkbox" class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                                    <label id="label-checkbox" class="form-check-label" for="defaultCheck3">
                                    VOLEIBOL DE AREIA - MASCOLINO
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <div id="div-checkbox" class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
                                    <label id="label-checkbox" class="form-check-label" for="defaultCheck4">
                                    VOLEIBOL DE AREIA - FEMININO
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <br>
                                <a href="gerenciador.php" class="btn btn-danger">Cancelar</a>
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </div>

                    </div> 
                </form>
            </div>
        </div>
        <footer id="footer">
            <p>Desenvolvido pela Confederação Brasileira de Voleibol para Deficientes &copy; CBVD <?php echo $Ano?></p>
        </footer>
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