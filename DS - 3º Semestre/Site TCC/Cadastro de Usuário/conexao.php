<html>
	<body>
	
	<form action="" method="post">
		Busca: <input type="text" name="busca"> <input type="submit" value="Buscar">
	</form>
	<?php

	  $conexao = mysqli_connect("localhost","aluno","aluno.etec","teste");
	  
	  if($conexao == false){
		  die("A conexão falhou!");
	  }
	  
	  $query;
	  
	  if(isset($_POST["busca"]) == true){
		  $query = mysqli_query($conexao,"SELECT * from usuario WHERE nome LIKE '%" . $_POST["busca"] . "%'");
	  }
	  else{
		  $query = mysqli_query($conexao,"SELECT * from usuario");
	  }

	  if(mysqli_num_rows($query) == 0){
		  
		  echo "Sem resultados a exibir";
	  }
	  else{
		echo "Mostrando " . mysqli_num_rows($query) . " resultados<br><br>";
		echo "<table border=1 width=300><tr><th>COD.</th><th>CURSO</th><th>VAGAS</th></tr>";

		while($linha = mysqli_fetch_array($query)){
			echo "<tr><td>".$linha["cod"]."</td><td>".$linha["nome"]."</td><td>".$linha["email"]."</td></tr>";
		}

		echo "</table>";  
	  }


	  

	?>

	</body>
</html>
