<?php 


require_once('conexa.inc');
require_once('modeloDistribuidora.inc');
require_once('ClientesDAO.inc');
require_once('CidadesDAO.inc');

$opcao = (int)$_REQUEST['opcao'];

if($opcao == 1)
{
	$cliente = new 
}
if($opcao == 2) {
    $clientesDao = new ClientesDAO();
    
    $lista = $clientesDao->getClientes();
    
    session_start();
    
    $_SESSION['clientes']=$lista;
    
    header("Location:view/exibirItensLoja.php");
}

 ?>