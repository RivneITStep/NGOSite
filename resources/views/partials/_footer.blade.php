<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon icon -->
    <title>NGO Site</title>
    <!-- common css -->
    <link rel="stylesheet" href="/css/front.css">
    <!-- css for dropdown navbar -->
    <style>
        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {background-color: #ddd;}
        .dropdown:hover .dropdown-content {display: block;}
        .dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>
    <!-- HTML5 shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.js"></script>
    <![endif]-->
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/images/favicon.png">
    @yield('assets')
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('status'))
                <div class="alert alert-info">
                    {{session('status')}}
                </div>
            @endif
        </div>
    </div>
</div>

{{--@yield('content')--}}

<!--footer start-->
<div id="footer">
    <div class="footer-instagram-section">
        <h3 class="footer-instagram-title text-center">Instagram</h3>
        <div id="footer-instagram" class="owl-carousel">
            <div class="item">
                <a href="#"><img src="/images/ins-1.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href="#"><img src="/images/ins-2.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href="#"><img src="/images/ins-3.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href="#"><img src="/images/ins-4.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href="#"><img src="/images/ins-5.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href="#"><img src="/images/ins-6.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href="#"><img src="/images/ins-7.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href="#"><img src="/images/ins-8.jpg" alt=""></a>
            </div>
        </div>
    </div>
</div>
<footer class="footer-widget-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <aside class="footer-widget">
                    <div class="about-img"><img src="/images/footer-logo.png" alt=""></div>
                    <div class="about-content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed voluptua. At vero eos et
                        accusam et justo duo dlores et ea rebum magna text ar koto din.
                    </div>
                    <div class="address">
                        <h4 class="">Contact Info</h4>
                        <p> Rivne, Ukraine</p>
                        <p> Phone: +123 456 78900</p>
                        <p>sv_dubov@ukr.net</p>
                    </div>
                </aside>
            </div>
            <div class="col-md-4">
                <aside class="footer-widget">
                    <h3 class="widget-title">Testimonials</h3>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!--Indicator-->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="single-review">
                                    <div class="review-text">
                                        <p>Lorem ipsum dolor sit amet, conssadipscing elitr, sed diam nonumy eirmod
                                            tempvidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. At
                                            vero eos et accusam justo duo dolores et ea rebum.gubergren no sea takimata
                                            magna aliquyam eratma</p>
                                    </div>
                                    <div class="author-id">
                                        <img src="/images/author.png" alt="">
                                        <div class="author-text">
                                            <h4>Sophia</h4>
                                            <h4>Client, Tech</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-review">
                                    <div class="review-text">
                                        <p>Lorem ipsum dolor sit amet, conssadipscing elitr, sed diam nonumy eirmod
                                            tempvidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. At
                                            vero eos et accusam justo duo dolores et ea rebum.gubergren no sea takimata
                                            magna aliquyam eratma</p>
                                    </div>
                                    <div class="author-id">
                                        <img src="/images/author.png" alt="">

                                        <div class="author-text">
                                            <h4>Sophia</h4>

                                            <h4>Client, Tech</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-review">
                                    <div class="review-text">
                                        <p>Lorem ipsum dolor sit amet, conssadipscing elitr, sed diam nonumy eirmod
                                            tempvidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. At
                                            vero eos et accusam justo duo dolores et ea rebum.gubergren no sea takimata
                                            magna aliquyam eratma</p>
                                    </div>
                                    <div class="author-id">
                                        <img src="/images/author.png" alt="">

                                        <div class="author-text">
                                            <h4>Sophia</h4>

                                            <h4>Client, Tech</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="col-md-4">
                <aside class="footer-widget">
                    <h3 class="widget-title">Custom Category Post</h3>
                    <div class="custom-post">
                        <div>
                            <a href="#"><img src="/images/footer-img.png" alt=""></a>
                        </div>
                        <div>
                            <a href="#">Home is peaceful Place</a>
                            <span class="p-date">February 15, 2016</span>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <div class="footer-copy">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">&copy; 2020 <a href="#">Site, </a> Designed with <i class="fa fa-heart"></i> by <a href="#">Marlin</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- js files -->
<script src="/js/front.js"></script>
@stack('scripts')
</body>

</html>