<?php
$localhost = "localhost";
$user = "root";
$passw = "";
$banco = "bd_biblioteca";

global $pdo;
try{
    //testa conexão
    $pdo = new PDO("mysql:dbname=" .$banco. "; host=".$localhost, $user, $passw);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOExecption $e){
    echo "ERRO: ".$e->getMessage();
    exit;
}

?>