<?php

$n = 5;

srand(0);

$max = getrandmax();
print $max."\n";

for($i = 0; $i < 5; $i++){
  $m = rand() / $max * $n;
  print floor($m)."\n";
}

?>
