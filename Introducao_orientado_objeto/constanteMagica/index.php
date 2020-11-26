<?php

require "Pessoa.php";
require "Programador.php";

$programdor = new Programador("Luana", "PHP");

echo $programdor->getNome();

# chamando constantes
echo $programdor::ESPECIE;