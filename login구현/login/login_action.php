<?php
session_start();
include 'db.php'; // 데이터베이스 연결을 위한 파일

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

// 사용자 인증을 위한 쿼리
$query = "SELECT * FROM users WHERE username = ? AND role = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $username, $role);
$stmt->execute();
$result = $stmt->get_result();

if ($user = $result->fetch_assoc()) {
    // 비밀번호 검증
    if (password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        
        // 역할에 따른 리디렉션
        switch ($user['role']) {
            case 'admin':
                header('Location: admin_dashboard.php');
                break;
            case 'manager':
                header('Location: manager_dashboard.php');
                break;
            case 'member':
                header('Location: member_dashboard.php');
                break;
        }
        exit();
    } else {
        echo "Invalid password.";
    }
} else {
    echo "Invalid username or role.";
}
?>
