<?php
session_start();
if (!isset($_SESSION['ss_id'])) {
    echo "<script>alert('로그인이 필요한 페이지입니다.'); location.href='login.php';</script>";
    exit;
}
?>
<p>회원 전용 페이지입니다.</p>
<a href="logout.php">로그아웃</a>
