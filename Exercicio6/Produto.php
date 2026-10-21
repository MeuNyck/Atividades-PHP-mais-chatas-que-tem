<?php
class Produto {
    protected $nome;
    private $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function mostrarProduto() {
        echo "Produto: " . $this->nome . "<br>";
        echo "Preço: R$ " . number_format($this->getPreco(), 2, ',', '.') . "<br>";
    }
}
?>
