<?php
session_start();
require_once 'conexao.php';
include_once 'funcoes.php';

if(isset($_SESSION['tipo'])&& $_SESSION['tipo'] = 'admin'){
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administração</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Use Minified Plugins Version For Fast Page Load -->
    <link rel="stylesheet" type="text/css" media="screen" href="../css/admin.css" />
</head>
<body>
    <div class="card">
        <h1>Selecione uma das opções abaixo:</h1>
        <ul>
        <li><button class="botao"><a href="admin_user.php">Consultar usuários</a></button></li>
        <li><button class="botao" id="medio"><a href="admin_livro.php">Consultar livros</a></button></li>
        <li><button class="botao" id=meio><a href="CadastroLivro.php">Adicionar um novo Livro</a></button></li>
        <li><button class="botao" id="escuro"><a href="admin_emprestimo.php">Consultar empréstimos</a></button></li>
</ul>
    </div>
</body>
<?php
}else{
    require_once '../HTML/nav.html';
    echo '<div class="alert alert-warning" role="alert">
    Acesso restrito apenas a administradores!
    </div>';
}
?>