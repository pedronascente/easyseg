<?php   defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="pt-BR" class="drag-drop-item">
<head>
  <!--[if lt IE 7]>
  <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script>
  <![endif]-->

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="e">
  <meta name="author" content="Easyseg">

  <!--compartilhar facebook--> 
  <meta property="og:site_name" content="celke">
  <meta property="og:locale" content="pt_BR">
  <meta property="fb:admins" content="100009416086586">
  <meta property="og:url" content="https://www.rastreadorvolpato.com/easyseg/">
  <meta property="og:title" content="Easyseg Segurança">
  <meta property="og:description" content="Faça Agora, Sua Cotação Gratis. ">
  <meta property="og:image" content="https://www.rastreadorvolpato.com/easyseg/assets/img/logo.jpg">
   <!--compartilhar Twitter Card--> 
  
<!--
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="Conta do Twitter do site (incluindo arroba)">
  <meta name="twitter:title" content="Título da página">
  <meta name="twitter:description" content="Descrição da página. No máximo 200 caracteres">
-->

  <!--imagens largas para o Twitter Summary Card precisam ter pelo menos 280x150px-->
<!--
  <meta name="twitter:image" content="http://www.example.com/image.jpg">
  <meta name="twitter:creator" content="Conta do Twitter do autor do texto (incluindo arroba)">
-->
  <title>Easyseg Segurança</title>

  <!-- Favicons-->
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" type="image/x-icon" href="assets/img/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?=base_url('assets/img/apple-touch-icon-72x72-precomposed.png');?>">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?=base_url('assets/img/apple-touch-icon-114x114-precomposed.png');?>">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?=base_url('assets/img/apple-touch-icon-144x144-precomposed.png')?>">

  <!-- GOOGLE WEB FONT -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <?=isset($assets['css'])?$assets['css']:'';?>
  <?=isset($assets['javaScriptHeader'])?$assets['javaScriptHeader']:'';?>
</head>
<body>
      <?=$content; ?>                   
      <?=isset($assets['javaScriptFooter'])?$assets['javaScriptFooter']:'';?>        
</body>
</html>