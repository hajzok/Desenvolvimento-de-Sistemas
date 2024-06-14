<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container w3-display-middle">
<form action="" method="post" class="w3-xlarge">
Busca: <input type="text" name="busca" class=""> <input type="submit" value="Enviar" class="w3-button">
</form>
<a href="cadastro.php" class="w3-button w3-blue w3-right">Novo</a>
<br><br>
<table class="w3-table-all w3-bordered w3-striped w3-border" style="color:#000">
    <tbody><tr class="w3-green">
        <th>Código</th>
        <th>Produto</th>
      <th>Quantidade</th>
      <th>Preço</th>
      <th>Ação</th>
    </tr>
    </tbody><tbody>
    <tr>
    <?php

$conexao = mysqli_connect("localhost","aluno","aluno.etec","teste");

if($conexao == false){
  die("A conexão falhou!");
}

  $query;

if(isset($_POST["busca"]) == true){
		  $query = mysqli_query($conexao,"SELECT * from produtos WHERE produto LIKE '%" . $_POST["busca"] . "%'");
	  }
	  else{
		  $query = mysqli_query($conexao,"SELECT * from produtos");
	  }

	  if(mysqli_num_rows($query) == 0){
		  
		  echo "Sem resultados a exibir";
	  }
	  else{
		  echo "Mostrando " . mysql_num_rows($query) . "resultados <br><br>";
		  while($linha = mysql_fetch_array($query)){
    			 echo "<tr>";
   			 echo "    <td>".$linha["codigo"]."</td>";
   			 echo "  <td>".$linha["produto"]."</td>";
    			 echo "  <td>".$linha["quantidade"]."</td>";
    			 echo "  <td>".$linha["preco"]."</td>";
			 echo "<td> <a href='./editar.php?cod=".$linha["Cod"] ."'class='w3-button w3-orange'>Editar</a> 
                           <a href='./excluir.php?cod=".$linha["Cod"]. "' class='w3-button w3-red'>Excluir</a></td>'";
			 echo "</tr>";
		  }
		  echo "</table>";
	  }
    ?>
    </tr>
    </tbody>
    </table>
</div>
</body>
</html>
