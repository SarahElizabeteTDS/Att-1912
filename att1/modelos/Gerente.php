<?php

require_once("modelos/Funcionario.php");

class Gerente extends Funcionario
{
    public function getSalario()
    {
        return $this->salariobase * 4.5; 
    }

    public function getCargo()
    {
        return "Gerente";
    }
}