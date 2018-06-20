<?php 


require_once('conexao.inc');
require_once('modeloDistribuidora.inc');
require_once('ClientesDAO.inc');
require_once('CidadesDAO.inc');
require_once('BebidasDAO.inc');

$opcao = (int)$_REQUEST['opcao'];


if ($opcao == 1 ) {
	
	$bebidasDao = new bebidasDAO();

	$lista = $bebidasDao->getBebidas();

	session_start();

	$_SESSION['bebidas']=$lista;

	header("Location:view/exibirItensLoja.php");
}

if($opcao == 2) {
    $clientesDao = new ClientesDAO();
    
    $lista = $clientesDao->getClientes();
    
    session_start();
    
    $_SESSION['bebidas']=$lista;
    
    header("Location:view/exibirItensLoja.php");
}

 ?>