<?php
session_start(); // 세션 시작

// 세션 변수 제거
$_SESSION = array();

// 세션 쿠키 제거
if (ini_get("session.use_cookies")) { //ini_get("session.use_cookies"): 세션이 쿠키를 사용하고 있는지 확인합니다 / 로그인이 되어 있으면 실행
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"],
    );
}

//session_get_cookie_params()를 사용하여 현재 세션 쿠키의 설정을 가져옵니다.


// 세션 파괴
session_destroy();

// 로그인 페이지로 리다이렉트
header("Location: login.html");
exit;
?>
