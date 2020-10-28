#!/usr/bin/perl

open(FILE, "<data0301.txt") or die("ERROR\n");

$str = <FILE>;
$a = <FILE>;

chomp $str;

print "<p>$str</p>\n";
print 2 * $a, "\n";

close(FILE);
