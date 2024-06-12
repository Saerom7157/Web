<?php
session_start();

if (!isset($_SESSION['wishlist'])) {
    $_SESSION['wishlist'] = array();
}

$product_id = $_GET['id'];
$product_name = $_GET['name'];

$_SESSION['wishlist'][$product_id] = $product_name;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관심 상품 추가</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>관심 상품 추가 성공</h2>
        <div class="alert alert-success" role="alert">
            <?php echo $product_name; ?> 상품이 관심 상품 목록에 성공적으로 추가되었습니다!
        </div>
        <a href="goods.php" class="btn btn-primary">상품 목록으로 돌아가기</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
