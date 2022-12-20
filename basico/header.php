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
        <meta name="author" content="Luan Felix e Vitor">
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="content-language" content="pt-br" />
        <meta http-equiv="imagetoolbar" content="no" />
        <meta name="copyright" content="© CBVD" />
        <meta name="robots" content="all">

        <title><?php echo $titulo?></title>

        <!--Icone na Barra do Site-->
        <link rel="shortcut icon" href="../img/Login/icone.png" />
        
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
        
        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

