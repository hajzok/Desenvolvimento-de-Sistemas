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
          </table>
        <tr>
                <td colspan="2">
                    <br>
                    <button type="submit" class="w3-button w3-green w3-large">Verificar E-mail</button>
                </td>
            </tr>
          </table>
        </form>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $email = $_POST["email"];

            $conexao = mysqli_connect("localhost", "root", "", "usuario");

            if ($conexao == false) {
                die("A conexão falhou: " . mysqli_connect_error());
            }

            $query = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email'");

            if (mysqli_num_rows($query) > 0) {
                header("Location: novaSenha.php");
                exit();
            } else {
                echo "<p style='color:red;'>O e-mail não foi encontrado.</p>";
                echo "<a href='cadastro.php'>Cadastre-se!</a>";
            }
        }
        ?>
      </div>
</body>
</html>