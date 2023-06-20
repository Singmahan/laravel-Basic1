<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <nav>
        <label class="logo">Blog Web</label>
        <ul>
            <li>
                <a href="">Home</a>
            </li>
            <li>
                <a href="">Contact</a>
            </li>

            @if (Route::has('login'))
                @auth
                    <li>
                        <a href="{{ url('/dashboard') }}" class="btn btn-success btn-sm">{{ Auth::user()->name }}</a>
                    </li>

                    @else
                    <li>
                        <a href="{{ route('register') }}" class="btn btn-success btn-sm">Register</a>
                    </li>

                    <li>
                        <a href="{{ route('login') }}" class="btn btn-primary btn-sm">Login</a>
                    </li>
                @endauth
            @endif

        </ul>
    </nav>
    <div class="div_deg">
        <label for="">Test</label>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam qui quisquam rerum similique cum sequi
            dignissimos totam, aperiam laboriosam ratione at tenetur sunt quis eligendi, obcaecati sed facere ducimus
            voluptates!</p>
        <img src="abc.jpg" height="300px" width="100%" alt="">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
