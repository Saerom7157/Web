<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>메인</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center">
        <h1>어플리케이션 환영</h1>
        <p>메인 페이지입니다.</p>
        <?php if (!empty($_SESSION['logged_in'])): ?>
            <a href="logout.php" class="btn btn-primary">로그아웃</a>
        <?php else: ?>
            <a href="login.html" class="btn btn-primary">로그인</a>
        <?php endif; ?>
        <a href="reg.html" class="btn btn-secondary">등록</a>
    </div>
</body>
</html>
