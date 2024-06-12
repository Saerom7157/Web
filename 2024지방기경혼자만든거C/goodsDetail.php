<?php
// goodsDetail.php
$id = $_GET['id'] ?? 1; // 상품 ID를 가져옵니다. 기본값은 1입니다.


// 상품 정보 조회 로직
$products = [
    1 => [
        'id' => 1,
        'name' => "바지",
        'sale' => 12000,
        'description' => '바지에 대한 설명',
        'imageUrl' => "goods/01.jpg",
        'detailUrl' => "goodsDetail.php?id=1",
        'group' => "의류"
    ],
    2 => [
        'id' => 2,
        'name' => '티셔츠',
        'sale' => 17500,
        'description' => '티셔츠에 대한 설명',
        'imageUrl' => 'goods/02.jpg',
        'detailUrl' => "goodsDetail.php?id=2",
        'group' => "의류"
    ]
];

// 세션 시작
session_start();

$product = $products[$id] ?? $products[1];

// POST 요청 처리
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_to_cart'])) {
        $_SESSION['cart'][] = $product;
        header('Location: cart.php');
        exit;
    } elseif (isset($_POST['buy_now'])) {
        $_SESSION['purchase'][] = $product;
        header('Location: purchase_list.php');
        exit;
    } elseif (isset($_POST['add_to_wishlist'])) {
        $_SESSION['wishlist'][] = $product;
        header('Location: wishlist.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($product['name']); ?></title>
    <link rel="stylesheet" href="public/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <style>
        .card {
            width: 100%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-img-top {
            height: 400px;
            object-fit: cover;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .card-text {
            font-size: 18px;
            margin-bottom: 15px;
        }

        .btn {
            padding: 10px 24px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="card">
                    <img src="<?php echo htmlspecialchars($product['imageUrl']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($product['name']); ?>">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo htmlspecialchars($product['name']); ?></h2>
                        <p class="card-text">$<?php echo htmlspecialchars($product['sale']); ?></p>
                        <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'manager'): ?>
                            <p class="card-text"><?php echo htmlspecialchars($product['description']); ?></p>
                        <?php endif; ?>
                        <form method="post">
                            <button type="submit" name="add_to_cart" class="btn btn-success w-100 mb-2">장바구니에 추가</button>
                            <button type="submit" name="buy_now" class="btn btn-primary w-100 mb-2">바로 구매</button>
                            <button type="submit" name="add_to_wishlist" class="btn btn-secondary w-100">관심 상품에 추가</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
