<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body,
        html {
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

        .form-group {
            margin-bottom: 20px;
            border-radius: 20px;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-title">Login</div>
        <!-- Display Validation Errors -->
        @if($errors->any())
        <div id="errorAlert" class="alert alert-danger alert-dismissible fade show" role="alert">
            @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
        <div class="card-body">
            @if(Session::has('error'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('error') }}
            </div>
            @endif
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>