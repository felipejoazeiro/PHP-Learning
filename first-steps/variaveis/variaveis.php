<div class="titulo">Variáveis variáveis</div>

<?php

$a = "valorA";
$$a = "valorAA";

echo "$a  $$a";

$epa = 'opa';
$opa = 'vish';
$vish = "eita!";

echo " <br> $epa  {$$epa}  {$$$epa}";
