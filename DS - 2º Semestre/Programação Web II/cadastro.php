<?php session_start(); ?>
<!DOCTYPE html>
<html>
<title>Acesso ao terouro</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container w3-display-middle">
  <h2>Cadastro de Acesso ao Tesouro</h2>
	
  <form action="" method="post" class="w3-xlarge">
    <table>
      <tr>
        <td>Produto:</td>
        <td><input type="text" name="produto" required></td>
      </tr>
      <tr>
        <td>Quantidade:</td>
        <td><input type="number" name="quantidade" required></td>
      </tr>
      <tr>
        <td>Preço:</td>
        <td><input type="number" step="0.01" name="preco" required></td>
      </tr>
      <tr>
        <td>
          <br>
          <input type="submit" value="cadastrar" class="w3-button w3-green w3-large"></td>
        <td align="right">
          <br>
          <a href="crud.php" class="w3-button w3-red w3-large">Voltar ao Início</a></td>
      </tr>
    </table>
  </form>
<?php
  if(isset($_POST["produto"])){

    $produto = $_POST["produto"];
    $quantidade = $_POST["quantidade"];
    $preco = $_POST["preco"];

    $conexao = mysqli_connect("localhost","root","","produtos");
      
    if($conexao == false){
      die("A conexão falhou!");
    }

    $query;
	  
    $query = mysqli_query($conexao,"INSERT INTO produtos(produto,quantidade,preco) VALUES('$produto','$quantidade','$preco')");

    if($query == true){
      header("Location:crud.php");	
    }
    else{
      echo "Erro ao efetuar o cadastro!";
    }
  }
?>
	
</div>
</body>
</html>
