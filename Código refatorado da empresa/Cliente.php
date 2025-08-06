<?php

class Cliente
{
    private Email $email;
    private CPF $cpf;
    private Idade $idade;

    public function __construct(Email $email, CPF $cpf, Idade $idade)
    {   
        $this->email = $email;
        $this->cpf = $cpf;
        $this->idade = $idade;
    }

}