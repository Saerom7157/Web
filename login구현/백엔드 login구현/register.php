<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    [$id, $pw] = array_map('trim', [$_POST['id'] ?? '', $_POST['pw'] ?? '']);
    $dbFile = 'users.txt';
    $users = file_exists($dbFile) ? file($dbFile) : [];

    if (!$id || !$pw || in_array($id, array_column(array_map(function ($data) {return explode(',', $data);}, $users), 0))) {
        echo "<script>alert('유효하지 않은 입력이거나 이미 존재하는 아이디입니다.'); history.back();</script>";
    } else {
        file_put_contents($dbFile, "$id," . password_hash($pw, PASSWORD_DEFAULT) . "\n", FILE_APPEND);
        echo "<script>alert('회원가입 성공!'); location.href='login.php';</script>";
    }
    exit;
}
?>
