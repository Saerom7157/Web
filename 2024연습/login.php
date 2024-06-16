<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $selectedRole = $_POST['role'];

    // 미리 정의된 담당자 정보
    $managerID = 'manager';
    $managerPassword = md5('1234');

    // 관리자 또는 담당자로 로그인 시도하는 경우
    if ($selectedRole == 'admin' && $_POST['em'] == 'admin' && md5($_POST['pw']) == md5('1234')) {
        // 관리자 로그인 처리
        $_SESSION['logged_in'] = true;
        $_SESSION['user_email'] = 'admin';
        $_SESSION['role'] = 'admin';
        header('Location: index.html');
        exit();
    } elseif ($selectedRole == 'manager' && $_POST['em'] == $managerID && md5($_POST['pw']) == $managerPassword) {
        // 담당자 로그인 처리
        $_SESSION['logged_in'] = true;
        $_SESSION['user_email'] = $managerID;
        $_SESSION['role'] = 'manager';
        header('Location: index.html');
        exit();
    }

    // 일반 사용자 로그인 시도
    $loginSuccess = false;
    $users = file('users.txt');

    foreach ($users as $user) {
        list($userEmail, $userRole, $userPassword) = explode(':', trim($user));
        if ($_POST['em'] == $userEmail && md5($_POST['pw']) == $userPassword && $selectedRole == $userRole) {
            $loginSuccess = true;
            break;
        }
    }

    if ($loginSuccess) {
        $_SESSION['logged_in'] = true;
        $_SESSION['user_email'] = $_POST['em'];
        $_SESSION['role'] = $selectedRole;

        // 일반 사용자 리디렉션
        header('Location: index.html');
        exit();
    } else {
        echo "<script>alert('아이디 또는 비밀번호를 확인해주세요.'); history.go(-1);</script>";
    }
}
?>
