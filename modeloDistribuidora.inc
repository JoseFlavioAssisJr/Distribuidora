<?php

class Bebidas {

private $id_bebida;
private $nome;
private $volume;
private $preco;
private $peso;
private $qde_estoque;
private $fabricante;


public function setBebidas($id_bebida, $nome, $volume, $preco, $peso, $qde_estoque, $fabricante) {
$this->id_bebida = $id_bebida;
$this->nome = $nome;
$this->volume = $volume;
$this->preco = $preco;
$this->peso = $peso;
$this->qde_estoque = $qde_estoque;
$this->fabricante = $fabricante;
}

public function Bebidas($nome, $volume, $preco, $peso, $qde_estoque, $fabricante) {

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

function getNome() {
return $this->nome;
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
function setNome($nome) {
$this->nome = $nome;
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

function Cidades( $cidade, $estado, $CEP, $valorfrete_porPeso, $peso) {

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

class Compras {

private $id_compra;
private $id_cliente;
private $data_compra;
private $valor_total;
private $valortotal_frete;

function Compras($id_compra, $id_cliente, $data_compra, $valor_total, $valortotal_frete) {
$this->id_compra = $id_compra;
$this->id_cliente = $id_cliente;
$this->data_compra = strtotime($data_compra);
$this->valor_total = $valor_total;
$this->valortotal_frete = $valortotal_frete;
}

public function setCompras($id_compra, $id_cliente, $data_compra, $valor_total, $valortotal_frete) {
$this->id_compra = $id_compra;
$this->id_cliente = $id_cliente;
$this->data_compra = strtotime(str_replace('/', '-', $data_compra));// para trocar um caractere pelo outro
$this->valor_total = $valor_total;
$this->valortotal_frete = $valortotal_frete;
}

function getId_compra() {
return $this->id_compra;
}

function getId_cliente() {
return $this->id_cliente;
}

function getData_compra() {
return $this->data_compra;
}

function getValor_total() {
return $this->valor_total;
}

function getValortotal_frete() {
return $this->valortotal_frete;
}

function setId_compra($pId_compra) {
$this->id_compra = $pId_compra;
}

function setId_cliente($pId_cliente) {
$this->id_cliente = $pId_cliente;
}

function setData_compra($pData_compra) {
$this->data_compra = $pData_compra;
}

function setValor_total($pValor_total) {
$this->valor_total = $pValor_total;
}

function setValortotal_frete($pValortotal_frete) {
$this->valortotal_frete = $pValortotal_frete;
}

}

class Itens_compra {

private $id_item;
private $id_bebida;
private $quantidade;
private $valor_item;
private $id_compra;

function Itens_compra($id_item, $id_bebida, $quantidade, $valor_item, $id_compra) {
$this->id_item = $id_item;
$this->id_bebida = $id_bebida;
$this->quantidade = $quantidade;
$this->valor_item = $valor_item;
$this->id_compra = $id_compra;
}

public function setItens_compra($id_item, $id_bebida, $quantidade, $valor_item, $id_compra) {
$this->id_item = $id_item;
$this->id_bebida = $id_bebida;
$this->quantidade = $quantidade;
$this->valor_item = $valor_item;
$this->id_compra = $id_compra;
}

function getId_item() {
return $this->id_item;
}

function getId_bebida() {
return $this->id_bebida;
}

function getQuantidade() {
return $this->quantidade;
}

function getValor_item() {
return $this->valor_item;
}

function getId_compra() {
return $this->id_compra;
}

function setId_item($pId_item) {
$this->id_item = $pId_item;
}

function setId_bebida($pId_bebida) {
$this->id_bebida = $pId_bebida;
}

function setQuantidade($pQuantidade) {
$this->quantidade = $pQuantidade;
}

function setValor_item($pValor_item) {
$this->valor_item = $pValor_item;
}

function setId_compra($pId_compra) {
$this->id_compra = $pId_compra;
}

}










