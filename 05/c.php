<?php

$file = fopen("data0501.txt","r");

$n = 0;
while(($in = fgets($file, 1024)) != false) {
  $a[$n] = chop($in);
  $n += 1;
}
fclose($file);

print "<p>\n";
for($i = 5; $i < $n; $i++) {
  print $a[$i]."\n";
}
print "</p>\n";
print "<ol>\n";
for($i = 1; $i < 5; $i++) {
  print "<li><a href=";
  if($i == $a[0]) print "\"ok.html\">";
  else print "\"ng.html\">";
  print $a[$i]."</a></li>\n";
}
print "</ol>\n";

?>
