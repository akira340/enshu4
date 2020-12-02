<!DOCTYPE html>
<html lang="ja">
<head>
<link rel="stylesheet" type="text/css" href="/penshu4_2020/67190209/ex08/introduction.css">
<meta charset="utf-8">
<title>Quiz</title>
</head>
<body>
<h1>Quiz</h1>

<?php
@$con = pg_connect("host=kite.cs.miyazaki-u.ac.jp dbname=endb2058 user=enuser2058 password=enpass2058");
if ($con == false) {
  print("DATABASE CONNECTION ERROR\n");
  exit;
}

@$result = pg_query("select * from quiz2 where id = ".$_POST['id']);
if($result == false){
  print"DATA ACQUISITION ERROR\n";
  exit;
}

$a = pg_fetch_array($result, 0);
$n = pg_num_rows($result);

$c_names = array('ans', 'a1', 'a2', 'a3', 'a4', 'q', 'id');
$ans = $a['ans'];

if(isset($_POST['quiz'])) {
  if($_POST['quiz'] === $ans) {
    print "正解！！\n";
    print "</body>\n";
    print "</html>\n";
    exit;
  } else
    print "不正解\n";
}

print "<form action=\"problem2.php\" method=\"post\">\n";
print "<p>\n";

print $a['q']."\n";
print "</p>\n";

for($i = 1; $i < 5; $i++) {
  print "<input type=\"radio\" name=\"quiz\" value=\"".$i."\">".$a[$c_names[$i]]."\n";
  print "<br>\n";
}

print "<input type=\"hidden\" name=\"id\" value=".$a['id'].">\n";

?>
<br>
<input type="submit">
</form>
</body>
</html>
