<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: blue;
            font-family: sans-serif;
        }
        .login-container {
            width: 100%;
            max-width: 1000px;
            padding: 50px;
            background-color: whitesmoke;
            box-shadow: 0 0 15px rgba(0, 0, 0, 5);
            border-radius: 8px;
        }
        .login-title {
            margin-bottom: 20px;
            text-align: center;
            font-size: 2rem;
            font-family: sans-serif;
        }
        .form-group{
            margin-bottom: 20px;
            border-radius: 20px;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <div class="login-title">Login</div>
        <form>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember me</label>
            </div>
            <a href="datatanaman" type="submit" class="btn btn-primary btn-block">Login</a>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
