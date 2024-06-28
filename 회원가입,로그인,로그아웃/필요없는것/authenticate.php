<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $users = file('users.txt');
    $isValid = false;

    foreach ($users as $user) {
        $user_details = explode(':', $user);
        if (trim($user_details[0]) == $email && trim($user_details[1]) == $password) {
            $isValid = true;
            break;
        }
    }

    if ($isValid) {
        echo "<script>alert('로그인 되었습니다!'); window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Invalid login credentials!'); window.location.href = 'index.php';</script>";
    }
}
?>
