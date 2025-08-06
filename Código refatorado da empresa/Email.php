<?php

class Email
{
    private string $email;

    public function __construct(string $email)
    {   
        $this->validacao($email);
        $this->email = $email;
    }

    private function validacao(string $email): void
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            throw new InvalidArgumentException("Email inválido");
        }
    }

    public function getValor(): string
    {
        return $this->email;
    }
}