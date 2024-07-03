<?php
session_start();
require_once 'conexao.php';
require_once '../HTML/nav.html';
include_once 'funcoes.php';
$b= new Biblioteca();

if(isset($_POST["idUsuario"]) && !empty($_POST["idUsuario"])){
    $idUsuario = $_POST["idUsuario"];
    $NomeUsuario = $_POST["nome"];
    $RgUsuario = $_POST["rg"];
    $idLivro = $_POST["idLivro"];
    $isbn = $_POST["isbn"];
    $hoje = date('d/m/Y');
    $data = date('d/m/Y');
    $dev = date("d/m/Y", strtotime("+10 days",strtotime(date('d/m/Y'))));
        if($b->pesqui($idLivro) == true){
      echo '<div class="alert alert-warning" role="alert">
    Ah que pena, este livro está indisponível no momento!
  </div>';
     }else{
    if($b->emprestar( $idUsuario, $NomeUsuario, $RgUsuario, $idLivro, $isbn,$hoje, $dev) == true){
        echo '<div class="alert alert-success" role="alert">
        Livro alugado com sucesso! Por favor, atente-se a data de devolução!
      </div>';
    }


}
}else{
    echo '<div class="alert alert-warning" role="alert">
    Por favor, faça login para continuar!
  </div>';}
?>