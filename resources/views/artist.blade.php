<!DOCTYPE html>
<html class="no-js" lang="en">



<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Artist | Kala</title>
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{url('assets/images/favicon.png')}}" />
    <link rel="apple-touch-icon" href="{{url('assets/images/apple-touch-icon-57x57.png')}}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{url('assets/images/apple-touch-icon-72x72.png')}}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{url('assets/images/apple-touch-icon-114x114.png')}}" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{url('assets/css/plugins.css')}}">
    <!-- Bootstap CSS -->
    
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/responsive.css')}}">
</head>
<body class="template-collection belle">
<div class="pageWrapper">
	<!--Search Form Drawer-->
	<div class="search">
        <div class="search__form">
            <form class="search-bar__form" action="#">
                <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..."
                    aria-label="Search" autocomplete="off">
            </form>
            <button type="button" class="search-trigger close-btn"><i class="icon anm anm-times-l"></i></button>
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
                        <li><a href="wishlist.html">Wishlist</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End Top Header-->
    <!--Header-->
    <div class="header-wrap animated d-flex">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!--Desktop Logo-->
                <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                    <a href="{{url('/')}}">
                        <img src="assets/images" alt="kala"
                            title="kala" />
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
                            <img src="assets/images/" alt="kala"
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
                                            alt="paint2" title="" />
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
                                            alt="Elastic Waist Dress - Black / Small" title="" />
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
                                    <a href="checkout.html" class="btn btn-secondary btn--small">Checkout</a>
                                </div>
                            </div>
                        </div>
                        <!--EndMinicart Popup-->
                    </div>
                    <div class="site-header__search">
                        <button type="button" class="search-trigger"><i class="icon anm anm-search-l"
                                style="color: rgb(0, 255, 21);"></i></button>
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
            <li class="lvl1 parent megamenu"><a href="about-us.html">About Us</a>

            </li>
            <li class="lvl1 parent megamenu"><a href="{{url('/contact')}}">Contact Us </a>

            </li>
            <li class="lvl1"><a href="#"><b>Explore More!</b></a>
            </li>
        </ul>
    </div>
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
    	<!--Collection Banner-->
    	<div class="collection-header">
			<div class="collection-hero">
        		<div class="collection-hero__image"><img data-src="assets/images/cat-women3.jpg" src="assets/images/cat-women3.jpg" alt="Women" title="Women" /></div>
        		<div class="collection-hero__title-wrapper"><h1 class="collection-hero__title page-width">Welcome to Kala Artist Showcase</h1></div>
      		</div>
		</div>
        <!--End Collection Banner-->
        
        <div class="container">
        	<div class="row">
            	<!--Sidebar-->
            	<div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">
                	<div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
                	<div class="sidebar_tags">
                    	<!--Categories-->
                    	<div class="sidebar_widget categories filter-widget">
                            <div class="widget-title"><h2>Various Categories</h2></div>
                            <div class="widget-content">
                                <ul class="sidebar_categories">
                                    
                                    <li class="level1 sub-level"><a href="#;" class="site-nav">Painting Types</a>
                                    	<ul class="sublinks">
                                        	<li class="level2"><a href="#;" class="site-nav">Oil</a></li>
                                            <li class="level2"><a href="#;" class="site-nav">Watercolour</a></li>
                                            <li class="level2"><a href="#;" class="site-nav">Gouache</a></li>
                                            <li class="level2"><a href="#;" class="site-nav">Pastel</a></li>
                                            <li class="level2"><a href="#;" class="site-nav">Encoustic</a></li>
                                            <li class="level2"><a href="#;" class="site-nav">Fresco</a></li>
                                        </ul>
                                    </li>
                                    <li class="lvl-1"><a href="#;" class="site-nav">Shoes</a></li>
                                    <li class="lvl-1"><a href="#;" class="site-nav">Accessories</a></li>
                                    <li class="lvl-1"><a href="#;" class="site-nav">Collections</a></li>
                                    <li class="lvl-1"><a href="#;" class="site-nav">Sale</a></li>
                                    <li class="lvl-1"><a href="#;" class="site-nav">Page</a></li>
                                </ul>
                            </div>
                        </div>
                      
						<div class="sidebar_widget">
                        	<div class="widget-title"><h2>Popular Painting</h2></div>
							<div class="widget-content">
                                <div class="list list-sidebar-products">
                                  <div class="grid">
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image">
                                            <a class="grid-view-item__link" href="#">
                                                <img class="grid-view-item__image" src="assets/images/product-images/mini-product-img.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="details"> <a class="grid-view-item__title" href="#">Cena Skirt</a>
                                          <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$173.60</span></span></div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="assets/images/product-images/mini-product-img1.jpg" alt="" /></a> </div>
                                        <div class="details"> <a class="grid-view-item__title" href="#">Block Button Up</a>
                                          <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$378.00</span></span></div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="assets/images/product-images/mini-product-img2.jpg" alt="" /></a> </div>
                                        <div class="details"> <a class="grid-view-item__title" href="#">Balda Button Pant</a>
                                          <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$278.60</span></span></div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="assets/images/product-images/mini-product-img3.jpg" alt="" /></a> </div>
                                        <div class="details"> <a class="grid-view-item__title" href="#">Border Dress in Black/Silver</a>
                                          <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$228.00</span></span></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                          	</div>
						</div>
                       
                        {{-- <div class="sidebar_widget">
                          <div class="widget-title">
                            <h2>Product Tags</h2>
                          </div>
                          <div class="widget-content">
                            <ul class="product-tags">
                              <li><a href="#" title="Show products matching tag $100 - $400">$100 - $400</a></li>
                              <li><a href="#" title="Show products matching tag $400 - $600">$400 - $600</a></li>
                              <li><a href="#" title="Show products matching tag $600 - $800">$600 - $800</a></li>
                              <li><a href="#" title="Show products matching tag Above $800">Above $800</a></li>
                              <li><a href="#" title="Show products matching tag Allen Vela">Allen Vela</a></li>
                              <li><a href="#" title="Show products matching tag Black">Black</a></li>
                              <li><a href="#" title="Show products matching tag Blue">Blue</a></li>
                              <li><a href="#" title="Show products matching tag Cantitate">Cantitate</a></li>
                              <li><a href="#" title="Show products matching tag Famiza">Famiza</a></li>
                              <li><a href="#" title="Show products matching tag Gray">Gray</a></li>
                              <li><a href="#" title="Show products matching tag Green">Green</a></li>
                              <li><a href="#" title="Show products matching tag Hot">Hot</a></li>
                              <li><a href="#" title="Show products matching tag jean shop">jean shop</a></li>
                              <li><a href="#" title="Show products matching tag jesse kamm">jesse kamm</a></li>
                              <li><a href="#" title="Show products matching tag L">L</a></li>
                              <li><a href="#" title="Show products matching tag Lardini">Lardini</a></li>
                              <li><a href="#" title="Show products matching tag lareida">lareida</a></li>
                              <li><a href="#" title="Show products matching tag Lirisla">Lirisla</a></li>
                              <li><a href="#" title="Show products matching tag M">M</a></li>
                              <li><a href="#" title="Show products matching tag mini-dress">mini-dress</a></li>
                              <li><a href="#" title="Show products matching tag Monark">Monark</a></li>
                              <li><a href="#" title="Show products matching tag Navy">Navy</a></li>
                              <li><a href="#" title="Show products matching tag new">new</a></li>
                              <li><a href="#" title="Show products matching tag new arrivals">new arrivals</a></li>
                              <li><a href="#" title="Show products matching tag Orange">Orange</a></li>
                              <li><a href="#" title="Show products matching tag oxford">oxford</a></li>
                              <li><a href="#" title="Show products matching tag Oxymat">Oxymat</a></li>
                            </ul>
                            <span class="btn btn--small btnview">View all</span> </div>
                        </div> --}}
                        <!--end Product Tags-->
                    </div>
                </div>
                <!--End Sidebar-->
                <!--Main Content-->
                <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
                	<div class="category-description">
                    	<h3>Artists Description</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                    </div>
                    <hr>
                	<div class="productList">
                    	<!--Toolbar-->
                        <button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Product Filters</button>
                    	<div class="toolbar">
                        	<div class="filters-toolbar-wrapper">
                            	<div class="row">
                                	<div class="col-4 col-md-4 col-lg-4 filters-toolbar__item collection-view-as d-flex justify-content-start align-items-center">
                                    	<a href="shop-left-sidebar.html" title="Grid View" class="change-view change-view--active">
                                        	<img src="assets/images/grid.jpg" alt="Grid" />
                                        </a>
                                        <a href="shop-listview.html" title="List View" class="change-view">
                                        	<img src="assets/images/list.jpg" alt="List" />
                                        </a>
                                    </div>
                                    <div class="col-4 col-md-4 col-lg-4 text-center filters-toolbar__item filters-toolbar__item--count d-flex justify-content-center align-items-center">
                                    	<span class="filters-toolbar__product-count">Showing: 22</span>
                                    </div>
                                    <div class="col-4 col-md-4 col-lg-4 text-right">
                                    	<div class="filters-toolbar__item">
                                      		<label for="SortBy" class="hidden">Sort</label>
                                      		<select name="SortBy" id="SortBy" class="filters-toolbar__input filters-toolbar__input--sort">
                                                <option value="title-ascending" selected="selected">Sort</option>
                                                <option>Best Selling</option>
                                                <option>Alphabetically, A-Z</option>
                                                <option>Alphabetically, Z-A</option>
                                                <option>Price, low to high</option>
                                                <option>Price, high to low</option>
                                                <option>Date, new to old</option>
                                                <option>Date, old to new</option>
                                      		</select>
                                      		<input class="collection-header__default-sort" type="hidden" value="manual">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--End Toolbar-->
                        <div class="list-view-items grid--view-items">
                        	<!--ListView Item-->
                            <div class="list-product list-view-item">
                                <div class="list-view-item__image-column">
                                    <div class="list-view-item__image-wrapper">
                                        <!-- Image -->
                                        <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image1.jpg" src="assets/images/product-images/product-image1.jpg" alt="image" title="product"></a>
                                        <!-- End Image -->
                                    </div>
                                </div>
                                <div class="list-view-item__title-column">
                                    <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Camelia Reversible Jacket</a></div>
                                    <!-- Product Review -->
                                    <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                                    <!-- End Product Review -->
                                    <!-- Sort Description -->
                                    <p>Hello welcome that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                                    <!-- End Sort Description -->
                                    <!-- Price -->
                                    <p class="product-price grid-view-item__meta">
                                        <span class="old-price">$600.00</span>
                                        <span class="product-price__price product-price__sale"><span class="money">$500.00</span></span>
                                    </p>
                                    <!-- End Price -->
                                    <form class="variants" action="#">
                                    	<button class="btn btn--small" type="button">Select Options</button>
	                                </form>
                                </div>
                            </div>
                            <!--End ListView Item-->
                            <!--ListView Item-->
                            <div class="list-product list-view-item">
                                <div class="list-view-item__image-column">
                                    <div class="list-view-item__image-wrapper">
                                        <!-- Image -->
                                        <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image2.jpg" src="assets/images/product-images/product-image2.jpg" alt="image" title="product"></a>
                                        <!-- End Image -->
                                    </div>
                                </div>
                                <div class="list-view-item__title-column">
                                    <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Elastic Waist Dress</a></div>
                                    <!-- Product Review -->
                                    <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></p>
                                    <!-- End Product Review -->
                                    <!-- Sort Description -->
                                    <p>Hello welcome that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                                    <!-- End Sort Description -->
                                    <!-- Price -->
                                    <p class="product-price grid-view-item__meta">
                                        <span class="product-price__price"><span class="money">$693.00</span></span>
                                    </p>
                                    <!-- End Price -->
                                    <form class="variants" action="#">
                                        <button class="btn btn--small" type="button">Select Options</button>
                                    </form>
                                </div>
                            </div>
                            <!--End ListView Item-->
                            <!--ListView Item-->
                            <div class="list-product list-view-item">
                                <div class="list-view-item__image-column">
                                    <div class="list-view-item__image-wrapper">
                                        <!-- Image -->
                                        <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image3.jpg" src="assets/images/product-images/product-image3.jpg" alt="image" title="product"></a>
                                        <!-- End Image -->
                                    </div>
                                </div>
                                <div class="list-view-item__title-column">
                                    <div class="h4 grid-view-item__title"><a href="product-layout-2.html">3/4 Sleeve Kimono Dress</a></div>
                                    <!-- Product Review -->
                                    <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></p>
                                    <!-- End Product Review -->
                                    <!-- Sort Description -->
                                    <p>Hello welcome that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                                    <!-- End Sort Description -->
                                    <!-- Price -->
                                    <p class="product-price grid-view-item__meta">
                                        <span class="product-price__price"><span class="money">$500.00</span></span>
                                    </p>
                                    <!-- End Price -->
                                    <form class="variants" action="#">
                                        <button class="btn btn--small" type="button">Select Options</button>
                                    </form>
                                </div>
							</div>
                            <!--End ListView Item-->
                            <!--ListView Item-->
                            <div class="list-product list-view-item">
                                <div class="list-view-item__image-column">
                                    <div class="list-view-item__image-wrapper">
                                        <!-- Image -->
                                        <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image4.jpg" src="assets/images/product-images/product-image4.jpg" alt="image" title="product"></a>
                                        <!-- End Image -->
                                    </div>
                                </div>
                                <div class="list-view-item__title-column">
                                    <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Cape Dress</a></div>
                                    <!-- Product Review -->
                                    <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></p>
                                    <!-- End Product Review -->
                                    <!-- Sort Description -->
                                    <p>Hello welcome that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                                    <!-- End Sort Description -->
                                    <!-- Price -->
                                    <p class="product-price grid-view-item__meta">
                                        <span class="old-price">$900.00</span>
                                        <span class="product-price__price product-price__sale"><span class="money">$800.00</span></span>
                                    </p>
                                    <!-- End Price -->
                                    <form class="variants" action="#">
                                        <button class="btn btn--small" type="button">Select Options</button>
                                    </form>
                                </div>
                            </div>
                            <!--End ListView Item-->
                            <!--ListView Item-->
                            <div class="list-product list-view-item">
                                <div class="list-view-item__image-column">
                                    <div class="list-view-item__image-wrapper">
                                        <!-- Image -->
                                        <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image5.jpg" src="assets/images/product-images/product-image5.jpg" alt="image" title="product"></a>
                                        <!-- End Image -->
                                    </div>
                                </div>
                                <div class="list-view-item__title-column">
                                    <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Paper Dress</a></div>
                                    <!-- Product Review -->
                                    <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                                    <!-- End Product Review -->
                                    <!-- Sort Description -->
                                    <p>Hello welcome that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                                    <!-- End Sort Description -->
                                    <!-- Price -->
                                    <p class="product-price grid-view-item__meta">
                                        <span class="old-price">$900.00</span>
                                        <span class="product-price__price product-price__sale"><span class="money">$800.00</span></span>
                                    </p>
                                    <!-- End Price -->
                                    <form class="variants" action="#">
                                        <button class="btn btn--small" type="button">Select Options</button>
                                    </form>
                                </div>
                            </div>
                            <!--End ListView Item-->
                            <!--ListView Item-->
                            <div class="list-product list-view-item">
                                <div class="list-view-item__image-column">
                                    <div class="list-view-item__image-wrapper">
                                        <!-- Image -->
                                        <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image17.jpg" src="assets/images/product-images/product-image17.jpg" alt="image" title="product"></a>
                                        <!-- End Image -->
                                    </div>
                                </div>
                                <div class="list-view-item__title-column">
                                    <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Buttercup Dress</a></div>
                                    <!-- Product Review -->
                                    <p class="product-review"><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                                    <!-- End Product Review -->
                                    <!-- Sort Description -->
                                    <p>Hello welcome that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                                    <!-- End Sort Description -->
                                    <!-- Price -->
                                    <p class="product-price grid-view-item__meta">
                                        <span class="product-price__price"><span class="money">$800.00</span></span>
                                    </p>
                                    <!-- End Price -->
                                    <form class="variants" action="#">
                                        <button class="btn btn--small" type="button">Add To Cart</button>
                                    </form>
                                </div>
                            </div>
                            <!--End ListView Item-->
                            <!--ListView Item-->
                            <div class="list-product list-view-item">
                                <div class="list-view-item__image-column">
                                    <div class="list-view-item__image-wrapper">
                                        <!-- Image -->
                                        <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image18.jpg" src="assets/images/product-images/product-image18.jpg" alt="image" title="product"></a>
                                        <!-- End Image -->
                                    </div>
                                </div>
                                <div class="list-view-item__title-column">
                                    <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Lima Shirt</a></div>
                                    <!-- Product Review -->
                                    <p class="product-review"><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                                    <!-- End Product Review -->
                                    <!-- Sort Description -->
                                    <p>Hello welcome that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                                    <!-- End Sort Description -->
                                    <!-- Price -->
                                    <p class="product-price grid-view-item__meta">
                                        <span class="product-price__price"><span class="money">$800.00</span></span>
                                    </p>
                                    <!-- End Price -->
                                    <form class="variants" action="#">
                                        <button class="btn btn--small" type="button">Add To Cart</button>
                                    </form>
                                </div>
                            </div>
                            <!--End ListView Item-->
                            <!--ListView Item-->
                            <div class="list-product list-view-item">
                                <div class="list-view-item__image-column">
                                    <div class="list-view-item__image-wrapper">
                                        <!-- Image -->
                                        <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image19.jpg" src="assets/images/product-images/product-image19.jpg" alt="image" title="product"></a>
                                        <!-- End Image -->
                                    </div>
                                </div>
                                <div class="list-view-item__title-column">
                                    <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Romary Dress</a></div>
                                    <!-- Product Review -->
                                    <p class="product-review"><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                                    <!-- End Product Review -->
                                    <!-- Sort Description -->
                                    <p>Hello welcome that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                                    <!-- End Sort Description -->
                                    <!-- Price -->
                                    <p class="product-price grid-view-item__meta">
                                        <span class="product-price__price"><span class="money">$800.00</span></span>
                                    </p>
                                    <!-- End Price -->
                                    <form class="variants" action="#">
                                        <button class="btn btn--small" type="button">Add To Cart</button>
                                    </form>
                                </div>
                            </div>
                            <!--End ListView Item-->
                            <!--ListView Item-->
                            <div class="list-product list-view-item">
                                <div class="list-view-item__image-column">
                                    <div class="list-view-item__image-wrapper">
                                        <!-- Image -->
                                        <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image20.jpg" src="assets/images/product-images/product-image20.jpg" alt="image" title="product"></a>
                                        <!-- End Image -->
                                    </div>
                                </div>
                                <div class="list-view-item__title-column">
                                    <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Floral Sleeveless Dress</a></div>
                                    <!-- Product Review -->
                                    <p class="product-review"><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                                    <!-- End Product Review -->
                                    <!-- Sort Description -->
                                    <p>Hello welcome that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                                    <!-- End Sort Description -->
                                    <!-- Price -->
                                    <p class="product-price grid-view-item__meta">
                                        <span class="product-price__price"><span class="money">$380.00</span></span>
                                    </p>
                                    <!-- End Price -->
                                    <form class="variants" action="#">
                                        <button class="btn btn--small" type="button">Add To Cart</button>
                                    </form>
                                </div>
                            </div>
                            <!--End ListView Item-->
                            <!--ListView Item-->
                            <div class="list-product list-view-item">
                                <div class="list-view-item__image-column">
                                    <div class="list-view-item__image-wrapper">
                                        <!-- Image -->
                                        <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image21.jpg" src="assets/images/product-images/product-image21.jpg" alt="image" title="product"></a>
                                        <!-- End Image -->
                                    </div>
                                </div>
                                <div class="list-view-item__title-column">
                                    <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Button Up Dress</a></div>
                                    <!-- Product Review -->
                                    <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                                    <!-- End Product Review -->
                                    <!-- Sort Description -->
                                    <p>Hello welcome that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                                    <!-- End Sort Description -->
                                    <!-- Price -->
                                    <p class="product-price grid-view-item__meta">
                                        <span class="product-price__price"><span class="money">$400.00</span></span>
                                    </p>
                                    <!-- End Price -->
                                    <form class="variants" action="#">
                                        <button class="btn btn--small" type="button">Add To Cart</button>
                                    </form>
                                </div>
                            </div>
                            <!--End ListView Item-->
                            <!--ListView Item-->
                            <div class="list-product list-view-item">
                                <div class="list-view-item__image-column">
                                    <div class="list-view-item__image-wrapper">
                                        <!-- Image -->
                                        <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image22.jpg" src="assets/images/product-images/product-image22.jpg" alt="image" title="product"></a>
                                        <!-- End Image -->
                                    </div>
                                </div>
                                <div class="list-view-item__title-column">
                                    <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Lexie Shirt</a></div>
                                    <!-- Product Review -->
                                    <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                                    <!-- End Product Review -->
                                    <!-- Sort Description -->
                                    <p>Hello welcome that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                                    <!-- End Sort Description -->
                                    <!-- Price -->
                                    <p class="product-price grid-view-item__meta">
                                        <span class="product-price__price"><span class="money">$200.00</span></span>
                                    </p>
                                    <!-- End Price -->
                                    <form class="variants" action="#">
                                        <button class="btn btn--small" type="button">Add To Cart</button>
                                    </form>
                                </div>
                            </div>
                            <!--End ListView Item-->
                            <!--ListView Item-->
                            <div class="list-product list-view-item">
                                <div class="list-view-item__image-column">
                                    <div class="list-view-item__image-wrapper">
                                        <!-- Image -->
                                        <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image23.jpg" src="assets/images/product-images/product-image23.jpg" alt="image" title="product"></a>
                                        <!-- End Image -->
                                    </div>
                                </div>
                                <div class="list-view-item__title-column">
                                    <div class="h4 grid-view-item__title"><a href="product-layout-2.html">One Shoulder Dress in Navy</a></div>
                                    <!-- Product Review -->
                                    <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                                    <!-- End Product Review -->
                                    <!-- Sort Description -->
                                    <p>Hello welcome that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                                    <!-- End Sort Description -->
                                    <!-- Price -->
                                    <p class="product-price grid-view-item__meta">
                                        <span class="product-price__price"><span class="money">$1048.00</span></span>
                                    </p>
                                    <!-- End Price -->
                                    <form class="variants" action="#">
                                        <button class="btn btn--small" type="button">Add To Cart</button>
                                    </form>
                                </div>
                            </div>
                            <!--End ListView Item-->
                            <!--ListView Item-->
                            <div class="list-product list-view-item">
                                <div class="list-view-item__image-column">
                                    <div class="list-view-item__image-wrapper">
                                        <!-- Image -->
                                        <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image24.jpg" src="assets/images/product-images/product-image24.jpg" alt="image" title="product"></a>
                                        <!-- End Image -->
                                    </div>
                                </div>
                                <div class="list-view-item__title-column">
                                    <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Triangle Sleeveless Dress in Multi</a></div>
                                    <!-- Product Review -->
                                    <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                                    <!-- End Product Review -->
                                    <!-- Sort Description -->
                                    <p>Hello welcome that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                                    <!-- End Sort Description -->
                                    <!-- Price -->
                                    <p class="product-price grid-view-item__meta">
                                        <span class="product-price__price"><span class="money">$1048.00</span></span>
                                    </p>
                                    <!-- End Price -->
                                    <form class="variants" action="#">
                                        <button class="btn btn--small" type="button">Add To Cart</button>
                                    </form>
                                </div>
                            </div>
                            <!--End ListView Item-->
                            <!--ListView Item-->
                            <div class="list-product list-view-item">
                                <div class="list-view-item__image-column">
                                    <div class="list-view-item__image-wrapper">
                                        <!-- Image -->
                                        <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image25.jpg" src="assets/images/product-images/product-image25.jpg" alt="image" title="product"></a>
                                        <!-- End Image -->
                                    </div>
                                </div>
                                <div class="list-view-item__title-column">
                                    <div class="h4 grid-view-item__title"><a href="product-layout-2.html">ACB Top</a></div>
                                    <!-- Product Review -->
                                    <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                                    <!-- End Product Review -->
                                    <!-- Sort Description -->
                                    <p>Hello welcome that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                                    <!-- End Sort Description -->
                                    <!-- Price -->
                                    <p class="product-price grid-view-item__meta">
                                        <span class="product-price__price"><span class="money">$280.00</span></span>
                                    </p>
                                    <!-- End Price -->
                                    <form class="variants" action="#">
                                        <button class="btn btn--small" type="button">Add To Cart</button>
                                    </form>
                                </div>
                            </div>
                            <!--End ListView Item-->
                        </div>
                    </div>
                    <div class="infinitpaginOuter">
                        <div class="infinitpagin">	
                            <a href="#" class="btn loadMore">Load More</a>
                        </div>
                    </div>
                </div>
                <!--End Main Content-->
            </div>
        </div>
        
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
                                    <label class="h2"><span>sign up for </span>More Updates</label>
                                </div>
                                <form action="#" method="post">
                                    <div class="input-group">
                                        <input type="email" class="input-group__field newsletter__input"
                                            name="EMAIL" value="" placeholder="Email address" required="">
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
                            <span></span> <a href="#">Developed by Brainy Fools Team</a>
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
    <script src="{{url('assets/js/vendor/jquery.cookie.js')}}"></script>
    <script src="{{url('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/wow.min.js')}}"></script>
    <!-- Including Javascript -->
    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/js/plugins.js')}}"></script>
    <script src="{{url('assets/js/popper.min.js')}}"></script>
    <script src="{{url('assets/js/lazysizes.js')}}"></script>
    <script src="{{url('assets/js/main.js')}}"></script>
    <!-- Photoswipe Gallery -->
    <script src="{{url('assets/js/vendor/photoswipe.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/photoswipe-ui-default.min.js')}}"></script>
    
</div>


</body>


</html>