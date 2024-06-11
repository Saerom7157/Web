<?php
// auth.php 파일 내용
session_start();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // 로그인된 경우 '로그아웃' 및 '마이페이지' 버튼을 표시합니다.
    echo '<form action="logout.php" method="post" class="mr-2">';
    echo '<button type="submit" class="btn btn-login">로그아웃</button>';
    echo '</form>';
    echo '<a class="btn btn-register" href="mypage.php">마이페이지</a>';
} else {
    // 로그인되지 않은 경우 '로그인' 및 '회원가입' 버튼을 표시합니다.
    echo '<button class="btn btn-login" data-bs-toggle="modal" data-bs-target="#loginModal">로그인</button>';
    echo '<a class="btn btn-register" data-bs-toggle="modal" data-bs-target="#registerModal">회원가입</a>';
}
?>
