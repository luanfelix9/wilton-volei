<?php
    require_once 'class/cadastrarClube.php';
    
    $u = new Cadastro;
    
     
    if(isset($_POST["status"])){
        $cnpj = addslashes($_POST['$dado->CNPJ_CLUBE']);
        if(!empty($cnpj)){
            $u->conectar("gerencia_cbvd","gerencia_cbvd.mysql.dbaas.com.br","gerencia_cbvd","Cbvd_2023#");
            if($u->status($cnpj)){
                $_SESSION['status_novo'] = true;
                header('Location: listarEquipe.php'); 
            }
        }
    }