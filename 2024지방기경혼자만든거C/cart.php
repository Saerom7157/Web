<?php
// cart.php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>장바구니</title>
    <link rel="stylesheet" href="public/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <style>
        .card-img-top {
            width: 100%;
            height: 15vw;
            object-fit: cover;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-title {
            font-size: 1.25rem;
            margin-bottom: 0.75rem;
        }

        .card-text {
            font-size: 1rem;
            margin-bottom: 0.5rem;
        }

        .container {
            margin-top: 2rem;
        }

        .row {
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>장바구니</h2>
        <?php if (!empty($_SESSION['cart'])): ?>
            <div class="row">
                <?php foreach ($_SESSION['cart'] as $item): ?>
                    <div class="col-md-4">
                        <div class="card" style="width: 100%;">
                            <img src="<?php echo $item['imageUrl']; ?>" class="card-img-top" alt="<?php echo htmlspecialchars($item['name']); ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($item['name']); ?></h5>
                                <p class="card-text">$<?php echo htmlspecialchars($item['sale']); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="text-center">장바구니가 비어있습니다.</p>
        <?php endif; ?>
    </div>

    <script src="public/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
