#!/usr/bin/perl

print << "END";
Content-type: text/html

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>Problem</title>
<link rel="stylesheet" href="/penshu4_2020/67190209/ex04/introduction.css">
</head>
<body>
<h1>問題</h1>
END
open(FILE, "<data04.txt") or die("ERROR\n");

$str = <FILE>;
chomp $str;
print "<p>$str</p>\n";
$a = <FILE>;
print "<ol>\n";
for($i = 0; $i < 4; $i++) {
  $str = <FILE>;
  chomp $str;
  print "<li><a href=\"/penshu4_2020/67170575/ex04/";
  if($i == $a - 1) {
    print "ok.html";
  }else {
    print "ng.html";
  }
  print "\">$str</a></li>\n";
}
print "</ol>\n";
print "</body>\n";
print "</html>\n";

close(FILE);
