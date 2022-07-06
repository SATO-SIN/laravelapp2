<html>

<head>

    <title>@yield('title')</title>
    <style>
        body {
            font-size: 16pt;
            color: #000;
            margin: 5px;
        }

        h1 {
            font-size: 50pt;
            text-align: left;
            color: #FF0000;
            margin: -20px 0px -30px 0px;
            letter-spacing: -4pt;
        }

        ul {
            font-size: 12pt;
        }

        hr {
            margin: 25px 100px;
            border-top: 1px dashed #ddd;
        }

        .menutitle {
            font-size: 14pt;
            font-weight: bold;
            margin: 0px;
        }

        .content {
            margin: 10px;
        }

        .footer {
            text-align: center;
            font-size: 10pt;
            margin: 10px;
            border-bottom: solid 1px #BBBBBB;
            color: #000;
        }

        th {
            background-color: #999;
            color: #fff;
            padding: 5px 10px;
        }

        td {
            border: solid 1px #aaa;
            color: #999;
            padding: 5px 10px;
        }
    </style>
</head>

<body>
    <div id="wrap">
        <header class="container">
            <h1>@yield('title')</h1>
            @section('menubar')
                <h2 class="menutitle">※メニュー</h2>
                <ul>
                <li>@show
                </li>
            </ul>
        </header>
        <main class="content container">
            @yield('content')
        </main>
        <div class="footer container">
            @yield('footer')
        </div>
    </div>
</body>

</html>
