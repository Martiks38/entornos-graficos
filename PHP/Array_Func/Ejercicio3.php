<?php
$fun = getdate();

echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds]
segundos, del $fun[mday]/$fun[mon]/$fun[year]";

// * Salida
// * Has entrado en esta pagina a las #1 horas, con #2 minutos y #3 segundos, del #4;

// ? Los datos siguientes siguen la hora UTC por defecto
// * #1 Es la hora en el momento de ejecución. Ej. 18
// * #2 Son los minutos en el momento de ejecución. Ej. 16
// * #3 Son los segundo en el momento de ejecución. Ej 15
// * #4 Día/mes/año en el momento de ejecución. Ej 22/8/2026
?>

<?php
  function sumar(int|float $sumando1, int|float $sumando2){
    $suma = $sumando1 + $sumando2;
    echo $sumando1."+".$sumando2."=".$suma;
  }

  sumar(5,6);
  // * Salida: 5+6=11
?>
