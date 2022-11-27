<?php
    date_default_timezone_set('America/Maceio');
    $Ano = date('Y');
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Sistema de cadastro e gerenciamento de equipes.">
        <meta name="keywords" content="CAMPEONATO BRASILEIRO DE VOLEIBOL SENTADO, CBVD">
        <meta name="author" content="Luan Felix">
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="content-language" content="pt-br" />
        <meta http-equiv="imagetoolbar" content="no" />
        <meta name="copyright" content="© CBVD" />
        <meta name="robots" content="all">

        <title><?php echo $titulo?></title>

        <!--Icone na Barra do Site-->
        <link rel="shortcut icon" href="/img/Login/icone.png" />
        
        <!--Bootstrep 5-->
        <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.min.css"></link>
        <script src="/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

        <!--CSS Próprio-->
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/login.css">
        <link rel="stylesheet" href="/css/rodape.css">

    </head>
    <body>
