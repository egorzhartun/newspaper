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

        <style>
            /* Sticky footer styles
            -------------------------------------------------- */
            html {
            position: relative;
            min-height: 100%;
            }
            body {
            margin-bottom: 60px; /* Margin bottom by footer height */
            }
            .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 60px; /* Set the fixed height of the footer here */
            line-height: 60px; /* Vertically center the text there */
            background-color: #f5f5f5;
            }




h5 {
    font-size: 1.28571429em;
    font-weight: 700;
    line-height: 1.2857em;
    margin: 0;
}

.card {
    font-size: 1em;
    overflow: hidden;
    padding: 0;
    border: none;
    border-radius: .28571429rem;
    box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
}

.card-block {
    font-size: 1em;
    position: relative;
    margin: 0;
    padding: 1em;
    border: none;
    border-top: 1px solid rgba(34, 36, 38, .1);
    box-shadow: none;
}

.card-img-top {
    display: block;
    width: 100%;
    height: auto;
}

.card-title {
    font-size: 1.28571429em;
    font-weight: 700;
    line-height: 1.2857em;
}

.card-text {
    clear: both;
    margin-top: .5em;
    color: rgba(0, 0, 0, .68);
}

.card-footer {
    font-size: 1em;
    position: static;
    top: 0;
    left: 0;
    max-width: 100%;
    padding: .75em 1em;
    color: rgba(0, 0, 0, .4);
    border-top: 1px solid rgba(0, 0, 0, .05) !important;
    background: #fff;
}

.card-inverse .btn {
    border: 1px solid rgba(0, 0, 0, .05);
}

.profile {
    position: absolute;
    top: -12px;
    display: inline-block;
    overflow: hidden;
    box-sizing: border-box;
    width: 25px;
    height: 25px;
    margin: 0;
    border: 1px solid #fff;
    border-radius: 50%;
}

.profile-avatar {
    display: block;
    width: 100%;
    height: 100%;
    border-radius: 50%;
}

.profile-inline {
    position: relative;
    top: 0;
    display: inline-block;
}

.profile-inline ~ .card-title {
    display: inline-block;
    margin-left: 4px;
    vertical-align: top;
}

.text-bold {
    font-weight: 700;
}

.meta {
    font-size: 1em;
    color: rgba(0, 0, 0, .4);
}

.meta a {
    text-decoration: none;
    color: rgba(0, 0, 0, .4);
}

.meta a:hover {
    color: rgba(0, 0, 0, .87);
}



        </style>
    </head>
    <body>
        @section('sidebar')
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Newspaper</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('/') }}">Home <span class="sr-only">(current)</span></a>
                            </li>
                        </ul>

                        @if (Auth::user())
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Your profile
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                                    <a class="dropdown-item" href="#">Blog</a>
                                    <a class="dropdown-item" href="#">Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <form method="post" action="{{ action('ProfileUser@logoutProfile') }}">
                                        {{ csrf_field() }}
                                        <button class="btn btn-link" type="submit" name="logout">Exit</button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                        @else
                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#staticBackdrop">Sign-in</button>
                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#registration">Sign-up</button>
                        @endif
                    </div>
            </nav>
        @show

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

        <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Sign-in</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form method="post" action="{{ route('login') }}" accept-charset="UTF-8">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                            </div>

                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>

                            <button type="submit" class="btn btn-primary">Sign-in</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="registration" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Sign-up</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form method="post" action="{{ route('register') }}" accept-charset="UTF-8">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="exampleInputEmail1">Your name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Repeat Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                            </div>

                            <button type="submit" class="btn btn-primary">Sign-in</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/app.js" charset="utf-8"></script>
    </body>
</html>