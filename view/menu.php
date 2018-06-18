<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
	<a class="navbar-brand" href="#">Distribuidora</a>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link active" href="#">Home</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Bebidas
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="inserirBebidas.php">Cadastrar Bebidas</a>
					<a class="dropdown-item" href="../controlerBebidas.php?opcao=2">Lista Bebidas</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Clientes
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="inserirClientes.php">Cadastro</a>
					<a class="dropdown-item" href="../controlerClientes.php?opcao=2">Lista Clientes</a>
				</div>
			</li>		
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Cidades
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="inserirCidades.php">Cadastro</a>
					<a class="dropdown-item" href="../controlerCidades.php?opcao=2">Lista Cidades</a>
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

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>