<?php
  echo "El $flor $color \n";
  include 'data.php';
  echo " El $flor $color";
?>

<!--
El código muestra cómo PHP trabaja cuando detecta el uso de variables no declaradas previamente del "include". Mostrando una línea de PHP Warning por cada variable $color y $flor. Y, luego, muestra el texto "El  ".
A continuación, se importa el archivo datos.php, imprimiendo por consola "El clavel blanco".
-->
