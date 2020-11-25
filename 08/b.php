<?php

$a = array(
  array("Tree","Fire","Soil","Metal","Water"),
  array("Mon","Tue","Wed","Thu","Fri","Sat","Sun"),
  array("North","South","East","West")
);

$n = count($a);
for($i = 0; $i < $n; $i++){
  for($j = 0; $j < count($a[$i]); $j++) {
    print $a[$i][$j].",";
  }
  print "\n";
}

?>
