<div class="titulo">Tipo Booleano</div>

<?php 

echo TRUE;
echo '<br>' ;
echo var_dump(true);
echo '<br>' ;
echo is_bool('true');
echo is_bool(false);

echo '<p>Regras:</p>';
echo '<br>' ; var_dump((bool)0); //Apenas o zero é falso
echo '<br>' ; var_dump((bool)20);
echo '<br>' ; var_dump((bool)-1);
echo '<br>' ; var_dump((bool)0.0);
echo '<br>' ; var_dump((bool)0.00001);
echo '<br>' ; var_dump((bool)""); //false
echo '<br>' ; var_dump((bool)" "); // fasle
echo '<br>' ; var_dump((bool)"0"); // todo resto é true
echo '<br>' ; var_dump((bool)"00");