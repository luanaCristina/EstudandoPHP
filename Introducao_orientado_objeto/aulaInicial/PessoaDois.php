<?php
class PessoaDois{ //o nome do arquivo tem que ser o mesmo da classe 
    public $znome; //variavel publica e não foi atribuído valor a ela
    public $site;
    public function falarNome(){ //function (comportamentos) sempre inicia com letra minúscula
        echo $this->nome; //para escrever algo na tela a gente usa o comando eco
    }
    public function falarSite(){
        echo $this->site; //this eh uma palavra reservada para acessar a uma variavel local
    }
}