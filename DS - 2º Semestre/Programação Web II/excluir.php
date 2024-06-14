<?php
session_start();

$conexao = mysqli_connect("localhost", "root", "", "teste");

if($conexao == false){
  die("A conexão falhou!");
}

$query = mysql_query($conexao, "DELETE FROM produtos WHERE codigo = ". GET["codigo"]);

if($query == true){
  header("Location:crud.php");
}
else{
  echo "Erro ao excluir o cadastro";
}

?>
