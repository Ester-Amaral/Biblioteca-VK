<?php
session_start();
require_once 'conexao.php';
require_once '../HTML/nav.html';
include_once 'funcoes.php';
$b= new Biblioteca();

if(isset($_POST["emp"]) && !empty($_POST["emp"])){
    $emp = $_POST['emp'];
    if($b->deletar($emp)== true){
        echo '<div class="alert alert-success" role="alert">
        Dados removidos com sucesso!
      </div>';
    }
}