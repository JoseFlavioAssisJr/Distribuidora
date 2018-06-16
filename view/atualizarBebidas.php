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
			
			<div class="col-12">

				<h1> Alterar Dados Bebida</h1>
				
				<form action="ControlerBebidas.php" method="post">

					<input type="hidden" name="opcao" value="1"/>

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
					<input type="text" class="form-control" name="qtdEstoque" id="qtdEstoque" value="<?php echo $b->qde_estoque ?>">
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