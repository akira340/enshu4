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

@$result = pg_query("select * from quiz2 where id = 1");
if($result == false){
  print"DATA ACQUISITION ERROR\n";
  exit;
}

$n = 6;
for($i = 0; $i < $n; $i++)
  $a[] = pg_fetch_result($result, 0, $i);
$ans = $a[0];

if(isset($_POST['quiz']))
  if($_POST['quiz'] === $ans) {
    print "正解！！\n";
    print "</body>\n";
    print "</html>\n";
    exit;
  } else
    print "不正解\n";

print "<form action=\"problem.php\" method=\"post\">\n";
print "<p>\n";
for($i = 5; $i < $n; $i++) print $a[$i]."\n";
print "</p>\n";

for($i = 1; $i < 5; $i++) {
  print "<input type=\"radio\" name=\"quiz\" value=\"".$i."\">".$a[$i]."\n";
  print "<br>\n";
}
?>
<br>
<input type="submit">
</form>
</body>
</html>
