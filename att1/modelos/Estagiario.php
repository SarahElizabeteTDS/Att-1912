<?php

require_once("modelos/Funcionario.php");

class Estagiario extends Funcionario
{
    public function getSalario()
    {
        return $this->salariobase * 0.8; 
    }

    public function getCargo()
    {
        return "Estágiario";
    }
}