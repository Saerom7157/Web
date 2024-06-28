<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $em = $_POST['em'];
    $pw = md5($_POST['pw']);
    $str = "$em:$pw\n";

    if (strpos(file_get_contents('users.txt'), $str) !== false) {
        $_SESSION['logged_in'] = true;
        echo "<script>alert('로그인 성공!'); location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('로그인 실패: 정보가 일치하지 않습니다.'); history.go(-1);</script>";
    }
}
?>
