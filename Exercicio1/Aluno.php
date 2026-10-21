<?php
require_once "Pessoa.php";

class Aluno extends Pessoa {
    private $curso;

    public function __construct($nome, $idade, $curso) {
        parent::__construct($nome, $idade);
        $this->curso = $curso;
    }

    public function mostrarDados() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->getIdade() . "<br>";
        echo "Curso: " . $this->curso . "<br>";
    }
}
?>
