<?php
require_once('conexao.inc');
require_once('modeloDistribuidora.inc');
require_once('CidadesDAO.inc');

$opcao = (int)$_REQUEST['opcao'];
if($opcao == 1)
{
    $cidade = new Cidades($_POST['cidade'], $_POST['estado'], $_POST['CEP'], $_POST['valorfrete_porPeso'], $_POST['peso']);
    $cidadesDao = new CidadesDAO();
    
    $cidadesDao->incluirCidades($cidade);
    
    header("Location:controlerCidades.php?opcao=2");
    
    
}

if($opcao == 2) {
    $cidadesDao = new CidadesDAO();
    
    $lista = $cidadesDao->getCidades();
    
    session_start();
    
    $_SESSION['cidades']=$lista;
    
    header("Location:view/exibirCidades.php");
}

if($opcao == 3)
{
    $id_cidade = (int)$_REQUEST['id_cidade'];
    
    $cidadesDao = new CidadesDAO();
    
    $cidade = $cidadesDao->getCidade($id_cidade);
    
    session_start();
    $_SESSION['cidade'] = $cidade;
    
    header("Location:view/atualizarCidades.php");
    
    
}

if($opcao == 4)
{
    $id_cidade = (int) $_REQUEST["id_cidade"];
    
    $cidadesDao = new CidadesDAO();
    $cidadesDao->excluirCidade($id_cidade);
    
    header("Location:controlerCidades.php?opcao=2");
    
}

if($opcao == 5)
{
    $cidade = new Cidades($_POST['pCidade'], $_POST['pEstado'],$_POST['pCEP'], $_POST['pValorfrete_porPeso'], $_POST['pPeso']);
    $cidade->setId_cidade($_POST['id_cidade']);
    
    $cidadesDao = new CidadesDAO();
    
    $cidadesDao->atualizarCidade($cidade);
    
    header("Location:controlerCidades.php?opcao=2");
    
}
