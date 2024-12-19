<?php

require_once("modelos/Funcionario.php");
require_once("modelos/Gerente.php");
require_once("modelos/Desenvolvedor.php");
require_once("modelos/Estagiario.php");

$funcionario = null;
$opcao = 0;
do 
{
    print "Qual o cargo do funcionário que você deseja cadastrar?\n";
    print " 1 - Gerente\n";
    print " 2 - Desenvolvedor\n";
    print " 3 - Estágiario\n";
    print " 0 - Sair\n";
    $opcao = readline();
    switch($opcao) 
    {
        case 0:
            system("clear");
            die;
        break;

        case 1:
            $funcionario = new Gerente(readline("Insira o nome do funcionário: "));
            print "\n" . $funcionario;
        break;

        case 2:
            $funcionario = new Desenvolvedor(readline("Insira o nome do funcionário: "));
            print "\n" . $funcionario;
        break;

        case 3:
            $funcionario = new Estagiario(readline("Insira o nome do funcionário: "));
            print "\n" . $funcionario;
        break;

        default:
            print "\nOpção inválida\n";
            system("clear");
    }
}while($opcao != 0);