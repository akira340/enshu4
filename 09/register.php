<!DOCTYPE html>

<html lang="ja">

<head>
<link rel="stylesheet" type="text/css" href="/~tyf7207/css/yamaba01.css">
<title>
小テストの入力
</title>
<meta charset="utf-8">
</head>
<body>

<h1>小テストの入力</h1>

<?php
@$con = pg_connect("host=kite.cs.miyazaki-u.ac.jp dbname=endb2058 user=enuser2058 password=enpass2058");
if ($con == false) {
  print("DATABASE CONNECTION ERROR\n");
  exit;
}

@$result = pg_query("insert into quiz2 values(".$_POST['id']."'".$_POST['a1']."','".$_POST['a2']."','".$_POST['a3']."','".$_POST['a4']."','".$_POST['q']."','".$_POST['id']."'");
if($result == false){
  print"DATA ACQUISITION ERROR\n";
  exit;
}


?>
<form action="register.php" method="post">


<ul>

<li>問題ID<input type="text" name="id"></li>
<li>問題文<input type="text" size="50" name="q"> </li>
<li>選択肢1<input type="text" size="50" name="a1"> </li>
<li>選択肢2<input type="text" size="50" name="a2"> </li>
<li>選択肢3<input type="text" size="50" name="a3"> </li>
<li>選択肢4<input type="text" size="50" name="a4"> </li>
<li>正解選択肢<input type="text" name="ans"> </li>

</ul>

<input type="submit">
</form>

<hr>
<a href="index.php">戻る</a>
</body>
</html>
