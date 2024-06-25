<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form action="register_action.php" method="post">
            <div class="mb-3">
                <label for="userid" class="form-label">ID</label>
                <input type="text" class="form-control" id="userid" name="userid" pattern="[A-Za-z0-9]+" required>
                <button type="button" class="btn btn-secondary">Check ID</button>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" pattern="[가-힣]+" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" pattern="[A-Za-z0-9]+" required>
            </div>
            <!-- Captcha implementation would be required here -->
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</body>
</html>
