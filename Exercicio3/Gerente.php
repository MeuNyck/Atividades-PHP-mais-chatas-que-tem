<?php
require_once "Funcionario.php";

class Gerente extends Funcionario {
    private $departamento;

    public function __construct($nome, $salario, $departamento) {
        parent::__construct($nome, $salario);
        $this->departamento = $departamento;
    }

    public function gerenciarEquipe() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Salário: R$ " . number_format($this->getSalario(), 2, ',', '.') . "<br>";
        echo "Departamento: " . $this->departamento . "<br>";
        echo "Atividade: Gerenciando a equipe.<br>";
    }
}
?>
