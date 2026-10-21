<?php
class Animal {
    protected $nome;
    private $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function mostrarNome() {
        echo "Nome: " . $this->nome . "<br>";
    }

    public function getIdade() {
        return $this->idade;
    }
}
?>
