<?php

$a[] = array("Spring",3);
$a[] = array("Summer",1);
$a[] = array("Autumn",4);
$a[] = array("Winter",2);

print "<ul>\n";
for($i = 0; $i < 4; $i++)
  print "<li><input=\"radio\" name=\"id\" value=\"{$a[$i][1]}\">{$a[$i][0]}</li>\n";
print "</ul>\n";

?>
