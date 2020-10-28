#!/usr/bin/perl

@a = (3, -7, 4, 1, -5, -9, 0, -2, 6, -8);
$n = @a;

for($i = 0; $i < $n; $i++) {
  if($a[$i] < 0) {
    print "minus\n";
  } elsif($a[$i] % 2 == 0) {
    print "$a[$i]:even\n";
  } else {
    print "odd:$a[$i]\n";
  }
}
