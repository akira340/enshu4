<?php
$a[0] = 5;

print "n=$a[0]\n";

$_POST['id'] = 1;

print "select * from quiz2 where id={$_POST['id']}\n";
print "<input type=\"hidden\" name=\"id\" value=".$_POST['id'].">\n";

?>
