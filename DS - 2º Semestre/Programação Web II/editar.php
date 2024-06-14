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

$cadastro = mysqli_fetch_assoc($consulta);
?>

<form action="" method="post" class="w3-xlarge">
    <table>
      <tr>
        <td>Código:</td>
        <td><input type="text" name="codigo" readonly="TRUE" required value="<?php echo $cadastro["codigo"] ?>"></td>
      </tr>
      <tr>
        <td>Produto:</td>
        <td><input type="text" name="produto" required value="<?php echo $cadastro["produto"] ?>"></td>
      </tr>
      <tr>
        <td>Quant:</td>
        <td><input type="number" name="quantidade" required value="<?php echo $cadastro["quantidade"] ?>"></td>
      </tr>
      <tr>
        <td>Preço:</td>
        <td><input type="number" step="0.01" name="preco" required value="<?php echo $cadastro["preco"] ?>"></td>
      </tr>
      <tr>
        <td>
          <br>
          <input type="submit" value="Editar" class="w3-button w3-green w3-large"></td>
        <td align="right">
          <br>
          <a href="crud.php" class="w3-button w3-red w3-large">Voltar ao Início</a></td>
      </tr>
    </table>
  </form>

<?php

if(isset($_POST["codigo")){

  $produto = $_POST["produto"];
  $quantidade = $_POST["quantidade"];
  $preco = $_POST["preco"];

  $query = mysqli_query($conexao,"UPDATE produtos SET produto = '$produto', quantidade = '$quantidade', preco = '$preco' WHERE codigo = ".$_POST["codigo"]);

  if($query == true){
    header("Location:crud.php");
  }
  else{
    echo "Erro ao alterar o produto!";
  }
}
?>

</div>
</body>
</html>
