<!DOCTYPE html>
<html lang="ja">
<head>
<link rel="stylesheet" type="text/css" href="/penshu4_2020/67190209/ex07/introduction.css">
<meta charset="utf-8">
<title>Quiz</title>
</head>
<body>
<h1>Quiz</h1>

<?php
$file = fopen("data07.txt", "r");
while(($in = fgets($file, 1024)) != false) $a[] = chop($in);
$n = count($a);
$ans = $a[0];

fclose($file);
if(isset($_POST['quiz'])){
  if($_POST['quiz'] === $ans){
    print "正解！\n";
    print "</body>\n";
    print "</html>\n";
    exit;
  } else {
    print "不正解！\n";
  }
}


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
