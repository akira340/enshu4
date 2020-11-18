<!DOCTYPE html>
<html lang="ja">
<head>
<link rel="stylesheet" type="text/css" href="/~tyf7207/css/yamaba01.css">
<meta charset="utf-8">
<title>フォームからのデータを自分で受け取る</title>
</head>
<body>
<h1>quiz</h1>

<?php
   if(isset($_POST['quiz'])){
     if($_POST['quiz'] === "2"){
       print "correct\n";
       print "</body>\n";
       print "</html>\n";
       exit;
     } else {
       print "nope\n";
     }
   }
?>

<form action="renshu.php" method="post">
  <p>
    c言語のfloat型のサイズは何バイトか？
  </p>
  <input type="radio" name="quiz" value="1"> 2bytes
  <br>
  <input type="radio" name="quiz" value="2"> 4bytes
  <br>
  <input type="radio" name="quiz" value="3"> 8bytes
  <br>
  <input type="radio" name="quiz" value="4"> 16bytes
  <br>
  <br>
  <input type="submit">
</form>

</body>
</html>
