<?php
include_once 'Produto.php';

class Carrinho
{

    private $produtos = [];

    private $precoTotal = 0;
private $custoProduto = 0;
    private $quantidade = 0;

    public function setProduto(Produto $produtos, $quantidade = 1)
    {
        $this->produtos[] = [
            'produto' => $produto,
            'qtd' => $quantidade
        ];
        $this->precoTotal += $quantidade * $produto->getVenda();
        $this->quantidade += $quantidade;
    }

    public function getProdutos()
    {
        return $this->produtos;
    }

    public function getQuantidadeDeProdutos()
    {
        return $this->quantidade;
    }

    public function getPrecoTotal($formatar=false)
    {
        if($formatar){
            return $this->formatar($this->precoTotal);
        } else {
        return $this->precoTotal;
        }
    }

    public function getPrecoPagar()
    {
        $precoPagar = $this->getPrecoTotal();
        
        return $this->formatar($precoPagar);
    }
    
    private function formatar($valor){
        return "R$".number_format($valor,2,",",".");
    }
}
