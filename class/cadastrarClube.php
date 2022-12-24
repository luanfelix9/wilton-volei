<?php
    Class Cadastro{
        private $pdo;
        public $msgErro = "";
        public function conectar($nome, $host, $usuario, $senha){
            global $pdo;
            global $msgErro;
            try{
                $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
            } catch (PDOException $e){
                $msgErro = $e->getMessage();
            }
        }
        public function cadastrarConsulta($usuario, $email, $dataNascimento, $dataConsulta, $telefone, $cabeca0, $cabeca1, $cabeca2, $cabeca3, $cabeca4, $olhos0, $olhos1, $olhos2, $ouvidos0, $ouvidos1, $ouvidos2, $ouvidos3, $ouvidos4, $boca0, $boca1, $boca2, $boca3, $boca4, $dentes0, $dentes1, $dentes2, $dentes3, $dentes4, $mandibula0, $mandibula1, $mandibula2, $mandibula3,  $mandibula4, $pescoco0, $pescoco1, $pescoco2, $pescoco3, $pescoco4){
            global $pdo;
            //verificar se já existe 
            $sql = $pdo->prepare("SELECT id FROM paciente WHERE data_consulta = :d");
            $sql->bindValue(":d",$dataConsulta);
            $sql->execute();
            if($sql->rowCount() > 0)
            {
                return false; // já cadastrada
            }
            else
            {
                //cadastar
                $sql = $pdo->prepare("INSERT INTO paciente (nome, email, data_nascimento, data_consulta, telefone, 
                                                            cabeca01, cabeca02, cabeca03, cabeca04, cabeca05, 
                                                            olhos01, olhos02, olhos03, 
                                                            boca01, boca02, boca03, boca04, boca05, 
                                                            dentes01, dentes02, dentes03, dentes04, dentes05, 
                                                            ouvidos01, ouvidos02, ouvidos03, ouvidos04, ouvidos05, 
                                                            mandibula01, mandibula02, mandibula03, mandibula04, mandibula05, 
                                                            pescoco01, pescoco02, pescoco03, pescoco04 , pescoco05) 
                                      VALUES (:a, :b, :c, :d, :e, 
                                                :cabeca0,    :cabeca1,    :cabeca2,    :cabeca3,    :cabeca4,  
                                                :olhos0,     :olhos1,     :olhos2,  
                                                :boca0,      :boca1,      :boca2,      :boca3,      :boca4, 
                                                :dentes0,    :dentes1,    :dentes2,    :dentes3,    :dentes4, 
                                                :ouvidos0,   :ouvidos1,   :ouvidos2,   :ouvidos3,   :ouvidos4, 
                                                :mandibula0, :mandibula1, :mandibula2, :mandibula3, :mandibula4,
                                                :pescoco0,   :pescoco1,   :pescoco2,   :pescoco3,   :pescoco4)");
                $sql->bindValue(":a",$usuario);
                $sql->bindValue(":b",$email);
                $sql->bindValue(":c",$dataNascimento);
                $sql->bindValue(":d",$dataConsulta);
                $sql->bindValue(":e",$telefone);
                $sql->bindValue(":cabeca0",$cabeca0);
                $sql->bindValue(":cabeca1",$cabeca1);
                $sql->bindValue(":cabeca2",$cabeca2);
                $sql->bindValue(":cabeca3",$cabeca3);
                $sql->bindValue(":cabeca4",$cabeca4);
                $sql->bindValue(":olhos0",$olhos0);
                $sql->bindValue(":olhos1",$olhos1);
                $sql->bindValue(":olhos2",$olhos2);
                $sql->bindValue(":boca0",$boca0);
                $sql->bindValue(":boca1",$boca1);
                $sql->bindValue(":boca2",$boca2);
                $sql->bindValue(":boca3",$boca3);
                $sql->bindValue(":boca4",$boca4);
                $sql->bindValue(":dentes0",$dentes0);
                $sql->bindValue(":dentes1",$dentes1);
                $sql->bindValue(":dentes2",$dentes2);
                $sql->bindValue(":dentes3",$dentes3);
                $sql->bindValue(":dentes4",$dentes4);
                $sql->bindValue(":ouvidos0",$ouvidos0);
                $sql->bindValue(":ouvidos1",$ouvidos1);
                $sql->bindValue(":ouvidos2",$ouvidos2);
                $sql->bindValue(":ouvidos3",$ouvidos3);
                $sql->bindValue(":ouvidos4",$ouvidos4);
                $sql->bindValue(":mandibula0",$mandibula0);
                $sql->bindValue(":mandibula1",$mandibula1);
                $sql->bindValue(":mandibula2",$mandibula2);
                $sql->bindValue(":mandibula3",$mandibula3);
                $sql->bindValue(":mandibula4",$mandibula4);
                $sql->bindValue(":pescoco0",$pescoco0);
                $sql->bindValue(":pescoco1",$pescoco1);
                $sql->bindValue(":pescoco2",$pescoco2);
                $sql->bindValue(":pescoco3",$pescoco3);
                $sql->bindValue(":pescoco4",$pescoco4);
                $sql->execute();
                return true;
            }
        }
        public function logar($email, $senha)
        {
            global $pdo;
            //verificar email e senha
            $sql = $pdo->prepare("SELECT ID_CLUBE FROM clube WHERE EMAIL_CLUBE = :b AND SENHA_CLUBE = :c ");
            $sql->bindValue(":b",$email);
            $sql->bindValue(":c",$senha);
            $sql->execute();
            if($sql->rowCount() > 0)
            {
               //entrar no sistema
               $dado = $sql->fetch();
               session_start();
               $_SESSION['ID_CLUBE'] = $dado['ID_CLUBE'];
               return true; //entrou no sistema
            }
            else
            {
                return false;// não foi possivel logar
            }
        }
        public function cadastrar($nome, $email, $senhaFinal, $telefone, $data)
        {
            global $pdo;
            //verificar email e senha
            $sql = $pdo->prepare("SELECT ID_CLUBE FROM clube WHERE EMAIL_CLUBE = :b AND SENHA_CLUBE = :c ");
            $sql->bindValue(":b",$email);
            $sql->bindValue(":c",$senhaFinal);
            $sql->execute();
            if($sql->rowCount() > 0)
            {
                return false; // já cadastrada 
            }
            else
            {
                //cadastar
                $sql = $pdo->prepare("INSERT INTO clube (NOME_CLUBE, EMAIL_CLUBE, CNPJ_CLUBE, SENHA_CLUBE, SIGLA_CLUBE, DATA_CRIACAO_CLUBE, TELEFONE_CLUBE, CELULAR_CLUBE, SITE_CLUBE, LOGRADOURO_CLUBE, BAIRRO_CLUBE, CIDADE_CLUBE, ESTADO_CLUBE, CEP_CLUBE, NUMERO_CLUBE, COMPLEMENTO_CLUBE, VQM_CLUBE, VQF_CLUBE, VAM_CLUBE VAF_CLUBE, FL_CLUBE) VALUES (:a, :b, :c, :d, :e)");
                $sql->bindValue(":nc",$nome);
                $sql->bindValue(":ec",$email);
                $sql->bindValue(":c",$senhaFinal);
                $sql->bindValue(":d",$telefone);
                $sql->bindValue(":e",$data);
                $sql->execute();
                return true;
            }
        }
    }
?>