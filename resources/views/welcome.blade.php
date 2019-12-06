<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <style>
        @keyframes sidedownscroll {
            0% {
                background-position: 0 0;
            }

            100% {
                background-position: -2000px 2000px;
            }
        }

        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Maven Pro', sans-serif;
            font-weight: 200;
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
            font-size: 45px;
        }

        .title span {
            text-transform: uppercase;
            border: solid 2px #fff;
            padding-left: 15px;
            padding-right: 15px;
            color: #fff30d;
            font-weight: bold;
        }

        .links>a {
            color: #fff;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .welcomePage {
            background-image: url("img/bg.png");
            background-repeat: repeat;
        }

        .welcomePage {
            background-position: 0 0;
            background-repeat: repeat;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            margin: 0;
            text-align: center;
            box-sizing: border-box;
            -webkit-animation: sidedownscroll 50s linear infinite;
            animation: sidedownscroll 50s linear infinite;
            will-change: background-position;
            background-size: auto;
        }

        .welcomePage:before,
        .welcomePage:after {
            content: '';
            display: block;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            opacity: 1;
            z-index: auto;
        }

        .welcomePage:before {
            /* background-color: rgba(37, 77, 191, 0.5); */
        }

        .welcomePage:after {
            /* background-color: rgba(6, 101, 188, 0.85);  */
            /* background-color: rgba(86, 95, 204, 0.85); */
        }

        .welcomePage:before {
            background-color: #0d71c1;
            opacity: .8;
        }

        .welcomePage:after {
            /* background-color: rgba(6, 101, 188, 0.85);  */
            background-color: #0d71c1;
            opacity: .6;
        }

        .title.m-b-md {
            color: #fff;
        }

        .langLinks a,
        .links a {
            color: #fff;
        }

        a.fLink {
            border-right: solid 2px #fff;
        }

        .launcherLogo {
            height: 85px;
            padding-bottom: 30px;
        }

        .launchSearch {
            position: relative;
            float: none;
            margin: 0 auto;
            width: 60%;
        }

        .launchSearch input {
            width: 100%;
            height: 40px;
            background-color: #ffffff4a;
            border-radius: 20px;
            border: none;
        }

        .launchSearch i.fa.fa-search {
            position: absolute;
            left: 15px;
            top: 12px;
            font-size: 20px;
            color: #d0cc8e;
        }

        .col-12.links {
            padding-top: 20px;
        }
    </style>
</head>

<body>
    <div class="welcomePage">

    </div>
    <div class="flex-center position-ref full-height ">

        <div class="top-right links langLinks">

            <a href="#">English</a>
            <a href="#">Arabic</a>
        </div>

        <div class="content">
            <div class="row">
                <div class="col-12 titleLogo">
                    <img class="launcherLogo" src="/logo/logo.png" alt="">
                </div>
                <div class="col-12">
                    <div class="title m-b-md">
                        Search over a <span>million + photos</span>
                    </div>
                </div>
                <div class="col-12">
                    <div class="launchSearch">
                        <input type="text">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-12 links">
                    <a class="fLink" href="{{ route('login') }}">Login</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                    @endif
                </div>

            </div>
        </div>
    </div>
</body>

</html>