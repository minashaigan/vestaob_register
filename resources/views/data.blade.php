<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
    @endif

    <div class="content">
        @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                    <p >{{ $error }}</p>
                @endforeach
        @endif
        <form method="post" action="/user">
            {{csrf_field()}}
            <input type="text" name="name" placeholder="name">
            <input type="email" name="email" placeholder="email">
            <input type="text" name="phone" placeholder="phone">
            <input type="text" name="university" placeholder="university">
            <select name="grade">
                <option value="1">first</option>
                <option value="2">second</option>
            </select>
            <select name="major">
                <option value="1">aa</option>
                <option value="2">ab</option>
            </select>
            <input type="checkbox" name="t0" value="web">a1
            <input type="checkbox" name="t1" value="android">a2
            <input type="checkbox" name="t2" value="ios">a3
            <br>
            <br>
            <input type="submit" value="ok">
        </form>
    </div>
</div>
</body>
</html>
