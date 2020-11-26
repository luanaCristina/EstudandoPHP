<?php
class Pessoa{ //o nome do arquivo tem que ser o mesmo da classe 
    private $nome; //variavel publica e não foi atribuído valor a ela

    public function __construct($tmpNome)
    {
        $this->nome = $tmpNome;
    }
  
    public function setNome($novoNome){ //function (comportamentos) sempre inicia com letra minúscula
        $this->nome = $novoNome;
    }

    public function getNome(){
        return $this->nome;
    }
   
}

