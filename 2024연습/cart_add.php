<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['role'] != 'member') {
    header('Location: index.html');
    exit();
}

if (isset($_GET['id']) && isset($_GET['name']) && isset($_GET['price'])) {
    $product_id = $_GET['id'];
    $product_name = $_GET['name'];
    $product_price = $_GET['price'];

    // 세션에 'cart' 배열이 없으면 생성합니다.
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // 상품 정보를 배열에 추가합니다.
    $_SESSION['cart'][$product_id] = ['name' => $product_name, 'price' => $product_price];

    // 구매 목록 페이지(mypage.php)로 이동하며 구매 목록에 상품을 표시합니다.
    header('Location: mypage.php');
    exit();
} else {
    // 상품 정보가 올바르지 않은 경우
    echo "<script>alert('상품 정보가 올바르지 않습니다.'); history.back();</script>";
    exit();
}
?>
