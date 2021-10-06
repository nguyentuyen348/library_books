<!DOCTYPE html>
<html lang="en">

    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{{asset('css/mycss.css')}}">
        <script src="{{asset('js/my.js')}}"></script>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!------ Include the above in your HEAD tag ---------->
    </head>
    <div style="height: 40px;background: #2d3748">
    </div>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid" style="background: #23272b">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="color: orangered" href="{{route('index')}}">Library Happy</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">

                    <li><a href="#">Books</a></li>
                    <li><a href="#">Authors</a></li>
                    <li><a href="#">Stores</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <div class="dropdown" style="text-align: center">
                            @if(auth()->user())
                                <span style="color: white">{{auth()->user()->email}}</span>
                            @else
                                <span style="color: white" >Bạn chưa đăng nhập</span>
                            @endif

                            <button style="height: 50px;background: none;border: none"
                                    class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                     class="bi bi-person" viewBox="0 0 16 16">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                </svg>
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" style="min-width: 100px">
                                <li><a href="{{route('login')}}">Login</a></li>
                                <hr style="margin-bottom: 0">
                                <li><a href="{{route('pages.register')}}">Register</a></li>
                                <hr style="margin-bottom: 0">
                                <li><a href="{{route('logout')}}">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>

                        <a href="{{route('cart.detail')}}"><span class="glyphicon glyphicon-shopping-cart"></span> Giỏ <span style="color: wheat">({{count((array)session('cart'))}})</span></a>



                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hearder">
    </div>

    <div>
        @if (session('register success'))
            <div class="alert alert-success" role="alert" style="text-align: center">
                {{ session('register success') }}
            </div>

        @endif
    </div>
    <main style="">
        <div style="display: flex">
            <div class="col" style="width: 2.9%">
                <nav id="myMenu1" style="margin: 0">


                </nav>
            </div>


            @yield('content')

        </div>
    </main>

    </div>
    <div class="footer">
        <div class="container">

        </div>
    </div>
    </body>
</html>
