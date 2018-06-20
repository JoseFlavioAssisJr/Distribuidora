
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Distribuidora de Bebidas</title>

	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

	<?php 

	session_start();

	$item = $_SESSION['bebidas'];


	echo "$item->nome;";
	?>
	<div class="container-fluid">
		<!-- menu -->
		<div class="row">

			<div class="row menu" style="height: 50px">
				<div class="col-12">
					<!--	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top"> -->
						<nav class="navbar navbar-expand-lg navbar-light fixed-top">
							<a class="navbar-brand" href="#">Distribuidora</a>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav mr-auto">
									<li class="nav-item">
										<a class="nav-link active" href="#">Home</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Loja</a>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Bebidas
										</a>
										<div class="dropdown-menu" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="view/inserirBebidas.php">Cadastrar Bebidas</a>
											<a class="dropdown-item" href="controlerBebidas.php?opcao=2">Lista Bebidas</a>
										</div>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Clientes
										</a>
										<div class="dropdown-menu" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="controlerClientes.php?opcao=6">Cadastro</a>
											<a class="dropdown-item" href="controlerClientes.php?opcao=2">Lista Clientes</a>
										</div>
									</li>		
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Cidades
										</a>
										<div class="dropdown-menu" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="view/inserirCidades.php">Cadastro</a>
											<a class="dropdown-item" href="controlerCidades.php?opcao=2">Lista Cidades</a>
										</div>
									</li>						
									<li class="nav-item">
										<a class="nav-link" href="view/inserirBebidas.php">Cadastro</a>
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
						</nav>

					</div>
				</div>
			</div>

			<div class="row">
				<div col->
					<?php


					foreach($item as $item){	
						?>

						<table class="table table-hover cellspcacing="5">
						<!--	<thead>
								<tr>
									
								</tr>
							</thead> -->
							
								<tr>
									
									<td><?php echo $item->getNome(); ?></td>
									
								</tr>
								<tr>
									
									<td><?php echo $item->getPreco(); ?></td>
									
								</tr>
								<tr>
									
									<td><?php echo $item->getFabricante(); ?></td>
									
								</tr>
							
						</table>
					</div>
				</div>	

			<?php } ?>
		</div>

	</div>



	<?php
		// put your code here
	?>

</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>


