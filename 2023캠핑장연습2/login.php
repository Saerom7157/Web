<?php
    session_start();
    if($_POST){
        $un = $_POST['un'];
        $pw = $_POST['pw'];

        if($un == "관리자" && $pw == "01071571395"){
            $_SESSION['user'] = $un;
            
            echo "<script>
                alert('로그인 되었습니다.')
                window.location.href = 'index.html'
            </script>";

            exit;
        } else{
            echo "<script>alert('잘못된 정보입니다. 다시 입력해주세요')</script>";
        }
    }
?>






<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <title>Document</title>
</head>
<body>
    <form method="post">
        이름: <input type="text" name="un"> <br>
        전화번호: <input type="text" name="pw"> <br>
        <input type="submit" value="로그인">
    </form>
</body>
</html>