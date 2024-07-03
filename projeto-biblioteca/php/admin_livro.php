<?php
session_start();
require_once 'conexao.php';
require_once '../HTML/nav.html';
include_once 'funcoes.php';
$b= new Biblioteca();
?>
<link rel="stylesheet" href="../CSS/estilo_tabelas.css">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
					<div class="table-wrap">
						<table class="table table-responsive-xl" style="position: absolute; top: 200px;">
						    <tr>
						    	<th>Titulo</th>
						      <th>ISBN</th>
                              <th>Autor</th>
						      <th>Editora</th>
                              <th>Edição</th>
                              <th>Idioma</th>
                              <th>Nº Pág</th>
							  <th>Ação</th>
						    </tr>

<?php
$b->tableLivro();
?>