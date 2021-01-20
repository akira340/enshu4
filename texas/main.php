<!DOCTYPE html>

<html lang="ja">

<head>
<title>
main
</title>
<meta charset="utf-8">
</head>

<body>

<ol>
  <li><a href="signup.html">ユーザー登録</a></li>
  <li><a href="login.html">ログイン</a></li>
  <li><a href="ranking.php">ランキング未完成</a></li>
  <br>
</ol>



<?php
@$con = pg_connect("host=kite.cs.miyazaki-u.ac.jp dbname=endb2058 user=enuser2058 password=enpass2058");
if ($con == false) {
  print("DATABASE CONNECTION ERROR\n");
  exit;
}

?>

</body>
</html>

