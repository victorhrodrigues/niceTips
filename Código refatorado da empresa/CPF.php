<?php

class CPF
{
    private string $cpf;

    public function __construct(string $cpf)
    {   
        $this->validacao($cpf);
        $this->cpf = $cpf;
    }

    private function validacao(string $cpf)
    {
        // limpa o campo cpf pegando apenas os números 
        $cpf = preg_replace('/[^0-9]/is', '', $cpf);
        

        // verificação do tamanho do cpf 
        if(strlen($cpf) != 11){
            throw new DomainException("Tamanho do CPF inválido");
        }

        // verificação de numeração igual
        if(preg_match('/(\d)\1{10}/', $cpf)){
            throw new DomainException("Formato do CPF inválido");
        }


        // cálculo para validação do cpf
        for ($t = 9; $t < 11; $t++ ) {
            for ($d = 0, $c = 0; $c < $t; $c++)
            {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d= ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d)
            {
            throw new DomainException("CPF inválido");
            }

        }
    }
    
}