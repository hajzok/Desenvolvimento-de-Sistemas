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
        <h2>Login</h2>
          
        <!--Forms-->
        <form action="" method="post" class="w3-xlarge">
          <table>
            <tr>
                <td>Senha:</td>
                <td><input type="text" name="senha" required></td>
            </tr>
            <tr>
                <td>Confirma Senha:</td>
                <td><input type="text" name="confirma_senha" required></td>
            </tr>
        <tr>
            <td>
            <button type="submit" class="w3-button w3-green w3-large">Verificar E-mail</button>
            </td>
        </tr>
          </table>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $senha = $_POST["senha"];
            $confirma_senha = $_POST["confirma_senha"];

            if ($senha !== $confirma_senha) {
                echo "<p style='color:red;'>As senhas não são iguais!</p>";
                exit();
            }


            $conexao = mysqli_connect("localhost", "aluno", "aluno.etec", "usuario");

            if ($conexao == false) {
                die("A conexão falhou: " . mysqli_connect_error());
            }

            $email = $_POST["email"];

            $query = mysqli_query($conexao, "UPDATE usuarios SET senha = '$senha' WHERE email = '$email'");

            if ($query) {
                echo "<p style='color:green;'>Senha alterada com sucesso!</p>";
                header("Location: login.php");
                exit();
            } else {
                echo "<p style='color:red;'>Erro ao cadastrar nova senha: " . mysqli_error($conexao) . "</p>";
            }
        }
        ?>
</div>
</body>
</html>