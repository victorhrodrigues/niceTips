<?php

class Idade
{
    private int $idade;

    public function __construct($idade)
    {   
        $this->validacao($idade);
        $this->idade = $idade;
    }

    private function validacao(int $idade): void
    {
        if ($idade <= 18 || $idade > 115)
        {
            throw new DomainException("A idade é inválida");
        }
    }
}