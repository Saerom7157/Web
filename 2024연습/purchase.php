<?php
session_start();

// 상품 ID와 이름을 GET 요청을 통해 받아옵니다.
$product_id = $_GET['id'];
$product_name = $_GET['name'];

// 구매 처리를 위한 예시 코드 (실제로는 결제 처리 로직이 들어가야 합니다.)
if (isset($_GET['purchase'])) {
    // 상품을 구매하는 로직을 추가합니다.
    $purchase_success = true; // 상품 구매가 성공적으로 이루어졌는지 여부를 나타내는 변수

    if ($purchase_success) {
        echo "<script>alert('상품을 구매하였습니다.');</script>";
    } else {
        echo "<script>alert('상품 구매에 실패하였습니다.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>상품 구매 페이지</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-3">상품 구매</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo $product_name; ?></h5>
                <p class="card-text">상품 ID: <?php echo $product_id; ?></p>
                <p class="card-text">상품 이름: <?php echo $product_name; ?></p>
                <!-- 여기에 결제 및 기타 필요한 정보를 추가할 수 있습니다. -->
                <a href="purchase.php?id=<?php echo $product_id; ?>&name=<?php echo $product_name; ?>&purchase=true" class="btn btn-success">구매하기</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
