<?php

class Pessoa
{
    protected $nome;
    
    public function ___construct($tmpNome)
    {
        $this->nome = $tmpNome;
    }

    public function setNome($novoNome){
        $this->nome = $novoNome;
    }

    public function getNome(){
        return $this->nome;
    }

}