<?php
    session_start();
    
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

        </div>

        <?php include 'footer.php'?>

    </body>
</html>