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

    <style>
        .mySlides {display:none}
        .w3-left, .w3-right, .w3-badge {cursor:pointer}
        .w3-badge {height:13px;width:13px;padding:0}

        html,
        body {
            margin: 0;
            padding: 0;
        }

        .slider {
            width: 100%;
        }

        .slider-wrapper {
            width: 100%;
            height: 500px;
            position: relative;
        }

        .slide {
            display: flex;
            float: left;
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 3s linear;
        }

        .slider-wrapper>.slide:first-child {
            opacity: 1;
        }


        /* Next & previous buttons */

        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
        }

        .prev{
            left:0;
        }

        /* Position the "next button" to the right */

        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }


        /* On hover, add a black background color with a little bit see-through */

        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        @media screen and (max-width: 480px) {
            img {
                max-height: 300px
            }
            .prev,
            .next {
                top:30%
            }
        }
    </style>


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
    <div class="slider" id="main-slider">
        <!-- outermost container element -->
        <div class="slider-wrapper">
            <!-- innermost wrapper element -->
            <img src="{{asset('storage/images/header.jpg')}}" alt="First" class="slide" style="width:100%" />
            <!-- slides -->
            <img src="https://la.com.vn/wp-content/uploads/2018/08/25.jpg" alt="Second" class="slide" style="width:100%" />
            <img src="https://adelstonmedia.com/wp-content/uploads/2019/05/Slider-Book2.jpg" alt="Third" class="slide" style="width:100%" />
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
    </div>




    {{--<div class="jumbotron">
    <div class="container text-center">
        <img style="width: 100%;margin: 0;padding: 0" src="{{asset('storage/images/logo-ads-nike.jpg')}}" alt="">
    </div>
</div>--}}
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
        <div class="col" style="width: 21.9%">
            <nav id="myMenu1" style="margin: 0">

                <div style="display: flex;">
                    <div>
                        <form class="d-flex" method="get" action="{{route('book.search')}}">
                            <div style="display: flex">
                                <div>
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                                            name="search">
                                </div>
                                <div>
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </div>
                            </div>
                        </form>

                        <ul id="myMenu">
                            <li><a href="">Brand</a></li>
                            <button><a href="">adidas</a></button>
                            <button><a href="">nike</a></button>
                            <button><a href="">puma</a></button>
                            <button><a href="">vans</a></button>
                            <button><a href="">new blance</a></button>
                            <button><a href="">converse</a></button>
                            <button><a href="">reebok</a></button>
                            <button><a href="">asics</a></button>

                            <hr style="margin-bottom: 0">

                            <li><a href="#">Gender</a></li>
                            <button><a href="">mens</a></button>
                            <button><a href="">womens</a></button>
                            <hr style="margin-bottom: 0">

                            <li><a href="#">Size</a></li>
                            <button><a href="">12cm</a></button>
                            <button><a href="">12.5cm</a></button>
                            <button><a href="">13cm</a></button>
                            <button><a href="">13.5cm</a></button>
                            <button><a href="">14 cm</a></button>
                            <button><a href="">14.5cm </a></button>
                            <button><a href="">15cm</a></button>
                            <button><a href="">15.5cm</a></button>
                            <button><a href="">16cm</a></button>
                            <button><a href="">16.5cm</a></button>
                            <button><a href="">17cm</a></button>
                            <button><a href="">17.5cm</a></button>
                            <button><a href="">18 cm</a></button>
                            <button><a href="">18.5cm</a></button>
                            <button><a href="">19cm</a></button>
                            <button><a href="">19.5cm</a></button>
                            <button><a href="">20cm</a></button>
                            <button><a href="">20.5cm</a></button>
                            <button><a href="">21cm</a></button>
                            <button><a href="">21.5cm</a></button>
                            <button><a href="">22 cm</a></button>
                            <button><a href="">22.5cm</a></button>
                            <button><a href="">23cm</a></button>
                            <button><a href="">23.5cm</a></button>
                            <button><a href="">24cm</a></button>
                            <button><a href="">24.5cm</a></button>
                            <button><a href="">25cm</a></button>
                            <button><a href="">25.5cm</a></button>
                            <button><a href="">26 cm</a></button>
                            <button><a href="">26.5cm</a></button>
                            <button><a href="">27cm</a></button>
                            <button><a href="">27.5cm</a></button>
                            <button><a href="">28cm</a></button>
                            <button><a href="">28.5cm</a></button>
                            <button><a href="">29cm</a></button>
                            <button><a href="">29.5cm</a></button>
                            <button><a href="">30 cm</a></button>
                            <button><a href="">30.5cm</a></button>
                            <button><a href="">31cm</a></button>
                            <hr style="margin-bottom: 0">

                            <li><a href="#">Price</a></li>
                            <button><a href="">tăng dần</a></button>
                            <button><a href="">giảm dần</a></button>
                            <hr style="margin-bottom: 0">

                            <li><a href="#">New</a></li>
                            <hr style="margin-bottom: 0">
                        </ul>
                    </div>
                </div>
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

<script type="text/javascript">
    (function() {

        function Slideshow(element) {
            this.el = document.querySelector(element);
            this.init();
        }

        Slideshow.prototype = {
            init: function() {
                this.wrapper = this.el.querySelector(".slider-wrapper");
                this.slides = this.el.querySelectorAll(".slide");
                this.previous = this.el.querySelector(".slider-previous");
                this.next = this.el.querySelector(".slider-next");
                this.index = 0;
                this.total = this.slides.length;
                this.timer = null;
                this.nextButton = this.el.querySelector(".next");
                this.prevButton = this.el.querySelector(".prev");

                this.action();
                this.stopStart();
                this.nextSlide();
                this.prevSlide();
            },
            _slideTo: function(slide) {
                var currentSlide = this.slides[slide];
                currentSlide.style.opacity = 1;

                for (var i = 0; i < this.slides.length; i++) {
                    var slide = this.slides[i];
                    if (slide !== currentSlide) {
                        slide.style.opacity = 0;
                    }
                }
            },
            action: function() {
                var self = this;
                self.timer = setInterval(function() {
                    self.index++;
                    if (self.index == self.slides.length) {
                        self.index = 0;
                    }
                    self._slideTo(self.index);

                }, 10000);
            },
            stopStart: function() {
                var self = this;
                self.el.addEventListener("mouseover", function() {
                    clearInterval(self.timer);
                    self.timer = null;

                }, false);
                self.el.addEventListener("mouseout", function() {
                    self.action();

                }, false);
            },
            nextSlide: function() {
                var self = this;
                self.nextButton.addEventListener("click", function() {
                    clearInterval(self.timer);
                    self.timer = null;
                    self.index++;
                    if (self.index == self.slides.length) {
                        self.index = 0;
                    }
                    self._slideTo(self.index);

                });
            },
            prevSlide: function() {
                var self = this;
                self.prevButton.addEventListener("click", function() {
                    clearInterval(self.timer);
                    self.timer = null;
                    self.index--;
                    if (self.index == -1) {
                        self.index = self.slides.length - 1;
                    }

                    self._slideTo(self.index);

                });
            }


        };

        document.addEventListener("DOMContentLoaded", function() {

            var slider = new Slideshow("#main-slider");

        });
    })();
</script>


</body>
</html>
