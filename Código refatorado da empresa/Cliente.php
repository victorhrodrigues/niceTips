<?php

class Cliente
{
    private string $email;

    public function __construct(string $email)
    {   
        $this->validacaoEmail($email);
        $this->email = $email;
    }

    /*
        Validação do email
    */
    
    private function validacaoEmail(string $email): void
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            throw new InvalidArgumentException("Email inválido");
        }
    }
}