<?php
require_once('conexao.inc');
require_once('modeloDistribuidora.inc');
require_once('BebidasDAO.inc');

$opcao = (int)$_REQUEST['opcao'];
if($opcao == 1)
{
    $bebida = new Bebidas($_POST['nome'], $_POST['volume'], $_POST['preco'], $_POST['peso'], $_POST['qde_estoque'], $_POST['fabricante']);
    $bebidasDao = new BebidasDAO();
    
    $bebidasDao->incluirBebida($bebida);
    
    header("Location:controlerBebidas.php?opcao=2");
    
    
}

if($opcao == 2) {
    $bebidasDao = new BebidasDAO();
    
    $lista = $bebidasDao->getBebidas();
    
    session_start();
    
    $_SESSION['bebidas']=$lista;
    
    header("Location:view/exibirBebidas.php");
}

if($opcao == 3)
{
    $id_bebida = (int)$_REQUEST['id'];
    
    $bebidasDao = new BebidasDAO();
    
    $bebidas = $bebidasDao->getBebida($id_bebida);
    
    session_start();
    $_SESSION['bebida'] = $bebidas;
    
    header("Location:view/atualizarBebidas.php");
    
    
}

if($opcao == 4)
{
    $id_bebida = (int)$_REQUEST["id_bebida"];
    
    $bebidasDao = new BebidasDAO();
    $bebidasDao->excluirBebidas($id_bebida);
    
    header("Location:controlerBebidas.php?opcao=2");
    
}

if($opcao == 5)
{
    $bebida = new Bebidas($_POST['pNome'], $_POST['pVolume'],$_POST['pPreco'], $_POST['pPeso'], $_POST['pQde_estoque'],$_POST['pFabricante']);
    $bebida->setId_bebida($_POST['id_bebida']);
    
    $bebidasDao = new BebidasDAO();
    
    $bebidasDao->atualizarBebida($bebida);
    
    header("Location:controlerBebidas.php?opcao=2");
    
}




