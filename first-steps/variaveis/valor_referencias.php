<div class="titulo">Valor Referências</div>

<?php

$variavel = "valor inicial";
echo $variavel;

//ATRIBUIÇÃO POR VALOR
$variavelValor = $variavel;
echo '<br>';

echo $variavelValor;
echo '<br>';

$variavelValor = 'novo valor';

echo "<br> $variavel";
echo "<br> $variavelValor";

//ATRIBUIÇÃO POR REFERÊNCIA
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referencia';

echo  "<br>" . $variavel;