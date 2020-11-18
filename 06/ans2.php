<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>解答</title>
<link rel="stylesheet" type="text/css" href="/penshu4_2020/67190209/ex06/introduction.css">
</head>
<body>
<h1>解答</h1>

<?php
$a = $_POST['check'];
$n = count($a);
for($i = 0; $i < $n; $i++) {
  print "欠席：".$a[$i]."<br>\n";
}
?>

</body>
</html>

