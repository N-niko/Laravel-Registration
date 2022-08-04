
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>{{ $pageName }}</title>
</head>
<body class="bg-light text-dark" style="zoom: 120%;">
    <div class="navbar" style="background-color: azure;">
        <a href="/" class="navbar-brand">
            <p>Home</p>
        </a>
        @auth
            <a href="/logout">
                <p>Log out</p>
            </a>
        @else
            <div class="navbar">
                <a href="/login" style="margin-right: 15px;">
                    <p >Log In</p>
                </a>
                <a href="/signup">
                    <p>Sign Up</p>
                </a>
            </div>
        @endauth
    </div>
    @yield('page')
</body>
</html>