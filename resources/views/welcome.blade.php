<!DOCTYPE html>
<html>
<head>

    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0%;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
            background-image: url("https://upload.wikimedia.org/wikipedia/commons/1/17/The_Great_wall_-_by_Hao_Wei.jpg")
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
            font-weight: 900;
            font-family: "Times New Roman", Times, serif;
        }

        .content {
            text-align: center;

            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">Eagle Financial Services</div>
    </div>

    <!div class="container">
    <a href="{{ action('CustomerController@index') }}">Begin Here</a>
    <!-- Right Side Of Navbar -->
    <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
        <li><a href="login">Login</a></li>
        <li><a href="register">Register</a></li>
        <li><a href="logout"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
    </ul>


</div>
</body>
</html>