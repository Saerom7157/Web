<?php
    $dsn = "mysql:host=localhost;dbname=qyeongiu;charset=utf8mb4"; // 공백 제거 및 dbname 수정
    $dbUsername = 'root'; // 예제로 사용할 DB 사용자 이름
    $dbPassword = ''; // 예제로 사용할 DB 비밀번호

    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    try {
        $pdo = new PDO($dsn, $dbUsername, $dbPassword, $options);
    } catch (PDOException $e) {
        die("error: " . $e->getMessage());
    }
   
?>



