<?php
$host = 'localhost';
$dbname = 'movie_reviews';
$user = 'root';
$pass = '';

try {
    // PDO를 사용하여 데이터베이스에 접속합니다.
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    // 에러 모드를 예외 모드로 설정하여 문제가 발생하면 예외
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // 데이터베이스 접속에 실패하면 에러 메시지를 출력하고 스크립트를 종료됨
    die("Database connection failed: " . $e->getMessage());
}
?>
