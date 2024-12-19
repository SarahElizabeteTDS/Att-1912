<?php

require_once("modelos/Funcionario.php");

class Desenvolvedor extends Funcionario
{
    public function getSalario()
    {
        return $this->salariobase * 2.3; 
    }

    public function getCargo()
    {
        return "Desenvolvedor";
    }
}