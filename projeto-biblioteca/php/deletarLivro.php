<?php
session_start();
require_once 'conexao.php';
require_once '../HTML/nav.html';
include_once 'funcoes.php';
$b= new Biblioteca();

if(isset($_POST["liv"]) && !empty($_POST["liv"])){
    $liv = $_POST['liv'];
    if($b->deletarLivro($liv)== true){
        echo '<div class="alert alert-success" role="alert">
        Livro excluído com sucesso!
      </div>';
    }
}