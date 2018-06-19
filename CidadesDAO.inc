<?php

require_once('conexao.inc');
require_once('modeloDistribuidora.inc');

class CidadesDAO
{
 private $con;
    
    function CidadesDao()
    {
        $c = new Conexao();
        $this->con = $c->getConexao();
    }
    
    public function incluirCidades(Cidades $cidades)
    {
        $sql = $this->con->prepare("insert into cidades(cidade, estado, CEP, valorfrete_porPeso, peso) values (:cidade,:estado,:CEP, :valorfrete_porPeso, :peso)");
        
        $sql->bindValue(':cidade', $cidades->getCidade());
        $sql->bindValue(':estado', $cidades->getEstado());
        $sql->bindValue(':CEP', $cidades->getCEP());
        $sql->bindValue(':valorfrete_porPeso', $cidades->getValorfrete_porPeso());
        $sql->bindValue(':peso', $cidades->getPeso());
        
        $sql->execute();
    }
    
    public function getCidades(){
        $rs = $this->con->query("SELECT * FROM cidades");
        
        $lista = array();
        while($cidades=$rs->fetch(PDO::FETCH_OBJ)){
            $lista[] = $cidades;
        }
        
        return $lista;
    }


    
    public function excluirCidade($id_cidade)
    {
            $sql = $this->con->prepare("delete from cidades where id_cidade=:id_cidade");
            
            $sql->bindValue(':id_cidade', $id_cidade);
            $sql->execute();
    }


    public function getCidade($id_cidade)
    {
        $sql = $this->con->prepare("SELECT * FROM cidades where id_cidade = :id_cidade");
        $sql->bindValue(':id_cidade', $id_cidade);
        $sql->execute();
        
        return $sql->fetch(PDO::FETCH_OBJ); // retorna o registro da tabela no formato do objeto Cidade capturado
    }
    
    public function  atualizarCidade(Cidades $cidade)
    {
        $sql = $this->con->prepare("update cidades set cidade=:cidade, estado=:estado, CEP=:CEP, valorfrete_porPeso=:valorfrete_porPeso, peso=:peso where id_cidade=:id_cidade");
        
        
        $sql->bindValue(':cidade',$cidade->getCidade());
        $sql->bindValue(':estado',$cidade->getEstado());
        $sql->bindValue(':CEP', $cidade->getCEP());
        $sql->bindValue(':valorfrete_porPeso', $cidade->getValorfrete_porPeso());
        $sql->bindValue(':peso', $cidade->getPeso());
        $sql->bindValue(':id_cidade', $cidade->getId_cidade());
        $sql->execute();
    }
    
    
}
