<?php
    Class Biblioteca{

      //função para logar usuário
    public function logar($email,$senha){
        global $pdo;
   
        $sql = "SELECT * FROM usuario WHERE email= :email AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":senha", md5($senha));
        $sql->execute();
  
       if($sql->rowCount() >0){
        $usuario = $sql->fetch();
        
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['Nome'];
        $_SESSION['email'] = $usuario['Email'];
        $_SESSION['telefone'] = $usuario['Telefone']; 
        $_SESSION['cidade'] = $usuario['Cidade']; 
        $_SESSION['estado'] = $usuario['Estado']; 
        $_SESSION['endereco'] = $usuario['Endereco'];
        $_SESSION['rg'] = $usuario['Rg'];
        $_SESSION['senha'] = md5($usuario['Senha']); 
        $_SESSION['tipo'] = $usuario['Tipo'];
        
          return true;
       }else{
        return false;
      }
    } 
    
      //função para cadastrar usuário
      public function cadastrar($username, $email, $senha, $telefone, $cidade, $estado, $endereco,$rg){
        global $pdo;
   
        $sql = "INSERT INTO usuario (Nome, Email, Telefone, Cidade, Estado, Endereco, Rg, Senha) VALUES (:nome,:email,:telefone,:cidade,:estado,:endereco,:rg,:senha)";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":nome", $username);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":telefone", $telefone);
        $sql->bindValue(":cidade", $cidade);
        $sql->bindValue(":estado", $estado);
        $sql->bindValue(":endereco", $endereco);
        $sql->bindValue(":rg", $rg);
        $sql->bindValue(":senha", md5($senha));
        $sql->execute();
  
       if($sql->rowCount() >0){
        $usuario = $sql->fetch();
          return true;
       }else{
        return false;
      }
    }

  //teste 18387
  public function larry($titulo, $ISBN,$idioma, $paginas, $edicao, $autor, $editora, $genero, $capa, $descricao){
    global $pdo;

    $sql = "INSERT INTO `livro`( `Titulo`, `ISBN`,`Idioma`,`Paginas`, `edicao`, `autor`, `editora`, `CodCategoria`, `Capa`, `Descricao`) VALUES (:t, :i, :id, :p, :e, :a, :ed, :g, :c, :d)";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":t", $titulo);
    $sql->bindValue(":i", $ISBN);
    $sql->bindValue(":id", $idioma);
    $sql->bindValue(":p", $paginas);
    $sql->bindValue(":e", $edicao);
    $sql->bindValue(":a", $autor);
    $sql->bindValue(":ed", $editora);
    $sql->bindValue(":g", $genero);
    $sql->bindValue(":c", $capa);
    $sql->bindValue(":d", $descricao);
    $sql->execute();
    if($sql->rowCount() >0){
      $livro = $sql->fetch();
      
        return true;
     }else{
      return false;
    }
   }
  
   //função para pesquisar usuário
   public function buscar($username, $email){
    global $pdo;
       $vetor = array();
       $sql = $pdo->query("SELECT * FROM usuario");
       $vetor = $sql->FetchAll(PDO::FETCH_ASSOC);
       return $vetor;
     }

// mostrar todos os livros

public function Livros(){
  global $pdo;
   
  $sql = "SELECT * FROM `livro` order by Titulo";
  $sql = $pdo->prepare($sql);
  $sql->execute();
  //$vetor = $sql->Fetch(PDO::FETCH_OBJ);
      
  for($i=0; $vetor = $sql->fetch(PDO::FETCH_OBJ); $i++){
  //echo "<img src=".$vetor->Capa." alt='src'>";

  echo'
  <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
  <div class="properties pb-30">
  <div class="properties-card">
  <div class="properties-img">
  <a href="book-details.html"><img src="'.$vetor->Capa.'" alt="" data-pagespeed-url-hash="3319296635" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
  </div>
  <div class="properties-caption properties-caption2">
  <form action="php/book-details.php" method="post">
  <input type="hidden" value="'.$vetor->Id.'" name="id">
  <button type="submit"
  style="background-color: Transparent;background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden;
    outline:none;"><h3><a>'.$vetor->Titulo.'</a></h3>
  </form><p>'.$vetor->Autor.'</p>
  <div class="properties-footer d-flex justify-content-between align-items-center">
  <div class="review">
  <div class="rating">
  </div>
  </div>
  <div class="price">
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>';
  }
}

public function Livro(){
  global $pdo;
   
  $sql = "SELECT * FROM `livro`";
  $sql = $pdo->prepare($sql);
  $sql->execute();
  $i = 0;  

  while($i< 6){
  //echo "<img src=".$vetor->Capa." alt='src'>";
 $vetor = $sql->Fetch(PDO::FETCH_OBJ);
  echo'
  <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
  <div class="properties pb-30">
  <div class="properties-card">
  <div class="properties-img">
  <a href="book-details.html"><img src="'.$vetor->Capa.'" alt="" data-pagespeed-url-hash="3319296635" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
  </div>
  <div class="properties-caption properties-caption2">
  <form action="php/book-details.php" method="post">
  <input type="hidden" value="'.$vetor->Id.'" name="id">
  <button type="submit"
  style="background-color: Transparent;background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden;
    outline:none;"><h3><a>'.$vetor->Titulo.'</a></h3>
  </form><p>'.$vetor->Autor.'</p>
  <div class="properties-footer d-flex justify-content-between align-items-center">
  <div class="review">
  <div class="rating">
  </div>
  </div>
  <div class="price">
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>';
  $i++;
  }
}
// Mostrar livros de Romance 

public function LivrosRomance(){
  global $pdo;
   
  $sql = "SELECT * FROM `livro` WHERE CodCategoria = ':cod'";
  $sql = $pdo->prepare($sql);
  $sql->bindValue(':cod', "CROM");
  $sql->execute();
  //$vetor = $sql->Fetch(PDO::FETCH_OBJ);
      
  for($i=0; $vetor = $sql->fetch(PDO::FETCH_OBJ); $i++){
  //echo "<img src=".$vetor->Capa." alt='src'>";

  echo'<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
  <div class="properties pb-30">
  <div class="properties-card">
  <div class="properties-img">
  <a href="PHP/book-details.php"><img src="'.$vetor->Capa.'" alt="" data-pagespeed-url-hash="3319296635" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
  </div>
  <div class="properties-caption properties-caption2">
  <h3><a href="PHP/book-details.php">'.$vetor->Titulo.'</a></h3>
  <p>'.$vetor->Autor.'</p>
  <div class="properties-footer d-flex justify-content-between align-items-center">
  <div class="review">
  <div class="rating">
  </div>
  </div>
  <div class="price">
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>';
  echo $vetor->Titulo;

  }
}

//preencher pagina de livro
public function preencher($id){
  global $pdo;

  $sql = "SELECT * FROM livro WHERE Id= :id";
  $sql = $pdo->prepare($sql);
  $sql->bindValue(":id", $id);
  $sql->execute();

  $vetor = $sql->fetch(PDO::FETCH_OBJ);

  echo '<!doctype html>
    <html class="no-js" lang="zxx">
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/produto.css">
    </head>
    <div class="conteudo">
  <div class="produto">
      <div class="img-produto"><img  style="width: 337px;
      height: 500px;box-shadow:9px 7px 5px rgba(50, 50, 50, 0.77);" src="'.$vetor->Capa.'"></div>
  </div>
  <div class="produto1">
      <div class="titulo"><h3>'.$vetor->Titulo.' - '.$vetor->Autor.'</h3></div>
    <div class="sobre-livro"> 
      <p>'.$vetor->Descricao.'</p>
  </div><div class="sobre-livro">
      <h3>Sobre o livro</h3>
      <table><tr><td class="paragraph"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="23" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
  </svg>  '.$vetor->Paginas.'páginas</td>
  <td class="paragraph"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
  </svg>  '.$vetor->Autor.'</td></tr>
  <tr><td class="paragraph"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="33" fill="currentColor" class="bi bi-upc" viewBox="0 0 16 16">
    <path d="M3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z"/>
  </svg> ISBN: '.$vetor->ISBN.'</td>
  <td class="paragraph"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="25" fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16">
    <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z"/>
    <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z"/>
  </svg>  '.$vetor->Idioma.'</td></tr>
  <tr><td class="paragraph"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="25" fill="currentColor" class="bi bi-journals" viewBox="0 0 16 16">
    <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z"/>
    <path d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z"/>
  </svg>  '.$vetor->Edicao.'</td>
  <td class="paragraph"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="25" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
  </svg>  '.$vetor->Editora.'</td></tr></table>';
  echo '<form action="emprestimo.php" method="post">';
  if(isset($_SESSION['id']) && isset($_SESSION['nome']) && isset($_SESSION['rg'])){
  echo '<input type="hidden" name="idLivro" value="'.$vetor->Id.'">
  <input type="hidden" name="isbn" value="'.$vetor->ISBN.'">
  <input type="hidden" name="idUsuario" value="'.$_SESSION['id'].'">
  <input type="hidden" name="nome" value="'.$_SESSION['nome'].'">
  <input type="hidden" name="rg" value="'.$_SESSION['rg'].'">';
  }
  echo'<button class="botao" type="submit">Alugar</button></form>
  </div>
  </div>
  </div>
  </html>';
}

//pesquisar em préstimo
 public function pesqui($idLivro){
  global $pdo;

  $sql = "SELECT * FROM emprestimo WHERE IdLivro= :id";
  $sql = $pdo->prepare($sql);
  $sql->bindValue(":id", $idLivro);
  $sql->execute();
  if($sql->rowCount() >0){
      return true;
   }else{
    return false;
  }
 }

//realizar empréstimo
public function emprestar( $idUsuario, $NomeUsuario, $RgUsuario, $idLivro, $isbn,$hoje,$dev){
  global $pdo;

  $sql = "INSERT INTO emprestimo (NomeUsuario, RgUsuario, DataEmpréstimo , DataDevolucao, ISBN, IdLivro) VALUES 
  (:nu,:ru,:dte,:dtd,:isbn,:idl)";
  $sql = $pdo->prepare($sql);
  $sql->bindValue(":nu", $NomeUsuario);
  $sql->bindValue(":ru", $RgUsuario);
  $sql->bindValue(":isbn", $isbn); 
  $sql->bindValue(":dte", $hoje);
  $sql->bindValue(":dtd", $dev);
  $sql->bindValue(":idl", $idLivro);
  $sql->execute();

 if($sql->rowCount() >0){
  $emprestimo = $sql->fetch();
    return true;
 }else{
  return false;
}
}

// mostrar todos os usuarios

public function tableUser(){
  global $pdo;
  $sql = "SELECT * FROM usuario order by Nome";
  $sql = $pdo->prepare($sql);
  $sql->execute();
  
  
  for($i=0; $i<$return = $sql->fetch(); $i++){
  echo '    <style>
  span{ color:black;};</style> 
  <tr class="alert" role="alert">
    
  <td>
      <div class="pl-3 email">
          <span style="color:black; font-size:18px;">'.$return['Nome'].'</span>
        </div>
  </td>
  <td>
      <div class="pl-3 email">
      <span style="color:black; font-size:18px;">'.$return['Email'].'</span>
      </div>
  </td>
  <td>
  <div class="pl-3 email">
  <span style="color:black; font-size:18px;">'. $return['Cidade'].'</span>
  <span style="color:black; font-size:18px;">'. $return['Estado'].'</span>
  <span style="color:black; font-size:18px;">'. $return['Endereco'].'</span>
      </div> 
  </td>
  <td>
      <div class="pl-3 email">
      <span style="color:black; font-size:18px;">'.$return['Telefone'].'</span>
      </div>
  </td>
  <td>
  <span style="color:black; font-size:18px;">'. $return['Rg'].'</span></td>
  </tr>   ';
  }
}

// mostrar todos os empréstimos

public function tableEmp(){
  global $pdo;
  $sql = "SELECT * FROM emprestimo order by NomeUsuario";
  $sql = $pdo->prepare($sql);
  $sql->execute();
  
  
  for($i=0; $i<$return = $sql->fetch(); $i++){
  echo ' <tr class="alert" role="alert">
    <form action="alterar.php" method="post">
  <td>
      <div class="pl-3 email">
        
          <span style="color:black; font-size:18px;">'.$return['NomeUsuario'].'</span>
        </div>
  </td>
  <td>
      <div class="pl-3 email">
      <span style="color:black; font-size:18px;">'.$return['RgUsuario'].'</span>
      </div>
  </td>
  <td>
  <div class="pl-3 email">
  <span style="color:black; font-size:18px;">'. $return['DataEmpréstimo'].'</span>
      </div> 
  </td>
  <td>
      <div class="pl-3 email">
      <span style="color:black; font-size:18px;">
      <input type="text" name="data" style="border:none;" value="'.$return['DataDevolucao'].'"></span>
      </div>
  </td>
  <td>
      <div class="pl-3 email">
      <span style="color:black; font-size:18px;">'.$return['IdLivro'].'</span>
      </div>
  </td>
  <td>
  <div class="pl-3 email">
      <span style="color:black; font-size:18px;">'.$return['ISBN'].'</span>
      </div>
  </td>
  <td>
  <div class="pl-3 email" >
  <input name="emp" type="hidden" value="'.$return['Id'].'">
  <button class="btn btn-success btn-sm rounded-0"  data-toggle="tooltip" data-placement="top" type="submit"><i class="fa fa-edit"></i></button></form></div>
  <div class="pl-3 email" style="margin-top:10px;">
  <form action="deletar.php" method="post">
  <input name="emp" type="hidden" value="'.$return['Id'].'">
  <button class="btn btn-danger btn-sm rounded-0" data-toggle="tooltip" data-placement="top" type="submit"><i class="fa fa-trash"></i></button>
  </form></div>
  </td></tr> ';
  }
}

// mostrar todos os empréstimos

public function tableLivro(){
  global $pdo;
  $sql = "SELECT * FROM livro order by Titulo";
  $sql = $pdo->prepare($sql);
  $sql->execute();
  
  
  for($i=0; $i<$return = $sql->fetch(); $i++){
  echo ' <tr class="alert" role="alert">
  <td>
      <div class="pl-3 email">
        
          <span style="color:black; font-size:18px;">'.$return['Titulo'].'</span>
        </div>
  </td>
  <td>
  <div class="pl-3 email">
  <span style="color:black; font-size:18px;">'. $return['ISBN'].'</span>
      </div> 
  </td>
  <td>
      <div class="pl-3 email">
      <span style="color:black; font-size:18px;">'.$return['Autor'].'</span>
      </div>
  </td>
  <td>
      <div class="pl-3 email">
      <span style="color:black; font-size:18px;">'.$return['Editora'].'</span>
      </div>
  </td>
  <td>
  <div class="pl-3 email">
      <span style="color:black; font-size:18px;">'.$return['Edicao'].'</span>
      </div>
  </td>
  <td>
  <div class="pl-3 email">
      <span style="color:black; font-size:18px;">'.$return['Idioma'].'</span>
      </div>
  </td>
  <td>
  <div class="pl-3 email">
      <span style="color:black; font-size:18px;">'.$return['Paginas'].'</span>
      </div>
  </td>
  <td>
 <div class="pl-3 email" style="margin-top:10px;">
  <form action="deletarLivro.php" method="post">
  <input name="liv" type="hidden" value="'.$return['Id'].'">
  <button class="btn btn-danger btn-sm rounded-0" data-toggle="tooltip" data-placement="top" type="submit"><i class="fa fa-trash"></i></button>
  </form></div>
  </td></tr> ';
  }
}

//deletar livro
public function deletarLivro($liv){
  global $pdo;

  $sql = "DELETE FROM livro WHERE Id = :li ";
  $sql = $pdo->prepare($sql);
  $sql->bindValue(":li", $liv);
  $sql->execute();

  if($sql->rowCount() > 0){
      
     return true;
 }else{
     return false;
 }
 }

 //deletar empréstimo
 public function deletar($emp){
  global $pdo;

  $sql = "DELETE FROM emprestimo WHERE Id = :emp ";
  $sql = $pdo->prepare($sql);
  $sql->bindValue(":emp", $emp);
  $sql->execute();

  if($sql->rowCount() > 0){
      
     return true;
 }else{
     return false;
 }
 }

 //alterar empréstimo
 public function alterar($emp, $data){
  global $pdo;

  $sql = "UPDATE emprestimo set DataDevolucao = :dt where Id = :emp ";
  $sql = $pdo->prepare($sql);
  $sql->bindValue(":emp", $emp);
  $sql->bindValue(":dt", $data);
  $sql->execute();

  if($sql->rowCount() > 0){
      
     return true;
 }else{
     return false;
 }
 }
public function pesquiAtor($pesquisa){
  global $pdo;
   
  $sql = "SELECT * FROM `livro` where Ator LIKE ':a' order by Titulo";
  $sql = $pdo->prepare($sql);
  $sql-> bindValue(":a", $pesquisa);
  $sql->execute();
  //$vetor = $sql->Fetch(PDO::FETCH_OBJ);
      
  for($i=0; $vetor = $sql->fetch(PDO::FETCH_OBJ); $i++){
  //echo "<img src=".$vetor->Capa." alt='src'>";

  echo'
  <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
  <div class="properties pb-30">
  <div class="properties-card">
  <div class="properties-img">
  <a href="book-details.html"><img src="'.$vetor->Capa.'" alt="" data-pagespeed-url-hash="3319296635" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
  </div>
  <div class="properties-caption properties-caption2">
  <form action="php/book-details.php" method="post">
  <input type="hidden" value="'.$vetor->Id.'" name="id">
  <button type="submit"
  style="background-color: Transparent;background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden;
    outline:none;"><h3><a>'.$vetor->Titulo.'</a></h3>
  </form><p>'.$vetor->Autor.'</p>
  <div class="properties-footer d-flex justify-content-between align-items-center">
  <div class="review">
  <div class="rating">
  </div>
  </div>
  <div class="price">
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>';
  }
}

  }
    
?>