<?php

$file = fopen("data0501.txt","r");

for($i = 0; $i < 7; $i++) {
  $ary[$i] = chop(fgets($file,1024));
}
fclose($file);

print "<p>\n";
for($i = 5; $i < 7; $i++) {
  print $ary[$i]."\n";
}
print "</p>\n";
for($i = 1; $i < 5; $i++) {
  print "<p>".$ary[$i]."</p>\n";
}

?>
