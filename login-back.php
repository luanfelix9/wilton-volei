<?php
    require_once 'class/cadastrarClube.php';
    
    $u = new Cadastro;
    
     
    if(isset($_POST["entrar"])){
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']); 
        // $senha = MD5($_POST['senha']);
        //teste do vazio
        if(!empty($email) && !empty($senha)){
            $u->conectar("gerencia_cbvd","gerencia_cbvd.mysql.dbaas.com.br","gerencia_cbvd","Cbvd_2023#");
            if($u->logar($email,$senha)){
                header('Location: gerenciador.php');
            }
            else{
                $_SESSION['erro_digitado'] = true;
                header('Location: index.php');         
            }
        }else{
            $_SESSION['nao_login'] = true;
            header('Location: index.php');
        }
    }
?>