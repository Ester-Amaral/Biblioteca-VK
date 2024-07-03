<?php
session_start();
include_once 'conexao.php';
include_once 'funcoes.php';

$b = new Biblioteca();

?>
<!doctype html>
<html lang="pt-BR">
<head>
<title>Cadastre-se</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../CSS/styleLogin.css">
<style>
    #estado{
        display: block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    #estado {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }
  #estado {
    background-color: transparent;
    border: 0; }
 #estado:focus {
    color: #495057;
    background-color: #fff;
    border-color: #80bdff;
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
  #estado{
    color: #6c757d;
    opacity: 1; }
    #estado {
    color: #6c757d;
    opacity: 1; }
    #estado{
    color: #6c757d;
    opacity: 1; }
  .form-control::placeholder {
    color: #6c757d;
    opacity: 1; }
    #estado:disabled, #estado[readonly] {
    background-color: #e9ecef;
    opacity: 1; }

 select#estado:focus{
  color: #495057;
  background-color: #fff; }

</style>
</head>
<header class="text-light">
    </header>
<body class="img js-fullheight">
<section class="ftco-section">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 text-center mb-5">
</div>
</div>
<div class="row justify-content-center">
<div class="col-md-6 col-lg-4">
<div class="login-wrap p-0">
<h3 class="mb-4 text-center titulo">Cadastre-se</h3>
<form action=" " class="signin-form" method="POST" target="mensagem">
<div class="form-group">
<input type="text" class="form-control" placeholder="Nome do Usuário" name="username" required>
</div>
<div class="form-group">
    <input type="text" id="rg" class="form-control" placeholder="RG" name="rg" required>
</div>
<div class="form-group">
    <input type="email" id="email" class="form-control" placeholder="Email" name="email" required>
</div>
<div class="form-group">
    <input type="text" id="telefone" class="form-control" placeholder="Telefone" name="telefone" required>
</div>
<div class="form-group">
    <input type="tex" id="cidade" class="form-control" placeholder="Cidade" name="cidade" required>
</div>
<div class="form-group">
    <select id="estado"  name="estado" required >
    <option value="" >Selecione seu sestado:</option>
      <option value="AC">Acre – AC</option>
        <option value="AL">Alagoas – AL</option>
        <option value="AP">Amapá – AP</option>
        <option value="AM">Amazonas – AM</option>
        <option value="BA">Bahia – BA</option>
        <option value="CE">Ceará – CE</option>
        <option value="DF">Distrito Federal – DF</option>
        <option value="ES">Espírito Santo – ES</option>
        <option value="GO">Goiás – GO</option>
        <option value="MA">Maranhão – MA</option>
        <option value="MT">Mato Grosso – MT</option>
        <option value="MS">Mato Grosso do Sul – MS</option>
        <option value="MG">Minas Gerais – MG</option>
        <option value="PA">Pará – PA</option>
        <option value="PB">Paraíba – PB</option>
        <option value="PR">Paraná – PR</option>
        <option value="PE">Pernambuco – PE</option>
        <option value="PI">Piauí – PI</option>
        <option value="PR">Rio de Janeiro – RJ</option>
        <option value="RN">Rio Grande do Norte – RN</option>
        <option value="RS">Rio Grande do Sul – RS</option>
        <option value="RO">Rondônia – RO</option>
        <option value="RR">Roraima – RR</option>
        <option value="SC">Santa Catarina – SC</option>
        <option value="SP">São Paulo – SP</option>
        <option value="SE">Sergipe – SE</option>
        <option value="TO">Tocantins – TO</option>
      </select>
</div>
<div class="form-group">
    <input type="tex" id="endereco" class="form-control" placeholder="Rua" name="endereco" required>
</div>
<div class="form-group">
<input id="password-field" type="password" class="form-control" placeholder="Senha" name="senha" required>
<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
</div>
<div class="form-group">
<button type="submit" class="form-control botao">CADASTRAR</button>
</div>
</form>
<p class="w-100 text-center">&mdash; Ou faça login aqui &mdash;</p>
<div class="social d-flex text-center">
<a href="FormLogin.php" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span>Conecte-se</a>
<a href="../index.php" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span>Home</a>
</div>
</div>
</div>
</div>
</div>
<?php
 if(isset($_POST['username']) && !empty($_POST['username']) && 
 isset($_POST['email']) && !empty($_POST['email']) &&
 isset( $_POST['senha']) && !empty($_POST['senha']) &&
 isset($_POST['telefone']) && !empty($_POST['telefone']) &&
 isset($_POST['cidade']) && !empty($_POST['cidade']) &&
 isset($_POST['estado']) && !empty($_POST['estado']) &&
 isset($_POST['endereco']) && !empty($_POST['endereco'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];
    $rg = $_POST['rg'];

    if($b->cadastrar($username, $email, $senha, $telefone, $cidade, $estado, $endereco,$rg) == true){
    }else{
        header('location: FormCadastro.php');
    }
 }
?>
</section>
<script src="js/jquery.min.js"></script>
<script src="js/popper.js+bootstrap.min.js+main.js.pagespeed.jc.9eD6_Mep8S.js"></script><script>eval(mod_pagespeed_T07FyiNNgg);</script>
<script>eval(mod_pagespeed_zB8NXha7lA);</script>
<script>eval(mod_pagespeed_xfgCyuItiV);</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"66d64ef99d6551ed","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.6.0","si":10}'></script>
</body>
</html>