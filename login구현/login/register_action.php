<?php
include 'db.php'; // 데이터베이스 연결을 위한 파일

$userid = $_POST['userid'];
$name = $_POST['name'];
$password = $_POST['password'];

// 사용자 입력 검증 (이 단계에서 추가적인 검증을 수행할 수 있습니다.)

// 비밀번호 해싱
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// 사용자 등록을 위한 쿼리
$query = "INSERT INTO users (username, name, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("sss", $userid, $name, $hashed_password);
$stmt->execute();

if ($stmt->affected_rows === 1) {
    echo "Registration successful.";
} else {
    echo "Registration failed.";
}
?>
