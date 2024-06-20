<?php
$host = 'localhost';
$dbname = 'loginjoin';
$username = 'root';
$password = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

try {
    $pdo = new PDO($dsn, $username, $password, $options);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $sql = "SELECT COUNT(*) FROM users WHERE username = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$username]);
        $count = $stmt->fetchColumn();

        if ($count > 0) {
            echo "taken";
        } else {
            echo "available";
        }
    }
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>
