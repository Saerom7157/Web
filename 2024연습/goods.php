<?php
// goods.php
session_start();

// 로그인 하지 않은 경우 로그인 페이지로 리디렉션
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    header('Location: index.html'); // 로그인 페이지로 변경하세요
    exit;
}

// 상품 목록 로딩 로직 (예시 코드입니다)
$goods = json_decode(file_get_contents('goods.json'), true);
?>

