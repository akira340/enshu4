<?php

function auth() {
  if(!isset($_SERVER['PHP_AUTH_USER'])){
    header('HTTP/1.0 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="Basic Auth 04"');
  
    print "LOGIN was canceled.";
    exit;
  }
   
  $user = $_SERVER['PHP_AUTH_USER'];

  if($user == "admin") {
    header('HTTP/1.0 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="Basic Auth 04"');
  
    print "LOGIN was canceled.";
    exit;
  }

  @$con = pg_connect("host=kite.cs.miyazaki-u.ac.jp dbname=endb2027 user=enuser2027 password=enpass2027");
  if($con == false){
    print "Database Connection Error";
    exit;
  }

  $sql = "select pass from passdb where uname = '$user'";
  @$result = pg_query($sql);
  if($result == false){
    print "Database Acquisition Error";
    exit;
  }

  if(pg_num_rows($result) != 1){
    header('HTTP/1.0 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="Basic Auth 04"');
  
    print "LOGIN was canceled.";
    exit;
  } 

  $pass = pg_fetch_result($result,0,0);
  $newpass = $_SERVER['PHP_AUTH_PW'];
  if($pass != $newpass){
    header('HTTP/1.0 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="Basic Auth 04"');
  
    print "LOGIN was canceled.";
    exit;
  }
}

function admin_auth(){
  if(!isset($_SERVER['PHP_AUTH_USER'])){
    header('HTTP/1.0 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="Basic Auth 04"');
    print "LOGIN was canceled.";
    exit;
  }

  $user = $_SERVER['PHP_AUTH_USER'];

  @$con = pg_connect("host=kite.cs.miyazaki-u.ac.jp dbname=endb2027 user=enuser2027 password=enpass2027");
  if($con == false){
    print "Database Connection Error";
    exit;
  }

  $sql = "select pass from passdb where uname = '$user'";
  @$result = pg_query($sql);
  if($result == false){
    print "Database Acquisition Error";
    exit;
  }

  if(pg_num_rows($result) != 1){
    header('HTTP/1.0 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="Basic Auth 04"');
  
    print "LOGIN was canceled.";
    exit;
  } 

  $pass = pg_fetch_result($result,0,0);
  $newpass = $_SERVER['PHP_AUTH_PW'];
  if($pass != $newpass){
    header('HTTP/1.0 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="Basic Auth 04"');
  
    print "LOGIN was canceled.";
    exit;
  }

  $sql = "select admin from passdb where uname = '$user'";
  @$result = pg_query($sql);
  if($result == false){
    print "Database Acquisition Error";
    exit;
  }

  $admin = pg_fetch_result($result, 0, 0);
  if($admin == 'f') {
    header('HTTP/1.0 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="Basic Auth 04"');
  
    print "Not Admin.";
    exit;
  }
}
?>
