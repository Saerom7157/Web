<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    [$id, $pw] = array_map('trim', [$_POST['id'] ?? '', $_POST['pw'] ?? '']);
    $users = file_exists($dbFile = 'users.txt') ? file($dbFile) : [];

    $login_success = array_filter($users, function ($user) use ($id, $pw) {
        [$userId, $userPwHash] = explode(',', trim($user));
        return $id === $userId && password_verify($pw, $userPwHash);
    });

    if ($login_success) {
        $_SESSION['ss_id'] = $id;
        echo "<script>alert('로그인 성공!'); location.href='member.php';</script>";
    } else {
        echo "<script>alert('로그인 실패. 아이디 또는 비밀번호를 확인해주세요.'); history.back();</script>";
    }
    exit;
}
?>
