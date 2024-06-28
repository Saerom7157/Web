<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $users = file('users.txt');
    $userExists = false;

    foreach ($users as $user) {
        list($registeredEmail) = explode(':', $user);
        if (trim($registeredEmail) == $email) {
            $userExists = true;
            break;
        }
    }

    if ($userExists) {
        echo "<script>alert('이미 등록되어 있습니다.'); window.location.href = 'register.html';</script>";
    } else {
        if ($password != $confirm_password) {
            echo "<script>alert('비밀번호가 일치하지 않습니다.'); window.location.href = 'register.html';</script>";
        } else {
            $filename = 'users.txt';
            $userdata = "$email:" . md5($password) . "\n";
            file_put_contents($filename, $userdata, FILE_APPEND);
            echo "<script>alert('등록이 완료되었습니다!'); window.location.href = 'index.php';</script>";
        }
    }
}
?>
