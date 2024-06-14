<?php session_start(); ?>
<!DOCTYPE html>
<html>
<title>Produtos</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container w3-display-middle">
  <h2>Edição de produtos</h2>

<?php

$conexao = mysql_connect("localhost", "root", "", "teste");

  if($conexao == false){
    die("A conexão falhou!");
  }
$consulta = mysql_query($conexao, "SELECT * FROM produtos WHERE codigo = " . $GET["codigo"]);
