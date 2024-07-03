<?php
    session_start();
    require_once('mydb.php');

    try {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($_POST['action'] == '회원가입') {

                $username = $_POST['username'];
                $password = $_POST['password'];
                $role = $_POST['role']; // 변수명 수정

                $sql = "SELECT * FROM userdb WHERE username  = ?";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([$username]);
                if($stmt->rowCount() > 0){
                    echo "이미 있는 아이디 입니다";
                } else{
                    $sql = "INSERT INTO userdb(username, password, role) VALUES (?, ?, ?)";
                    $stmt = $pdo->prepare($sql);
                    $result = $stmt->execute([$username, $password, $role]);
                    if ($result) {
                        echo "회원가입 되었습니다";
                    } else {
                        echo "오류가 났습니다";
                    }
                }
                
            } else if ($_POST['action'] == '로그인') {
                $username = $_POST['username'];
                $password = $_POST['password'];
    
                $sql = "SELECT password, role FROM userdb WHERE username = ?";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([$username]);
                $user = $stmt->fetch();
    
                if ($user && $password == $user['password']) {  // 비밀번호 검증 로직은 보안 강화를 위해 password_verify() 사용을 권장
                    $_SESSION['username'] = $username;
                    $_SESSION['role'] = $user['role'];
                    echo "<script>alert('로그인에 성공하셨습니다.'); window.location.href='index.html';</script>";
                    if($_SESSION['role'] === 2){  // 문자열 '2'로 비교
                        echo '<br><a href="articlepage.php">차량등록 페이지</a>';
                    }
                } else {
                    echo "<script>alert('아이디 또는 비밀번호가 일치하지 않습니다.'); window.location.href='login.php';</script>";
                }
            }
        }
    } catch (PDOException $e) {
        die("error: " . $e->getMessage());
    }


   
?>



