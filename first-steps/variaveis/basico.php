<div class="titulo">Variáveis</div>

<?php

$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$soma = $a + $b;
echo $soma;
echo '<br>';

unset($soma);
echo !isset($soma);


//Nomes de variável
$var = 'Valido';
$Var2 = 'Valido';
$VAR3 = 'Valido';
$_Var4 = 'Valido';

//$6var = 'invalido';
//$%var = 'invalido';

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);