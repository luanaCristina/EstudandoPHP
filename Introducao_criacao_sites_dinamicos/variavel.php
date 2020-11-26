<?php // para rodar esse código eu preciso copiar e colar o arquivo na pasta C:\xampp\htdocs\web e Apache do xampp tem que está rodando
$messagem = 'Hello World!'; //variáveis são declaradas com cifrão
echo $messagem;

$A = 2;
$B = 3;

$SOMA = $A + $B; //operações matemáticas 
$MULTIPLICACAO = $A * $B; //Operação matemática de multiplicação
print $SOMA;
print $MULTIPLICACAO; //para imprimir na tela a variável $MULTIPLICACAO

//operadores condicionais altera o fluxo do programa
if($A % 2 == 1) { 
    echo 'Numero Ímpar';
}
//quando o comando de cima estiver errado
else{
    echo 'Número Par';
}

//laços de repetição
echo "while: "; //testa a condição antes de executar o bloco
$i = 0;
while ($i < 10){
    echo $i;
    $i++;
}

#do...while ele executa antes de testar a condição. Ou seja, ao menos uma vez ele já executa na primeira vez que roda.
echo "<br>do...while: ";
$i = 0;
do{
    echo $i;
    $i++;
}while($i < 10);

#for  - vai executar um laço controlado
echo '<br>for: ';
for($i = 0; $i < 10; $i++){
    echo $i;
}

#foreach - vai percorrer um conjunto de dados
echo '<br>foreach: ';
$i = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($i as $j){
    echo $j;
}
