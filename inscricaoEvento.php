<?php
    session_start();
    
    //TESTANDO O ID DO USUARIO
    if (!isset($_SESSION['ID_CLUBE'])) {
        header('Location: index.php');
        exit();
    } else {
        $id = $_SESSION['ID_CLUBE'];
        $host = "localhost";
        $usuario = "root";
        $senha = "";
        $bd = "volei";
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

            <div class="container">
                <div class="row">
                <div class="col Title">
                        <h1>Eventos</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="bg-white rounded h-100 p-4">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Competição</th>
                                            <th scope="col">Local</th>
                                            <th scope="col">Início da Competição</th>
                                            <th scope="col">Fim da Competição</th>
                                            <th scope="col">Regulamento</th>
                                            <th scope="col">Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Campeonato Brasileiro de Voleibol Sentado 2022 – Feminino 1º turno</th>
                                            <td>Maceió – Alagoas;</td>
                                            <td>20 de junho</td>
                                            <td>23 de junho</td>
                                            <td><a href="http://cbvd.org.br/wp-content/uploads/2022/08/Informativo-Oficial-FINAL-Brasileiro-Feminino-1%C2%BA-turno.pdf">http://cbvd.org.br/wp-content/uploads/2022/08/Informativo-Oficial-FINAL-Brasileiro-Feminino-1%C2%BA-turno.pdf</a></td>
                                            <td><!-- Button trigger modal --><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pen"></i></button></td>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Realmente deseja se inscrever nessa competição?</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                                                    <button type="button" class="btn btn-primary">Sim</button>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'footer.php'?>
        
    </body>
</html>