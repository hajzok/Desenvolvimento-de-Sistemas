<?php session_start(); ?>
<!DOCTYPE html>
<html>
<title>Cadastro do usuário</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container w3-display-middle">
  <center><h2>Cadastro</h2></center>
	<br>
  <form action="" method="post" class="w3-xlarge">
    <table>
      <tr>
        <td>Nome:</td>
        <td><input type="text" name="nome" required></td>
      </tr>
      <tr>
        <td>E-mail:</td>
        <td><input type="email" name="email" required></td>
      </tr>
      <tr>
        <td>Senha:</td>
        <td><input type="password" name="senha" required></td>
      </tr>
      <tr>
        <td>Confirme a senha:</td>
        <td><input type="password" name="confirmar_senha" required></td>
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
  if(isset($_POST["nome"])){

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $confirmar_senha = $_POST["confirmar_senha"];

    $conexao = mysqli_connect("localhost","root","","usuario");
      
    if($conexao == false){
      die("A conexão falhou!");
    }

    $query;
	  
    $query = mysqli_query($conexao,"INSERT INTO usuario(nome,senha,email) VALUES('$nome','$senha','$email')");

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
