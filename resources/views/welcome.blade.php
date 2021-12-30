<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="../assets/img/Logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DoctArea | Efficient Doctor Patient Portal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>


<body>
    <div>
        @if (Route::has('login'))
        <div class="header">
            <h1>DoctArea | Efficient Doctor Patient Portal</h1>

            <div class="right">@auth
                <a class="btn btn-primary" href="{{ url('/home') }}" role="button">Home</a>

                @else
                <a class="btn btn-primary" href="{{ route('login') }}" role="button">Log in</a>

                @if (Route::has('register'))
                <a class="btn btn-primary" href="{{ route('register') }}" role="button">Register</a>

                @endif
                @endauth
            </div>

        </div>
        @endif

        <style>
            .header {
                font-family: 'Courier New', Courier, monospace;
                font-weight: bold;
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                padding: 22px;
                text-align: center;
                background: #205284;
                background: #7B42F6;
            }
        </style>
    </div>
</body>

</html>
