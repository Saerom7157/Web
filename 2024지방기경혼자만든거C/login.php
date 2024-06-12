<?php
session_start();


function loginUser($email, $role, $pw, $nick, $redirectPage) {
    // 사용자 정보와 함께 현재 시간을 파일에 저장합니다.
    $_SESSION['logged_in'] = true;
    $_SESSION['user_email'] = $email;
    $_SESSION['role'] = $role;
    header("Location: $redirectPage?nick=" . urlencode($nick) . "&date=" . urlencode(date("Y-m-d", strtotime("+20 hours"))));
    exit();
}



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $selectedRole = $_POST['role'];
    $email = $_POST['em'];
    $password = md5($_POST['pw']);

    // 미리 정의된 사용자 정보
    $predefinedUsers = [
        'admin' => md5('1234'),
        'manager' => md5('1234'),
    ];

    if (isset($predefinedUsers[$selectedRole]) && $email == $selectedRole && $password == $predefinedUsers[$selectedRole]) {
        loginUser($email, $selectedRole, $selectedRole == 'admin' ? 'index.php' : 'index.php');
    } else {
        $users = file('users.txt');
        foreach ($users as $user) {
            list($nick, $userEmail, $userRole, $userPassword) = explode(':', trim($user));
            if ($email == $userEmail && $password == $userPassword && $selectedRole == $userRole) {
                ?>

                <?php
                loginUser($email, $selectedRole, $password, $nick, 'index.php');
                break;
            }
        }
        echo "<script>alert('아이디 또는 비밀번호를 확인해주세요.'); history.go(-1);</script>";
    }
}
?>