<!DOCTYPE html>

<html lang="ja">

<head>
<link rel="stylesheet" type="text/css" href="/~tyf7207/css/yamaba01.css">
<title>
小テスト一覧
</title>
<meta charset="utf-8">
</head>

<body>

<h1>小テスト一覧</h1>

<?php

// データベースへの接続
@$con = pg_connect("host=kite.cs.miyazaki-u.ac.jp dbname=endb2058 user=enuser2058 password=enpass2058");
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

$n = 7; // 列数が7であることは分かっている。
$m = pg_num_rows($result); // $mは行数

for($i = 0; $i < $m; $i++) {
  $a = array();
  for($j = 0; $j < $n; $j++)
    $a[] = pg_fetch_result($result,$i,$j);
  $data[] = $a;
}

pg_free_result($result); // SQLの実行結果を格納していたメモリを解放。
pg_close($con); // データベースとの接続を閉じる。

print "<form action=\"problem2.php\" method=\"post\">\n";

for($i = 0; $i < $m; $i++) {
  print "<input type=\"radio\" name=\"id\" value=\"".$data[$i][6]."\">{$data[$i][5]}\n";
  print "<br>\n";
}

?>

<br>
<input type="submit">
</form>
<br>
<a href="register.php">新規問題登録</a>
</body>
</html>
