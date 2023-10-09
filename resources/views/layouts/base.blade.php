
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="facebook-domain-verification" content="m8hw0qtwylevwjoru22h3v6n3pj4er" />

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

	<title>Smaster</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/Smaster_favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}">
	{{--<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">--}}
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" integrity="sha512-WWc9iSr5tHo+AliwUnAQN1RfGK9AnpiOFbmboA0A0VJeooe69YR2rLgHw13KxF1bOSLmke+SNnLWxmZd8RTESQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.7.0/nouislider.min.css" integrity="sha512-40vN6DdyQoxRJCw0klEUwZfTTlcwkOLKpP8K8125hy9iF4fi8gPpWZp60qKC6MYAFaond8yQds7cTMVU8eMbgA==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    @livewireStyles
</head>
<body class="home-page home-01 ">


    <header class="header-area header-style-1 header-height-2">
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info">
                            <ul>
                                <li>
                                    <a class="language-dropdown-active" href="#"> <i class="fi-rs-world"></i> ENG <i class="fi-rs-angle-small-down"></i></a>
                                    <ul class="language-dropdown">
                                        <li><a href="#"><img src="assets/imgs/theme/flag-fr.png" alt="">AR</a></li>
                                        <li><a href="#"><img src="assets/imgs/theme/flag-dt.png" alt="">CH</a></li>
                                        <li><a href="#"><img src="assets/imgs/theme/flag-ru.png" alt="">RU</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="text-center">
                            <div id="news-flash" class="d-inline-block">
                                <ul>
                                    <li>Be Shopping master as Smaster <a href="/shop">Shop now</a></li>
                                    <li>Get great devices up to 40% off <a href="#">View details</a></li>
                                    <li>Smaster Super Value Deals - Save more with coupons</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">


                        <div class="header-info" style="padding-left:200px;>
                            @auth
                            <ul>
                                <li ><i class="fi-rs-key"></i> {{ Auth::user()->name }} / <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout</a></li>

								<form id="logout-form" method="POST" action="{{ route('logout') }}">
							   	@csrf
								</form>

                            </ul>

                            @else
                            <ul>
                                <li><i class="fi-rs-key"></i><a href="{{route('login')}}">Log In </a>  / <a href="{{route('register')}}"> register</a></li>
                            </ul>

                            @endif

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block" style="background-color: #99e70a">
            <div class="container">
                <div class="header-wrap">
                    <div class=" logo-width-1" style="padding-left:10px; padding-right:90px; ">
                        <a href="/"><img src="{{ asset('assets/img/icon-img/nileemart_logo_2.png') }}" alt="logo" width="200" ></a>
                    </div>
                    <div class="header-right" >
                        <!--
                        <div class="search-style-1">
                            <form action="#">
                                <input type="text" placeholder="Search for items...">
                            </form>
                        </div> -->

                        <div class="search-style-1"style="padding-left:100px;" >
                            @livewire('header-search-component')
                        </div>

                        <div class="header-action-right">
                            <div class="header-action-2">
                                @livewire('wishlist-count-component')
                                @livewire('cart-count-component')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar" style="background-color: #99e70a">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class=" logo-width-1 d-block d-lg-none">
                        <a href="/"><img src="{{ asset('assets/img/icon-img/LOGO ICON.png') }}" alt="logo" width="50" height="50" alt="logo"></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <!--
                        <div class="main-categori-wrap d-none d-lg-block">
                            <a class="categori-button-active" href="#">
                                <span class="fi-rs-apps"></span> Browse Categories
                            </a>

                            <div class="categori-dropdown-wrap categori-dropdown-active-large">
                                <ul>
                                    <li class="has-children">
                                        <a href="#"><i class="surfsidemedia-font-dress"></i>Women's Clothing</a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Hot & Trending</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Dresses</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Blouses & Shirts</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Hoodies & Sweatshirts</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Women's Sets</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Suits & Blazers</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Bodysuits</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Tanks & Camis</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Coats & Jackets</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Bottoms</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Leggings</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Skirts</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Shorts</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Jeans</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Pants & Capris</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Bikini Sets</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Cover-Ups</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Swimwear</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <img src="assets/imgs/banner/menu-banner-2.jpg" alt="menu_banner1">
                                                        <div class="banne_info">
                                                            <h6>10% Off</h6>
                                                            <h4>New Arrival</h4>
                                                            <a href="#">Shop now</a>
                                                        </div>
                                                    </div>
                                                    <div class="header-banner2">
                                                        <img src="assets/imgs/banner/menu-banner-3.jpg" alt="menu_banner2">
                                                        <div class="banne_info">
                                                            <h6>15% Off</h6>
                                                            <h4>Hot Deals</h4>
                                                            <a href="#">Shop now</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-children">
                                        <a href="#"><i class="surfsidemedia-font-tshirt"></i>Men's Clothing</a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Jackets & Coats</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Down Jackets</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Jackets</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Parkas</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Faux Leather Coats</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Trench</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Wool & Blends</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Vests & Waistcoats</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Leather Coats</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Suits & Blazers</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Blazers</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Suit Jackets</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Suit Pants</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Suits</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Vests</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Tailor-made Suits</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Cover-Ups</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <img src="assets/imgs/banner/menu-banner-4.jpg" alt="menu_banner1">
                                                        <div class="banne_info">
                                                            <h6>10% Off</h6>
                                                            <h4>New Arrival</h4>
                                                            <a href="#">Shop now</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-children">
                                        <a href="#"><i class="surfsidemedia-font-smartphone"></i> Cellphones</a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Hot & Trending</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Cellphones</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">iPhones</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Refurbished Phones</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Mobile Phone</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Mobile Phone Parts</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Phone Bags & Cases</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Communication Equipments</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Walkie Talkie</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Accessories</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Screen Protectors</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Wire Chargers</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Wireless Chargers</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Car Chargers</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Power Bank</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Armbands</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Dust Plug</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Signal Boosters</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <img src="assets/imgs/banner/menu-banner-5.jpg" alt="menu_banner1">
                                                        <div class="banne_info">
                                                            <h6>10% Off</h6>
                                                            <h4>New Arrival</h4>
                                                            <a href="#">Shop now</a>
                                                        </div>
                                                    </div>
                                                    <div class="header-banner2">
                                                        <img src="assets/imgs/banner/menu-banner-6.jpg" alt="menu_banner2">
                                                        <div class="banne_info">
                                                            <h6>15% Off</h6>
                                                            <h4>Hot Deals</h4>
                                                            <a href="#">Shop now</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="shop.html"><i class="surfsidemedia-font-desktop"></i>Computer & Office</a></li>
                                    <li><a href="shop.html"><i class="surfsidemedia-font-cpu"></i>Consumer Electronics</a></li>
                                    <li><a href="shop.html"><i class="surfsidemedia-font-diamond"></i>Jewelry & Accessories</a></li>
                                    <li><a href="shop.html"><i class="surfsidemedia-font-home"></i>Home & Garden</a></li>
                                    <li><a href="shop.html"><i class="surfsidemedia-font-high-heels"></i>Shoes</a></li>
                                    <li><a href="shop.html"><i class="surfsidemedia-font-teddy-bear"></i>Mother & Kids</a></li>
                                    <li><a href="shop.html"><i class="surfsidemedia-font-kite"></i>Outdoor fun</a></li>
                                    <li>
                                        <ul class="more_slide_open" style="display: none;">
                                            <li><a href="shop.html"><i class="surfsidemedia-font-desktop"></i>Beauty, Health</a></li>
                                            <li><a href="shop.html"><i class="surfsidemedia-font-cpu"></i>Bags and Shoes</a></li>
                                            <li><a href="shop.html"><i class="surfsidemedia-font-diamond"></i>Consumer Electronics</a></li>
                                            <li><a href="shop.html"><i class="surfsidemedia-font-home"></i>Automobiles & Motorcycles</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="more_categories">Show more...</div>
                            </div>
                        </div>-->
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                            <nav>
                                <ul>
                                    <!--
                                    <li><a class="active" href="/">Home </a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="/shop">Shop</a></li>
                                    <li class="position-static"><a href="#">Our Collections <i class="fi-rs-angle-down"></i></a>
                                        <ul class="mega-menu">
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="#">Women's Fashion</a>
                                                <ul>
                                                    <li><a href="product-details.html">Dresses</a></li>
                                                    <li><a href="product-details.html">Blouses & Shirts</a></li>
                                                    <li><a href="product-details.html">Hoodies & Sweatshirts</a></li>
                                                    <li><a href="product-details.html">Wedding Dresses</a></li>
                                                    <li><a href="product-details.html">Prom Dresses</a></li>
                                                    <li><a href="product-details.html">Cosplay Costumes</a></li>
                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="#">Men's Fashion</a>
                                                <ul>
                                                    <li><a href="product-details.html">Jackets</a></li>
                                                    <li><a href="product-details.html">Casual Faux Leather</a></li>
                                                    <li><a href="product-details.html">Genuine Leather</a></li>
                                                    <li><a href="product-details.html">Casual Pants</a></li>
                                                    <li><a href="product-details.html">Sweatpants</a></li>
                                                    <li><a href="product-details.html">Harem Pants</a></li>
                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="#">Technology</a>
                                                <ul>
                                                    <li><a href="product-details.html">Gaming Laptops</a></li>
                                                    <li><a href="product-details.html">Ultraslim Laptops</a></li>
                                                    <li><a href="product-details.html">Tablets</a></li>
                                                    <li><a href="product-details.html">Laptop Accessories</a></li>
                                                    <li><a href="product-details.html">Tablet Accessories</a></li>
                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-34">
                                                <div class="menu-banner-wrap">
                                                    <a href="product-details.html"><img src="assets/imgs/banner/menu-banner.jpg" alt="Surfside Media"></a>
                                                    <div class="menu-banner-content">
                                                        <h4>Hot deals</h4>
                                                        <h3>Don't miss<br> Trending</h3>
                                                        <div class="menu-banner-price">
                                                            <span class="new-price text-success">Save to 50%</span>
                                                        </div>
                                                        <div class="menu-banner-btn">
                                                            <a href="/shop">Shop now</a>
                                                        </div>
                                                    </div>
                                                    <div class="menu-banner-discount">
                                                        <h3>
                                                            <span>35%</span>
                                                            off
                                                        </h3>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="/contact">Contact</a></li> -->




                            <li><a class="menu-item-has-children" href="/shop"> <img src="{{ asset('assets/img/icon-img/1652866836159_SHOP ICON.png') }}" alt=""
                                width="60px" height="70px"></a></li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="/"><img src="{{ asset('assets/img/icon-img/1653158099019_HOME ICON.png') }}" alt=""
                                width="60px" height="60px"></a></li>
                            <li class="menu-item-has-children"><a href="https://smaster.store/++++"><img src="{{ asset('assets/img/icon-img/1653158120074_GROCERY ICON.png') }}" alt=""
                                width="60px" height="60px"></a></li>
                            <li class="menu-item-has-children"><a href="/live"><img src="{{ asset('assets/img/icon-img/1652866796814_LIVE ICON.png') }}" alt=""
                                width="60px" height="60px"></a></li>
                            <li class="menu-item-has-children"><a href="/ancient"> <img src="{{ asset('assets/img/icon-img/1652885571483_ANCIENT ICON.png') }}" alt=""
                                width="60px" height="60px"></a></li>
                            <li class="menu-item-has-children"><a href="/auctions"><img src="{{ asset('assets/img/icon-img/1653157948772_AUCTION ICON.png') }}" alt=""
                                width="60px" height="60px"></a></li>
                            <li class="menu-item-has-children"><a href="/realestate"> <img src="{{ asset('assets/img/icon-img/1652866802752_REAL ESTATE ICON.png') }}" alt=""
                                width="60px" height="60px"></a></li>
                            <li class="menu-item-has-children"><a href="/luxury"><img src="{{ asset('assets/img/icon-img/LUXURY ICON_new.png') }}" alt=""
                                width="60px" height="60px"></a></li>
                            <li class="menu-item-has-children"><a href="/discover"><img src="{{ asset('assets/img/icon-img/DISCOVER LOVE ICON_new.png') }}" alt=""
                                width="60px" height="60px"></a></li>
                            <li class="menu-item-has-children"><a href="/member"><img src="{{ asset('assets/img/icon-img/MEMBER ICON_new.png') }}" alt=""
                                width="60px" height="60px"></a></a></li>
                            <li class="menu-item-has-children"><a href="/smasterway"><img src="{{ asset('assets/img/icon-img/SMASTR WAY ICON_new.png') }}" alt=""
                                width="60px" height="60px"></a></li>
                            <li class="menu-item-has-children"><a href="/smasterspace"><img src="{{ asset('assets/img/icon-img/SMASTER SPACE ICON_new.png') }}" alt=""
                                width="60px" height="60px"></a></li>

                                   <li class="menu-item-has-children"><a href="#">My Account<i class="fi-rs-angle-down"></i></a>
									@auth
										@if(Auth::user()->utype === 'ADM')
												<ul class="sub-menu">
													<li >
														<a title="Dashboard" href="{{ route('admin.dashboard') }}">Dashboard</a>
													</li>

													<li>
														<a title="Categories" href="{{ route('admin.categories') }}">Categories</a>
													</li>

													<li>
														<a title="Products" href="{{route('admin.products')}}">All Products</a>
													</li>

													<li>
														<a title="Manage Home Slider" href="{{route('admin.homeslider')}}">Manage Home Slider</a>
													</li>

													<li>
														<a title="Manage Home Categories" href="{{route('admin.homecategories')}}"> Manage Home Categories</a>
													</li>

                                                    <li>
														<a title="Home Sales' setting" href="{{route('admin.sale')}}"> Home Sales' setting</a>
													</li>

													<li>
														<a title="All Coupons" href="{{route('admin.coupons')}}">All Coupon</a>
													</li>

													<li>
														<a title="All Orders" href="{{route('admin.orders')}}">All Orders</a>
													</li>

													<li>
														<a title="Settings" href="{{route('admin.settings')}}">Settings</a>
													</li>

													<li>
														<a title="Contact Messages" href="{{route('admin.contact')}}">Contact Messages</a>
													</li>


												</ul>
											</li>
										@else
												<ul class="sub-menu" >

													<li>
														<a title="Dashboard" href="{{ route('user.dashboard') }}">Dashboard</a>
													</li>
													<li>
														<a title="My orders" href="{{ route('user.orders') }}">My Orders</a>
													</li>
													<li>
														<a title="Change password" href="{{ route('user.changepassword') }}">Change Password</a>
													</li>
												</ul>
										@endif
							    	@endif
								</li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">

                            <div class="search-style-1" style="width:150px; margin:0px; padding:0px;">
                               @livewire('header-search-component')
                            </div>

							@livewire('wishlist-count-component')

							@livewire('cart-count-component')
                            <div class="header-action-icon-2 d-block d-lg-none">
                                <div class="burger-icon burger-icon-white">
                                    <span class="burger-icon-top"></span>
                                    <span class="burger-icon-mid"></span>
                                    <span class="burger-icon-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top" style="background-color: #010ff4">
                <div class="mobile-header-logo" style="max-height:50px; width:50px;">
                    <a href="/"><img src="{{ asset('assets/img/icon-img/LOGO ICON.png') }}" alt="logo" width="50" height="50" alt="logo"></a>
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close" style="color: #fffff">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    <!--
                    <form action="#">
                        <input type="text" placeholder="Search for items…">
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form>-->

                  {{-- <!-- @livewire('header-search-component') -->--}}

                </div>
                <div class="mobile-menu-wrap mobile-header-border">

                    <!-- mobile menu start -->
                    <nav>
                        <ul class="mobile-menu">
                            <div class="single-mobile-header-info">
                            @auth
                            <ul>
                                <li ><i class="fi-rs-key"></i> {{ Auth::user()->name }} / <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>

								<form id="logout-form" method="POST" action="{{ route('logout') }}">
							   	@csrf
								</form>

                            </ul>

                            @else
                            <ul>
                                <li><i class="fi-rs-key"></i><a href="{{route('login')}}">Log In </a>  / <a href="{{route('register')}}">register</a></li>
                            </ul>
                            @endif
                            </div>



                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="/"><img src="{{ asset('assets/img/icon-img/1653158099019_HOME ICON.png') }}" alt=""
                                width="60px" height="60px"> Home</a></li>
                            <li><a class="menu-item-has-children" href="/shop"> <img src="{{ asset('assets/img/icon-img/1652866836159_SHOP ICON.png') }}" alt=""
                                width="60px" height="70px"></a></li>
                            <li class="menu-item-has-children"><a href="https://smaster.store/"><img src="{{ asset('assets/img/icon-img/1653158120074_GROCERY ICON.png') }}" alt=""
                                width="60px" height="60px"></a></li>
                            <li class="menu-item-has-children"><a href="/live"><img src="{{ asset('assets/img/icon-img/1652866796814_LIVE ICON.png') }}" alt=""
                                width="60px" height="60px"></a></li>
                            <li class="menu-item-has-children"><a href="/ancient"> <img src="{{ asset('assets/img/icon-img/1652885571483_ANCIENT ICON.png') }}" alt=""
                                width="60px" height="60px"></a></li>
                            <li class="menu-item-has-children"><a href="/auctions"><img src="{{ asset('assets/img/icon-img/1653157948772_AUCTION ICON.png') }}" alt=""
                                width="60px" height="60px"></a></li>
                            <li class="menu-item-has-children"><a href="/realestate"> <img src="{{ asset('assets/img/icon-img/1652866802752_REAL ESTATE ICON.png') }}" alt=""
                                width="60px" height="60px"></a></li>
                            <li class="menu-item-has-children"><a href="/luxury"><img src="{{ asset('assets/img/icon-img/LUXURY ICON_new.png') }}" alt=""
                                width="60px" height="60px"></a></li>
                            <li class="menu-item-has-children"><a href="/discover"><img src="{{ asset('assets/img/icon-img/DISCOVER LOVE ICON_new.png') }}" alt=""
                                width="60px" height="60px"></a></li>
                            <li class="menu-item-has-children"><a href="/member"><img src="{{ asset('assets/img/icon-img/MEMBER ICON_new.png') }}" alt=""
                                width="60px" height="60px"></a></a></li>
                            <li class="menu-item-has-children"><a href="/smasterway"><img src="{{ asset('assets/img/icon-img/SMASTR WAY ICON_new.png') }}" alt=""
                                width="60px" height="60px"></a></li>
                            <li class="menu-item-has-children"><a href="/smasterspace"><img src="{{ asset('assets/img/icon-img/SMASTER SPACE ICON_new.png') }}" alt=""
                                width="60px" height="60px"></a></li>

                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">English (ENG)</a>
                                <ul class="dropdown">
                                    <li><a href="#">Arabic (Ar)</a></li>
                                    <li><a href="#">Chinese (Ch)</a></li>
                                    <li><a href="#">Russian (Ru)</a></li>
                                </ul>
                            </li>

                                   <li class="menu-item-has-children"><a href="#">My Account</a>
									@auth
										@if(Auth::user()->utype === 'ADM')
												<ul class="dropdown">
													<li >
														<a title="Dashboard" href="{{ route('admin.dashboard') }}">Dashboard</a>
													</li>

													<li>
														<a title="Categories" href="{{ route('admin.categories') }}">Categories</a>
													</li>

													<li>
														<a title="Products" href="{{route('admin.products')}}">All Products</a>
													</li>

													<li>
														<a title="Manage Home Slider" href="{{route('admin.homeslider')}}">Manage Home Slider</a>
													</li>

													<li>
														<a title="Manage Home Categories" href="{{route('admin.homecategories')}}"> Manage Home Categories</a>
													</li>

                                                    <li>
														<a title="Home Sales' setting" href="{{route('admin.sale')}}"> Home Sales' setting</a>
													</li>

													<li>
														<a title="All Coupons" href="{{route('admin.coupons')}}">All Coupon</a>
													</li>

													<li>
														<a title="All Orders" href="{{route('admin.orders')}}">All Orders</a>
													</li>

													<li>
														<a title="Settings" href="{{route('admin.settings')}}">Settings</a>
													</li>

													<li>
														<a title="Contact Messages" href="{{route('admin.contact')}}">Contact Messages</a>
													</li>


												</ul>
											</li>
										@else
												<ul class="dropdown"" >

													<li>
														<a title="Dashboard" href="{{ route('user.dashboard') }}">Dashboard</a>
													</li>
													<li>
														<a title="My orders" href="{{ route('user.orders') }}">My Orders</a>
													</li>
													<li>
														<a title="Change password" href="{{ route('user.changepassword') }}">Change Password</a>
													</li>
												</ul>
										@endif
							    	@endif
								</li>
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-header-info-wrap mobile-header-border">
                    <div class="single-mobile-header-info mt-30">
                        <a href="/contact"> Our location </a>
                    </div>

                </div>
                <div class="mobile-social-icon">
                    <h5 class="mb-15 text-grey-4">Follow Us</h5>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt=""></a>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg" alt=""></a>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt=""></a>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-youtube.svg" alt=""></a>
                </div>
            </div>
        </div>
    </div>




    {{$slot}}

	@livewire('footer-component')

	    <!-- Vendor JS-->
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/slick.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/images-loaded.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.vticker-min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.theia.sticky.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.elevatezoom.js') }}"></script>
    <!-- Template  JS -->
    <script src="{{ asset('assets/js/main.js?v=3.3') }}"></script>
    <script src="{{ asset('assets/js/shop.js?v=3.3') }}"></script>

	<script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
	{{-- <script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script> --}}
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('assets/js/functions.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.7.0/nouislider.min.js" integrity="sha512-jWNpWAWx86B/GZV4Qsce63q5jxx/rpWnw812vh0RE+SBIo/mmepwOSQkY2eVQnMuE28pzUEO7ux0a5sJX91g8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.tiny.cloud/1/lxpsemztk6bunxxfayq1ma7coaftgsxvtixpy45wla7aje8f/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" integrity="sha512-CryKbMe7sjSCDPl18jtJI5DR5jtkUWxPXWaLCst6QjH8wxDexfRJic2WRmRXmstr2Y8SxDDWuBO6CQC6IE4KTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js" integrity="sha512-Y+0b10RbVUTf3Mi0EgJue0FoheNzentTMMIE2OreNbqnUPNbQj8zmjK3fs5D2WhQeGWIem2G2UkKjAL/bJ/UXQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @livewireScripts

	@stack('scripts')
</body>
</html>




