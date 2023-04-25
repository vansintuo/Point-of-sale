<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->


    <style>
        body.antialiased {
            font-family: 'Nunito', sans-serif;
            background-color: #e2e8f0 !important
        }

        .center {
            border-radius: 50px;
            background: #e0e0e0;
            box-shadow: 20px 20px 60px #bebebe,
                -20px -20px 60px #ffffff;
            padding: 60px;
            padding: 30px;
            position: absolute;
            margin-top: 60px;
            left: 50%;
            transform: translate(-50%);

        }

        .center button a {
            color: white;
            padding: 10px;
            font-weight: 600
        }

        button {
            border-radius: .25rem;
            text-transform: uppercase;
            font-style: normal;
            font-weight: 400;
            padding-left: 25px;
            padding-right: 25px;
            color: #fff;
            -webkit-clip-path: polygon(0 0, 0 0, 100% 0, 100% 0, 100% calc(100% - 15px), calc(100% - 15px) 100%, 15px 100%, 0 100%);
            clip-path: polygon(0 0, 0 0, 100% 0, 100% 0, 100% calc(100% - 15px), calc(100% - 15px) 100%, 15px 100%, 0 100%);
            height: 40px;
            font-size: 0.7rem;
            line-height: 14px;
            letter-spacing: 1.2px;
            transition: .2s .1s;
            background-image: linear-gradient(90deg, #1c1c1c, #6220fb);
            border: 0 solid;
            overflow: hidden;
            margin: 30px;
        }

        button:hover {
            cursor: pointer;
            transition: all .3s ease-in;
            padding-right: 30px;
            padding-left: 30px;
        }
    </style>
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0 center">
        <h1>Pleas Login</h1>
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <button><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log
                            in</a></button>
                @else
                    <button><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log
                            in</a></button>


                @endauth
            </div>
        @endif


    </div>
</body>

</html>
