<?php

require "Pessoa.php"; //para importar a classe Pessoa.php. Podemos usar o require_once que permite fazer subir essa classe apenas uma vez
//podemos usar também o include e se caso a gente colocasse uma classe que não existisse ele não daria um erro fatal, apenas um warning

$pessoa = new Pessoa("Luana"); //criando um novo objeto chamada Pessoa

echo $pessoa->getNome;
