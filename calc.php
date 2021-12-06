<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
				<?php

				$numeros = $_POST;	

				$media = array_sum($numeros) / count($numeros);
				echo "<h3>A média dos números é: " . $media. "</h3>" ;
				?>

			<a href="exerc01.php"> <button type="submit" class="btn btn-primary">Voltar</button></a>	
		</div>
	</body>
</html>

