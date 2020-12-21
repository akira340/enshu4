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

<?php
@$con = pg_connect("host=kite.cs.miyazaki-u.ac.jp dbname=endb2027 user=enuser2027 password=enpass2027");
if ($con == false) {
  print("DATABASE CONNECTION ERROR\n");
  exit;
}

$sql = "update passdb set admin=false";
@$result = pg_query($sql);
if($result == false) {
  print "ADMIN CHANGE ERROR\n";
  exit;
}

$sql = "update passdb set admin=true where uname='admin'";
@$result = pg_query($sql);
if($result == false) {
  print "ADMIN CHANGE ERROR\n";
  exit;
}

if(isset($_POST['uname'])) {
  $a = $_POST['uname'];
  $n = count($a);
  for($i = 0; $i < $n; $i++) {
    $sql = "update passdb set admin=true where uname='{$a[$i]}'";
    @$result = pg_query($sql);
    if($result == false) {
      print "ADMIN CHANGE ERROR\n";
      exit;
    }
  }
}

print "ADMIN CHANGED\n";
?>
<br>
<a href="index.php">BACK</a>

</body>
</html>
