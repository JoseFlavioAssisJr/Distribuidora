<?php

require_once('conexao.inc');
require_once('modeloDistribuidora.inc');

class ClientesDAO
{
 private $con;
    
    function ClientesDao()
    {
        $c = new Conexao();
        $this->con = $c->getConexao();
    }
    
    public function incluirClientes(Clientes $clientes)
    {
        $sql = $this->con->prepare("insert into clientes(nome, cnpj, endereco, id_cidade) values (:nom,:cnpj,:endereco, :id_cidade)");
        
        $sql->bindValue(':nom', $clientes->getNome());
        $sql->bindValue(':cnpj', $clientes->getCnpj());
        $sql->bindValue(':endereco', $clientes->getEndereco());
        $sql->bindValue(':id_cidade', $clientes->getId_cidade());
        
        $sql->execute();
    }
    
    public function getClientes(){
        $rs = $this->con->query("SELECT * FROM clientes");
        
        $lista = array();
        while($clientes=$rs->fetch(PDO::FETCH_OBJ)){
            $lista[] = $clientes;
        }
        
        return $lista;
    }


    
    public function excluirBebidas($id_cliente)
    {
            $sql = $this->con->prepare("delete from clientes where id_cliente=:id_cliente");
            
            $sql->bindValue(':id_cliente', $id_cliente);
            $sql->execute();
    }


    public function getCliente($id_cliente)
    {
        $sql = $this->con->prepare("SELECT * FROM clientes where id_cliente = :id_cliente");
        $sql->bindValue(':id_cliente', $id_cliente);
        $sql->execute();
        
        return $sql->fetch(PDO::FETCH_OBJ); // retorna o registro da tabela no formato do objeto Cliente capturado
    }
    
    public function  atualizarCliente(Clientes $clientes)
    {
        $sql = $this->con->prepare("update clientes set nome= :nom, cnpj=:cnpj, endereco=:endereco, id_cidade=:id_cidade where id_cliente=:id_cliente");
        
        
        $sql->bindValue(':nom',$clientes->getNome());
        $sql->bindValue(':cnpj',$clientes->getCnpj());
        $sql->bindValue(':endereco', $clientes->getEndereco());
        $sql->bindValue(':id_cidade', $clientes->getId_cidade());
        $sql->execute();
    }
    
    
}
