<?php

// Classe Contato para gerenciar informações de contato
class Contato
{
    private $telefone;
    private $email;

    public function __construct($telefone, $email)
    {
        $this->telefone = $telefone;
        $this->email = $email;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function getEmail()
    {
        return $this->email;
    }
}
