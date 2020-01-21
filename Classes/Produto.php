<?php

class Produto
{

    private $nome;

    private $custo = 0;
private $venda = 0;

    public function __construct($nomeProduto,$custoProduto,$vendaProduto)
    {
        $this->nome = $nomeProduto;
        $this->custo = $custoProduto;
$this->venda = $vendaProduto;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCusto()
    {
        return $this->custo;
    }
public function getVenda()
    {
        return $this->venda;
    }
}