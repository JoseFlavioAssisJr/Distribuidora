<?php
require_once('conexao.inc');
require_once('modeloDistribuidora.inc');
require_once('ClientesDAO.inc');

$opcao = (int)$_REQUEST['opcao'];
if($opcao == 1)
{
    $cliente = new Bebidas($_POST['nome'], $_POST['cnpj'], $_POST['endereco'], $_POST['id_cidade']);
    $clientesDao = new ClientesDAO();
    
    $clientesDao->incluirBebida($cliente);
    
    header("Location:controlerClientes.php?opcao=2");
    
    
}

if($opcao == 2) {
    $clientesDao = new ClientesDAO();
    
    $lista = $clientesDao->getClientes();
    
    session_start();
    
    $_SESSION['clientes']=$lista;
    
    header("Location:view/exibirClientes.php");
}

if($opcao == 3)
{
    $id_cliente = (int)$_REQUEST['id_cliente'];
    
    $clientesDao = new ClientesDAO();
    
    $cliente = $clientesDao->getCliente($id_cliente);
    
    session_start();
    $_SESSION['cliente'] = $cliente;
    
    header("Location:view/atualizarClientes.php");
    
    
}

if($opcao == 4)
{
    $id_cliente = (int) $_REQUEST["id_cliente"];
    
    $clientesDao = new ClientesDAO();
    $clientesDao->excluirClientes($id_cliente);
    
    header("Location:controlerClientes.php?opcao=2");
    
}

if($opcao == 5)
{
    $cliente = new Clientes($_POST['pNome'], $_POST['pCnpj'],$_POST['pEndereco'], $_POST['pId_cidade']);
    $cliente->setId_cliente($_POST['id_cliente']);
    
    $clientesDao = new ClientesDAO();
    
    $clientesDao->atualizarCliente($clientes);
    
    header("Location:controlerClientes.php?opcao=2");
    
}


