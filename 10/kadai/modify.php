<?php
include_once("auth.inc");
admin_auth();
?>
<!DOCTYPE html>

<html lang="ja">

<head>
<link rel="stylesheet" type="text/css" href="/~tyf7207/css/yamaba01.css">
<title>
小テストの問題の修正
</title>
<meta charset="utf-8">
</head>

<body>

<h1>小テストの問題の修正</h1>
<?php

// データベースへの接続
@$con = pg_connect("host=kite.cs.miyazaki-u.ac.jp dbname=endb2027 user=enuser2027 password=enpass2027");
if ($con == false) {
  print("DATABASE CONNECTION ERROR\n");
  exit;
}

$c_names = array('id', 'q', 'a1', 'a2', 'a3', 'a4', 'ans');
$ok = false;
$a = array();
$n = 7;
if(isset($_POST['id']) && isset($_POST['q']) == false) {
  $sql = "select * from quiz2 where id = {$_POST['id']}";
  @$result = pg_query($sql); // SQLのコマンドでデータベースに問い合わせする。
  if($result == false){
    print"DATA ACQUISITION ERROR\n";
    exit;
  }
  $ok = true;
  for($j = 0; $j < $n; $j++)
    $a[] = pg_fetch_result($result,0,$j);
  $tmp = $a[5];
  for($i = 5; $i > 1; $i--)
    $a[$i] = $a[$i - 1];
  $a[1] = $tmp;
  $tmp = $a[0];
  $a[0] = $a[6];
  $a[6] = $tmp;
}
print "<hr>\n";
print "<p>修正したい問題を選んでください。</p>\n";

if($ok) {
  print "<form action=\"modify.php\" method=\"post\">\n";
  print "<table>\n";
  print "<tr>\n";
  print "<td>ID</td>\n";
  print "<td>問題</td>\n";
  print "<td>選択肢1</td>\n";
  print "<td>選択肢2</td>\n";
  print "<td>選択肢3</td>\n";
  print "<td>選択肢4</td>\n";
  print "<td>正解</td>\n";
  print "</tr>\n";

  print "<tr>\n";
  for($i = 0; $i < $n; $i++)
    print "<td><input type=\"text\" name=\"{$c_names[$i]}\" value=\"{$a[$i]}\"></td>\n";
  print "</tr>\n";
  print "</table>\n";
  print "<input type=\"hidden\" name=\"prev_id\" value={$_POST['id']}>";
} else {
  if(isset($_POST['q'])) {
    $id = $_POST['prev_id'];
    for($i = 0; $i < $n; $i++) {
      $sql = "update quiz2 set {$c_names[$i]} = '{$_POST[$c_names[$i]]}' where id = {$id}";
      if($i == 0 || $i == 6)
        $sql = "update quiz2 set {$c_names[$i]} = {$_POST[$c_names[$i]]} where id = {$id}";
      @$result = pg_query($sql);
      if($result == false) {
        print"DATA ACQUISITION ERROR\n";
        exit;
      }
    }
  }
  $sql1 = "select * from quiz2"; // SQLのコマンド文を文字列に格納する。
  @$result = pg_query($sql1); // SQLのコマンドでデータベースに問い合わせする。
  if($result == false){
    print"DATA ACQUISITION ERROR\n";
    exit;
  }

  $m = pg_num_rows($result); // $mは行数


  for($i = 0; $i < $m; $i++) {
    $a = array();
    for($j = 0; $j < $n; $j++)
      $a[] = pg_fetch_result($result,$i,$j);
    $data[] = $a;
  }

  pg_free_result($result); // SQLの実行結果を格納していたメモリを解放。
  pg_close($con); // データベースとの接続を閉じる。

  print "<form action=\"modify.php\" method=\"post\">\n";

  for($i = 0; $i < $m; $i++) {
    print "<input type=\"radio\" name=\"id\" value=\"".$data[$i][6]."\">{$data[$i][5]}\n";
    print "<br>\n";
  }
}
?>

<br>
<input type="submit">
<br>
<br>
<a href="index.php">戻る</a>
</form>
</body>
</html>
