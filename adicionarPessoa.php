<?php
     
    
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

    include 'header.php';
?>


    <body>

        <?php include 'nav.php'?>
            <div class="container">
                <div class="row">
                    <div class="col Title">
                        <h1>Registrar Pessoa</h1>
                    </div>
                </div>
            </div>
            <form id="addPessoa" action="#">
                <div class="container-fluid">

                <div id="fade" class="hide">
                    <div id="loader" class="spinner-border text-info hide" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div id="message" class="">
                        <div class="alert alert-light hide" role="alert">
                            <h4>Mensagem:</h4>
                            <p>Testso da Mensagem...</p>
                            <br>
                            <button id="clonse-message" type="button" class="btn btn-secondary">Ok</button>
                        </div>
                    </div>
                </div>

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
                                    <option value="ABNC">Academia Brasileira de Neurocirurgia</option>
                                    <option value="CGPI/DUREX/DPF">Coordenação Geral de Polícia de Imigração da Polícia Federal</option>
                                    <option value="CGPI">Coordenação Geral de Privilégios e Imunidades</option>
                                    <option value="CGPMAF">Coordenadoria Geral de Polícia Marítima, Aeronáutica e de Fronteiras</option>
                                    <option value="CNIG">Conselho Nacional de Imigração</option>
                                    <option value="COREN">Conselho Regional de Enfermagem</option>
                                    <option value="CRA">Conselho Regional de Administração</option>
                                    <option value="CRAS">Conselho Regional de Assistentes Sociais</option>
                                    <option value="CRB">Conselho Regional de Biblioteconomia</option>
                                    <option value="CRC">Conselho Regional de Contabilidade</option>
                                    <option value="CRE">Conselho Regional de Estatística</option>
                                    <option value="CREA">Conselho Regional de Engenharia, Arquitetura e Agronomia</option>
                                    <option value="CRECI">Conselho Regional de Corretores de Imóveis</option>
                                    <option value="CREFIT">Conselho Regional de Fisioterapia e Terapia Ocupacional</option>
                                    <option value="CRF">Conselho Regional de Farmácia</option>
                                    <option value="CRM">Conselho Regional de Medicina</option>
                                    <option value="CRN">Conselho Regional de Nutrição</option>
                                    <option value="CRO">Conselho Regional de Odontologia</option>
                                    <option value="CRP">Conselho Regional de Psicologia</option>
                                    <option value="CRPRE">Conselho Regional de Profissionais de Relações Públicas</option>
                                    <option value="CRQ ">Conselho Regional de Química</option>
                                    <option value="CRRC">Conselho Regional de Representantes Comerciais</option>
                                    <option value="CRMV">Conselho Regional de Medicina Veterinária</option>
                                    <option value="DIC">Diretoria de Identificação Civil</option>
                                    <option value="DIREX">Diretoria Executiva</option>
                                    <option value="DPMAF">Divisão de Polícia Marítima, Área e de Fronteiras</option>
                                    <option value="DPT">Departamento de Polícia Técnica Geral</option>
                                    <option value="IGP">Instituto Geral de Perícias</option>
                                    <option value="IML">Instituto Médico-Legal</option>
                                    <option value="MAE">Ministério da Aeronáutica</option>
                                    <option value="MEX">Ministério do Exército</option>
                                    <option value="MMA">Ministério da Marinha</option>
                                    <option value="OAB">Ordem dos Advogados do Brasil</option>
                                    <option value="PF/POF">Polícia Federal</option>
                                    <option value="PM/POM">Polícia Militar</option>
                                    <option value="SNJ">Secretaria Nacional de Justiça / Departamento de Estrangeiros</option>
                                    <option value="SECC">Secretaria de Estado da Casa Civil</option>
                                    <option value="SEJUSP">Secretaria de Estado de Justiça e Segurança Pública</option>
                                    <option value="SES/EST">Carteira de Estrangeiro</option>
                                    <option value="SSP/SESP">Secretaria de Estado da Segurança Pública</option>
                                    <option value="SJS">Secretaria da Justiça e Segurança</option>
                                    <option value="SJTC">Secretaria da Justiça do Trabalho e Cidadania</option>
                                    <option value="SPTC">Secretaria de Polícia Técnico-Científica</option>
                                </datalist>                            
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group col-md-15">
                                <input class="form-control" list="datalistOptionsRP-uf-doc" name="RP-uf-doc" id="RP-uf-doc" required="required" placeholder="*UF:">
                                <datalist id="datalistOptionsRP-uf-doc">
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </datalist>                            
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group col-md-15">
                            <input class="form-control" type="date" name="RP-data-n" id="RP-data-e" required="required">
                            <span>⚠️(Data de Emissão)</span>
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
                                <span>⚠️(Data de Nascimento)</span>                            
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
                                <input class="form-control" type="text" name="RP-confe" id="RP-confe" required="required" readonly placeholder="*Confederação:">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group col-md-15">
                                <input class="form-control" type="text" name="RP-club" id="RP-club" required="required" readonly placeholder="*Clube:">
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
                                <input class="form-control" type="text" name="RP-cep" id="RP-cep" autocomplete="off" required="required" minlength="8" maxlength="8" placeholder="*CEP:">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group col-md-15">
                                <input class="form-control" type="text" name="RP-pais" id="RP-pais" required="required" autocomplete="off" readonly data-input placeholder="*País:">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group col-md-15">
                            <input class="form-control" list="datalistOptionsRP-uf" name="RP-uf" id="RP-uf" required="required" readonly data-input placeholder="*Estado:">
                                <datalist id="datalistOptionsRP-uf">
                                <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </datalist>   
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group col-md-15">
                                <input class="form-control" type="text" name="RP-cdd" id="RP-cdd" required="required" autocomplete="off" readonly data-input placeholder="*Cidade:">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group col-md-15">
                                <input class="form-control" type="text" name="RP-log" id="RP-log" required="required" autocomplete="off" readonly data-input placeholder="*Logradouro:">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group col-md-15">
                                <input class="form-control" type="text" name="RP-bairro" id="RP-bairro" required="required" autocomplete="off" readonly data-input placeholder="*Bairro:">
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
                                <textarea class="form-control" name="RP-com" id="RP-com" cols="40" rows="3" minlength="20" maxlength="300" placeholder="Complemento:"></textarea>
                                <span>⚠️(Descrição do imóvel, pontos de referência, etc. Obs.: mínimo de 20 caracteres, máximo 300)</span>
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
                                <input class="form-control" type="tel" name="RP-celular" id="RP-celular" required="required" autocomplete="off" placeholder="*Celular:">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group col-md-15">
                                <input class="form-control" type="tel" name="RP-telefone" id="RP-telefone" autocomplete="off" placeholder="Telefone:">
                            </div>
                        </div>
                    </div>
            

                </div>
            </form>



        </div>

        <?php include 'footer.php'?>
        
    </body>
</html>