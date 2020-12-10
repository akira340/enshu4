<!DOCTYPE html>

<html lang="ja">

<head>
<link rel="stylesheet" type="text/css" href="/~tyf7207/css/yamaba01.css">
<title>
データベースから取得したデータの表示
</title>
<meta charset="utf-8">
</head>

<body>

<h1>データベースから取得したデータの表示</h1>

<p>INSERT SUCCESS!!!</p>

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

$n = 7; // 列数が7であることは分かっている。
$m = pg_num_rows($result); // $mは行数

for($i = 0; $i < $m; $i++){
  $a = array();
  for($j = 0; $j < $n; $j++){
    $a[] = pg_fetch_result($result,$i,$j);
  }
  $data[] = $a;
}

pg_free_result($result); // SQLの実行結果を格納していたメモリを解放。
pg_close($con); // データベースとの接続を閉じる。

print "<table>\n";
for($i = 0; $i < $m; $i++){
  print "<tr>";
  for($j = 0; $j < $n; $j++){
    print "<td>".$data[$i][$j]."</td>";
  }
  print "</tr>\n";
}
print "</table>\n";

?>

<br>
<a href="index.php">戻る</a>
</body>
</html>
