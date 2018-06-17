<?php

require_once('conexao.inc');
require_once('modeloDistribuidora.inc');

class BebidasDao
{
 private $con;
 
    
    function BebidasDao()
    {
        $c = new Conexao();
        $this->con = $c->getConexao();
        
    }
    
    public function incluirBebida(Bebidas $bebida)
    {
        $sql = $this->con->prepare("insert into bebidas(nome, volume, preco, peso, qde_estoque, fabricante) values (:nom,:vol,:preco,:peso,:qde_est,:fab)");
        
        $sql->bindValue(':nom', $bebida->getNome());
        $sql->bindValue(':vol', $bebida->getVolume());
        $sql->bindValue(':preco', $bebida->getPreco());
        $sql->bindValue(':peso', $bebida->getPeso());
        $sql->bindValue(':qde_est', $bebida->getQde_estoque());
        $sql->bindValue(':fab', $bebida->getFabricante());
        
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
    
    public function atualizarBebida(Bebidas $bebida)
    {
        $sql = $this->con->prepare("update bebidas set nome=:nom, volume=:vol, preco=:preco, peso=:peso, qde_estoque=:qde_est, fabricante=:fab where id_bebida=:id_bebida");
        
        
        $sql->bindValue(':nom',$bebida->getNome());
        $sql->bindValue(':vol',$bebida->getVolume());
        $sql->bindValue(':preco', $bebida->getPreco());
        $sql->bindValue(':peso', $bebida->getPeso());
        $sql->bindValue(':qde_est', $bebida->getQde_estoque());
        $sql->bindValue(':fab', $bebida->getFabricante());
        $sql->bindValue(':id_bebida', $bebida->getId_bebida());
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
