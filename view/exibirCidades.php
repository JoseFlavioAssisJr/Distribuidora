<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lista de Cidades</title>

	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

	<?php 

	session_start();

	$cidades = $_SESSION['cidades'];

	?>

	<div class="container-fluid">
		
		<div class="row" style="height: 50px">
			<?php require_once("menu.php"); ?>
			
		</div>


		<div class="row">
			
			<div class="col-12">
				
				<h1> Lista de Cidades</h1>
				<table class="table">
					<thead>
						<tr>
							
							<th scope="col">Nome cidade</th>
							<th scope="col">Estado</th>
							<th scope="col">CEP</th>
							<th scope="col">Valor frete por peso</th>
							<th scope="col">Peso</th>
							<th scope="col">Operacões</th>

						</tr>
					</thead>
					<tbody>
						<?php 

						foreach ($cidades as $c ) {
							echo "<tr>";
							
							echo "<td> $c->cidade</td>";
							echo "<td> $c->estado</td>";
							echo "<td> $c->CEP</td>";
							echo "<td> $c->valorfrete_porPeso</td>";
							echo "<td> $c->peso</td>";
													

							echo "<td><a href='../controlerCidades.php?opcao=3&id=$c->id_cidade'> Alterar </a>&nbsp; <a href='../controlerCidades.php?opcao=4&id_cidade=$c->id_cidade'> Excluir</a>  </td>";
							echo "</tr>";

						}

						?>
					</tbody>
				</table>

			</div>

		</div>
	</div>


	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>