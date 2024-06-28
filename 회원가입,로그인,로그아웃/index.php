<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced Web Application</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
        }
        .container {
            width: 75%;
            margin: auto;
        }
        header, footer {
            text-align: center;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to the Enhanced Web Application</h1>
        <p>Utilizing HTML, CSS, Bootstrap, and PHP for a complete web experience.</p>
    </header>

    <div class="container">
        <div class="row">
            <div class="col">
                <a href="#loginModal" class="btn btn-primary" data-toggle="modal">Login</a>
            </div>
            <div class="col">
                <a href="#registerModal" class="btn btn-secondary" data-toggle="modal">Register</a>
            </div>
        </div>
    </div>

    <!-- Login Modal -->
    <div id="loginModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="auth.php" method="post">
                        <div class="form-group">
                            <label for="em">Email address:</label>
                            <input type="email" class="form-control" id="em" name="em" required>
                        </div>
                        <div class="form-group">
                            <label for="pw">Password:</label>
                            <input type="password" class="form-control" id="pw" name="pw" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Register Modal -->
    <div id="registerModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="reg.php" method="post">
                        <div class="form-group">
                            <label for="registerEmail">Email address:</label>
                            <input type="email" class="form-control" id="registerEmail" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="registerPassword">Password:</label>
                            <input type="password" class="form-control" id="registerPassword" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="registerConfirmPassword">Confirm Password:</label>
                            <input type="password" class="form-control" id="registerConfirmPassword" name="confirm_password" required>
                        </div>
                        <button type="submit" class="btn btn-success">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.9/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
