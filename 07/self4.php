<!DOCTYPE html>
<html lang="ja">
<head>
<link rel="stylesheet" type="text/css" href="/~tyf7207/css/yamaba01.css">
<meta charset="utf-8">
<title>フォームからのデータを自分で受け取る</title>
</head>
<body>
<h1>フォームからのデータを自分で受け取る</h1>

<?php
   if(isset($_POST['data1'])){
     if($_POST['data1'] === "password"){
       print "一致しました\n";
       print "</body>\n";
       print "</html>\n";
       exit;
     } else {
       print "一致しません\n";
     }
   }
?>

<form action="self4.php" method="post">
<input type="text" name="data1">
<input type="submit">
</form>

</body>
</html>
