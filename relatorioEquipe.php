<?php
     
    
    //TESTANDO O ID DO USUARIO
    if (!isset($_SESSION['ID_CLUBE'])) {
        header('Location: index.php');
        exit();
    } else {
        $id = $_SESSION['ID_CLUBE'];
        $host = "gerencia_cbvd.mysql.dbaas.com.br";
        $usuario = "gerencia_cbvd";
        $senha = "Cbvd_2023#";
        $bd = "gerencia_cbvd";
    }

    //CONEXÃO VIA PDO
    $con = new PDO("mysql:host=$host;dbname=$bd", $usuario, $senha);

    //BUSCANDO TABELA LOGIN
    $tabelaLogin = "SELECT NOME_CLUBE, SIGLA_CLUBE FROM clube WHERE ID_CLUBE= :id";
    $dadosLogin = $con->prepare($tabelaLogin);
    $dadosLogin->bindValue(":id", $id);
    $dadosLogin->execute();
    $dadoLogin = $dadosLogin->fetch(PDO::FETCH_OBJ);

    date_default_timezone_set('America/Maceio'); 
    
    $Ano = date('Y');
    $mes = date('m');
    $dia = date('d');
    
    include 'header.php';
?>

    <body>

        <?php include 'nav.php'?>

            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col">
                        <a href="#">
                            <div class="topNav rounded d-flex align-items-center justify-content-between p-4 menuPrincipal">
                                <i class="bi bi-filetype-pdf fa-3x text-secondary"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Emitir dados em PDF</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <div class="topNav rounded d-flex align-items-center justify-content-between p-4">
                                <i class="bi bi-filetype-exe fa-3x text-secondary"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Emitir dados em EXEL</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->

        </div>

        <?php include 'footer.php'?>
        
    </body>
</html>