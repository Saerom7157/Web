<?php

require_once 'db.php'; // 데이터베이스 연결 설정을 포함합니다.
$stmt = $pdo->query("SELECT * FROM movies"); // 영화 목록을 가져오는 SQL 쿼리 실행
$movies = $stmt->fetchAll(PDO::FETCH_ASSOC); // 결과를 배열로 저장
?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Movie Reviews</title>
</head>
<body>
    <h1>Movies</h1>
    <ul>
        <?php foreach ($movies as $movie): ?>
            <li>
                <a href="movie.php?id=<?php echo $movie['id']; ?>"><?php echo htmlspecialchars($movie['title']); ?></a> <!-- 각 영화의 제목을 링크로 표시 -->
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
