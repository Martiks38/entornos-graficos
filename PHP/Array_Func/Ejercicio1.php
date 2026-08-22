<?php
$a = array("color" => "rojo",
  "sabor" => "dulce",
  "forma" => "redonda",
  "nombre" => "manzana",
  4);

  $b = [];
  $b['color'] = 'rojo';
  $b['sabor'] = 'dulce';
  $b['forma'] = 'redonda';
  $b['nombre'] = 'manzana';
  $b[] = 4;
?>

<!--
Ambos bloques son equivalentes. El primero utiliza array() para definir todos los, mientras que en el segundo lo hace elemento por elemento. En ambos casos, agregar el 4 sin una clave, PHP le asignará automáticamente la primera clave númera disponible, 0 en este caso. Por lo tanto, resulta 0 => 4.
-->
