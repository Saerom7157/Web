<?php
session_start();  // 세션 시작

// 모든 세션 변수를 해제
$_SESSION = array();

// 세션을 파괴
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
session_destroy();  // 세션 파괴

// 로그아웃 후 홈페이지로 리디렉션
header('Location: index.html');
exit();
?>
