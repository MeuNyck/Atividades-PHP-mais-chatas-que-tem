<?php
class Funcionario {
    protected $nome;
    private $salario;

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function getSalario() {
        return $this->salario;
    }
}
?>
