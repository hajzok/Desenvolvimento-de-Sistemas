<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tineabook</title>
</head>
<body>
    <!--Sessão de cadastro-->
    <div class="w3-container w3-display-middle">
        <h2>Cadastro de Usuário</h2>
          
        <form action="" method="post" class="w3-xlarge">
          <table>
            <tr>
                <td>E-mail:</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
              <td>Nome:</td>
              <td><input type="text" name="nome" required></td>
            </tr>
            <tr>
                <td>Usuário:</td>
                <td><input type="text" name="apelido" required></td>
            </tr>
            
            <tr>
              <td>Insira sua senha:</td>
              <td><input type="password" name="senha" required></td>
            </tr>
            <tr>
                <td>Confirma sua senha:</td>
                <td><input type="password" name="senha" required></td>
            </tr>
            <tr>
                <td>Selecione sua data de nascimento:</td>
                <td><input type="date" name="dt_nasc" /></td>
            </tr>
            <tr>
              <td>
                <br>
                <!--Botão cadastro-->
                <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green w3-large">Cadastrar</button></td>
              <td align="right">
                <br>
                <!--Botão voltar index-->
                <a href="login.php" class="w3-button w3-red w3-large">Voltar ao Início</a></td>
            </tr>
          </table>
        </form>
        <?php

        if(isset($_POST["nome"])){

        $email = $_POST["email"];
        $nome = $_POST["nome"];
        $apelido = $_POST["apelido"];
        $senha = $_POST["senha"];
        $dt_nasc = $_POST["dt_nasc"];

        $conexao = mysqli_connect("localhost", "aluno", "aluno.etec", "usuario");

        if($conexao == false){
            die("A conexão falhou!");
        }

        $query;

        $query = mysqli_query($conexao, "INSERT INTO usuarios (nome, apelido, dt_nasc, email, senha) VALUES ('$nome','$apelido','$dt_nasc', '$email', '$senha')");

        if($query == true){
            header("Location:login.php");
        }
        else{
            echo "Erro ao efetuar o cadastro!";
        }
    }
        ?>
      </div>
</body>
</html>