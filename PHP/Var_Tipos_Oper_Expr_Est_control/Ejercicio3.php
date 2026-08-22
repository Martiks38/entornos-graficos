<!-- a -->

<!--
El siguiente código renderiza (crea) una tabla de 5 filas ($row = 5) por 2 columnas ($col = 2), con un ancho del 90% y con bordes de 1. Donde cada celda tiene un espacio en blanco no separabla para que puedan visualizarse.
-->
<html>

<head>
  <title>Documento 1</title>
</head>

<body>
  <?php
    echo "<table width = 90% border = '1' >";
    $row = 5;
    $col = 2;
    for ($r = 1; $r <= $row; $r++) {
      echo "<tr>";
      for ($c = 1; $c <= $col;$c++) {
        echo "<td>&nbsp;</td>\n";
      }
      echo "</tr>\n";
    }
    echo "</table>\n";
  ?>
</body>

</html>

<!-- b -->

<!--
El siguiente código muestra un formulario para ingresar la edad y luego al envia el valor ingresado. Para ello, primero, comprueba si el formulario fue enviado mediante isset($_POST['submit']). En caso negativo, se muestra el formulario con un campo para ingresar la edad. Al presionar el input "Ir", el valor ingresado es almacenado en $age por medio de $_POST['age']. Por último, mostrará por pantalla "Mayor de edad" si $age es mayor o igual a 21, en caso contrario, mostrará "Menor de edad".
-->
<html>

<head>
  <title>Documento 2</title>
</head>

<body>
  <?php
    if (!isset($_POST['submit'])) {
  ?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Edad: <input name="age" size="2"> <input type="submit" name="submit" value="Ir">
  </form>
  <?php
    } else {
      $age = $_POST['age'];
      if ($age >= 21) {
        echo 'Mayor de edad';
      } else {
        echo 'Menor de edad';
      }
    }
  ?>
</body>

</html>
