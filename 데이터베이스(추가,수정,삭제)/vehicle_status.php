<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>차량 관리 페이지</title>
    <style>
        tr{ text-align: center; }
        tr>td{ padding: 5px; }
    </style>
</head>
<body>
    <h2>등록된 차량 목록</h2>
    <table border="1" style="border-collapse: collapse;">
        <thead>
            <tr>
                <th style="padding: 10px 20px 10px 20px;">이름</th>
                <th style="padding: 10px;">차종</th>
                <th style="padding: 10px;">요금(100m당)</th>
                <th style="padding: 10px;">운행 가능 요일</th>
                <th style="padding: 10px;">운행 시작 위치</th>
                <th style="padding: 10px;">상태</th>
                <th style="padding: 10px;">조치</th>
            </tr>
        </thead>
        <tbody>
            <?php
                session_start();
                require_once('mydb.php');

                $sql = "SELECT * FROM vehicle_requests WHERE username = ?";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([$_SESSION['username']]);
                while ($row = $stmt->fetch()) {
                    echo "<tr>";
                    echo "<td>" . $row['username'] . "</td>";  
                    echo "<td>" . $row['vehicle_type'] . "</td>";
                    echo "<td>" . $row['price_per_100m'] . "</td>";
                    echo "<td>" . $row['available_days'] . "</td>";
                    echo "<td>" . $row['start_location'] . "</td>";
                    echo "<td>" . $row['request_status'] . "</td>";
                    echo "<td>
                            <a href='edit_vehicle.php?id=" . $row['id'] . "'>수정</a>
                            <a href='delete_vehicle.php?id=" . $row['id'] . "' onclick='return confirm(\"정말 삭제하시겠습니까?\");'>삭제</a>
                        </td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>
