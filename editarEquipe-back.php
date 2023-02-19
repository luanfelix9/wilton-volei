<?php
    require_once 'class/cadastrarClube.php';
    
    $u = new Cadastro;
    
     
    if(isset($_POST["editar"])){
        $nome = addslashes($_POST['nomeRC']);
        $email = addslashes($_POST['emailRC']);
        $senha = addslashes($_POST['senhar']);
        $senhaConfirmacao = addslashes($_POST['senhar2']);
        $cnpj = addslashes($_POST['cnpjRC']);
        $sigla = addslashes($_POST['siglaRC']);
        $data = addslashes($_POST['dataF']);
        $fone = addslashes($_POST['foneRC']);
        $cell = addslashes($_POST['cellRC']);
        $site = addslashes($_POST['siteRC']);
        $logradouro = addslashes($_POST['lograRC']);
        $bairro = addslashes($_POST['bairroRC']);
        $cidade = addslashes($_POST['cidade']);
        $estado = addslashes($_POST['uf']);
        $cep = addslashes($_POST['cepRC']);
        $num = addslashes($_POST['nRC']);
        $complemento = addslashes($_POST['complemento']);
        $fgClube = 0;
        if (empty(addslashes($_POST['vqm']))){
            $vqm = 0;
        } else {
            $vqm = 1;
        }
        if (empty(addslashes($_POST['vqf']))){
            $vqf = 0;
        } else {
            $vqf = 1;
        }
        if (empty(addslashes($_POST['vam']))){
            $vam = 0;
        } else {
            $vam = 1;
        }
        if (empty(addslashes($_POST['vaf']))){
            $vaf = 0;
        } else {
            $vaf = 1;
        }
        if(!empty($nome) && !empty($email) && !empty($senha) && !empty($senhaConfirmacao) && !empty($cnpj) && !empty($data) && !empty($logradouro) && !empty($bairro) && !empty($cidade) && !empty($estado) && !empty($cep) ){
            if($senha == $senhaConfirmacao){
                $u->conectar("gerencia_cbvd","gerencia_cbvd.mysql.dbaas.com.br","gerencia_cbvd","Cbvd_2023#");
                if($u->editarEquipe($nome, $email, $senha, $cnpj, $sigla, $data, $fone, $cell, $site, $logradouro, $bairro, $cidade, $estado, $cep, $num, $complemento, $fgClube, $vqm, $vqf, $vam, $vaf)){
                    if($_SESSION['editado_sucesso'] = true){
                        $_SESSION['editado_sucesso'];
                        header('Location: index.php');
                    } else {
                        header('Location: editarEquipe.php'); 
                    }
                }
                else{
                    $_SESSION['erro_conexao'] = true;
                    header('Location: editarEquipe.php');         
                }
            } else {
                $_SESSION['senha_diferente'] = true;
                header('Location: editarEquipe.php');
            }
        } else {
            $_SESSION['nao_login'] = true;
            header('Location: editarEquipe.php');
        }
    }