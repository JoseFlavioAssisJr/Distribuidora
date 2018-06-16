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
			
			<div class="col-12">
				
				<form action="ControlerBebidas.php" method="post">

					<input type="hidden" name="opcao" value="1"/>

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
						<input type="text" class="form-control" name="qtdEstoque" id="qtdEstoque" placeholder="Quantidade em Estoque">
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