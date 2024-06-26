<?php

// Classe Funcionario para representar um funcionário
class Funcionario
{
    private $id;
    private $nome;
    private $idade;
    private $contato;
    private $saude;

    public function __construct($id, $nome, $idade, $contato, $saude)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->idade = $idade;
        $this->contato = $contato;
        $this->saude = $saude;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function getContato()
    {
        return $this->contato;
    }

    public function getSaude()
    {
        return $this->saude;
    }
}
