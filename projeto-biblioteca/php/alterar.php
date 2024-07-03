<?php
session_start();
require_once 'conexao.php';
require_once '../HTML/nav.html';
include_once 'funcoes.php';
$b= new Biblioteca();

if(isset($_POST["emp"]) && !empty($_POST["emp"])){
    $emp = $_POST['emp'];
    $data = $_POST['data'];
    if($b->alterar($emp,$data)== true){
        echo '<div class="alert alert-success" role="alert">
        Dados alterados com sucesso!
      </div>';
    }
}