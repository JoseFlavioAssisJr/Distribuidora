<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro de Cidades</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container-fluid">
		<!-- menu -->
	
			
			<div class="row" style="height: 50px">
				<div class="col-12">
					<!--	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top"> -->

						<?php require_once ("menu.php"); ?>

					</div>
				</div>

					<div class="row">

						<div class="col-12">

							<h1>Cadastro Cidade</h1>

							<form action="../controlerCidades.php" method="post">

								<input type="hidden" name="opcao" value="1" />

								<div class="form-group">
									<label for="nome">Nome Cidade</label>
									<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
								</div>
								<div class="form-group">
									<label for="volume">Estado</label>
									<input type="text" class="form-control" name="estado" id="estado" placeholder="Estado">
								</div>
								<div class="form-group">
									<label for="preco">CEP</label>
									<input type="text" class="form-control" name="cep" id="cep" placeholder="00000-000">
								</div>
								<div class="form-group">
									<label for="peso">Valor frete por peso</label>
									<input type="text" class="form-control" name="valorFrete" id="valorFrete" placeholder="Valor frete por peso">
								</div>
								<div class="form-group">
									<label for="qtdEstoque">Peso / Quilogramas</label>
									<input type="text" class="form-control" name="peso" id="peso" placeholder="Peso">
								</div>

								<button type="submit" class="btn btn-primary">Gravar</button>
							</form>


						</div>

					</div>
				</div>

			</div>

			<?php
        // put your code here
			?>


			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
			<script type="text/javascript" src="js/bootstrap.min.js"></script>
		</body>
		</html>
