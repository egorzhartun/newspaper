<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="css/app.css">

        <meta name="csrf-token" content="{{ csrf_token() }}">

    </head>
    <body>

        <div class="container">
            @yield('content')
        </div>

        @section('footer')
            <footer class="footer">
            <div class="container">
            <span class="text-muted">(c) 2020, egorzhartun</span>
            </div>
            </footer>
        @show

        <script src="js/app.js" charset="utf-8"></script>
    </body>
</html>