<?php

$file = fopen("data1001.txt","r");
$_POST['uname'] = chop(fgets($file));
$_POST['pass'] = chop(fgets($file));
fclose($file);

$sql1 = "insert into passdb values('{$_POST['uname']}','{$_POST['pass']}')";

print $sql1."\n";

$sql2 = "create table {$_POST['uname']} (id int, pass int)";

print $sql2."\n";

?>
