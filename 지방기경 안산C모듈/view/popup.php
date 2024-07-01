<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/resourse/css/style.css">
  <link rel="stylesheet" href="/resourse/fontawesome-free-6.4.0-web/css/all.css">
  <script src="/resourse/js/jquery-3.5.1.js"></script>
  <script src="/resourse/js/script.js"></script>
</head>
<body>

<?php 
  $find = user::find("id = ?", @$_SESSION["user"]);
?>

<div class="popup">
  <h1>현재 로그인 일자 : <?= $find["nowDate"]?></h1>
  <h1>이전 로그인 일자 : <?= $find["preDate"]?></h1>
</div>

</body>
</html>