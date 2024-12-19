<?php

abstract class Funcionario
{
    protected $nome;
    protected $salariobase = 1500;

    public abstract function getSalario();
    public abstract function getCargo();

    public function __construct($n)
    {
        $this->nome = $n;
    }

    public function __toString()
    {
        return "O funcionário " . $this->nome . ", cargo " . $this->getCargo() . ", possui salário de R$" . $this->getFormatado() . "\n\n"; 
    }

    public function getFormatado()
    {
        return number_format($this->getSalario(), 2, ',', '.');
    }

    //gets e setts
    
    public function getSalariobase()
    {
        return $this->salariobase;
    }

    public function setSalariobase($salariobase): self
    {
        $this->salariobase = $salariobase;

        return $this;
    }
}