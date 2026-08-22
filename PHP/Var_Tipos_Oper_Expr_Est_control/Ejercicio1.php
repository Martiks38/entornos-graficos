<?php
function doble($i){
  return $i*2;
}

$a = TRUE;
$b = "xyz";
$c = 'xyz';
$d = 12;

echo gettype($a);
echo gettype($b);
echo gettype($c);
echo gettype($d);

if(is_int($d)){
  $d += 4;
}
if(is_string($a)){
  echo "Cadena: $a";
}

$d = $a ? ++$d : $d*3;
$f = doble($d++);
$g = $f += 10;

echo $a, $b, $c, $d, $f, $g;
?>

<!--
## Variables y tipo

  $a: boolean
  $b: string
  $c: string
  $d: integer
  $f: integer
  $g: integer
  $i: integer

## Operadores

  Unarios:
    *
    ++

  Binarios:
    +=

  Ternarios:
    ? :

## Funciones y parámetros

  Función: doble
  Parámetros: $i

  Función: is_int($d)
  Parámetro: $d

  Función: gettype($a)
  Parámetro: $a

  Función: gettype($b)
  Parámetro: $b

  Función: gettype($c)
  Parámetro: $c

  Función: gettype($d)
  Parámetro: $d

  Función: is_string($a)
  Parámetro: $a

## Estructuras de control

  if(is_int($d)){
    echo "Cadena: $a";
  }

## Salida por pantalla

  echo gettype($a) -> boolean
  echo gettype($b) -> string
  echo gettype($c) -> string
  echo gettype($d) -> integer

  No muestra nada por pantalla debido a que $a es boolean y no un string
  if(is_string($a)){
    echo "Cadena: $a";
  }

  echo $a, $b, $c, $d, $f, $g -> 1xyzxyz184444


  Salida completa: booleanstringstringinteger1xyzxyz184444
-->