<!--
    Project Name : Kala
    Date : 1/4/2023
    Author : 1. Sidharth Agarwal
             2. Atul Pratap Singh
-->
<!DOCTYPE html>
<html class="no-js" lang="en">



<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kala | The Art Platform</title>
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{url('assets/images/favicon.png')}}" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{url('assets/css/plugins.css')}}">
    <!-- Bootstap CSS -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style2.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style-prefix.css')}}">
</head>

<body class="template-index belle template-index-belle">
    <div id="pre-loader">
        <img src="assets/images/loader.gif" alt="Loading..." />
    </div>
    <div class="pageWrapper">
        <!--Search Form Drawer-->
        <div class="search">
            <div class="search__form">
                <form class="search-bar__form" action="#">
                    <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"
                            style="color: white;"></i></button>
                    <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..."
                        aria-label="Search" autocomplete="off">
                </form>
                <button type="button" class="search-trigger close-btn"><i class="anm anm-times-l"></i></button>
            </div>
        </div>
        <!--End Search Form Drawer-->
        <!--Top Header-->
        <div class="top-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-10 col-sm-8 col-md-5 col-lg-4">
                        <div class="currency-picker">
                            <span class="selected-currency">INR</span>
                            <ul id="currencies">
                                <li data-currency="INR" class="">USD</li>

                            </ul>
                        </div>
                        <div class="language-dropdown">
                            <span class="language-dd">English</span>
                            <ul id="language">
                                <li class="">Hindi</li>

                            </ul>
                        </div>
                        <p class="phone-no"><i class="anm anm-phone-s"></i> +91 8192002404</p>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
                        <div class="text-center">
                            <p class="top-header_middle-text"> Worldwide Express Shipping</p>
                        </div>
                    </div>
                    <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                        <span class="user-menu d-block d-lg-none"><i class="anm anm-user-al"
                                aria-hidden="true"></i></span>
                        <ul class="customer-links list-inline">
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Create Account</a></li>
                            <li><a href="{{url('/check-wishlist')}}">Wishlist</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End Top Header-->
        <!--Header-->
        <div class="header-wrap classicHeader animated d-flex">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!--Desktop Logo-->
                    <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                        <a href="{{url('/')}}">
                            <img src="assets/images/logo.png" alt="kala" title="kala" />
                        </a>
                    </div>
                    <!--End Desktop Logo-->
                    <div class="col-2 col-sm-3 col-md-3 col-lg-8">
                        <div class="d-block d-lg-none">
                            <button type="button"
                                class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                                <i class="icon anm anm-times-l"></i>
                                <i class="anm anm-bars-r"></i>
                            </button>
                        </div>
                        <!--Desktop Menu-->
                        <nav class="grid__item" id="AccessibleNav"><!-- for mobile -->
                            <ul id="siteNav" class="site-nav medium center hidearrow">
                                <li class="lvl1 parent megamenu"><a href="{{url('/')}}">Home <i
                                            class="anm anm-angle-down-l"></i></a>

                                </li>

                                <li class="lvl1 parent megamenu"><a href="{{url('/gallery')}}">Gallery <i
                                            class="anm anm-angle-down-l"></i></a>
                                   
                                </li>
                                <li class="lvl1 parent dropdown"><a href="{{url('/artist')}}">Artist<i
                                            class="anm anm-angle-down-l"></i></a>
                                   
                                </li>
                                <li class="lvl1 parent dropdown"><a href="{{url('/about')}}">About Us <i
                                            class="anm anm-angle-down-l"></i></a>

                                </li>
                                <li class="lvl1"><a href="{{url('/contact')}}">Contact Us <i class="anm anm-angle-down-l"></i></a></li>
                            </ul>
                        </nav>
                        <!--End Desktop Menu-->
                    </div>
                    <!--Mobile Logo-->
                    <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                        <div class="logo">
                            <a href="{{url('/')}}">
                                <img src="assets/images" alt="kala"
                                    title="kala" />
                            </a>
                        </div>
                    </div>
                    <!--Mobile Logo-->
                    <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                        <div class="site-cart">
                            <a href="#;" class="site-header__cart" title="Cart">
                                <i class="icon anm anm-bag-l"></i>
                                <span id="CartCount" class="site-header__cart-count"
                                    data-cart-render="item_count">2</span>
                            </a>
                            <!--Minicart Popup-->
                            <div id="header-cart" class="block block-cart">
                                <ul class="mini-products-list">
                                    <li class="item">
                                        <a class="product-image" href="#">
                                            <img src="assets/images/collection/paint2.jpg"
                                                alt="" title="" />
                                        </a>
                                        <div class="product-details">
                                            <a href="#" class="remove"><i class="anm anm-times-l"
                                                    aria-hidden="true"></i></a>
                                            <a href="#" class="edit-i remove"><i class="anm anm-edit"
                                                    aria-hidden="true"></i></a>
                                            <a class="pName" href="{{url('/cart')}}">Painting 1</a>
                                            <div class="variant-cart">By Atul Pratap Singh</div>
                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <span class="label">Qty:</span>
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i
                                                            class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                    <input type="text" id="Quantity" name="quantity" value="1"
                                                        class="product-form__input qty">
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i
                                                            class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="priceRow">
                                                <div class="product-price">
                                                    <span class="money">₹59.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a class="product-image" href="#">
                                            <img src="assets/images/collection/paint6.jpg"
                                                alt="" title="" />
                                        </a>
                                        <div class="product-details">
                                            <a href="#" class="remove"><i class="anm anm-times-l"
                                                    aria-hidden="true"></i></a>
                                            <a href="#" class="edit-i remove"><i class="anm anm-edit"
                                                    aria-hidden="true"></i></a>
                                            <a class="pName" href="{{url('/cart')}}">Painting 2</a>
                                            <div class="variant-cart">By Sidharth Agarwal</div>
                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <span class="label">Qty:</span>
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i
                                                            class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                    <input type="text" id="Quantity" name="quantity" value="1"
                                                        class="product-form__input qty">
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i
                                                            class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="priceRow">
                                                <div class="product-price">
                                                    <span class="money">₹99.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="total">
                                    <div class="total-in">
                                        <span class="label">Cart Subtotal:</span><span class="product-price"><span
                                                class="money">₹748.00</span></span>
                                    </div>
                                    <div class="buttonSet text-center">
                                        <a href="{{url('/cart')}}" class="btn btn-secondary btn--small">View Cart</a>
                                        <a href="{{url('/check-wishlist')}}" class="btn btn-secondary btn--small">Checkout</a>
                                    </div>
                                </div>
                            </div>
                            <!--EndMinicart Popup-->
                        </div>
                        <div class="site-header__search">
                            <button type="button" class="search-trigger"><i class="icon anm anm-search-l"
                                    style="color: white;"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header-->
        <!--Mobile Menu-->
        <div class="mobile-nav-wrapper" role="navigation">
            <div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div>
            <ul id="MobileNav" class="mobile-nav">
                <li class="lvl1 parent megamenu"><a href="{{url('/')}}">Home </a>

                </li>
                <li class="lvl1 parent megamenu"><a href="{{url('/gallery')}}">Gallery </a>

                </li>
                <li class="lvl1 parent megamenu"><a href="{{url('/artist')}}">Artist</a>

                </li>
                <li class="lvl1 parent megamenu"><a href="{{url('/about')}}">About Us</a>

                </li>
                <li class="lvl1 parent megamenu"><a href="{{url('/contact')}}">Contact Us </a>

                </li>
                <li class="lvl1"><a href="#"><b>Explore More!</b></a>
                </li>
            </ul>
        </div>
        <!--End Mobile Menu-->

        <!--Body Content-->
        <div id="page-content">
            <!--Home slider-->
            <div class="slideshow slideshow-wrapper pb-section sliderFull">
                <div class="home-slideshow">
                    <div class="slide">
                        <div class="blur-up lazyload bg-size">
                            <img class="blur-up lazyload bg-img" src="assets/images/slideshow-banners/banner.jpg"
                                alt="" title="" />
                            <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                                <div class="slideshow__text-content bottom">
                                    <div class="wrap-caption center">
                                        <h2 class="h1 mega-title slideshow__title">“Creativity takes <br>courage”</h2>

                                        <span class="btn">Explore More</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="store-feature section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <ul class="display-table store-info">
                                <li class="display-table-cell">
                                   
                                    <h5>Free Shipping &amp; Return</h5>
                                    <span class="sub-text">Free shipping on all US orders</span>
                                </li>
                                <li class="display-table-cell">
                                   
                                    <h5>Money Guarantee</h5>
                                    <span class="sub-text">30 days money back guarantee</span>
                                </li>
                                <li class="display-table-cell">
                                   
                                    <h5>Online Support</h5>
                                    <span class="sub-text">We support online 24/7 on day</span>
                                </li>
                                <li class="display-table-cell">
                                    
                                    <h5>Secure Payments</h5>
                                    <span class="sub-text">All payment are Secured and trusted.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
          
            <div class="product-rows section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="section-header text-center">
                                <h2 class="h21">Gallery</h2>

                                <hr>
                                
                            </div>
                        </div>
                    </div>
                    <div class="grid-products rounded">
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2 ">
                                <div class="grid-view_image">
                                    <!-- start product image -->
                                    <a href="{{url('/product')}}" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="grid-view-item__image primary blur-up lazyload"
                                            
                                            src="assets/images/collection/paint2.jpg" alt="image"
                                            title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="grid-view-item__image hover blur-up lazyload"
                                           
                                            src="assets/images/collection/paint2.jpg" alt="image"
                                            title="product">
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span>
                                            <span class="lbl pr-label1">new</span>
                                        </div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details hoverDetails text-center mobile">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="{{url('/product')}}">Painting 1</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            
                                            <span class="price">₹600.00</span>
                                        </div>
                                        <!-- End product price -->
    
                                        <!-- product button -->
                                        <div class="button-set">
                                            <a href="javascript:void(0)" title="Quick View"
                                                class="quick-view-popup quick-view" data-toggle="modal"
                                                data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-r"></i>
                                            </a>
                                            <!-- Start product button -->
                                            <form class="variants add" action="#" onclick="window.location.href='{{url('/cart')}}'"
                                                method="post">
                                                <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i
                                                        class="icon anm anm-bag-l"></i></button>
                                            </form>
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="{{url('/check-wishlist')}}">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                            <div class="compare-btn">
                                                <a class="compare add-to-compare" href="#"
                                                    title="Add to Compare">
                                                    <i class="icon anm anm-random-r"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- end product button -->
                                    </div>
                                    <!-- Variant -->
                                    
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">
                                <div class="grid-view_image">
                                    <!-- start product image -->
                                    <a href="{{url('/product')}}" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="grid-view-item__image primary blur-up lazyload"
                                           
                                            src="assets/images/collection/paint2.jpg" alt="image"
                                            title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="grid-view-item__image hover blur-up lazyload"
                                        
                                            src="assets/images/collection/paint2.jpg" alt="image"
                                            title="product">
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span>
                                            <span class="lbl pr-label1">new</span>
                                        </div>
                                        <!-- End product label -->
                                    </a>
                                  
                                    <div class="product-details hoverDetails text-center mobile">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="{{url('/product')}}">painting 2</a>
                                        </div>
                                        
                                        <div class="product-price">
                                            <span class="price">₹748.00</span>
                                        </div>
                                        <!-- product button -->
                                        <div class="button-set">
                                            <a href="javascript:void(0)" title="Quick View"
                                                class="quick-view-popup quick-view" data-toggle="modal"
                                                data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-r"></i>
                                            </a>
                                            <!-- Start product button -->
                                            <form class="variants add" action="#" onclick="window.location.href='{{url('/cart')}}'"
                                                method="post">
                                                <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i
                                                        class="icon anm anm-bag-l"></i></button>
                                            </form>
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="{{url('/check-wishlist')}}">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                            <div class="compare-btn">
                                                <a class="compare add-to-compare" href="compare.html"
                                                    title="Add to Compare">
                                                    <i class="icon anm anm-random-r"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- end product button -->
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">
                                <div class="grid-view_image">
                                    <!-- start product image -->
                                    <a href="{{url('/product')}}" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="grid-view-item__image primary blur-up lazyload"
                                            
                                            src="assets/images/collection/paint2.jpg" alt="image"
                                            title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="grid-view-item__image hover blur-up lazyload"
                                            
                                            src="assets/images/collection/paint2.jpg" alt="image"
                                            title="product">
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span>
                                            <span class="lbl pr-label1">new</span>
                                        </div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details hoverDetails text-center mobile">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="{{url('/product')}}">Painting 3</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">₹550.00</span>
                                        </div>
                                        <!-- product button -->
                                        <div class="button-set">
                                            <a href="javascript:void(0)" title="Quick View"
                                                class="quick-view-popup quick-view" data-toggle="modal"
                                                data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-r"></i>
                                            </a>
                                            <!-- Start product button -->
                                            <form class="variants add" action="#" onclick="window.location.href='{{url('/cart')}}'"
                                                method="post">
                                                <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i
                                                        class="icon anm anm-bag-l"></i></button>
                                            </form>
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="{{url('/check-wishlist')}}">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                            <div class="compare-btn">
                                                <a class="compare add-to-compare" href="compare.html"
                                                    title="Add to Compare">
                                                    <i class="icon anm anm-random-r"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- end product button -->
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">
                                <div class="grid-view_image">
                                    <!-- start product image -->
                                    <a href="{{url('/product')}}" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="grid-view-item__image primary blur-up lazyload"
                                           
                                            src="assets/images/collection/paint2.jpg" alt="image"
                                            title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="grid-view-item__image hover blur-up lazyload"
                                           
                                            src="assets/images/collection/paint2.jpg" alt="image"
                                            title="product">
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details hoverDetails text-center mobile">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="{{url('/product')}}">Painting 4</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            
                                            <span class="price">₹788.00</span>
                                        </div>
                                        <!-- product button -->
                                        <div class="button-set">
                                            <a href="javascript:void(0)" title="Quick View"
                                                class="quick-view-popup quick-view" data-toggle="modal"
                                                data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-r"></i>
                                            </a>
                                            <!-- Start product button -->
                                            <form class="variants add" action="#" onclick="window.location.href='{{url('/cart')}}'"
                                                method="post">
                                                <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i
                                                        class="icon anm anm-bag-l"></i></button>
                                            </form>
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="{{url('/check-wishlist')}}">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                            <div class="compare-btn">
                                                <a class="compare add-to-compare" href="compare.html"
                                                    title="Add to Compare">
                                                    <i class="icon anm anm-random-r"></i>
                                                </a>
                                            </div>
                                        </div>
                                    
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">
                                <div class="grid-view_image">
                                   
                                    <a href="{{url('/product')}}" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="grid-view-item__image primary blur-up lazyload"
                                           
                                            src="assets/images/collection/paint2.jpg" alt="image"
                                            title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="grid-view-item__image hover blur-up lazyload"
                                            
                                            src="assets/images/collection/paint2.jpg" alt="image"
                                            title="product">
                                      
                                        <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details hoverDetails text-center mobile">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="{{url('/product')}}">Painting 5</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            
                                            <span class="price">₹788.00</span>
                                        </div>
                                        <!-- product button -->
                                        <div class="button-set">
                                            <a href="javascript:void(0)" title="Quick View"
                                                class="quick-view-popup quick-view" data-toggle="modal"
                                                data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-r"></i>
                                            </a>
                                            <!-- Start product button -->
                                            <form class="variants add" action="#" onclick="window.location.href='{{url('/cart')}}'"
                                                method="post">
                                                <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i
                                                        class="icon anm anm-bag-l"></i></button>
                                            </form>
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="{{url('/check-wishlist')}}">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                            <div class="compare-btn">
                                                <a class="compare add-to-compare" href="compare.html"
                                                    title="Add to Compare">
                                                    <i class="icon anm anm-random-r"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- end product button -->
                                    </div>
                                    <!-- Variant -->
                                    
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">
                                <div class="grid-view_image">
                                    <!-- start product image -->
                                    <a href="{{url('/product')}}" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="grid-view-item__image primary blur-up lazyload"
                                            
                                            src="assets/images/collection/paint2.jpg" alt="image"
                                            title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="grid-view-item__image hover blur-up lazyload"
                                           
                                            src="assets/images/collection/paint2.jpg" alt="image"
                                            title="product">
                                        <!-- End hover image -->
                                    </a>
                               
                                    <div class="product-details hoverDetails text-center mobile">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="{{url('/product')}}">Painting 6</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">₹420.00</span>
                                        </div>
                                        <!-- product button -->
                                        <div class="button-set">
                                            <a href="javascript:void(0)" title="Quick View"
                                                class="quick-view-popup quick-view" data-toggle="modal"
                                                data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-r"></i>
                                            </a>
                                            <!-- Start product button -->
                                            <form class="variants add" action="#" onclick="window.location.href='{{url('/cart')}}'"
                                                method="post">
                                                <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i
                                                        class="icon anm anm-bag-l"></i></button>
                                            </form>
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="{{url('/check-wishlist')}}">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                            <div class="compare-btn">
                                                <a class="compare add-to-compare" href="compare.html"
                                                    title="Add to Compare">
                                                    <i class="icon anm anm-random-r"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- end product button -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr style="width: 92%; margin-left:50px; ">
            
            <!---Artist Section-->
            <div class="product-rows section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="section-header text-center">
                                <h2 class="h21">Artists</h2>

                                <hr>
                                
                            </div>
                        </div>
                    </div>
                    <div class="grid-products">
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">
                                <div class="grid-view_image">
                                    <!-- start product image -->
                                    <a href="{{url('/product')}}" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="grid-view-item__image primary blur-up lazyload"
                                            
                                            src="assets/images/collection/paint5.jpg" alt="image"
                                            title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="grid-view-item__image hover blur-up lazyload"
                                           
                                            src="assets/images/collection/paint5.jpg" alt="image"
                                            title="product">
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span>
                                            <span class="lbl pr-label1">new</span>
                                        </div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details hoverDetails text-center mobile">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="{{url('/product')}}">Painting 1</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            
                                            <span class="price">₹600.00</span>
                                        </div>
                                        <!-- End product price -->
    
                                        <!-- product button -->
                                        <div class="button-set">
                                            <a href="javascript:void(0)" title="Quick View"
                                                class="quick-view-popup quick-view" data-toggle="modal"
                                                data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-r"></i>
                                            </a>
                                            <!-- Start product button -->
                                            <form class="variants add" action="#" onclick="window.location.href='{{url('/cart')}}'"
                                                method="post">
                                                <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i
                                                        class="icon anm anm-bag-l"></i></button>
                                            </form>
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="{{url('/check-wishlist')}}">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                            <div class="compare-btn">
                                                <a class="compare add-to-compare" href=""
                                                    title="Add to Compare">
                                                    <i class="icon anm anm-random-r"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- end product button -->
                                    </div>
                                    <!-- Variant -->
                                    
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">
                                <div class="grid-view_image">
                                    <!-- start product image -->
                                    <a href="{{url('/product')}}" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="grid-view-item__image primary blur-up lazyload"
                                           
                                            src="assets/images/collection/paint5.jpg" alt="image"
                                            title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="grid-view-item__image hover blur-up lazyload"
                                        
                                            src="assets/images/collection/paint5.jpg" alt="image"
                                            title="product">
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span>
                                            <span class="lbl pr-label1">new</span>
                                        </div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details hoverDetails text-center mobile">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="{{url('/product')}}">painting 2</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">₹748.00</span>
                                        </div>
                                        <!-- product button -->
                                        <div class="button-set">
                                            <a href="javascript:void(0)" title="Quick View"
                                                class="quick-view-popup quick-view" data-toggle="modal"
                                                data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-r"></i>
                                            </a>
                                            <!-- Start product button -->
                                            <form class="variants add" action="#" onclick="window.location.href='{{url('/cart')}}'"
                                                method="post">
                                                <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i
                                                        class="icon anm anm-bag-l"></i></button>
                                            </form>
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="{{url('/check-wishlist')}}">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                            <div class="compare-btn">
                                                <a class="compare add-to-compare" href=""
                                                    title="Add to Compare">
                                                    <i class="icon anm anm-random-r"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- end product button -->
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">
                                <div class="grid-view_image">
                                    <!-- start product image -->
                                    <a href="{{url('/product')}}" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="grid-view-item__image primary blur-up lazyload"
                                            
                                            src="assets/images/collection/paint5.jpg" alt="image"
                                            title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="grid-view-item__image hover blur-up lazyload"
                                            
                                            src="assets/images/collection/paint5.jpg" alt="image"
                                            title="product">
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span>
                                            <span class="lbl pr-label1">new</span>
                                        </div>
                                        <!-- End product label -->
                                    </a>
                                   
                                    <div class="product-details hoverDetails text-center mobile">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="{{url('/product')}}">Painting 3</a>
                                        </div>
                                        
                                        <div class="product-price">
                                            <span class="price">₹550.00</span>
                                        </div>
                                        <!-- product button -->
                                        <div class="button-set">
                                            <a href="javascript:void(0)" title="Quick View"
                                                class="quick-view-popup quick-view" data-toggle="modal"
                                                data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-r"></i>
                                            </a>
                                            <!-- Start product button -->
                                            <form class="variants add" action="#" onclick="window.location.href='{{url('/cart')}}'"
                                                method="post">
                                                <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i
                                                        class="icon anm anm-bag-l"></i></button>
                                            </form>
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="{{url('/check-wishlist')}}">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                            <div class="compare-btn">"
                                                    title="Add to Compare">
                                                    <i class="icon anm anm-random-r"></i>
                                                </a>
                                            </div>
                                        </div>
                                
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">
                                <div class="grid-view_image">
                                    <!-- start product image -->
                                    <a href="{{url('/product')}}" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="grid-view-item__image primary blur-up lazyload"
                                           
                                            src="assets/images/collection/paint5.jpg" alt="image"
                                            title="product">
                                        
                                        <img class="grid-view-item__image hover blur-up lazyload"
                                           
                                            src="assets/images/collection/paint5.jpg" alt="image"
                                            title="product">
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                        <!-- End product label -->
                                    </a>
                                   >
                                    <div class="product-details hoverDetails text-center mobile">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="{{url('/product')}}">Painting 4</a>
                                        </div>
                                       
                                        <div class="product-price">
                                            
                                            <span class="price">₹788.00</span>
                                        </div>
                                        <!-- product button -->
                                        <div class="button-set">
                                            <a href="javascript:void(0)" title="Quick View"
                                                class="quick-view-popup quick-view" data-toggle="modal"
                                                data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-r"></i>
                                            </a>
                                            <!-- Start product button -->
                                            <form class="variants add" action="#" onclick="window.location.href='{{url('/cart')}}'"
                                                method="post">
                                                <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i
                                                        class="icon anm anm-bag-l"></i></button>
                                            </form>
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="{{url('/check-wishlist')}}">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                            <div class="compare-btn">
                                                <a class="compare add-to-compare" href=""
                                                    title="Add to Compare">
                                                    <i class="icon anm anm-random-r"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- end product button -->
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">
                                <div class="grid-view_image">
                                    <!-- start product image -->
                                    <a href="{{url('/product')}}" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="grid-view-item__image primary blur-up lazyload"
                                           
                                            src="assets/images/collection/paint5.jpg" alt="image"
                                            title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="grid-view-item__image hover blur-up lazyload"
                                           
                                            src="assets/images/collection/paint5.jpg" alt="image"
                                            title="product">
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details hoverDetails text-center mobile">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="{{url('/product')}}">Painting 5</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            
                                            <span class="price">₹788.00</span>
                                        </div>
                                        <!-- product button -->
                                        <div class="button-set">
                                            <a href="javascript:void(0)" title="Quick View"
                                                class="quick-view-popup quick-view" data-toggle="modal"
                                                data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-r"></i>
                                            </a>
                                            <!-- Start product button -->
                                            <form class="variants add" action="#" onclick="window.location.href='{{url('/cart')}}'"
                                                method="post">
                                                <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i
                                                        class="icon anm anm-bag-l"></i></button>
                                            </form>
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="{{url('/check-wishlist')}}">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                            <div class="compare-btn">
                                                <a class="compare add-to-compare" href="compare.html"
                                                    title="Add to Compare">
                                                    <i class="icon anm anm-random-r"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- end product button -->
                                    </div>
                                    <!-- Variant -->
                                    
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">
                                <div class="grid-view_image">
                                    <!-- start product image -->
                                    <a href="{{url('/product')}}" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="grid-view-item__image primary blur-up lazyload"
                                            
                                            src="assets/images/collection/paint5.jpg" alt="image"
                                            title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="grid-view-item__image hover blur-up lazyload"
                                           
                                            src="assets/images/collection/paint5.jpg" alt="image"
                                            title="product">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details hoverDetails text-center mobile">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="{{url('/product')}}">Painting 6</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">₹420.00</span>
                                        </div>
                                        <!-- product button -->
                                        <div class="button-set">
                                            <a href="javascript:void(0)" title="Quick View"
                                                class="quick-view-popup quick-view" data-toggle="modal"
                                                data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-r"></i>
                                            </a>
                                            <!-- Start product button -->
                                            <form class="variants add" action="#" onclick="window.location.href='{{url('/cart')}}'"
                                                method="post">
                                                <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i
                                                        class="icon anm anm-bag-l"></i></button>
                                            </form>
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="{{url('/check-wishlist')}}">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                            <div class="compare-btn">
                                                <a class="compare add-to-compare" href="compare.html"
                                                    title="Add to Compare">
                                                    <i class="icon anm anm-random-r"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- end product button -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Collection Tab slider-->

        <!--Collection Box slider-->
       
        <!--Logo Slider-->
        <div class="product-featured">

            <h2 class="title">Picture of the day</h2>

            <div class="showcase-wrapper has-scrollbar">

              <div class="showcase-container">

                <div class="showcase">
                  
                  <div class="showcase-banner">
                    <img src="./assets/images/collection/paint2.jpg" alt="shampoo, conditioner & facewash packs" class="showcase-img">
                  </div>

                  <div class="showcase-content">
                    
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <a href="#">
                      <h3 class="showcase-title">shampoo, conditioner & facewash packs</h3>
                    </a>

                    <p class="showcase-desc">
                      Lorem ipsum dolor sit amet consectetur Lorem ipsum
                      dolor dolor sit amet consectetur Lorem ipsum dolor
                    </p>

                    <div class="price-box">
                      <p class="price">₹150.00</p>

                      <del>₹200.00</del>
                    </div>

                    <button class="add-cart-btn">add to cart</button>

                    <div class="showcase-status">
                      <div class="wrapper">
                        <p>
                          already sold: <b>20</b>
                        </p>

                        <p>
                          available: <b>40</b>
                        </p>
                      </div>

                      <div class="showcase-status-bar"></div>
                    </div>

                    <div class="countdown-box">

                      <p class="countdown-desc">
                        Hurry Up! Offer ends in:
                      </p>

                      <div class="countdown">

                        <div class="countdown-content">

                          <p class="display-number">360</p>

                          <p class="display-text">Days</p>

                        </div>

                        <div class="countdown-content">
                          <p class="display-number">24</p>
                          <p class="display-text">Hours</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">59</p>
                          <p class="display-text">Min</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">00</p>
                          <p class="display-text">Sec</p>
                        </div>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

            

            </div>

          </div>

        <!--End Logo Slider-->

        <!--Featured Product-->
        
        <!--End Featured Product-->

        <!--Latest Blog-->
        <div class="latest-blog section pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                            <h2 class="h2">About Us</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="wrap-blog">
                            <a href="#" class="article__grid-image">
                                <img src="assets/images/collection/paint5.jpg" alt="about us"
                                    title="It's all about how you wear" class="blur-up lazyloaded" />
                            </a>
                            <div class="article__grid-meta article__grid-meta--has-image">
                                <div class="wrap-blog-inner">
                                    <h2 class="h3 article__title">
                                        <a href="#">It's all about how you wear</a>
                                    </h2>
                                    <span class="article__date">May 02, 2017</span>
                                    <div class="rte article__grid-excerpt">
                                        I must explain to you how all this mistaken idea of denouncing pleasure and
                                        praising pain was born and I will give you a complete account...
                                    </div>
                                    <ul class="list--inline article__meta-buttons">
                                        <li><a href="blog-article.html">Read more</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="wrap-blog">
                            <a href="blog-left-sidebar.html" class="article__grid-image">
                                <img src="assets/images/collection/paint3.jpg" alt="painting4"
                                    title="painting 4" class="blur-up lazyloaded" />
                            </a>
                            <div class="article__grid-meta article__grid-meta--has-image">
                                <div class="wrap-blog-inner">
                                    <h2 class="h3 article__title">
                                        <a href="blog-right-sidebar.html">27 Days of Spring Fashion Recap</a>
                                    </h2>
                                    <span class="article__date">May 02, 2017</span>
                                    <div class="rte article__grid-excerpt">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab...
                                    </div>
                                    <ul class="list--inline article__meta-buttons">
                                        <li><a href="blog-article.html">Read more</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Latest Blog-->

        <!--Store Feature-->
        
        <!--End Store Feature-->
    </div>
    <!--End Body Content-->

    <!--Footer-->
    <footer id="footer">
        <div class="newsletter-section">
            <div class="container">
                <div class="row">
                    <div
                        class="col-12 col-sm-12 col-md-12 col-lg-7 w-100 d-flex justify-content-start align-items-center">
                        <div class="display-table">
                            <div class="display-table-cell footer-newsletter">
                                <div class="section-header text-center">
                                    <label class="h2"><span>sign up for </span>more updates</label>
                                </div>
                                <form action="#" method="post">
                                    <div class="input-group">
                                        <input type="email" class="input-group__field newsletter__input" name="EMAIL"
                                            value="" placeholder="Email address" required="">
                                        <span class="input-group__btn">
                                            <button type="submit" class="btn newsletter__submit" name="commit"
                                                id="Subscribe"><span
                                                    class="newsletter__submit-text--large">Subscribe</span></button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-5 d-flex justify-content-end align-items-center">
                        <div class="footer-social">
                            <ul class="list--inline site-footer__social-icons social-icons">
                                <li><a class="social-icons__link" href="#" target="_blank"
                                        title="Belle Multipurpose Bootstrap 4 Template on Facebook"><i
                                            class="icon icon-facebook"></i></a></li>
                                <li><a class="social-icons__link" href="#" target="_blank"
                                        title="Belle Multipurpose Bootstrap 4 Template on Twitter"><i
                                            class="icon icon-twitter"></i> <span
                                            class="icon__fallback-text">Twitter</span></a></li>
                                <li><a class="social-icons__link" href="#" target="_blank"
                                        title="Belle Multipurpose Bootstrap 4 Template on Pinterest"><i
                                            class="icon icon-pinterest"></i> <span
                                            class="icon__fallback-text">Pinterest</span></a></li>
                                <li><a class="social-icons__link" href="#" target="_blank"
                                        title="Belle Multipurpose Bootstrap 4 Template on Instagram"><i
                                            class="icon icon-instagram"></i> <span
                                            class="icon__fallback-text">Instagram</span></a></li>
                                <li><a class="social-icons__link" href="#" target="_blank"
                                        title="Belle Multipurpose Bootstrap 4 Template on Tumblr"><i
                                            class="icon icon-tumblr-alt"></i> <span
                                            class="icon__fallback-text">Tumblr</span></a></li>
                                <li><a class="social-icons__link" href="#" target="_blank"
                                        title="Belle Multipurpose Bootstrap 4 Template on YouTube"><i
                                            class="icon icon-youtube"></i> <span
                                            class="icon__fallback-text">YouTube</span></a></li>
                                <li><a class="social-icons__link" href="#" target="_blank"
                                        title="Belle Multipurpose Bootstrap 4 Template on Vimeo"><i
                                            class="icon icon-vimeo-alt"></i> <span
                                            class="icon__fallback-text">Vimeo</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer">
            <div class="container">
                <!--Footer Links-->
                <div class="footer-top">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                            <h4 class="h4">Quick Shop</h4>
                            <ul>
                                <li><a href="#">Women</a></li>
                                <li><a href="#">Men</a></li>
                                <li><a href="#">Kids</a></li>
                                <li><a href="#">Sportswear</a></li>
                                <li><a href="#">Sale</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                            <h4 class="h4">Informations</h4>
                            <ul>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">Terms &amp; condition</a></li>
                                <li><a href="#">My Account</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                            <h4 class="h4">Customer Services</h4>
                            <ul>
                                <li><a href="#">Request Personal Data</a></li>
                                <li><a href="#">FAQ's</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Orders and Returns</a></li>
                                <li><a href="#">Support Center</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box">
                            <h4 class="h4">Contact Us</h4>
                            <ul class="addressFooter">
                                <li><i class="icon anm anm-map-marker-al"></i>
                                    <p>55 Gallaxy Enque,<br>2568 steet, 23568 NY</p>
                                </li>
                                <li class="phone"><i class="icon anm anm-phone-s"></i>
                                    <p>(440) 000 000 0000</p>
                                </li>
                                <li class="email"><i class="icon anm anm-envelope-l"></i>
                                    <p>sales@yousite.com</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Footer Links-->
                <hr>
                <div class="footer-bottom">
                    <div class="row">
                        <!--Footer Copyright-->
                        <div
                            class="col-12 col-sm-12 col-md-6 col-lg-6 order-1 order-md-0 order-lg-0 order-sm-1 copyright text-sm-center text-md-left text-lg-left">
                            <span></span> <a href="templateshub.net">Developed by Brainy Fools Teams</a>
                        </div>
                        <!--End Footer Copyright-->
                        <!--Footer Payment Icon-->
                        <div
                            class="col-12 col-sm-12 col-md-6 col-lg-6 order-0 order-md-1 order-lg-1 order-sm-0 payment-icons text-right text-md-center">
                            <ul class="payment-icons list--inline">
                                <li><i class="icon fa fa-cc-visa" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-cc-mastercard" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-cc-discover" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-cc-paypal" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-cc-amex" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-credit-card" aria-hidden="true"></i></li>
                            </ul>
                        </div>
                        <!--End Footer Payment Icon-->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End Footer-->
    <!--Scoll Top-->
    <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
    <!--End Scoll Top-->

   
    

    <!-- Including Jquery -->
    <script src="{{url('assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/jquery.cookie.js')}}"></script>
    <script src="{{url('assets/js/vendor/wow.min.js')}}"></script>
    <!-- Including Javascript -->
    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/js/plugins.js')}}"></script>
    <script src="{{url('assets/js/popper.min.js')}}"></script>
    <script src="{{url('assets/js/lazysizes.js')}}"></script>
    <script src="{{url('assets/js/main.js')}}"></script>
    <!--For Newsletter Popup-->
   
    </div>
</body>



</html>