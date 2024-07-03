<?php
session_start();
require_once('mydb.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_SESSION['username'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $days = implode(",", $_POST['days']);
    $location = $_POST['location'];

    $sql = "INSERT INTO vehicle_requests (username, vehicle_type, price_per_100m, available_days, start_location, request_status)
            VALUES (?, ?, ?, ?, ?, '대기중')";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$username, $type, $price, $days, $location])) {
        echo "<script>alert('차량 등록 요청이 완료되었습니다.'); window.location.href='vehicle_status.php';</script>";
    } else {
        echo "<script>alert('차량 등록 요청에 실패하였습니다.'); window.location.href='vehicle_reg.php';</script>";
    }
}
?>
