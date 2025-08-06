<?php

class Companhia
{
    private string $email;

    public function __construct($email)
    {
        $this->validacaoEmail($email);
        $this->email=$email;
    }

    private function validacaoEmail(string $email): void
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            throw new InvalidArgumentException("Email inválido");
        }
    }

}