<?php

require "PessoaDois.php"; //para importar a classe Pessoa.php. Podemos usar o require_once que permite fazer subir essa classe apenas uma vez
//podemos usar também o include e se caso a gente colocasse uma classe que não existisse ele não daria um erro fatal, apenas um warning

$uma_pessoa = new Pessoa; //criando um novo objeto chamada Pessoa
$uma_pessoa->nome = "Luana"; //uma pessoa na posição nome recebe Luana
$uma_pessoa->site = "www.luana.com.br"; //uma pessoa na posição site
//var_dump($uma_pessoa); //exibir todo o conteúdo de um objeto

$uma_pessoa->falarNome();
$uma_pessoa->falarSite();