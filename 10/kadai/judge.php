<?php
include_once("auth.inc");
auth();
?>

<!DOCTYPE html>

<html lang="ja">

<head>
<link rel="stylesheet" type="text/css" href="/~tyf7207/css/yamaba01.css">
<title>
小テストの結果
</title>
<meta charset="utf-8">
</head>

<body>

<h1>小テストの結果</h1>

<?php

// データベースへの接続
@$con = pg_connect("host=kite.cs.miyazaki-u.ac.jp dbname=endb2027 user=enuser2027 password=enpass2027");
if ($con == false){
  print("DATABASE CONNECTION ERROR\n");
  exit;
}

$m = $_POST['id'];

$sql1 = "select * from quiz2 where id = $m"; // SQLのコマンド文を文字列に格納する。
@$result = pg_query($sql1); // SQLのコマンドでデータベースに問い合わせする。
if($result == false){
  print"DATA ACQUISITION ERROR\n";
  exit;
}

$n = 7; // 列数が7であることは決まっている。

for($i = 0; $i < $n; $i++){
  $ary[] = pg_fetch_result($result,0,$i);
}

pg_free_result($result); // SQLの実行結果を格納していたメモリを解放。

// (1) 回答があっていれば「正解」、あっていなければ「不正解と表示する」
$a = 1;
if($ary[0] == $_POST['data1'])
  print "正解";
else {
  print "不正解";
  $a = 0;
}

// ログインしているユーザ名を使いやすいように、変数$userに代入しておく。
$user = $_SERVER['PHP_AUTH_USER']; 

// (2) ユーザ名のテーブルに、今回の結果を記録する。
$sql = "insert into {$user} values($m, $a)";
@$result = pg_query($sql);
if($result == false){
  print"DATA ACQUISITION ERROR\n";
  exit;
}

pg_free_result($result); // SQLの実行結果を格納していたメモリを解放。
pg_close($con); // データベースとの接続を閉じる。

?>

<ol>
<li><a href="index.php">トップに戻る</a></li>
<li><a href="problem.php">もう一度</a></li>
</ol>

</body>
</html>
