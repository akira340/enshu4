<?php

$_POST = array('ans'=>3, 'a1'=>"Spring", 'a2'=>"Summer", 'a3'=>"Autumn", 'a4'=>"Winter",'q'=>"Which is Fountain?", 'id'=>"1");

print "insert into quiz2 values(";
print $_POST['ans'].",";
print "'{$_POST['a1']}',";
print "'{$_POST['a2']}',";
print "'{$_POST['a3']}',";
print "'{$_POST['a4']}',";
print "'{$_POST['q']}',";
print $_POST['id'].")";
print "\n";

?>
