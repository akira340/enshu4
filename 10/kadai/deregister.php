<?php
include_once("auth.inc");
admin_auth();
?>

<!DOCTYPE html>

<html lang="ja">

<head>
<link rel="stylesheet" type="text/css" href="/~tyf7207/css/yamaba01.css">
<title>
ユーザー削除
</title>
<meta charset="utf-8">
</head>

<body>
<h1>ユーザー削除</h1>


<form action="deregister.php" method="post">
<?php
@$con = pg_connect("host=kite.cs.miyazaki-u.ac.jp dbname=endb2027 user=enuser2027 password=enpass2027");
if ($con == false) {
  print("DATABASE CONNECTION ERROR\n");
  exit;
}

if(isset($_POST['uname'])) {
  $sql = "delete from passdb where uname='{$_POST['uname']}'";
  @$result = pg_query($sql);
  if($result == false) {
    print "USER DELETE ERROR\n";
    exit;
  }
  $sql = "drop table {$_POST['uname']}";
  @$result = pg_query($sql);
  if($result == false) {
    print "USER DELETE ERROR\n";
    exit;
  }
  print "USER DELETED\n";
  print "<br>\n";
}

$sql = "select * from passdb";
@$result = pg_query($sql);
if($result == false) {
  print "DATA ACQUISITION ERROR\n";
  exit;
}

$n = pg_num_rows($result);
$data = array();
for($i = 0; $i < $n; $i++)
  $data[] = pg_fetch_result($result, $i, 0);

pg_free_result($result);
pg_close($con);

if($n > 1) {
  print "<p>select user to delete</p>";
  print "<table>\n";
  print "<td></td>\n";
  print "<td>uname</td>\n";
  for($i = 0; $i < $n; $i++) {
    if($data[$i] == "admin") continue;
    print "<tr>\n";
    print "<td><input type=\"radio\" name=\"uname\" value=\"{$data[$i]}\"></td>\n";
    print "<td>{$data[$i]}</td>\n";
    print "</tr>\n";
  }
  print "</table>\n";
  print "<br>\n";
  print "<input type=\"submit\">\n";
} else
  print "<p>there is no one here</p>";

?>
<br>
<a href="index.php">BACK</a>
</form>

</body>

</html>
