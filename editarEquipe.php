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
    $tabelaLogin = "SELECT * FROM clube WHERE ID_CLUBE= :id";
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
                                    <p id="info"><span class="obrigatorio"></span>NOME: </p>
                                    <input class="form-control" type="text" name="nomeRC" id="nomeRC" autocomplete="off" maxlength="140"  value="<?php echo isset($dadoLogin) ? $dadoLogin->NOME_CLUBE : null ?>" required="required" placeholder="*Nome Completo:">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group col-md-15">
                                    <p id="info"><span class="obrigatorio"></span>EMAIL: </p>
                                    <input class="form-control" type="email" name="emailRC" id="emailRC" autocomplete="off" maxlength="140" value="<?php echo isset($dadoLogin) ? $dadoLogin->EMAIL_CLUBE : null ?>" required="required" placeholder="*E-mail:">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group col-md-15">
                                    <input class="form-control" type="password" name="senhar" id="senhar" autocomplete="off" maxlength="140" required="required" placeholder="*Senha:">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group col-md-15">
                                    <input class="form-control" type="password" name="senhar2" id="senhar2" autocomplete="off" maxlength="140" required="required" placeholder="*Confirmar Senha:">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group col-md-8 inputBottom">
                                    <p id="info"><span class="obrigatorio"></span>CNPJ: </p>
                                    <input class="form-control" type="text" name="cnpjRC" id="cnpjRC" autocomplete="off" maxlength="18" value="<?php echo isset($dadoLogin) ? $dadoLogin->CNPJ_CLUBE : null ?>" required="required" placeholder="*CNPJ:">
                                </div>
                            </div>
                            <div class="col">
                                <p id="info"><span class="obrigatorio"></span>SIGLA: </p>
                                <div id="siglaRC" class="form-group col-md-10 inputBottom">
                                    <input class="form-control" type="text" name="siglaRC" id="siglaRC" autocomplete="off" maxlength="10" value="<?php echo isset($dadoLogin) ? $dadoLogin->SIGLA_CLUBE : null ?>" required="required" placeholder="*Sigla:">
                                </div>
                            </div>
                            <div class="col">
                                <div id="dataF" class="form-group col-md-3 inputBottom">
                                    <p id="info"><span class="obrigatorio"></span>CRIAÇÃO: </p>
                                    <input class="form-control" type="date" name="dataF" id="dataF" maxlength="10" value="<?php echo isset($dadoLogin) ? $dadoLogin->DATA_CRIACAO_CLUBE : null ?>" required="required" placeholder="*Data de Fundação:">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group col-md-7 inputBottom">
                                    <p id="info"><span class="obrigatorio"></span>CELULAR: </p>
                                    <input class="form-control" type="text" name="foneRC" id="foneRC" autocomplete="off" maxlength="14" value="<?php echo isset($dadoLogin) ? $dadoLogin->TELEFONE_CLUBE : null ?>" required="required" placeholder="Telefone:">
                                </div>
                            </div>
                            <div class="col">
                                <div id="div-cellRC" class="form-group col-md-10 inputBottom">
                                    <p id="info"><span class="obrigatorio"></span>WHASTAPP: </p>
                                    <input class="form-control" type="text" name="cellRC" id="cellRC" autocomplete="off" maxlength="15" value="<?php echo isset($dadoLogin) ? $dadoLogin->CELULAR_CLUBE : null ?>" required="required" placeholder="Celular:">
                                </div>
                            </div>
                            <div class="col">
                                <div id="siteRC" class="form-group col-md-6 inputBottom">
                                    <p id="info"><span class="obrigatorio"></span>SITE: </p>
                                    <input class="form-control" type="text" name="siteRC" id="siteRC" autocomplete="off" maxlength="140" value="<?php echo isset($dadoLogin) ? $dadoLogin->SITE_CLUBE : null ?>" placeholder="Site:">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group col-md-10 inputBottom">
                                    <p id="info"><span class="obrigatorio"></span>LOGRADOURO: </p>
                                    <input class="form-control" type="text" name="lograRC" id="lograRC" autocomplete="off" maxlength="140" value="<?php echo isset($dadoLogin) ? $dadoLogin->LOGRADOURO_CLUBE : null ?>" required="required" placeholder="*Logradouro:">
                                    <p id="info"><span class="obrigatorio">⚠️</span>(Logradouro: rua, avenida, etc)</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group col-md-10 inputBottom">
                                    <p id="info"><span class="obrigatorio"></span>BAIRRO: </p>
                                    <input class="form-control" type="text" name="bairroRC" id="bairroRC" autocomplete="off" maxlength="140" value="<?php echo isset($dadoLogin) ? $dadoLogin->BAIRRO_CLUBE : null ?>" required="required" placeholder="*Bairro:">
                                </div> 
                            </div>
                            <div class="col">
                                <div name="cidade" class="form-group col-md-10 inputBottom">
                                    <p id="info"><span class="obrigatorio"></span>CIDADE: </p>
                                    <input class="form-control" type="text" name="cidade" id="cidade" value="<?php echo isset($dadoLogin) ? $dadoLogin->CIDADE_CLUBE : null ?>" required="required" placeholder="*Cidade:">
                                </div>
                            </div>
                            <div class="col">
                                <div name="estado" class="form-group col-md-10 inputBottom">
                                    <p id="info"><span class="obrigatorio"></span>ESTADO: </p>
                                    <input class="form-control" list="datalistOptionsNUF" name="uf" id="uf" value="<?php echo isset($dadoLogin) ? $dadoLogin->ESTADO_CLUBE : null ?>" required="required" onChange="selectUF()" placeholder="*Estado:">
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
                                    <p id="info"><span class="obrigatorio"></span>CEP: </p>
                                    <input class="form-control" type="text" name="cepRC" id="cepRC" autocomplete="off" maxlength="9" value="<?php echo isset($dadoLogin) ? $dadoLogin->CEP_CLUBE : null ?>" required="required" placeholder="*CEP:">
                                </div>
                            </div>
                            <div class="col">
                                <div id="nRC" class="form-group col-md-10 inputBottom">
                                    <p id="info"><span class="obrigatorio"></span>NUMERO: </p>
                                    <input class="form-control" type="text" name="nRC" id="nRC" autocomplete="off" maxlength="5" value="<?php echo isset($dadoLogin) ? $dadoLogin->NUMERO_CLUBE : null ?>" required="required" placeholder="*Número:">
                                </div>
                            </div>
                            <div class="col">
                                <div id="comRC" class="form-group col-md-10 inputBottom">
                                    <p id="info"><span class="obrigatorio"></span>COMPLEMENTO: </p>
                                    <input class="form-control" type="text" name="nRC" id="nRC" autocomplete="off" maxlength="5" value="<?php echo isset($dadoLogin) ? $dadoLogin->COMPLEMENTO_CLUBE : null ?>" required="required" placeholder="Complemento:">
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
                                        VOLEIBOL DE QUADRA - MASCULINO
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
                                    VOLEIBOL DE AREIA - MASCULINO
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

        <?php include 'footer.php'?>

    </body>
</html>