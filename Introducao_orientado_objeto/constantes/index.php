<?php

require "Pessoa.php";
require "Programador.php";

$programador = new Programador("Luana", "PHP");

echo $programador->getNome();

# chamando a constante
echo $programador::ESPECIE;