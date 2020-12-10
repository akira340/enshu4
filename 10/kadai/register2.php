<?php
include_once("auth.inc");
admin_auth();
?>
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
@$con = pg_connect("host=kite.cs.miyazaki-u.ac.jp dbname=endb2027 user=enuser2027 password=enpass2027");
if ($con == false) {
  print("DATABASE CONNECTION ERROR\n");
  exit;
}

$c_names = array('a1', 'a2', 'a3', 'a4', 'q', 'ans');

$input_ok = true;
for($i = 0; $i < count($c_names); $i++)
  if(isset($_POST[$c_names[$i]]) == false)
    $input_ok = false;

if($input_ok) {
  @$result = pg_query("select max(id) from quiz2");
  $id = pg_fetch_result($result, 0, 0);
  $id += 1;
  $sql = "insert into quiz2 values({$_POST['ans']},'{$_POST['a1']}','{$_POST['a2']}','{$_POST['a3']}','{$_POST['a4']}','{$_POST['q']}',{$id})";
  @$result = pg_query($sql);
  if($result == false)
    print "INVALID INPUT\n";
  else {
    print "INSERT SUCCESS\n";
    header("Location: view_quiz.php");
    exit;
  }
}

?>
<form action="register2.php" method="post">

<ul>

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
