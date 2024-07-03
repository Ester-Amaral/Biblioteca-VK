<?php
session_start();
require_once 'conexao.php';
require_once '../HTML/nav.html';
include_once 'funcoes.php';
$b= new Biblioteca();

if(isset($_POST["id"]) && !empty($_POST["id"])){
    $id = $_POST["id"];
$b->preencher($id);
}
?>
