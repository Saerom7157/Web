<?php
$host = 'localhost'; // 데이터베이스 호스트
$dbname = 'your_database'; // 데이터베이스 이름
$user = 'your_username'; // 데이터베이스 사용자 이름
$password = 'your_password'; // 사용자 비밀번호

// MySQLi 연결
$conn = new mysqli($host, $user, $password, $dbname);

// 연결 오류 확인
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
