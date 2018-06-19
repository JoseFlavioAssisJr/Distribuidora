<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alterar Dados</title>

	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

	<?php 

	session_start();

	$c = $_SESSION['cidade'];

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
							<a class="nav-link" href="controlerBebidas.php?opcao=2">Listar Bebidas</a>
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

				<div class="row">

					<div class="col-12">

						<h1>Atualizar Cidade</h1>

						<form action="../controlerCidades.php?id_cidade=<?php $c->id_cidade ?>" method="post">

							<input type="hidden" name="opcao" value="5" />

							<div class="form-group">
								<label for="nome">ID</label>
								<input type="text" class="form-control" name="id_cidade" id="id_cidade" value="<?php echo $c->id_cidade ?>" readonly>
							</p>
						</div>
						<div class="form-group">
							<label for="nome">Nome Cidade</label>
							<input type="text" class="form-control" name="cidade" id="cidade" value="<?php echo $c->cidade; ?> ">
						</div>
						<div class="form-group">
							<label for="volume">Estado</label>
							<input type="text" class="form-control" name="estado" id="estado" value="<?php echo $c->estado; ?>">
						</div>
						<div class="form-group">
							<label for="preco">CEP</label>
							<input type="text" class="form-control" name="cep" id="cep" value="<?php echo $c->CEP; ?>">
						</div>sss
						<div class="form-group">
							<label for="peso">Valor frete por peso</label>
							<input type="text" class="form-control" name="valorFrete" id="valorFrete" value="<?php echo $c->valorfrete_porPeso; ?>" >
						</div>
						<div class="form-group">
							<label for="qtdEstoque">Peso / Quilogramas</label>
							<input type="text" class="form-control" name="peso" id="peso" value="<?php echo $c->peso; ?>" >
						</div>

						<button type="submit" class="btn btn-primary">Atualizar</button>
					</form>


				</div>

			</div>

		</div>

	</div>
</div>


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>