<!DOCTYPE html>
<html class="no-js" lang="en">



<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cart | Kala</title>
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
<body class="page-template belle">
<div class="pageWrapper">
	<!--Search Form Drawer-->
	<div class="search">
        <div class="search__form">
            <form class="search-bar__form" action="#">
                <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off">
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
                            <li data-currency="INR" class="">INR</li>

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
                            <li class="lvl1 parent megamenu"><a href="#">Home <i
                                        class="anm anm-angle-down-l"></i></a>

                            </li>

                            <li class="lvl1 parent megamenu"><a href="#">Gallery <i
                                        class="anm anm-angle-down-l"></i></a>
                                <div class="megamenu style2">
                                    <ul class="grid mmWrapper">
                                        <li class="grid__item one-whole">
                                            <ul class="grid">
                                                <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#"
                                                        class="site-nav lvl-1">Product Page</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="product-layout-1.html"
                                                                class="site-nav lvl-2">Product Layout 1</a></li>
                                                        <li class="lvl-2"><a href="product-layout-2.html"
                                                                class="site-nav lvl-2">Product Layout 2</a></li>
                                                        <li class="lvl-2"><a href="product-layout-3.html"
                                                                class="site-nav lvl-2">Product Layout 3</a></li>
                                                        <li class="lvl-2"><a href="product-with-left-thumbs.html"
                                                                class="site-nav lvl-2">Product With Left Thumbs</a>
                                                        </li>
                                                        <li class="lvl-2"><a href="product-with-right-thumbs.html"
                                                                class="site-nav lvl-2">Product With Right Thumbs</a>
                                                        </li>
                                                        <li class="lvl-2"><a href="product-with-bottom-thumbs.html"
                                                                class="site-nav lvl-2">Product With Bottom
                                                                Thumbs</a></li>
                                                    </ul>
                                                </li>
                                                <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#"
                                                        class="site-nav lvl-1">Product Features</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="short-description.html"
                                                                class="site-nav lvl-2">Short Description</a></li>
                                                        <li class="lvl-2"><a href="product-countdown.html"
                                                                class="site-nav lvl-2">Product Countdown</a></li>
                                                        <li class="lvl-2"><a href="product-video.html"
                                                                class="site-nav lvl-2">Product Video</a></li>
                                                        <li class="lvl-2"><a href="product-quantity-message.html"
                                                                class="site-nav lvl-2">Product Quantity Message</a>
                                                        </li>
                                                        <li class="lvl-2"><a href="product-visitor-sold-count.html"
                                                                class="site-nav lvl-2">Product Visitor/Sold Count
                                                                <span class="lbl nm_label3">Hot</span></a></li>
                                                        <li class="lvl-2"><a href="product-zoom-lightbox.html"
                                                                class="site-nav lvl-2">Product Zoom/Lightbox <span
                                                                    class="lbl nm_label1">New</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#"
                                                        class="site-nav lvl-1">Product Features</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="product-with-variant-image.html"
                                                                class="site-nav lvl-2">Product with Variant
                                                                Image</a></li>
                                                        <li class="lvl-2"><a href="product-with-color-swatch.html"
                                                                class="site-nav lvl-2">Product with Color Swatch</a>
                                                        </li>
                                                        <li class="lvl-2"><a href="product-with-image-swatch.html"
                                                                class="site-nav lvl-2">Product with Image Swatch</a>
                                                        </li>
                                                        <li class="lvl-2"><a href="product-with-dropdown.html"
                                                                class="site-nav lvl-2">Product with Dropdown</a>
                                                        </li>
                                                        <li class="lvl-2"><a href="product-with-rounded-square.html"
                                                                class="site-nav lvl-2">Product with Rounded
                                                                Square</a></li>
                                                        <li class="lvl-2"><a href="swatches-style.html"
                                                                class="site-nav lvl-2">Product Swatches All
                                                                Style</a></li>
                                                    </ul>
                                                </li>
                                                <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#"
                                                        class="site-nav lvl-1">Product Features</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="{{url('/product')}}"
                                                                class="site-nav lvl-2">Product Accordion</a></li>
                                                        <li class="lvl-2"><a href="product-pre-orders.html"
                                                                class="site-nav lvl-2">Product Pre-orders <span
                                                                    class="lbl nm_label1">New</span></a></li>
                                                        <li class="lvl-2"><a href="product-labels-detail.html"
                                                                class="site-nav lvl-2">Product Labels</a></li>
                                                        <li class="lvl-2"><a href="product-discount.html"
                                                                class="site-nav lvl-2">Product Discount In %</a>
                                                        </li>
                                                        <li class="lvl-2"><a href="product-shipping-message.html"
                                                                class="site-nav lvl-2">Product Shipping Message</a>
                                                        </li>
                                                        <li class="lvl-2"><a href="size-guide.html"
                                                                class="site-nav lvl-2">Size Guide <span
                                                                    class="lbl nm_label1">New</span></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="grid__item large-up--one-whole imageCol"><a href="#"><img
                                                    src="assets/images/megamenu-bg2.jpg" alt=""></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="lvl1 parent dropdown"><a href="#">Artist<i
                                        class="anm anm-angle-down-l"></i></a>
                                <ul class="dropdown">
                                    <li><a href="cart-variant1.html" class="site-nav">Cart Page <i
                                                class="anm anm-angle-right-l"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="cart-variant1.html" class="site-nav">Cart Variant1</a></li>
                                            <li><a href="cart-variant2.html" class="site-nav">Cart Variant2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="compare-variant1.html" class="site-nav">Compare Product <i
                                                class="anm anm-angle-right-l"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="compare-variant1.html" class="site-nav">Compare
                                                    Variant1</a></li>
                                            <li><a href="compare-variant2.html" class="site-nav">Compare
                                                    Variant2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="checkout.html" class="site-nav">Checkout</a></li>
                                    <li><a href="about-us.html" class="site-nav">About Us <span
                                                class="lbl nm_label1">New</span> </a></li>
                                    <li><a href="contact-us.html" class="site-nav">Contact Us</a></li>
                                    <li><a href="faqs.html" class="site-nav">FAQs</a></li>
                                    <li><a href="lookbook1.html" class="site-nav">Lookbook<i
                                                class="anm anm-angle-right-l"></i></a>
                                        <ul>
                                            <li><a href="lookbook1.html" class="site-nav">Style 1</a></li>
                                            <li><a href="lookbook2.html" class="site-nav">Style 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="404.html" class="site-nav">404</a></li>
                                    <li><a href="coming-soon.html" class="site-nav">Coming soon <span
                                                class="lbl nm_label1">New</span> </a></li>
                                </ul>
                            </li>
                            <li class="lvl1 parent dropdown"><a href="#">About Us <i
                                        class="anm anm-angle-down-l"></i></a>

                            </li>
                            <li class="lvl1"><a href="#">Contact Us <i class="anm anm-angle-down-l"></i></a></li>
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
            <li class="lvl1 parent megamenu"><a href="#">Gallery </a>

            </li>
            <li class="lvl1 parent megamenu"><a href="product-layout-1.html">Artist</a>

            </li>
            <li class="lvl1 parent megamenu"><a href="about-us.html">About Us</a>

            </li>
            <li class="lvl1 parent megamenu"><a href="blog-left-sidebar.html">Contact Us </a>

            </li>
            <li class="lvl1"><a href="#"><b>Explore More!</b></a>
            </li>
        </ul>
    </div>
	<!--End Mobile Menu-->
    
    <!--Body Content-->
    <div id="page-content">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Your cart</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 main-col">
                	<form action="#" method="post" class="cart style2">
                		<table>
                            <thead class="cart__row cart__header">
                                <tr>
                                    <th colspan="2" class="text-center">Product</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-right">Total</th>
                                    <th class="action">&nbsp;</th>
                                </tr>
                            </thead>
                    		<tbody>
                                <tr class="cart__row border-bottom line1 cart-flex border-top">
                                    <td class="cart__image-wrapper cart-flex-item">
                                        <a href="{{url('/product')}}"><img class="cart__image" src="assets/images/collection/paint4.jpg" alt="painting"></a>
                                    </td>
                                    <td class="cart__meta small--text-left cart-flex-item">
                                        <div class="list-view-item__title">
                                            <a href="#">Painting 1 </a>
                                        </div>
                                        
                                        <div class="cart__meta-text">
                                            Made By: Atul Pratap Singh
                                        </div>
                                    </td>
                                    <td class="cart__price-wrapper cart-flex-item">
                                        <span class="money">₹735.00</span>
                                    </td>
                                    <td class="cart__update-wrapper cart-flex-item text-right">
                                        <div class="cart__qty text-center">
                                            <div class="qtyField">
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon icon-minus"></i></a>
                                                <input class="cart__qty-input qty" type="text" name="updates[]" id="qty" value="1" pattern="[0-9]*">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon icon-plus"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right small--hide cart-price">
                                        <div><span class="money">₹735.00</span></div>
                                    </td>
                                    <td class="text-center small--hide"><a href="#" class="btn btn--secondary cart__remove" title="Remove tem"><i class="icon icon anm anm-times-l"></i></a></td>
                                </tr>
                                <tr class="cart__row border-bottom line1 cart-flex border-top">
                                    <td class="cart__image-wrapper cart-flex-item">
                                        <a href="{{url('/product')}}"><img class="cart__image" src="assets/images/collection/paint4.jpg" alt="Painting 2"></a>
                                    </td>
                                    <td class="cart__meta small--text-left cart-flex-item">
                                        <div class="list-view-item__title">
                                            <a href="#">Painting 2</a>
                                        </div>
                                        <div class="cart__meta-text">
                                            Made By: Atul Pratap Singh
                                        </div>
                                    </td>
                                    <td class="cart__price-wrapper cart-flex-item">
                                        <span class="money">₹735.00</span>
                                    </td>
                                    <td class="cart__update-wrapper cart-flex-item text-right">
                                        <div class="cart__qty text-center">
                                            <div class="qtyField">
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon icon-minus"></i></a>
                                                <input class="cart__qty-input qty" type="text" name="updates[]" id="qty" value="1" pattern="[0-9]*">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon icon-plus"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right small--hide cart-price">
                                        <div><span class="money">₹735.00</span></div>
                                    </td>
                                    <td class="text-center small--hide"><a href="#" class="btn btn--secondary cart__remove" title="Remove tem"><i class="icon icon anm anm-times-l"></i></a></td>
                                </tr>
                               
                            </tbody>
                    		<tfoot>
                                <tr>
                                    <td colspan="3" class="text-left"><a href="#" class="btn--link cart-continue"><i class="icon icon-arrow-circle-left"></i> Continue shopping</a></td>
                                    <td colspan="3" class="text-right"><button type="submit" name="update" class="btn--link cart-update"><i class="fa fa-refresh"></i> Update</button></td>
                                </tr>
                            </tfoot>
                    </table>
                    
                    <div class="currencymsg">We processes all orders in INR. While the content of your cart is currently displayed in INR, the checkout will use INR at the most current exchange rate.</div>
                    <hr>
					
                    
                    </form>                   
               	</div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 cart__footer">
                	<div class="cart-note">
                    	<div class="solid-border">
							<h5><label for="CartSpecialInstructions" class="cart-note__label small--text-center">Add a note to your order</label></h5>
							<textarea name="note" id="CartSpecialInstructions" class="cart-note__input"></textarea>
						</div>
                    </div>
                    <div class="solid-border">
                      <div class="row">
                      	<span class="col-12 col-sm-6 cart__subtotal-title"><strong>Subtotal</strong></span>
                        <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span class="money">₹735.00</span></span>
                      </div>
                      <div class="cart__shipping">Shipping &amp; taxes calculated at checkout</div>
                      <p class="cart_tearm">
                        <label>
                          <input type="checkbox" name="tearm" id="cartTearm" class="checkbox" value="tearm" required="">
                           I agree with the terms and conditions</label>
                      </p>
                      <input type="submit" name="checkout" id="cartCheckout" class="btn btn--small-wide checkout" value="Checkout" disabled="disabled">
                      <div class="paymnet-img"><img src="assets/images/payment-img.jpg" alt="Payment"></div>
                    </div>

                </div>
            </div>
        </div>
        
    </div>
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