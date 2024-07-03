<?php
session_start();
require_once 'PHP/conexao.php';
require_once './HTML/nav.html';
include_once 'PHP/funcoes.php';
 
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
 
<link rel="stylesheet" href="css/style-index.css" />
<link rel="stylesheet" href="css/styleindex.css">
</head>
<!-- Carrosel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://1.bp.blogspot.com/-r-5ZXWBQhbg/X-ck74R8eqI/AAAAAAAACqo/R0AhCI93UsEkzCE6fowy1mQAzTfGgrxvwCLcBGAsYHQ/s1400/376370--bridgerton-nova-serie-de-epoca-da-net-amp_article_image-1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://www.ofuxico.com.br/wp-content/uploads/2022/08/maria-bruaca-isabel-teixeira-chorando-pantanal.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<body>
</div>
</div>
 
<div class="col-xl-12">
<div class="mobile_menu d-block d-lg-none"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</header>
<main>
<section class="our-client section-padding best-selling">
<div class="container">
<div class="row justify-content-between">
<div class="col-xl-5 col-lg-5 col-md-12">
 
<div class="section-tittle  mb-40">
<h2>Populares</h2>
</div>
</div>
<div class="col-xl-7 col-lg-7 col-md-12">
<div class="nav-button mb-40">
 
<nav>
<div class="nav nav-tabs" id="nav-tab" role="tablist" >
<a class="nav-link active" id="nav-one-tab" data-bs-toggle="tab" href="#nav-one" role="tab" aria-controls="nav-one" aria-selected="true" >Tudo</a>
<a class="nav-link" id="nav-two-tab" data-bs-toggle="tab" href="php/Romance.php" role="tab" aria-controls="nav-two" aria-selected="tru">Romance</a>
<a class="nav-link" id="nav-three-tab" data-bs-toggle="tab" href="#nav-three" role="tab" aria-controls="nav-three" aria-selected="false">Ação</a>
<a class="nav-link" id="nav-four-tab" data-bs-toggle="tab" href="#nav-four" role="tab" aria-controls="nav-four" aria-selected="false">Ficção científica</a>
<a class="nav-link" id="nav-five-tab" data-bs-toggle="tab" href="#nav-five" role="tab" aria-controls="nav-five" aria-selected="false">História</a>
</div>
</nav>
 
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
$b->Livro();
?>
<div class="row">
<div class="col-xl-12">
<div class="more-btn text-center mt-15"><a href="php/pesquisa.php" class="border-btn border-btn2 more-btn2">Ver mais</a></div> 
</div>
</div>
</div>
<div class="services-area2 top-padding">
<div class="container">
<div class="row">
<div class="col-xl-9 col-lg-9 col-md-8">
<div class="row">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- <footer>
<div class="footer-wrappper section-bg">
<div class="footer-area footer-padding">
<div class="container">
<div class="row justify-content-between">
<div class="col-xl-3 col-lg-5 col-md-4 col-sm-6">
<div class="single-footer-caption mb-50">
<div class="single-footer-caption mb-30">
 
<div class="footer-logo mb-25">
<a href="index.html"><img src="assets/img/logo/xlogo2_footer.png.pagespeed.ic.wksTOD3AoG.webp" alt="" data-pagespeed-url-hash="2868754985" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
</div>
<div class="footer-tittle">
<div class="footer-pera">
<p>Get the breathing space now, and we’ll extend your term at the other end year for go.</p>
</div>
</div>
 
<div class="footer-social">
<a href="https://bit.ly/sai4ull"><i class="fab fa-facebook"></i></a>
<a href="#"><i class="fab fa-instagram"></i></a>
<a href="#"><i class="fab fa-linkedin-in"></i></a>
<a href="#"><i class="fab fa-youtube"></i></a>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
<div class="single-footer-caption mb-50">
<div class="footer-tittle">
<h4>Book Category</h4>
<ul>
<li><a href="#">History</a></li>
<li><a href="#">Horror - Thriller</a></li>
<li><a href="#">Love Stories</a></li>
<li><a href="#">Science Fiction</a></li>
<li><a href="#">Business</a></li>
</ul>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="single-footer-caption mb-50">
<div class="footer-tittle">
<h4>&nbsp;</h4>
<ul>
<li><a href="#">Biography</a></li>
<li><a href="#">Astrology</a></li>
<li><a href="#">Digital Marketing</a></li>
<li><a href="#">Software Development</a></li>
<li><a href="#">Ecommerce</a></li>
</ul>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
<div class="single-footer-caption mb-50">
<div class="footer-tittle">
<h4>Site Map</h4>
<ul class="mb-20">
<li><a href="#">Home</a></li>
<li><a href="#">About Us</a></li>
<li><a href="#">FAQs</a></li>
<li><a href="#">Blog</a></li>
<li><a href="#">Contact</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
 
<div class="footer-bottom-area">
<div class="container">
<div class="footer-border">
<div class="row d-flex align-items-center">
<div class="col-xl-12 ">
</div>
</div>
</div>
</div>
</div>
</div>
</footer> -->
 
<div id="back-top">
<a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>
 
 
<script src="js/script-index.js"></script>
<script src="js/scriptindex.js"></script>
<script src="assets/js/popper.min.js+bootstrap.min.js.pagespeed.jc.RMqsw48A_a.js"></script><script>eval(mod_pagespeed_usVz_HYIFh);</script>
<script>eval(mod_pagespeed_64J4x1U9Lt);</script>
 
<script src="assets/js/owl.carousel.min.js+slick.min.js.pagespeed.jc.8p3VYxlcxb.js"></script><script>eval(mod_pagespeed_2b_kILWYuf);</script>
<script>eval(mod_pagespeed_YcgqpOO3k2);</script>
<script src="assets/js/jquery.slicknav.min.js+wow.min.js+jquery.magnific-popup.js+jquery.nice-select.min.js+jquery.counterup.min.js+waypoints.min.js.pagespeed.jc.gxrxPo5MLt.js"></script><script>eval(mod_pagespeed_W070UA44Fy);</script>
 
<script>eval(mod_pagespeed_HHFEHFyfva);</script>
<script>eval(mod_pagespeed_He4JmNoJSL);</script>
<script>eval(mod_pagespeed_Vq55GYBaD4);</script>
<script>eval(mod_pagespeed_urzCQ$ljEK);</script>
<script>eval(mod_pagespeed_yBL9chaY8Z);</script>
<script src="assets/js/price_rangs.js+contact.js.pagespeed.jc.JVG_0UpWoX.js"></script><script>eval(mod_pagespeed_6gHvth7EP8);</script>
 
<script>eval(mod_pagespeed_gVyWNPnP1a);</script>
<script src="assets/js/jquery.form.js+jquery.validate.min.js+mail-script.js+jquery.ajaxchimp.min.js+plugins.js+main.js.pagespeed.jc.FlL1_wvPXx.js"></script><script>eval(mod_pagespeed_WxueWYkioV);</script>
<script>eval(mod_pagespeed_JeTX5oy9W7);</script>
<script>eval(mod_pagespeed_Dfx$DMKuSV);</script>
<script>eval(mod_pagespeed_In2a_xtXil);</script>
 
<script>eval(mod_pagespeed_ADDajFRwXo);</script>
<script>eval(mod_pagespeed_R473QNJAOB);</script>
 
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
 
  gtag('config', 'UA-23581568-13');
</script>
<!-- JavaScript Bundle with Popper -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"72361e183c18428c","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.6.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>
