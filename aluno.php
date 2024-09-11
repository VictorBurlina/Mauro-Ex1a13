<?php
class Aluno {
    public $nome;
    public $nascimento;
    public $sexo;
    public $cpf;

    public function __construct($nome, $nascimento, $sexo, $cpf) {
        $this->nome = $nome;
        $this->nascimento = $nascimento;
        $this->sexo = $sexo;
        $this->cpf = $cpf;
    }

    public function idade() {
        $dataAtual = new DateTime();
        $dataNascimento = new DateTime($this->nascimento);
        $idade = $dataAtual->diff($dataNascimento)->y;
        return $idade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function __toString() {
        return "Nome: " . $this->nome . "<br>" .
               "Data de Nascimento: " . $this->nascimento . "<br>" .
               "Sexo: " . $this->sexo . "<br>" .
               "CPF: " . $this->cpf . "<br>";
    }
}
?>