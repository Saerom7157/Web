<?php
require_once 'db.php';
$movieId = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM movies WHERE id = ?");
$stmt->execute([$movieId]);
$movie = $stmt->fetch(PDO::FETCH_ASSOC);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];
    $stmt = $pdo->prepare("INSERT INTO reviews (movie_id, username, rating, comment) VALUES (?, ?, ?, ?)");
    $stmt->execute([$movieId, $username, $rating, $comment]);
}
$stmt = $pdo->prepare("SELECT * FROM reviews WHERE movie_id = ?");
$stmt->execute([$movieId]);
$reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo htmlspecialchars($movie['title']); ?> - Reviews</title>
</head>
<body>
    <h1><?php echo htmlspecialchars($movie['title']); ?></h1>
    <p><?php echo htmlspecialchars($movie['description']); ?></p>
    <p>Release Year: <?php echo htmlspecialchars($movie['release_year']); ?></p>
    <h2>Reviews</h2>
    <ul>
        <?php foreach ($reviews as $review): ?>
            <li>
                <strong><?php echo htmlspecialchars($review['username']); ?></strong>
                <span>Rating: <?php echo htmlspecialchars($review['rating']); ?>/5</span>
                <p><?php echo htmlspecialchars($review['comment']); ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
    <h2>Leave a Review</h2>
    <form action="" method="POST">
        <label for="username">Name:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="rating">Rating (1-5):</label>
        <input type="number" id="rating" name="rating" min="1" max="5" required><br>
        <label for="comment">Comment:</label>
        <textarea id="comment" name="comment" required></textarea><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
