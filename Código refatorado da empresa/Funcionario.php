<?php

class Funcionario
{
    private Email $email;
    private CPF $cpf;

    public function __construct(Email $email, CPF $cpf)
    {
        $this->email = $email;    
        $this->cpf = $cpf; 
    }
}