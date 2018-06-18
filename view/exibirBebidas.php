<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lista de Bebidas</title>

	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

	<?php 

	session_start();

	$bebidas = $_SESSION['bebidas'];

	?>

	<div class="container-fluid">
		
			<div class="row">
			
			<div class="row menu">
				<div class="col-12">
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link active" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="inserirBebidas.php">Cadastro</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../controlerBebidas.php?opcao=2">Listar Bebidas</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Blog</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="#">Contato</a>
						</li>
					</ul>
				</div>
			</div>
		</div>


		<div class="row">
			
			<div class="col-12">
				
				<h1> Lista de Bebidas</h1>
				<table class="table">
					<thead>
						<tr>
							
							<th scope="col">Nome</th>
							<th scope="col">Volume</th>
							<th scope="col">Preço</th>
							<th scope="col">Peso</th>
							<th scope="col">Quantidade</th>
							<th scope="col">Fabricante</th>
							<th scope="col">Operacões</th>

						</tr>
					</thead>
					<tbody>
						<?php 

						foreach ($bebidas as $b ) {
							echo "<tr>";
							
							echo "<td> $b->nome</td>";
							echo "<td> $b->volume</td>";
							echo "<td> $b->preco</td>";
							echo "<td> $b->peso</td>";
							echo "<td> $b->qde_estoque</td>";
							echo "<td> $b->fabricante</td>";

							

							echo "<td><a href='../controlerBebidas.php?opcao=3&id=$b->id_bebida'> Alterar </a>&nbsp; <a href='../controlerBebidas.php?opcao=4&id_bebida=$b->id_bebida'> Excluir</a>  </td>";
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