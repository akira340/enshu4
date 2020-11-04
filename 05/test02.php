<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>PHPによるウェブページ</title>
<link rel="stylesheet" type="text/css" href="/penshu4_2020/67190209/ex04/introduction.css">
</head>
<body>
<h1>PHPによるウェブページ</h1>

<?php

$a = array(3, -7, 4, 1, -5, -9, 0, -2, 6, -8);
$n = count($a);

for($i = 0; $i < $n; $i++) {
  if($a[$i] < 0) {
    print "minus\n";
  } elseif($a[$i] % 2 == 0) {
    print $a[$i].":even\n";
  } else {
    print "odd:".$a[$i]."\n";
  }
}

?>

</body>
</html>

