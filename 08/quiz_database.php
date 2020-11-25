<?php

@$con = pg_connect("host=kite.cs.miyazaki-u.ac.jp dbname=endb2058 user=enuser2058 password=enpass2058");
if ($con == false) {
  print("DATABASE CONNECTION ERROR\n");
  exit;
}

pg_query("delete from quiz");
pg_query("insert into quiz values(2, '/tables', '/z', '/all', '/a', 'テーブル一覧表示コマンドはどれ？')");

pg_close($con);
?>
