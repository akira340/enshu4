<?php


$salt = '$1$.KOFLVtS$gOWjLvzeX9d/aBMpHuEQC0';

for($i = 0; $i < 5; $i++){
  print crypt("abcd", $salt);
  print "\n";
}
?>
