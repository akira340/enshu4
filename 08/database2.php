<?php

@$con = pg_connect("host=kite.cs.miyazaki-u.ac.jp dbname=endb2058 user=enuser2058 password=enpass2058");
if ($con == false) {
  print("DATABASE CONNECTION ERROR\n");
  exit;
}

pg_query("delete from test");
pg_query("insert into test values(1, 'Tanaka', 29)");
pg_query("insert into test values(3, 'Sato', 35)");
pg_query("insert into test values(2, 'Nakamura', 30)");

pg_close($con);
?>
