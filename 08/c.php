<?php
$a = array(91, 46, 93, 62, 42, 80, 52, 51);
$n = count($a);

for($i = 0; $i < $n; $i++) {
  $min = $i;
  for($j = $i + 1; $j < $n; $j++) {
    if($a[$j] < $a[$min])
      $min = $j;
  }
  $tmp = $a[$i];
  $a[$i] = $a[$min];
  $a[$min] = $tmp;
}

for($i = 0; $i < $n; $i++)
  print $a[$i]."\n";

?>
