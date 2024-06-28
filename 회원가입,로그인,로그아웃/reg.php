<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $em = $_POST['em'];
        $pw = $_POST['pw'];
        $cpw = $_POST['cpw'];


        // 사용자가 존재하는지 확인하고 그에 따라 대응
        foreach (file('users.txt') as $line) {
            if (trim(explode(':', $line)[0]) === $em) {
                echo "<script>alert('이미 등록됨'); history.go(-1);</script>";
                exit;
            }
        }

        if ($pw !== $cpw) {
            echo "<script>alert('비번 불일치'); history.go(-1);</script>";
        } else {
            fwrite(fopen('users.txt', 'a'), "$em:" . md5($pw) . "\n");
            echo "<script>alert('등록 완료'); location.href = 'index.php';</script>";
        }
    }
?>
