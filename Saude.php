<?php

// Classe Saude para gerenciar informações de saúde
class Saude
{
    private $condicoesMedicas;
    private $alergias;

    public function __construct($condicoesMedicas, $alergias)
    {
        $this->condicoesMedicas = $condicoesMedicas;
        $this->alergias = $alergias;
    }

    public function getCondicoesMedicas()
    {
        return $this->condicoesMedicas;
    }

    public function getAlergias()
    {
        return $this->alergias;
    }
}
