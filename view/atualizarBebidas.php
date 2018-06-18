<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ALterar Dados</title>

	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

	<?php 

	session_start();

	$b = $_SESSION['bebida'];

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

				<h1> Alterar Dados Bebida</h1>
				
				<form action="../controlerBebidas.php" method="post">

					<input type="hidden" name="opcao" value="5"/>


					<div class="form-group">
						<label for="nome">ID</label>
						<input type="text" class="form-control" name="id_bebida" id="id_bebida" value="<?php echo $b->id_bebida ?>">
					</p>
				</div>

				<div class="form-group">
					<label for="nome">Nome</label>
					<input type="text" class="form-control" name="nome" id="nome" value="<?php echo $b->nome ?>">

				</p>
			</div>
			<div class="form-group">
				<label for="volume">Volume</label>
				<input type="text" class="form-control" name="volume" id="volume" value="<?php echo $b->volume ?>">
			</div>
			<div class="form-group">
				<label for="preco">Preco</label>
				<input type="text" class="form-control" name="preco" id="preco" value="<?php echo $b->preco ?>">
			</div>
			<div class="form-group">
				<label for="peso">Peso</label>
				<input type="text" class="form-control" name="peso" id="peso" value="<?php echo $b->peso ?>">
			</div>
			<div class="form-group">
				<label for="qtdEstoque">Quantidade em Estoque</label>
				<input type="text" class="form-control" name="qde_estoque" id="qde_estoque" value="<?php echo $b->qde_estoque ?>">
			</div>
			<div class="form-group">
				<label for="fabricante">Fabricante</label>
				<input type="text" class="form-control" name="fabricante" id="fabricante" value="<?php echo $b->fabricante ?>">
			</div>

			<button type="submit" class="btn btn-primary">Atualizar</button>
		</form>


	</div>

</div>
</div>


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>