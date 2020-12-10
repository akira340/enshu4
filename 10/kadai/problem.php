<?php
include_once("auth.inc");
auth();
?>

<!DOCTYPE html>

<html lang="ja">

<head>
<link rel="stylesheet" type="text/css" href="/~tyf7207/css/yamaba01.css">
<title>
小テストの回答
</title>
<meta charset="utf-8">
</head>

<body>

<h1>小テストの回答</h1>

<?php

// データベースへの接続
@$con = pg_connect("host=kite.cs.miyazaki-u.ac.jp dbname=endb2027 user=enuser2027 password=enpass2027");
if ($con == false){
  print("DATABASE CONNECTION ERROR\n");
  exit;
}


$sql1 = "select * from quiz2"; // SQLのコマンド文を文字列に格納する。
@$result = pg_query($sql1); // SQLのコマンドでデータベースに問い合わせする。
if($result == false){
  print"DATA ACQUISITION ERROR\n";
  exit;
}

$n = 7; // 列数が7であることは決まっている

$m0 = pg_num_rows($result);
$m = floor(rand() / getrandmax() * $m0); // rand()関数を用いて、0以上$m0未満の値を$mに代入する

for($i = 0; $i < $n; $i++)
  $ary[] = pg_fetch_result($result,$m,$i);

pg_free_result($result); // SQLの実行結果を格納していたメモリを解放。
pg_close($con); // データベースとの接続を閉じる。
?>

<form action="judge.php" method="post">

<?php
for($i = 5; $i < $n - 1; $i++){
  print "<p>";
  print($ary[$i]);
  print "</p>\n";
}
?>

<ol>

<?php

for($i = 1; $i <= 4; $i++)
  print "<li><input type=\"radio\" name=\"data1\" value=\"$i\">".$ary[$i]."</li>\n";

print "<input type=\"hidden\" name=\"id\" value=$ary[0]>";
?>

</ol>
<input type="submit">

</form>

<hr>
<a href="index.php">戻る</a>
</body>
</html>
