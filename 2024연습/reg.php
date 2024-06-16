<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        [$em, $pw, $cpw, $usersFile] = [$_POST['em'], $_POST['pw'], $_POST['cpw'], 'users.txt'];
        $users = file_exists($usersFile) ? array_map(fn($v) => explode(':', trim($v)), file($usersFile)) : [];

        if (array_column($users, 0) && in_array($em, array_column($users, 0))) {
            $msg = '사용 중인 ID입니다.';
        } elseif ($_POST['captcha'] !== "ABC12") {
            $msg = '캡차가 일치하지 않습니다.';
        } elseif ($pw !== $cpw) {
            $msg = '비밀번호가 일치하지 않습니다.';
        } else {
            file_put_contents($usersFile, "$em:member:" . md5($pw) . "\n", FILE_APPEND);
            $msg = '관리자 승인 대기 중입니다.';
            echo "<script>alert('$msg'); location.href = 'index.html';</script>";
            exit;
        }
        echo "<script>alert('$msg'); history.go(-1);</script>";
    }
?>
