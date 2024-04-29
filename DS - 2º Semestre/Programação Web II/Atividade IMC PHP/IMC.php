<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
</head>
<body>
    <center>
    <h2>Calculadora de IMC</h2>
    <form action="calculo_imc.php" method="post">
        <label for="peso">Peso:
        </label>
<br>
        <input type="number" id="peso" name="peso" required>
<br><br>
        <label for="altura">Altura:

        </label>
<br>
        <input type="number" id="altura" name="altura" step="0.01" required>
<br><br>
        <input type="submit" value="Calcular IMC">
    </form>
    </center>
</body>
</html>