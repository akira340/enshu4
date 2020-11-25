<?php

$b = array("March", "April", "May");
$c = array("June", "July", "August");
$d = array("September", "October", "November");
$e = array("December", "January", "February");

$a[0] = $b;
$a[1] = $c;
$a[2] = $d;
$a[3] = $e;

for($i = 0; $i < 4; $i++) {
  for($j = 0; $j < 3; $j++) {
    print $a[$i][$j].",";
  }
  print "\n";
}
?>
