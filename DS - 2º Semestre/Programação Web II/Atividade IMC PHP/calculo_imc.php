<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do IMC</title>
</head>
<body>
    <center>
    <h2>Resultado do IMC</h2>
    <?php
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        $imc = $peso / ($altura * $altura);

        if ($imc < 18) {
            $classificacao = "O paciente está abaixo do peso";
        } elseif ($imc >= 18 && $imc < 25) {
            $classificacao = "O paciente está normal";
        } elseif ($imc >= 25 && $imc < 30) {
            $classificacao = "O paciente está com sobrepeso";
        } elseif ($imc >= 30 && $imc < 35) {
            $classificacao = "O paciente está com obesidade moderada";
        } elseif ($imc >= 35 && $imc < 40) {
            $classificacao = "O paciente está com obesidade grave";
        } elseif ($imc >= 40 && $imc < 50) {
            $classificacao = "O paciente está com obesidade gravíssima";
        } else {
            $classificacao = "O paciente está com obesidade mórbida";
        }

        echo "Seu IMC é: " . number_format($imc, 1) . "<br>";
        echo "Situação: " . $classificacao;
    ?>
<br><br>
    <a href="IMC.php"> Voltar</a>
    </center>
</body>
</html>