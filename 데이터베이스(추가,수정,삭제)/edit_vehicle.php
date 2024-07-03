<?php
session_start();
require_once('mydb.php');

// 사용자가 수정 폼을 제출했을 때 처리
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    $id = $_POST['id'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $days = implode(",", $_POST['days']); // 체크된 요일이 없으면 빈 문자열
    $location = $_POST['location'];

    $sql = "UPDATE vehicle_requests SET vehicle_type=?, price_per_100m=?, available_days=?, start_location=? WHERE id=?";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$type, $price, $days, $location, $id])) {
        echo "<script>alert('차량 정보가 업데이트되었습니다.'); window.location.href='vehicle_status.php';</script>";
    } else {
        echo "<script>alert('업데이트에 실패했습니다.'); window.location.href='edit_vehicle.php?id=$id';</script>";
    }
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM vehicle_requests WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $row = $stmt->fetch();

    $daysArray = explode(',', $row['available_days']);
    $day_options = ['월', '화', '수', '목', '금', '토', '일'];
    
    echo '<form action="" method="post">';
    echo '<input type="hidden" name="id" value="' . htmlspecialchars($id) . '">';
    echo '<label>차종:</label><input type="text" name="type" value="' . htmlspecialchars($row['vehicle_type']) . '"><br>';
    echo '<label>요금(100m당):</label><input type="number" name="price" value="' . htmlspecialchars($row['price_per_100m']) . '" min="100" max="500" step="100"><br>';
    echo '<label>운행 가능 요일:</label><div>';
    foreach ($day_options as $day) {
        $checked = in_array($day, $daysArray) ? 'checked' : '';
        echo "<input type='checkbox' id='$day' name='days[]' value='$day' $checked><label for='$day'>$day</label>";
    }
    echo '</div><br>';
    echo '<input type="radio" id="loc1" name="location" value="무열왕릉"><label for="loc1">무열왕릉</label>
            <input type="radio" id="loc2" name="location" value="대릉원"><label for="loc2">대릉원</label>
            <input type="radio" id="loc3" name="location" value="국립경주박물관"><label for="loc3">국립경주박물관</label>';
    echo '<input type="submit" name="update" value="업데이트">';
    echo '</form>';
}
?>
