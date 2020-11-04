<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>PHPによるクイズ</title>
<link rel="stylesheet" type="text/css" href="/penshu4_2020/67190209/ex05/introduction.css">
</head>
<body>
<h1>PHPによるクイズ</h1>
<?php

$file = fopen("data05.txt","r");
while(($in = fgets($file, 1024)) != false) $a[] = chop($in);
$n = count($a);
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
</body>
</html>

