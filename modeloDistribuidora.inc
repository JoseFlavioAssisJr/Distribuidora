<?php

class Bebidas {

    private $id_bebida;
    private $nome;
    private $volume;
    private $preco;
    private $peso;
    private $qde_estoque;
    private $fabricante;
    
    function Bebidas($id_bebida, $nome, $volume, $preco, $peso, $qde_estoque, $fabricante) {
        $this->id_bebida = $id_bebida;
        $this->nome = $nome;
        $this->volume = $volume;
        $this->preco = $preco;
        $this->peso = $peso;
        $this->qde_estoque = $qde_estoque;
        $this->fabricante = $fabricante;
    }
    
    public function setBebidas($id_bebida, $nome, $volume, $preco, $peso, $qde_estoque, $fabricante) {
	$this->id_bebida = $id_bebida;
	$this->nome = $nome;
	$this->volume = $volume;
	$this->preco = $preco;
        $this->peso = $peso;
        $this->qde_estoque = $qde_estoque;
        $this->fabricante = $fabricante;
    }
    
    function getId_bebida() {
        return $this->id_bebida;
    }

    function getVolume() {
        return $this->volume;
    }

    function getPreco() {
        return $this->preco;
    }

    function getPeso() {
        return $this->peso;
    }

    function getQde_estoque() {
        return $this->qde_estoque;
    }

    function getFabricante() {
        return $this->fabricante;
    }

    function setId_bebida($pId_bebida) {
        $this->id_bebida = $pId_bebida;
    }

    function setVolume($pVolume) {
        $this->volume = $pVolume;
    }

    function setPreco($pPreco) {
        $this->preco = $pPreco;
    }

    function setPeso($pPeso) {
        $this->peso = $pPeso;
    }

    function setQde_estoque($pQde_estoque) {
        $this->qde_estoque = $pQde_estoque;
    }

    function setFabricante($pFabricante) {
        $this->fabricante = $pFabricante;
    }
    
}

class Cidades {

    private $id_cidade;
    private $cidade;
    private $estado;
    private $CEP;
    private $valorfrete_porPeso;
    private $peso;
    
    function Cidades($id_cidade, $cidade, $estado, $CEP, $valorfrete_porPeso, $peso) {
        $this->id_cidade = $id_cidade;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->CEP = $CEP;
        $this->valorfrete_porPeso = $valorfrete_porPeso;
        $this->peso = $peso;
    }

    public function setCidades($id_cidade, $cidade, $estado, $CEP, $valorfrete_porPeso, $peso) {
	$this->id_cidade = $id_cidade;
	$this->cidade = $cidade;
	$this->estado = $estado;
	$this->CEP = $CEP;
        $this->valorfrete_porPeso = $valorfrete_porPeso;
        $this->peso = $peso;
    }
    
    function getId_cidade() {
        return $this->id_cidade;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getEstado() {
        return $this->estado;
    }

    function getCEP() {
        return $this->CEP;
    }

    function getValorfrete_porPeso() {
        return $this->valorfrete_porPeso;
    }

    function getPeso() {
        return $this->peso;
    }

    function setId_cidade($pId_cidade) {
        $this->id_cidade = $pId_cidade;
    }

    function setCidade($pCidade) {
        $this->cidade = $pCidade;
    }

    function setEstado($pEstado) {
        $this->estado = $pEstado;
    }

    function setCEP($pCEP) {
        $this->CEP = $pCEP;
    }

    function setValorfrete_porPeso($pValorfrete_porPeso) {
        $this->valorfrete_porPeso = $pValorfrete_porPeso;
    }

    function setPeso($pPeso) {
        $this->peso = $pPeso;
    }
    
}

class Clientes {

    private $id_cliente;
    private $nome;
    private $cnpj;
    private $endereco;
    private $id_cidade;
    
    function Clientes($id_cliente, $nome, $cnpj, $endereco, $id_cidade) {
        $this->id_cliente = $id_cliente;
        $this->nome = $nome;
        $this->cnpj = $cnpj;
        $this->endereco = $endereco;
        $this->id_cidade = $id_cidade;
    }

        public function setClientes($id_cliente, $nome, $cnpj, $endereco, $id_cidade) {
	$this->id_cliente = $id_cliente;
	$this->nome = $nome;
	$this->cnpj = $cnpj;
	$this->endereco = $endereco;
        $this->id_cidade = $id_cidade;
    }
    
    function getId_cliente() {
        return $this->id_cliente;
    }

    function getNome() {
        return $this->nome;
    }

    function getCnpj() {
        return $this->cnpj;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getId_cidade() {
        return $this->id_cidade;
    }

    function setId_cliente($id_cliente) {
        $this->id_cliente = $id_cliente;
    }

    function setNome($pNome) {
        $this->nome = $pNome;
    }

    function setCnpj($pCnpj) {
        $this->cnpj = $pCnpj;
    }

    function setEndereco($pEndereco) {
        $this->endereco = $pEndereco;
    }

    function setId_cidade($pId_cidade) {
        $this->id_cidade = $pId_cidade;
    }
    
}




