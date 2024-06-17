<?php
$host = 'localhost';
$dbname = 'loginjoin';
$username = 'root';
$password = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

try {
    $pdo = new PDO($dsn, $username, $password, $options);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($_POST['action'] == '회원가입') {
            $email = $_POST['email'];

            // 중복 확인
            $sql = "SELECT COUNT(*) FROM users WHERE username = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$username]);
            $count = $stmt->fetchColumn();

            if ($count > 0) {
                echo "이미 존재하는 사용자 이름입니다.";
            } else {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);  // 비밀번호 해시화
                $sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
                $stmt = $pdo->prepare($sql);
                $result = $stmt->execute([$username, $hashedPassword, $email]);
                if ($result) {
                    echo "회원가입 성공";
                } else {
                    echo "회원가입 다시해주세요";
                }
            }
        } else if ($_POST['action'] == '로그인') {
            $sql = "SELECT username, password, cre FROM users WHERE username = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$username]);
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password'])) {  // 해시화된 비밀번호 검증
                session_start();
                $_SESSION['username'] = $user['username'];
                $_SESSION['cre'] = $user['cre'];
                echo "환영합니다 " . $user['username'] . "님. 회원가입 날짜: " . $user['cre'];
                echo "<button onclick='Logout()'>로그아웃</button>";
            } else {
                echo "비밀번호가 일치하지 않습니다. 입력한 비밀번호: " . $password . " 저장된 해시화된 비밀번호: " . $user['password'];
            }
        }

        echo "<script>
            function Logout() {
                const logoutbtn = confirm('로그아웃 하시겠습니까?');
                if (logoutbtn) {
                    alert('로그아웃되었습니다');
                    window.location.href = 'logout.php';
                } else {
                    alert('로그아웃이 취소되었습니다');
                }
            }
        </script>";
    }
} catch (PDOException $e) {
    die("error: " . $e->getMessage());
}
?>
