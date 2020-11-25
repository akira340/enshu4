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

<?php

 // データベースへの接続
@$con = pg_connect("host=kite.cs.miyazaki-u.ac.jp dbname=endb2058 user=enuser2058 password=enpass2058");
// 先頭の@はエラーメッセージの出力を抑制するため。
if ($con == false){ // データベースに接続できなかった場合は、
  print("DATABASE CONNECTION ERROR\n"); // エラーメッセージを出力して、
  exit; // 強制終了する。
}


$sql1 = "select * from test"; // SQLのコマンド文を文字列に格納する。

@$result = pg_query($sql1); // SQLのコマンドでデータベースに問い合わせする。
if($result == false){ // 結果が得られなかった場合は、
  print"DATA ACQUISITION ERROR\n"; // エラーメッセージを出力して、
  exit; // 強制終了する。
}

// $resultはテーブルのようなイメージのデータとなっている。
$x = pg_fetch_result($result,2,1); // $resultの2行目1列目の値を取り出し、
print($x);  // それを表示。

print "<br>\n\n";

for($i = 0; $i < 3; $i++){
  for($j = 0; $j < 3; $j++){ 
    print(pg_fetch_result($result,$i,$j));
    print " - ";
  }
  print "<br>\n";
}


pg_free_result($result); // SQLの実行結果を格納していたメモリを解放。
pg_close($con); // データベースとの接続を閉じる。
?>

<hr>
<a href="index.php">戻る</a>
</body>
</html>
