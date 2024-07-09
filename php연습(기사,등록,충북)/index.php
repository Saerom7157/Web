<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원 가입 및 로그인</title>
</head>
<body>
<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=loginjoin;charset=utf8mb4', 'root', '');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if ($_POST['action'] == '회원가입') {
        $check = "SELECT * FROM users WHERE username = ?";
        $stmt = $pdo->prepare($check);
        $stmt->execute([$username]);
        if($stmt->fetch()) {
            echo "<script>alert('이미 있는 아이디 입니다'); window.location.href='index.php'</script>";
        } else {
            $insert = "INSERT INTO users(username, password, role) VALUES (?, ?, 1)";
            $stmt = $pdo->prepare($insert);
            $stmt->execute([$username, $password]);
            echo "<script>alert('회원가입 완료'); window.location.href='index.php'</script>";
        }
    } elseif ($_POST['action'] == '로그인') {
        $query = "SELECT password FROM users WHERE username = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$username]);
        $user = $stmt->fetch();
        if ($user && $user['password'] === $password) {
            $_SESSION['user'] = $username;
            echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    document.getElementById('login-btn').style.display = 'none';

                    document.getElementById('logout-btn').style.display = 'block';
                    document.getElementById('logout-btn').onclick = function() {
                        window.location.href = 'logout.php';
                        alert('로그아웃 되었습니다');
                    };

                });
                </script>";
        } else {
            echo "<script>alert('아이디 또는 비밀번호가 잘못되었습니다'); window.location.href='index.php'</script>";
        }
    }
}
?>

<div id="login-section">
    <h1>회원 가입</h1>
    <form action="" method="POST">
        <input type="hidden" name="action" value="회원가입">
        <input type="text" name="username" required pattern="[a-zA-Z]{4,12}">
        <input type="password" name="password" required pattern="[a-zA-Z\d]{4,8}">
        <button type="submit">회원가입</button>
    </form>

    <h1>로그인</h1>
    <form action="" method="POST">
        <input type="hidden" name="action" value="로그인">
        <input type="text" name="username">
        <input type="password" name="password">
        <button type="submit" id="login-btn">로그인</button>
        <button type="button" id="logout-btn" style="display: none;">로그아웃</button>
    </form>
</div>

</body>
</html>
