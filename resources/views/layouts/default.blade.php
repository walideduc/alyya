<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Home - Mimity</title>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/jquery.bxslider.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<body>
<header>
    <div class="container">
        <div class="row">

            <!-- Logo -->
            <div class="col-lg-4 col-md-3 hidden-sm hidden-xs">
                <div class="well logo">
                    <a href="/">
                        <b>Alyya</b> <span>Online Shop</span>
                    </a>
                    <div>Lorem ipsum dolor sit amet.</div>
                </div>
            </div>
            <!-- End Logo -->

            <!-- Search Form -->
            <div class="col-lg-5 col-md-5 col-sm-7 col-xs-12">
                <div class="well">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control input-search" placeholder="Enter something to search"/>
	                            <span class="input-group-btn">
	                                <button class="btn btn-default no-border-left" type="submit"><i class="fa fa-search"></i></button>
	                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Search Form -->

            <!-- Shopping Cart List -->
            <div class="col-lg-3 col-md-4 col-sm-5">
                <div class="well">
                    <div class="btn-group btn-group-cart">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <span class="pull-left"><i class="fa fa-shopping-cart icon-cart"></i></span>
                            <span class="pull-left">Shopping Cart: {{Cart::count()}} articles {{Cart::count(false) }} produits </span>
                            <span class="pull-right"><i class="fa fa-caret-down"></i></span>
                        </button>
                        <ul class="dropdown-menu cart-content" role="menu">
                            @foreach(Cart::content() as $row )
                            <li>
                                <a href="{{route('product',[$row->slug_id])}}">
                                    <b>{{ $row->name}}</b>
                                    <span>x{{ $row->qty }} ${{ $row->subtotal }}</span>
                                </a>
                            </li>
                            @endforeach
                            <li class="divider"></li>
                            <li><a href="cart">Total: ${{ Cart::total()  }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Shopping Cart List -->
        </div>
    </div>
</header>

<!-- Navigation -->
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- text logo on mobile view -->
            <a class="navbar-brand visible-xs" href="index">Mimity Online Shop</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{url('/')}}" class="active">Home</a></li>
                <li><a href="{{url('catalogue')}}">Catalogue</a></li>
                <li><a href="{{url('cart')}}">Shopping Cart</a></li>
                <li><a href="{{url('checkout')}}">Checkout</a></li>
                <li class="nav-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Pages <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="about">About Us</a></li>
                        <li><a href="contact">Contact Us</a></li>
                        <li><a href="typography">Typography</a></li>
                        <li><a href="detail">Product Detail</a></li>
                        <li><a href="compare">Compare</a></li>
                        <li><a href="login">Login</a></li>
                        <li><a href="register">Register</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navigation -->

<div class="container main-container">
    @yield('content')
</div>


<footer>
    <div class="container">
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="column">
                <h4>Information</h4>
                <ul>
                    <li><a href="about">About Us</a></li>
                    <li><a href="typography">Policy Privacy</a></li>
                    <li><a href="typography">Terms and Conditions</a></li>
                    <li><a href="typography">Shipping Methods</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="column">
                <h4>Categories</h4>
                <ul>
                    <li><a href="catalogue">Cras justo odio</a></li>
                    <li><a href="catalogue">Dapibus ac facilisis in</a></li>
                    <li><a href="catalogue">Morbi leo risus</a></li>
                    <li><a href="catalogue">Porta ac consectetur ac</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="column">
                <h4>Customer Service</h4>
                <ul>
                    <li><a href="contact">Contact Us</a></li>
                    <li><a href="#">YM: cs_</a></li>
                    <li><a href="#">Phone: +6281234567891</a></li>
                    <li><a href="#">Email: cs.domain@domain.tld</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="column">
                <h4>Follow Us</h4>
                <ul class="social">
                    <li><a href="#">Google Plus</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">RSS Feed</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="navbar-inverse text-center copyright">
        Copyright &copy; 2015 Mimity All right reserved
    </div>
</footer>

<a href="#top" class="back-top text-center" onclick="$('body,html').animate({scrollTop:0},500); return false">
    <i class="fa fa-angle-double-up"></i>
</a>


<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/jquery.bxslider.min.js')}}"></script>
<script src="{{asset('js/jquery.blImageCenter.js')}}"></script>
<script src="{{asset('js/mimity.js')}}"></script>
</body>
</html>