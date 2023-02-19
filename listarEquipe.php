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
    $tabelaLogin = "SELECT NOME_CLUBE, SIGLA_CLUBE, CNPJ_CLUBE, FL_CLUBE FROM clube WHERE ID_CLUBE= :id";
    $dadosLogin = $con->prepare($tabelaLogin);
    $dadosLogin->bindValue(":id", $id);
    $dadosLogin->execute();
    $dadoLogin = $dadosLogin->fetch(PDO::FETCH_OBJ);
    
    $dadosClube = $con->prepare($tabelaLogin);
    $dadosClube->bindValue(":id", $id);
    $dadosClube->execute();
    $dadoClube = $dadosClube->fetchAll(PDO::FETCH_OBJ);

    date_default_timezone_set('America/Maceio'); 
    
    $Ano = date('Y');
    $mes = date('m');
    $dia = date('d');
    
    include 'header.php';
?>

    <body>

        <?php include 'nav.php'?>

            <div class="container">
                <div class="row">
                    <div class="col title">
                        <h1>Lista de Equipes</h1>
                        <?php
                            if (isset($_SESSION['status_novo'])) {
                        ?>
                            <div class="alert alert-danger" role="alert">
                                Status da Equipe Alterado!
                            </div>
                        <?php
                        }
                            unset($_SESSION['status_novo']);
                        ?>
                    </div>
                </div>
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr style="text-align: center;">
                            <th scope="col-auto">NOME</th>
                            <th scope="col-auto">SIGLA</th>
                            <th scope="col-auto">CNPJ</th>
                            <th scope="col-auto">STATUS</th>
                            <th scope="col-auto">AÇÃO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $cont = 0; ?>
                            <?php foreach ($dadoClube as $dado) { ?>
                                <tr style="text-align: center;">
                                    <th scope="row" class="align-middle"><?php echo $dado->NOME_CLUBE ?></th>
                                    <td class="align-middle"><?php echo $dado->SIGLA_CLUBE ?></td>
                                    <td class="align-middle"><?php echo $dado->CNPJ_CLUBE ?></td>
                                    <td class="align-middle">
                                        <?php 
                                            if ($dado->FL_CLUBE == 1){
                                                echo "Ativo"; 
                                            } else {
                                                echo "Desativado";
                                            } 
                                        ?>
                                    </td>
                                    <td>
                                        <form action="" method="POST">
                                            <div class="row">
                                                <div class="col">
                                                    <a href="editarEquipe.php" class="btn btn-info">Editar</a>
                                                </div>
                                                <div class="col">
                                                    <button type="submit" class="btn btn-light" value="status" name="status">
                                                        <?php 
                                                            if ($dado->FL_CLUBE == 1){
                                                                echo "Desativar"; 
                                                            } else {
                                                                echo "Ativar";
                                                            } 
                                                        ?>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                <?php $cont++; ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <?php include 'footer.php'?>
        
    </body>
</html>

<?php
    require_once 'class/cadastrarClube.php';
    
    $u = new Cadastro;
    
    if(isset($_POST["status"])){
        $cnpj = $dado->CNPJ_CLUBE;
        if(!empty($cnpj)){
            $u->conectar("gerencia_cbvd","gerencia_cbvd.mysql.dbaas.com.br","gerencia_cbvd","Cbvd_2023#");
            if($u->status($cnpj)){
                $_SESSION['status_novo'] = true;
            }
        }
    }
?>