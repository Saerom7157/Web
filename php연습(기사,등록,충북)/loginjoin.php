<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=loginjoin;charset=utf8mb4', 'root', '');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if ($_POST['action'] == '회원가입') {
        $chcnk = "SELECT * FROM users WHERE username = ?";
        $sql = $pdo->prepare($chcnk);
        $sql->execute([$username]);
        if($sql->fetch()) {
            echo "<script>alert('이미 있는 아이디 입니다'); window.location.href='index.php'</script>";
        } else{
            $sql = "INSERT INTO users(username, password, role) VALUES (?,?,1)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$username, $password]);
            echo "<script>alert('회원가입 완료'); window.location.href='index.php'</script>";
        }
    } else if ($_POST['action'] == '로그인') {
        $sql = "SELECT password FROM users WHERE username = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$username]);
        $user = $stmt->fetch();
        if ($user && $user['password'] === $password) {
            echo "<button onclik='Logout()'><button>";
        } else {
            echo "<script>alert('아이디 또는 비밀번호가 잘못되었습니다'); window.location.href='index.php'</script>";
        }
    }


    echo "<script>
        function Logout() {
            const loginbtn = document.querySelector('#login-title');
            loginbtn.style.diplaye='noen';
            const Logoutbtn = confirm('로그아웃 하시겠습니까?');
            if(Logoutbtn) {
                alert('로그아웃 되었습니다');
                window.location.href = 'logout.php';
            } else {
                alert('로그아웃 취소 되었습니다');
            }
        }
    </script>";
}
?>
