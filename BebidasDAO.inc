<?php

require_once('conexao.inc');
require_once('modeloDistribuidora.inc');

class BebidasDAO
{
 private $con;
 public $porPagina;
    
    function BebidasDao()
    {
        $c = new Conexao();
        $this->con = $c->getConexao();
        $this->porPagina = 10;
    }
    
    public function incluirBebidas(Bebidas $bebidas)
    {
        $sql = $this->con->prepare("insert into bebidas(nome, volume, preco, peso, qde_estoque, fabricante) values (:nom,:vol,:preco, :peso, :qde_est, :fab)");
        
        $sql->bindValue(':nom', $bebidas->getNome());
        $sql->bindValue(':vol', $bebidas->getVolume());
        $sql->bindValue(':preco', $bebidas->getPreco());
        $sql->bindValue(':peso', $bebidas->getPeso());
        $sql->bindValue(':qde_est', $bebidas->getQde_estoque());
        $sql->bindValue(':fab', $bebidas->getFabricante());
        
        $sql->execute();
    }
    
    public function getBebidas(){
        $rs = $this->con->query("SELECT * FROM bebidas");
        
        $lista = array();
        while($bebidas=$rs->fetch(PDO::FETCH_OBJ)){
            $lista[] = $bebidas;
        }
        
        return $lista;
    }


    
    public function excluirBebidas($id_bebida)
    {
            $sql = $this->con->prepare("delete from bebidas where id_bebida=:id_bebida");
            
            $sql->bindValue(':id_bebida', $id_bebida);
            $sql->execute();
    }


    public function getBebida($id_bebida)
    {
        $sql = $this->con->prepare("SELECT * FROM bebidas where id_bebida = :id_bebida");
        $sql->bindValue(':id_bebida', $id_bebida);
        $sql->execute();
        
        return $sql->fetch(PDO::FETCH_OBJ); // retorna o registro da tabela no formato do objeto Bebida capturado
    }
    
    public function  atualizarBebida(Bebidas $bebidas)
    {
        $sql = $this->con->prepare("update bebidas set nome= :nom, volume=:vol, preco=:preco, peso=:peso, qde_estoque=:qde_est, fabricante=:fab where id_bebida=:id_bebida");
        
        
        $sql->bindValue(':nom',$bebidas->getNome());
        $sql->bindValue(':vol',$bebidas->getVolume());
        $sql->bindValue(':preco', $bebidas->getPreco());
        $sql->bindValue(':peso', $bebidas->getPeso());
        $sql->bindValue(':qde_est', $bebidas->getQde_estoque());
        $sql->bindValue(':fab', $bebidas->getFabricante());
        $sql->execute();
    }
    
    public function getBebidasPaginacao ($pagina)
    {
        $init = ($pagina - 1) * $this->porPagina;
        $result = $this->con->query("SELECT * FROM bebidas limit $init, $this->porPagina");
        
        $lista = array();
        while ($row = $result->fetch(PDC::FETCH_OBJ))
        {
            $lista[] = $row;
        }
        
        return $lista;
    }
    
    
}
