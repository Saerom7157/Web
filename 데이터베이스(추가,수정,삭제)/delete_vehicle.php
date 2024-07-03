<?php
session_start();
require_once('mydb.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM vehicle_requests WHERE id=?";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$id])) {
        echo "<script>alert('차량 정보가 삭제되었습니다.'); window.location.href='vehicle_status.php';</script>";
    } else {
        echo "<script>alert('삭제 실패'); window.location.href='vehicle_status.php';</script>";
    }
}
?>
