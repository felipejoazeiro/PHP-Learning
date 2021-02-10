<div class="titulo">Atribuição</div>

<?php

$title = 'Atribuições';

$numero = 10;

echo '<br>' . $numero;

$numero = $numero -1;

echo '<br>' . $numero;

$numero = $numero + 1.5;

echo '<br>' . $numero;

$numero++;
echo '<br>' . $numero;

$numero--;
echo '<br>' . $numero;

$numero = 20;
echo '<br>' . $numero;

$numero -= 5;
echo '<br>' . $numero;

$numero += 2;
echo '<br>' . $numero;

$numero .= 4; //Apenas concatenação
echo '<br>' . $numero;

//$variavelInexistente = '';
echo '<br>' . $variavelInexistente;
$valor = $variavelInexistente ?? 'valor default';
echo '<br>' . $valor;




