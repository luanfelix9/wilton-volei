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

        public function editarEquipe($nome, $email, $senha, $cnpj, $sigla, $data, $fone, $cell, $site, $logradouro, $bairro, $cidade, $estado, $cep, $num, $complemento, $fgClube, $vqm, $vqf, $vam, $vaf){
            global $pdo;
            //cadastar
            $sql = $pdo->prepare("UPDATE clube SET NOME_CLUBE = :a, EMAIL_CLUBE = :b, CNPJ_CLUBE = :d, SENHA_CLUBE = :c, SIGLA_CLUBE = :e, DATA_CRIACAO_CLUBE = :f, TELEFONE_CLUBE = :g, CELULAR_CLUBE = :h, SITE_CLUBE = :i, LOGRADOURO_CLUBE = :j, BAIRRO_CLUBE = :k, CIDADE_CLUBE = :l, ESTADO_CLUBE = :m, CEP_CLUBE = :n, NUMERO_CLUBE = :o, COMPLEMENTO_CLUBE = :p, VQM_CLUBE = :r, VQF_CLUBE = :s, VAM_CLUBE = :t, VAF_CLUBE = :u, FL_CLUBE = :q WHERE CNPJ_CLUBE = :d AND FL_ADMINISTRADOR = 0 AND FL_CLUBE = 1");
            $sql->bindValue(":a",$nome);
            $sql->bindValue(":b",$email);
            $sql->bindValue(":c",$senha);
            $sql->bindValue(":d",$cnpj);
            $sql->bindValue(":e",$sigla);
            $sql->bindValue(":f",$data);
            $sql->bindValue(":g",$fone);
            $sql->bindValue(":h",$cell);
            $sql->bindValue(":i",$site);
            $sql->bindValue(":j",$logradouro);
            $sql->bindValue(":k",$bairro);
            $sql->bindValue(":l",$cidade);
            $sql->bindValue(":m",$estado);
            $sql->bindValue(":n",$cep);
            $sql->bindValue(":o",$num);
            $sql->bindValue(":p",$complemento);
            $sql->bindValue(":q",$fgClube);
            $sql->bindValue(":r",$vqm);
            $sql->bindValue(":s",$vqf);
            $sql->bindValue(":t",$vam);
            $sql->bindValue(":u",$vaf);
            $sql->execute();
            $_SESSION['editado_sucesso'] = true;
            return true;
        }

        public function logar($email, $senha) {
            global $pdo;
            //verificar email e senha
            $sql = $pdo->prepare("SELECT ID_CLUBE FROM clube WHERE EMAIL_CLUBE = :b AND SENHA_CLUBE = :c AND FL_CLUBE = 1");
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
        // public function cadastrar($nome, $email, $senhaFinal, $telefone, $data)
        // {
        //     global $pdo;
        //     //verificar email e senha
        //     $sql = $pdo->prepare("SELECT ID_CLUBE FROM clube WHERE EMAIL_CLUBE = :b AND SENHA_CLUBE = :c ");
        //     $sql->bindValue(":b",$email);
        //     $sql->bindValue(":c",$senhaFinal);
        //     $sql->execute();
        //     if($sql->rowCount() > 0)
        //     {
        //         return false; // já cadastrada 
        //     }
        //     else
        //     {
        //         //cadastar
        //         $sql = $pdo->prepare("INSERT INTO clube (NOME_CLUBE, EMAIL_CLUBE, CNPJ_CLUBE, SENHA_CLUBE, SIGLA_CLUBE, DATA_CRIACAO_CLUBE, TELEFONE_CLUBE, CELULAR_CLUBE, SITE_CLUBE, LOGRADOURO_CLUBE, BAIRRO_CLUBE, CIDADE_CLUBE, ESTADO_CLUBE, CEP_CLUBE, NUMERO_CLUBE, COMPLEMENTO_CLUBE, VQM_CLUBE, VQF_CLUBE, VAM_CLUBE VAF_CLUBE, FL_CLUBE) VALUES (:a, :b, :c, :d, :e)");
        //         $sql->bindValue(":nc",$nome);
        //         $sql->bindValue(":ec",$email);
        //         $sql->bindValue(":c",$senhaFinal);
        //         $sql->bindValue(":d",$telefone);
        //         $sql->bindValue(":e",$data);
        //         $sql->execute();
        //         return true;
        //     }
        // }
    }
?>