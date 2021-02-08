<div class="titulo">Tipo String</div>

<?php 
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu tambem.");
echo '<br>';

//concatenação

echo "Nós também" . ' somos';
echo '<br>', "Também aceito", " virgulas";
echo '<br>';
echo "'Teste ' " .' "teste" ' . ' \'Teste\' ';

print("<br> Também existe função print");
print "<br> Também existe função print" ;

//Algumas funções

echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . strlen('Quantas letras?');
echo '<br>' . mb_strlen("Eu também", "utf-8"); 
echo '<br>' . substr('Só uma parte mesmo', 7, 5);
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso');