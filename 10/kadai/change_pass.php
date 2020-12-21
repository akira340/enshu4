<?php
include_once("auth.inc");
auth();
?>
<!DOCTYPE html>

<html lang="ja">

<head>
<link rel="stylesheet" type="text/css" href="/~tyf7207/css/yamaba01.css">
<title>
Change Password
</title>
<meta charset="utf-8">
</head>

<body>
<h1>Change Password</h1>

<form action="change_pass.php" method="post">
<?php
@$con = pg_connect("host=kite.cs.miyazaki-u.ac.jp dbname=endb2027 user=enuser2027 password=enpass2027");
if ($con == false) {
  print("DATABASE CONNECTION ERROR\n");
  exit;
}

$user = $_SERVER['PHP_AUTH_USER'];
$pass = $_SERVER['PHP_AUTH_PW'];
if(isset($_POST['oldpass']) && isset($_POST['newpass'])) {
  if($pass == $_POST['oldpass']) {
    $sql = "update passdb set pass = '{$_POST['newpass']}' where uname = '$user'";
    @$result = pg_query($sql);
    if($result == false) {
      print "DATA ACQUISITION ERROR\n";
      exit;
    } else {
      print "PASSWORD CHANGED\n";
      print "<br>\n";
      print "<a href=\"index.php\">BACK</a>\n";
      print "</form>\n";
      print "</body>\n";
      print "</html>\n";
      exit;
    }
  } else {
    print "wrong password\n";
    print "<br>\n";
    print "<br>\n";
  }
}
print "OLD PASSWORD:<input type=\"text\" name=\"oldpass\">\n";
print "<br>\n";
print "NEW PASSWORD:<input type=\"text\" name=\"newpass\">\n";
?>
<br>
<br>
<input type="submit">
<br>
<br>
<a href="index.php">BACK</a>;
</form>


</body>
</html>
