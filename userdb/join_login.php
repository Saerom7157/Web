<?
$host = 'localhost';
$dbname = 'userdb';
$user = 'root';
$pass = '';
$charset = 'utf8mb4'; //문자 인코딩

$dns = "mysql:$host;dbname=$dbname;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

session_start();

try {
    $pdo = new PDO($dsn, $user, $pass, $options);

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['username'];

        if($_POST['action'] == "회원가입") {
            $email = $_POST['email'];
        }
    }

} catch(PDOException $e) {
    die("error: " . $e->getMessage());
}

?>