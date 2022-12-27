<?php
    session_start();
    
    // //TESTANDO O ID DO USUARIO
    // if (!isset($_SESSION['ID_CLUBE'])) {
    //     header('Location: index.php');
    //     exit();
    // } else {
    //     $id = $_SESSION['ID_CLUBE'];
    //     $host = "localhost";
    //     $usuario = "root";
    //     $senha = "";
    //     $bd = "volei";
    // }

    // //CONEXÃO VIA PDO
    // $con = new PDO("mysql:host=$host;dbname=$bd", $usuario, $senha);

    // //BUSCANDO TABELA LOGIN
    // $tabelaLogin = "SELECT NOME_CLUBE, SIGLA_CLUBE FROM clube WHERE ID_CLUBE= :id";
    // $dadosLogin = $con->prepare($tabelaLogin);
    // $dadosLogin->bindValue(":id", $id);
    // $dadosLogin->execute();
    // $dadoLogin = $dadosLogin->fetch(PDO::FETCH_OBJ);

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

        <title>CBVD - CAMPEONATO BRASILEIRO DE VOLEIBOL SENTADO</title>

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
                        <h6 class="mb-0"><?php echo isset($dadoLogin) ? $dadoLogin->NOME_CLUBE : null  ?></h6>
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
                            <a href="criarEvento.php" class="dropdown-item"><i class="bi bi-calendar-plus"></i> Criar Evento</a>
                            <a href="inscricaoEvento.php" class="dropdown-item"><i class="bi bi-pen"></i> Inscrever no Evento</a>
                            <a href="acompanharEvento.php" class="dropdown-item"><i class="bi bi-bell"></i> Acompanhar Evento</a>
                            <a href="relatorioEvento.php" class="dropdown-item"><i class="bi bi-file-earmark-medical"></i> Relatório de Eventos</a>
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
                    <i class="bi bi-justify"></i>
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
                            <a href="criarEvento.php" class="dropdown-item">
                                <h6 class="fw-normal mb-0"><i class="bi bi-calendar-plus"></i> Criar Evento</h6>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="inscricaoEvento.php" class="dropdown-item">
                                <h6 class="fw-normal mb-0"><i class="bi bi-pen"></i> Inscrever no Evento</h6>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="acompanharEvento.php" class="dropdown-item">
                                <h6 class="fw-normal mb-0"><i class="bi bi-bell"></i> Acompanhar Evento</h6>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="relatorioEvento.php" class="dropdown-item">
                                <h6 class="fw-normal mb-0"><i class="bi bi-file-earmark-medical"></i> Relatório de Eventos</h6>
                            </a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="equipe.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/Login/icone.png" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo isset($dadoLogin) ? $dadoLogin->SIGLA_CLUBE : null  ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end border-0 rounded-0 rounded-bottom m-0">
                            <a href="editarEquipe.php" class="dropdown-item"><i class="bi bi-pencil-square"></i> Editar Equipe</a>
                            <a href="relatorioEquipe.php" class="dropdown-item"><i class="bi bi-file-earmark-medical"></i> Relatório de Equipe</a>
                            <a href="logof-back.php" class="dropdown-item">Sair</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- <script> 
                swal({
                    title:"ATENÇÃO!",
                    text: "Padrões para a foto ser aprovada: ",
                    icon: "info",
                });
            </script> -->

            <div class="container">
                <div class="row">
                    <div class="col Title">
                        <h1>Registrar Pessoa</h1>
                    </div>
                </div>
            </div>
            <form action="#">
                <div class="container-fluid">

                    <!-- <div class="alert alert-dark p-1" role="alert">
                        Documentos
                    </div> -->

                    <div class="row">
                        <div class="col">
                            <div class="form-group col-md-15">
                            <label for="RP_op-e"><span class="obrigatorio">*</span>Estrangeiro:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault-RP-op-e" id="flexRadioDefault1-RP-op-e" value="Sim">
                                <label class="form-check-label" for="flexRadioDefault1-RP-op-e">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check inputBottom">
                                <input class="form-check-input" type="radio" name="flexRadioDefault-RP-op-e" id="flexRadioDefault2-RP-op-e" value="Não" checked>
                                <label class="form-check-label" for="flexRadioDefault2-RP-op-e">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group col-md-15">
                                <input class="form-control" type="text" name="RP-cpf" id="RP-cpf" required="required" autocomplete="off" minlength="14" maxlength="14" placeholder="*CPF:">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group col-md-15">
                                <input class="form-control" type="text" name="RP-rg" id="RP-rg" required="required"autocomplete="off" minlength="11" maxlength="11" placeholder="*RG:">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group col-md-15">
                                <input class="form-control" list="datalistOptionsRP-oe" name="RP-oe" id="RP-oe" required="required" placeholder="*Órgão Emissor/Expeditor:">
                                <datalist id="datalistOptionsRP-oe">
                                    <option value="ABNC">ABNC – Academia Brasileira de Neurocirurgia</option>
                                    <option value="CGPI/DUREX/DPF">CGPI/DUREX/DPF – Coordenação Geral de Polícia de Imigração da Polícia Federal</option>
                                    <option value="CGPI">CGPI – Coordenação Geral de Privilégios e Imunidades</option>
                                    <option value="CGPMAF">CGPMAF – Coordenadoria Geral de Polícia Marítima, Aeronáutica e de Fronteiras</option>
                                    <option value="CNIG">CNIG – Conselho Nacional de Imigração</option>
                                    <option value="COREN">COREN – Conselho Regional de Enfermagem</option>
                                    <option value="CRA">CRA – Conselho Regional de Administração</option>
                                    <option value="CRAS">CRAS – Conselho Regional de Assistentes Sociais</option>
                                    <option value="CRB">CRB – Conselho Regional de Biblioteconomia</option>
                                    <option value="CRC">CRC – Conselho Regional de Contabilidade</option>
                                    <option value="CRE">CRE – Conselho Regional de Estatística</option>
                                    <option value="CREA">CREA – Conselho Regional de Engenharia, Arquitetura e Agronomia</option>
                                    <option value="CRECI">CRECI – Conselho Regional de Corretores de Imóveis</option>
                                    <option value="CREFIT">CREFIT – Conselho Regional de Fisioterapia e Terapia Ocupacional</option>
                                    <option value="CRF">CRF – Conselho Regional de Farmácia</option>
                                    <option value="CRM">CRM – Conselho Regional de Medicina</option>
                                    <option value="CRN">CRN – Conselho Regional de Nutrição</option>
                                    <option value="CRO">CRO – Conselho Regional de Odontologia</option>
                                    <option value="CRP">CRP – Conselho Regional de Psicologia</option>
                                    <option value="CRPRE">CRPRE – Conselho Regional de Profissionais de Relações Públicas</option>
                                    <option value="CRQ ">CRQ – Conselho Regional de Química</option>
                                    <option value="CRRC">CRRC – Conselho Regional de Representantes Comerciais</option>
                                    <option value="CRMV">CRMV – Conselho Regional de Medicina Veterinária</option>
                                    <option value="DIC">DIC – Diretoria de Identificação Civil</option>
                                    <option value="DIREX">DIREX – Diretoria Executiva</option>
                                    <option value="DPMAF">DPMAF – Divisão de Polícia Marítima, Área e de Fronteiras</option>
                                    <option value="DPT">DPT – Departamento de Polícia Técnica Geral</option>
                                    <option value="IGP">IGP – Instituto Geral de Perícias</option>
                                    <option value="IML">IML – Instituto Médico-Legal</option>
                                    <option value="MAE">MAE – Ministério da Aeronáutica</option>
                                    <option value="MEX">MEX – Ministério do Exército</option>
                                    <option value="MMA">MMA – Ministério da Marinha</option>
                                    <option value="OAB">OAB – Ordem dos Advogados do Brasil</option>
                                    <option value="POF">POF ou DPF – Polícia Federal</option>
                                    <option value="POM">POM – Polícia Militar</option>
                                    <option value="SNJ">SNJ – Secretaria Nacional de Justiça / Departamento de Estrangeiros</option>
                                    <option value="SECC">SECC – Secretaria de Estado da Casa Civil</option>
                                    <option value="SEJUSP">SEJUSP – Secretaria de Estado de Justiça e Segurança Pública</option>
                                    <option value="SES/EST">SES ou EST – Carteira de Estrangeiro</option>
                                    <option value="SSP/SESP">SSP/SESP – Secretaria de Estado da Segurança Pública</option>
                                    <option value="SJS">SJS – Secretaria da Justiça e Segurança</option>
                                    <option value="SJTC">SJTC – Secretaria da Justiça do Trabalho e Cidadania</option>
                                    <option value="SPTC">SPTC – Secretaria de Polícia Técnico-Científica</option>
                                </datalist>                            
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group col-md-15">
                                <input class="form-control" list="datalistOptionsRP-uf" name="RP-uf" id="RP-uf" required="required" placeholder="*UF:">
                                <datalist id="datalistOptionsRP-uf">
                                    <option value="AC">AC - Acre</option>
                                    <option value="AL">AL - Alagoas</option>
                                    <option value="AP">AP - Amapá</option>
                                    <option value="AM">AM - Amazonas</option>
                                    <option value="BA">BA - Bahia</option>
                                    <option value="CE">CE - Ceará</option>
                                    <option value="DF">DF - Distrito Federal</option>
                                    <option value="ES">ES - Espírito Santo</option>
                                    <option value="GO">GO - Goiás</option>
                                    <option value="MA">MA - Maranhão</option>
                                    <option value="MT">MT - Mato Grosso</option>
                                    <option value="MS">MS - Mato Grosso do Sul</option>
                                    <option value="MG">MG - Minas Gerais</option>
                                    <option value="PA">PA - Pará</option>
                                    <option value="PB">PB - Paraíba</option>
                                    <option value="PR">PR - Paraná</option>
                                    <option value="PE">PE - Pernambuco</option>
                                    <option value="PI">PI - Piauí</option>
                                    <option value="RJ">RJ - Rio de Janeiro</option>
                                    <option value="RN">RN - Rio Grande do Norte</option>
                                    <option value="RS">RS - Rio Grande do Sul</option>
                                    <option value="RO">RO - Rondônia</option>
                                    <option value="RR">RR - Roraima</option>
                                    <option value="SC">SC - Santa Catarina</option>
                                    <option value="SP">SP - São Paulo</option>
                                    <option value="SE">SE - Sergipe</option>
                                    <option value="TO">TO - Tocantins</option>
                                </datalist>                            
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group col-md-15">
                            <input class="form-control" type="date" name="RP-data-n" id="RP-data-e" required="required">
                            <span style="font-size: 12px;">⚠️(Data de Emissão)</span>
                        </div>
                    </div>
                    
                    <!-- <div class="alert alert-dark p-1" role="alert">
                        Dados Pessoais
                    </div> -->

                    <div class="row">
                        <div class="col">
                            <div class="form-group col-md-15">
                                <input class="form-control" type="text" name="RP-nome" id="RP-nome" autocomplete="off" maxlength="140" required="required" placeholder="*Nome Completo:">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group col-md-15">
                                <input class="form-control" type="email" name="RP-email" id="RP-email" autocomplete="off" maxlength="140" required="required" placeholder="*E-mail:">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group col-md-15">
                                <label for="RP-opGenero"><span class="obrigatorio">*</span>Gênero:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1-RP-og" checked>
                                    <label class="form-check-label" for="flexRadioDefault1-RP-og">
                                        Masculino
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2-RP-og">
                                    <label class="form-check-label" for="flexRadioDefault2-RP-og">
                                        Feminino
                                    </label>
                                </div>                            
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group col-md-15">
                                <input class="form-control" type="date" name="RP-data-n" id="RP-data-n" required="required">
                                <span style="font-size: 12px;">⚠️(Data de Nascimento)</span>                            
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group col-md-15">
                                <input class="form-control" list="datalistOptionsRP-e-civil" name="RP-e-civil" id="RP-e-civil" minlegth="8" maxlength="32" required="required" placeholder="*Estado Civil:">
                                <datalist id="datalistOptionsRP-e-civil">
                                    <option value="SOLTEIRO(A)">
                                    <option value="CASADO(A)">
                                    <option value="SEPARADO(A) - Separação Judicial">
                                    <option value="DIVORCIADO(A)">
                                    <option value="VIÚVO(A)">
                                </datalist>                            
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group col-md-15">
                                <input class="form-control" type="text" name="RP-nome-m" id="RP-nome-m" autocomplete="off" maxlength="140" required="required" placeholder="*Nome da Mãe:">                          
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group col-md-15">
                                <input class="form-control" type="text" name="RP-nome-p" id="RP-nome-p" autocomplete="off" maxlength="140" placeholder="Nome do Pai:">
                            </div>
                        </div>
                    </div>

                    <!-- <div class="alert alert-dark p-1" role="alert">
                        Dados Profissionais
                    </div> -->

                    <div class="row">
                        <div class="col">
                            <div class="form-group col-md-15">
                                <input class="form-control" type="text" name="RP-confe" id="RP-confe" required="required" placeholder="*Confederação:">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group col-md-15">
                                <input class="form-control" type="text" name="RP-club" id="RP-club" required="required" placeholder="*Clube:">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group col-md-15">
                            <input class="form-control" list="datalistOptionsRP-funcao" name="RP-funcao" id="RP-funcao" required="required" placeholder="*Função:">
                                <datalist id="datalistOptionsRP-funcao">
                                    <option value="ATLETA">
                                    <option value="TREINADOR">
                                </datalist>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group col-md-15">
                                <input class="form-control" list="datalistOptionsRP-formacao" name="RP-formacao" id="RP-formacao" placeholder="*Formação:">
                                <datalist id="datalistOptionsRP-formacao">
                                    <option value="ENSINO FUNDAMENTAL INCOMPLETO">
                                    <option value="ENSINO FUNDAMENTAL COMPLETO">
                                    <option value="ENSINO MÉDIO INCOMPLETO">
                                    <option value="ENSINO MÉDIO COMPLETO">
                                    <option value="ENSINO SUPERIOR INCOMPLETO">
                                    <option value="ENSINO SUPERIOR COMPLETO">
                                </datalist>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group col-md-15">
                            <input class="form-control" type="text" name="RP-pis" id="RP-pis" required="required" placeholder="*PIS:">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group col-md-15">
                            <input class="form-control" type="text" name="RP-rprofi" id="RP-rprofi" required="required" placeholder="*Registro Profissional:">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group col-md-15">
                            <input class="form-control" type="text" name="RP-iauto" id="RP-iauto" required="required" placeholder="*Inscrição Autônoma:">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group col-md-15">
                            <input class="form-control" type="text" name="RP-SDMS" id="RP-SDMS" required="required" placeholder="*SDMS / Registro Federação Internacional:">
                            </div> 
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col">
                            <div class="form-group col-md-15">
                            <input class="form-control" list="datalistOptionsRP-treiner" name="RP-treiner" id="RP-treiner" required="required" placeholder="*Treinador:">
                                <datalist id="datalistOptionsRP-funcao">
                                    <option value="">
                                    <option value="">
                                </datalist>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group col-md-15">
                                <input class="form-control" list="datalistOptionsRP-mod" name="RP-mod" id="RP-mod" placeholder="*Modalidade:">
                                <datalist id="datalistOptionsRP-formacao">
                                    <option value="">
                                    <option value="">
                                </datalist>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group col-md-15">
                                <input class="form-control" type="text" name="RP-alt" id="RP-alt" required="required" placeholder="*Altura (m):">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group col-md-15">
                                <input class="form-control" type="text" name="RP-peso" id="RP-peso" required="required" placeholder="*Peso (kg):">
                            </div>
                        </div>
                    </div>

                    <!-- <div class="alert alert-dark p-1" role="alert">
                        Dados Deficiência
                    </div> -->

                    <div class="row">
                        <div class="col">
                            <div class="form-group col-md-15">
                                <label for="RP_op-def"><span class="obrigatorio">*</span>Possui alguma deficiência?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault-RP-op-def" id="flexRadioDefault1-RP-op-def" value="Sim">
                                    <label class="form-check-label" for="flexRadioDefault1-RP-op-def">
                                        Sim
                                    </label>
                            </div>
                            <div class="form-check inputBottom">
                                <input class="form-check-input" type="radio" name="flexRadioDefault-RP-op-def" id="flexRadioDefault2-RP-op-def" value="Não" checked>
                                <label class="form-check-label" for="flexRadioDefault2-RP-op-def">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group col-md-15">
                                <input class="form-control" list="datalistOptionsRP-def" name="RP-def" id="RP-def" required="required" placeholder="*Deficiência:">
                                <datalist id="datalistOptionsRP-def">
                                    <option value="FÍSICA">
                                    <option value="VISUAL">
                                    <option value="AUDITIVA">
                                    <option value="INTELECTUAL">
                                    <option value="PSICOSSOCIAL">
                                    <option value="MÚLTICLA">
                                </datalist>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group col-md-15">
                                <label for="RP_op-def"><span class="obrigatorio">*</span>Utiliza cão guia?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault-RP-op-def-guia" id="flexRadioDefault1-RP-op-def-guia" value="Sim">
                                    <label class="form-check-label" for="flexRadioDefault1-RP-op-def-guia">
                                        Sim
                                    </label>
                                </div>
                            </div>
                            <div class="form-check inputBottom">
                                <input class="form-check-input" type="radio" name="flexRadioDefault-RP-op-def-guia" id="flexRadioDefault2-RP-op-def-guia" value="Não" checked>
                                <label class="form-check-label" for="flexRadioDefault2-RP-op-def-guia">
                                    Não
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group col-md-15">
                                <label for="RP_op-def"><span class="obrigatorio">*</span>Utiliza cadeira de rodas?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault-RP-op-def-rodas" id="flexRadioDefault1-RP-op-def-rodas" value="Sim">
                                    <label class="form-check-label" for="flexRadioDefault1-RP-op-def-rodas">
                                        Sim
                                    </label>
                            </div>
                            <div class="form-check inputBottom">
                                <input class="form-check-input" type="radio" name="flexRadioDefault-RP-op-def-rodas" id="flexRadioDefault2-RP-op-def-rodas" value="Não" checked>
                                <label class="form-check-label" for="flexRadioDefault2-RP-op-def-rodas">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="alert alert-dark p-1" role="alert">
                        Dados Endereço
                    </div> -->

                    <div class="row">
                        <div class="col">
                            <div class="form-group col-md-3">
                                <input class="form-control" type="text" name="RP-cep" id="RP-cep" autocomplete="off" required="required" minlength="9" maxlength="9" placeholder="*CEP:">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group col-md-15">
                                <input class="form-control" type="text" name="RP-pais" id="RP-pais" required="required" autocomplete="off" readonly placeholder="*País:">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group col-md-15">
                                <input class="form-control" type="text" name="RP-uf" id="RP-uf" required="required" autocomplete="off" readonly placeholder="*Estado:">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group col-md-15">
                                <input class="form-control" type="text" name="RP-cdd" id="RP-cdd" required="required" autocomplete="off" readonly placeholder="*Cidade:">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group col-md-15">
                                <input class="form-control" type="text" name="RP-log" id="RP-log" required="required" autocomplete="off" readonly placeholder="*Logradouro:">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group col-md-15">
                                <input class="form-control" type="text" name="RP-bairro" id="RP-bairro" required="required" autocomplete="off" readonly placeholder="*Bairro:">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group col-md-5">
                                <input class="form-control" type="text" name="RP-num" id="RP-num" autocomplete="off" required="required"  maxlength="5" placeholder="*Número:">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group col-md-15">
                                <textarea style="resize: none;" class="form-control" name="comRC" id="comRC" cols="40" rows="3" minlength="20" maxlength="300" placeholder="Complemento:"></textarea>
                                <span style="font-size: 12px;">⚠️(Descrição do imóvel, pontos de referência, etc. <br> Obs.: mínimo de 20 caracteres, máximo 300)</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group col-md-15">
                                <input class="form-control" type="text" name="RP-aero" id="RP-aero" required="required" autocomplete="off" placeholder="*Aeroporto Preferencial:">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group col-md-15">
                                <input class="form-control" type="text" name="RP-aero" id="RP-aero" required="required" autocomplete="off" placeholder="*Aeroporto Preferencial:">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group col-md-15">
                                <input class="form-control" type="text" name="RP-aero" id="RP-aero" required="required" autocomplete="off" placeholder="*Aeroporto Preferencial:">
                            </div>
                        </div>
                    </div>
            

                </div>
            </form>












        </div>
        <footer id="footer">
            <p>Desenvolvido pela Confederação Brasileira de Voleibol para Deficientes | &copy; CBVD <?php echo $Ano?> - Todos os direitos são reservados.</p>
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
        <script src="./forms/js/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js"></script>
        <script src="./forms/js/mask.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>