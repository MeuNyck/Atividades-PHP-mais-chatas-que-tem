<?php
require_once "Funcionario.php";

class Desenvolvedor extends Funcionario {
    private $linguagemPrincipal;

    public function __construct($nome, $salario, $linguagemPrincipal) {
        parent::__construct($nome, $salario);
        $this->linguagemPrincipal = $linguagemPrincipal;
    }

    public function programar() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Salário: R$ " . number_format($this->getSalario(), 2, ',', '.') . "<br>";
        echo "Linguagem: " . $this->linguagemPrincipal . "<br>";
        echo "Atividade: Programando em " . $this->linguagemPrincipal . ".<br>";
    }
}
?>
