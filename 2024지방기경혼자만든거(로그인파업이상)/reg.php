<?php
        // 회원가입 스크립트
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $em = $_POST['em'];
        $pw = $_POST['pw'];
        $cpw = $_POST['cpw'];
        $captchaText = "ABC12"; // 이게 캡차 인증 문자
        $usersFile = 'users.txt';

        // ID 중복 검사 및 캡차, 비밀번호 일치 검사
        if (in_array($em, array_column(array_map(function($v) { return explode(':', trim($v)); }, file($usersFile)), 0))) {
            echo "<script>alert('사용 중인 ID입니다.'); history.go(-1);</script>";
        } elseif ($_POST['captcha'] != $captchaText) {
            echo "<script>alert('캡차가 일치하지 않습니다.'); history.go(-1);</script>";
        } elseif ($pw !== $cpw) {
            echo "<script>alert('비밀번호가 일치하지 않습니다.'); history.go(-1);</script>";
        } else {
            fwrite(fopen($usersFile, 'a'), "$em:member:" . md5($pw) . "\n");
            echo "<script>alert('관리자 승인 대기 중입니다.'); location.href = 'index.html';</script>";
        }
    }
?>
