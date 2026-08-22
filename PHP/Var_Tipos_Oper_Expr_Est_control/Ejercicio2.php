<?php

// * 2.a Los 3 bloques de código son equivalentes

// * Bloque a1
// $i = 1;
// while ($i <= 10) {
//     print $i++;
// }

// echo "\n\n";

// * Bloque b1
$i = 1;
// while ($i <= 10) :
//     print $i;
//     $i++;
// endwhile;

// echo "\n\n";

// * Bloque c1
// $i = 0;
// do {
//     print ++$i;
// } while ($i < 10);

// * 2.b Los 4 bloques de código son equivalentes

// * Bloque a2
// for($i=1; $i <= 10; $i++ ){
//   print $i;
// }

// echo "\n\n";

// * Bloque b2
// for($i = 1; $i <= 10; print $i, $i++);

// echo "\n\n";

// * Bloque c2
// for($i = 1;;$i++){
//   if($i > 10){
//     break;
//   }

//   print $i;
// }

// echo "\n\n";

// * Bloque d2
// $i = 1;
// for(;;){
//   if($i>10){
//     break;
//   }

//   print $i;
//   $i++;
// }

// * 2.c Los dos bloques de código son equivalentes

// * Bloque a3
if($i == 0) {
  print "i equals 0";
} elseif ($i == 1) {
  print "i equals 1";
} elseif ($i == 2) {
  print "i equals 2";
}

// * Bloque b3
switch ($i) {
  case 0:
    print "i equals 0";
    break;
  case 1:
    print "i equals 1";
    break;
  case 2:
    print "i equals 2";
    break;
}
?>
