<?php
include_once("auth.inc");
admin_auth();
?>

<!DOCTYPE html>

<html lang="ja">

<head>
<link rel="stylesheet" type="text/css" href="/~tyf7207/css/yamaba01.css">
<title>
Manage Admin
</title>
<meta charset="utf-8">
</head>

<body>
<h1>Manage Admin</h1>

<form action="modify_admin.php" method="post">
<?php
@$con = pg_connect("host=kite.cs.miyazaki-u.ac.jp dbname=endb2027 user=enuser2027 password=enpass2027");
if ($con == false) {
  print("DATABASE CONNECTION ERROR\n");
  exit;
}

$sql = "select * from passdb";
@$result = pg_query($sql);
if($result == false) {
  print "DATA ACQUISITION ERROR\n";
  exit;
}

$n = pg_num_rows($result);
$m = 3;
for($i = 0; $i < $n; $i++) {
  $a = array();
  for($j = 0; $j < $m; $j++)
    $a[] = pg_fetch_result($result, $i, $j);
  $data[] = $a;
}

pg_free_result($result);
pg_close($con);

if($n > 1) {
  print "<table>\n";
  print "<td></td>\n";
  print "<td>uname</td>\n";
  for($i = 0; $i < $n; $i++) {
    if($data[$i][0] == "admin") continue;
    print "<tr>\n";
    if($data[$i][2] == 't')
      print "<td><input type=\"checkbox\" name=\"uname[]\" value=\"{$data[$i][0]}\" checked></td>\n";
    else
      print "<td><input type=\"checkbox\" name=\"uname[]\" value=\"{$data[$i][0]}\"></td>\n";
    print "<td>{$data[$i][0]}</td>\n";
    print "</tr>\n";
  }
  print "</table>\n";
  print "<br>\n";
  print "<input type=\"submit\">\n";
} else
  print "<p>there is no one here</p>\n";

?>
<br>
<a href="index.php">BACK</a>
</form>

</body>

</html>
