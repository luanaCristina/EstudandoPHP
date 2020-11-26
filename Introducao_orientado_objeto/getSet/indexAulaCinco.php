<?php

require "Pessoa.php"; //para importar a classe Pessoa.php. Podemos usar o require_once que permite fazer subir essa classe apenas uma vez
//podemos usar também o include e se caso a gente colocasse uma classe que não existisse ele não daria um erro fatal, apenas um warning

$uma_pessoa = new Pessoa; //criando um novo objeto chamada Pessoa

$uma_pessoa->setNome("Luana");
echo $uma_pessoa->getNome;
