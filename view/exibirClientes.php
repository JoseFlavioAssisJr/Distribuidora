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

	$clientes = $_SESSION['clientes'];

	?>

	<div class="container-fluid">
		
		<div class="row" style="height: 50px">
			<?php require_once("menu.php"); ?>
			
		</div>


		<div class="row">
			
			<div class="col-12">
				
				<h1> Lista de Clientes</h1>
				<table class="table">
					<thead>
						<tr>
							
							<th scope="col">Nome</th>
							<th scope="col">CNPJ</th>
							<th scope="col">Endereço</th>
							<th scope="col">Cidade</th>
							
							<th scope="col">Operacões</th>

						</tr>
					</thead>
					<tbody>
						<?php 

						foreach ($clientes as $c ) {
							echo "<tr>";
							
							echo "<td> $c->nome</td>";
							echo "<td> $c->cnpj</td>";
							echo "<td> $c->endereco</td>";
							echo "<td> $c->cidade</td>";
							
							
													

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