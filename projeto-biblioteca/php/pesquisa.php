<?php
session_start();
require_once 'conexao.php';
require_once '../HTML/nav.html';
include_once 'funcoes.php';
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Biblioteca VK</title>
<!--meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="assets/img/icon/xfavicon.png.pagespeed.ic.OYy94fDeJN.webp"-->
<!-- CSS only -->
<!-- link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"-->
 
<link rel="stylesheet" href="../css/style-index.css" />
<link rel="stylesheet" href="../css/styleindex.css">
</head>
<main>
<section class="our-client section-padding best-selling">
<div class="container">
<div class="row justify-content-between">
<div class="col-xl-5 col-lg-5 col-md-12">
</div>
</div>
</div>
</div>
<div class="container">
<div class="tab-content" id="nav-tabContent">
<div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
 
<div class="row">
<?php
$b = new Biblioteca();

    $b->Livros();
?>