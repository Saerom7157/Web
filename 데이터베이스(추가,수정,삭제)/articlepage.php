<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>차량등록요청 페이지</title>
</head>
<body>
    <h2>차량 등록 요청</h2>
    <form action="vehicle_process.php" method="POST">
        <input type="hidden" name="action" value="register">
        <label>차종:</label>
        <input type="text" name="vehicle_type" required><br>
        <label>요금(100m당):</label>
        <input type="number" name="price_per_100m" min="100" max="500" step="100" required><br>
        <label>운행 가능 요일:</label>
        <div>
            <input type="checkbox" id="mon" name="available_days[]" value="월"><label for="mon">월</label>
            <input type="checkbox" id="tue" name="available_days[]" value="화"><label for="tue">화</label>
            <input type="checkbox" id="wed" name="available_days[]" value="수"><label for="wed">수</label>
            <input type="checkbox" id="thu" na me="available_days[]" value="목"><label for="thu">목</label>
            <input type="checkbox" id="fri" name="available_days[]" value="금"><label for="fri">금</label>
            <input type="checkbox" id="sat" name="available_days[]" value="토"><label for="sat">토</label>
            <input type="checkbox" id="sun" name="available_days[]" value="일"><label for="sun">일</label>
        </div><br>
        <label>운행 시작 위치:</label>
        <div>
            <input type="radio" id="loc1" name="start_location" value="무열왕릉"><label for="loc1">무열왕릉</label>
            <input type="radio" id="loc2" name="start_location" value="대릉원"><label for="loc2">대릉원</label>
            <input type="radio" id="loc3" name="start_location" value="국립경주박물관"><label for="loc3">국립경주박물관</label>
            <!-- 추가 위치 입력 -->
        </div><br>
        <input type="submit" value="등록요청">
    </form>
</body>
</html>
