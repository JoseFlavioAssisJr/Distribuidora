<?php 

require_once('conexao.inc');
require_once('modeloDistribuidora.inc');


class ComprasDAO
{
	private $con;

	function ComprasDao()
	{
		$this->con = $c->getConexao();
	}


	public function incluirCompras(Compras $compras)
	{
		$sql = $this->con->prepare("INSERT INTO compras(id_cliente, data_compra, valor_total, valortotal_frete) VALUES (:id_cliente, :data_compra, :valor_total, :valortotal_frete)");

		$sql->bindValue(':nom', $compras->getId_compra());
		$sql->bindValue(':cnpj', $compras->getId_cliente());
		$sql->bindValue(':cnpj', $compras->getData_compra());
		$sql->bindValue(':cnpj', $compras->getValor_Total());
		$sql->bindValue(':cnpj', $compras->getValortotal_frete());

		$sql->execute();

	}

	
}


?>