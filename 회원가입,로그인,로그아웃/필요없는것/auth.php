<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $e = $_POST['em']; $p = md5($_POST['pw']);
    $us = file('users.txt'); $s = false;

    foreach ($us as $u) {
        list($re, $rp) = explode(':', trim($u));
        if ($re == $e && $rp == $p) { $s = true; break; }
    }

    if ($s) {
        $_SESSION['logged_in'] = true;
        echo "<script>alert('로그인 성공!'); location.href = 'index.php';</script>";
    } else echo "<script>alert('로그인 실패'); history.go(-1);</script>";
}
?>
