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

  <!-- 헤더 -->
  <header>
    <div class="wrap container dfj">
      <a href="/" class="logo"><img src="/resourse/images/logo.png" alt="#" title="#"></a>

      <div class="text_box flex" style="gap: 30px;">
        <a href="/sub01" class="depth">
          <div class="back"></div>
          <div class="back"></div>
          <p>INFORMATION</p>
        </a>
        <a href="/sub02" class="depth">
          <div class="back"></div>
          <div class="back"></div>
          <p>STATISTICS</p>
        </a>
        <a href="/sub03" class="depth">
          <div class="back"></div>
          <div class="back"></div>
          <p>RESERVATION</p>
        </a>
        <a href="/sub04" class="depth">
          <div class="back"></div>
          <div class="back"></div>
          <p>GOODS</p>
        </a>
      </div>

      <div class="ut_menu flex" style="gap: 10px;">
        <?php if (@$_SESSION["user"]) : ?>
          <a href="/logout" class="btn"><i class="fa fa-user-minus"></i> 로그아웃</a>
          <a href="/mypage" class="btn"><i class="fa fa-user"></i> 마이페이지</a>
        <?php else : ?>
          <a href="/login" class="btn"><i class="fa fa-user"></i> 로그인</a>
          <a href="/join" class="btn"><i class="fa fa-user-plus"></i> 회원가입</a>
        <?php endif ?>
      </div>
    </div>
  </header>