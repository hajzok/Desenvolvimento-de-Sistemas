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
                <td>E-mail:</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Senha:</td>
                <td><input type="password" name="senha" required></td>
            </tr>
            <tr>
                <td>Confirmar senha:</td>
                <td><input type="password" name="confirmar_senha" required></td>
            </tr>
          </table>
        <tr>
                <td colspan="2">
                    <br>
                    <button type="submit" class="w3-button w3-green w3-large">Alterar senha</button>
                </td>
            </tr>
          </table>
        </form>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $senha = $_POST["senha"];
            $confirma_senha = $_POST["confirmar_senha"];
            $email = $_POST["email"];

            if ($senha !== $confirma_senha) {
                echo "As senhas não coincidem!";
                exit();
            }

            $conexao = mysqli_connect("localhost", "aluno", "aluno.etec", "usuario");

            if ($conexao == false) {
                die("A conexão falhou: " . mysqli_connect_error());
            }

            $query = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email'");

            if (mysqli_num_rows($query) < 1) {
                echo "<p style='color:red;'>O e-mail não foi encontrado.</p>";
                echo "<a href='cadastro.php'>Cadastre-se!</a>";
            }
            else{
                $query1 = mysqli_query($conexao, "UPDATE usuarios SET senha = '$senha' WHERE email = '$email'");
                header("Location: login.php");
                exit();
            }
        }
        ?>
      </div>
</body>
</html>
