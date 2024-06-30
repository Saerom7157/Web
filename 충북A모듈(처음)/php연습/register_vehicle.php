<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=your_database;charset=utf8mb4', 'username', 'password');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $car_type = $_POST['car_type'];
    $rate_per_100m = $_POST['rate_per_100m'];
    $available_days = implode(',', $_POST['available_days']);
    $start_location = $_POST['start_location'];
    $driver_id = $_SESSION['driver_id']; // 가정: 세션에 기사 ID 저장

    $sql = "INSERT INTO vehicle_registration_requests (driver_id, car_type, rate_per_100m, available_days, start_location)
            VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$driver_id, $car_type, $rate_per_100m, $available_days, $start_location]);

    echo "<script>alert('차량 등록 요청이 전송되었습니다.'); window.location.href='some_page.php';</script>";
}
?>
