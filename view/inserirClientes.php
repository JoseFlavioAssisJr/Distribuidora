<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro Clientes</title>

	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container-fluid">
		<!-- menu -->


		<div class="row" style="height: 50px">
			
			<?php require_once ("menu.php") ?>
			
		</div>
		<div class="row">
			<div class="col-12">

				<h1>Cadastro Cliente</h1>

				<form action="../controlerBebidas.php" method="post">

					<input type="hidden" name="opcao" value="1" />

					<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
					</div>
					<div class="form-group">
						<label for="volume">Cnpj</label>
						<input type="text" class="form-control" name="volume" id="volume" placeholder="Volume">
					</div>
					<div class="form-group">
						<label for="preco">Endereço</label>
						<input type="text" class="form-control" name="preco" id="preco" placeholder="Preco">
					</div>
					<div class="form-group">
						<label for="peso">Cidade</label>
						<input type="text" class="form-control" name="peso" id="peso" placeholder="Peso">
					</div>


					<button type="submit" class="btn btn-primary">Gravar</button>
				</form>

				

			</div>


		</div>

		
	</div>



	<?php
        // put your code here
	?>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>