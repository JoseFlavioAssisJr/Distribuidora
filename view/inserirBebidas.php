<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro Bebidas</title>

	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

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

					<h1>Inserir Bebidas</h1>

					<form action="../controlerBebidas.php" method="post">

						<input type="hidden" name="opcao" value="1" />

						<div class="form-group">
							<label for="nome">Nome</label>
							<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
						</div>
						<div class="form-group">
							<label for="volume">Volume</label>
							<input type="text" class="form-control" name="volume" id="volume" placeholder="Volume">
						</div>
						<div class="form-group">
							<label for="preco">Preco</label>
							<input type="text" class="form-control" name="preco" id="preco" placeholder="Preco">
						</div>
						<div class="form-group">
							<label for="peso">Peso</label>
							<input type="text" class="form-control" name="peso" id="peso" placeholder="Peso">
						</div>
						<div class="form-group">
							<label for="qtdEstoque">Quantidade em Estoque</label>
							<input type="text" class="form-control" name="qde_estoque" id="qde_estoque" placeholder="Quantidade em Estoque">
						</div>
						<div class="form-group">
							<label for="fabricante">Fabricante</label>
							<input type="text" class="form-control" name="fabricante" id="fabricante" placeholder="Fabricante">
						</div>

						<button type="submit" class="btn btn-primary">Gravar</button>
					</form>


				</div>

			</div>
		</div>


		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

	</body>
	</html>