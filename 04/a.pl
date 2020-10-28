#!/usr/bin/perl

$str1 = "ABC";
$str2 = "XYZ\n";
$str3 = "abc\n";
$str4 = "xyz\n";

print $str1;
print $str2;

print $str3;
print $str4;

chomp $str3;

print $str3;
print $str4;
