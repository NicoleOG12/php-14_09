<?php

class Pessoa
{
    public $nome;
    private $senha;
    public $email;

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function DadosAtualizados()
    {
        return 'Dados atualizados:';
    }
}

class Corrida
{
    public $id;
    public $motorista;
    public $passageiro;
    public $endPartida;
    public $endSaida;
    public $valor;
    public $modaPassageiros;
    public $tipoCorrida;

    public function CalcularCorrida()
    {
        return 'Seu valor total é:';
    }

    public function CalcularDistancia()
    {
        return 'Seu valor total é:';
    }
}

class Motorista extends Pessoa {
    public $id;
    public $cnh;
    private $avaliacao;
    public $historico;

    public function FinalizarCorrida()
    {
        return 'Corrida finalizada';
    }

    public function CancelarCorrida()
    {
        return 'Corrida cancelada';
    }  

    public function getAvaliacao()
    {
        return $this->avaliacao;
    }

    public function setAvaliacao($avaliacao)
    {
        $this->avaliacao = $avaliacao;
    }
}

class Passageiro extends Pessoa{
    public $id;
    public $cpf;
    private $avaliacao;
    public $historico;

    public function CancelarCorrida()
    {
        return 'Corrida cancelada';
    }

    public function getAvaliacao()
    {
        return $this->avaliacao;
    }

    public function setAvaliacao($avaliacao)
    {
        $this->avaliacao = $avaliacao;
    }
}

$passageiro = new Passageiro();

$passageiro->id='13213';
$passageiro->nome='oi';
$passageiro->setSenha('12313');
$passageiro->email='gfdgx';
$passageiro->cpf='324234';
$passageiro->setAvaliacao('232133');
$passageiro->historico='fdgf';

echo $passageiro->getSenha();