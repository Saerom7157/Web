<?php
session_start();
$userEmail = $_SESSION['user_email'] ?? 'guest';
$purchaseList = $_SESSION['cart'] ?? [];
usort($purchaseList, function ($a, $b) {
    return $b['sale'] - $a['sale'];
});
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Page</title>
    <link rel="stylesheet" href="public/bootstrap-5.2.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="public/bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <h2>My Page</h2>
        <div class="reservation-info mt-3">
            <h4>Reservation Info</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">League</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Min. People</th>
                        <th scope="col">Fee</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                // 예약 정보 출력
                if (!empty($userEmail) && isset($_SESSION['reservations'][$userEmail]) && count($_SESSION['reservations'][$userEmail]) > 0) {
                    foreach ($_SESSION['reservations'][$userEmail] as $res) {
                        $fee = isset($res['fee']) ? "\${$res['fee']}" : "Not calculated";
                        echo "<tr>
                                <td>{$res['league']}</td>
                                <td>{$res['date']}</td>
                                <td>{$res['time']}</td>
                                <td>{$res['people']}</td>
                                <td>{$fee}</td>
                                <td>{$res['status']}</td>
                            </tr>";
                    }
                } else {
                    echo '<tr><td colspan="6">No reservations found.</td></tr>';
                }
                ?>
                </tbody>
            </table>
        </div>

        <div class="purchase-info mt-3">
            <h4>Purchase List</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Product Name</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($purchaseList as $productId => $productInfo): ?>
                    <tr>
                        <td><img src="<?php echo htmlspecialchars($productInfo['imageUrl']); ?>" style="width: 100px; height: auto;" alt="<?php echo htmlspecialchars($productInfo['name']); ?>"></td>
                        <td><?php echo htmlspecialchars($productInfo['name']); ?></td>
                        <td>$<?php echo htmlspecialchars($productInfo['sale']); ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="public/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
