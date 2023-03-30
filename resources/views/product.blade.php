<!DOCTYPE html>
<html class="no-js" lang="en">



<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Product | Kala</title>
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

<body class="template-product belle">
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
                                                alt="3/4 Sleeve Kimono Dress" title="" />
                                        </a>
                                        <div class="product-details">
                                            <a href="#" class="remove"><i class="anm anm-times-l"
                                                    aria-hidden="true"></i></a>
                                            <a href="#" class="edit-i remove"><i class="anm anm-edit"
                                                    aria-hidden="true"></i></a>
                                            <a class="pName" href="cart.html">Painting 1</a>
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
                                            <a class="pName" href="cart.html">Painting 2</a>
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
                                        <a href="cart.html" class="btn btn-secondary btn--small">View Cart</a>
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
                <li class="lvl1 parent megamenu"><a href="{{url('/')}}">Home <i class="anm anm-plus-l"></i></a>
                    <ul>
                        <li><a href="#" class="site-nav">Home Group 1<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="{{url('/')}}" class="site-nav">Home 1 - Classic</a></li>
                                <li><a href="home2-default.html" class="site-nav">Home 2 - Default</a></li>
                                <li><a href="home15-funiture.html" class="site-nav">Home 15 - Furniture </a></li>
                                <li><a href="home3-boxed.html" class="site-nav">Home 3 - Boxed</a></li>
                                <li><a href="home4-fullwidth.html" class="site-nav">Home 4 - Fullwidth</a></li>
                                <li><a href="home5-cosmetic.html" class="site-nav">Home 5 - Cosmetic</a></li>
                                <li><a href="home6-modern.html" class="site-nav">Home 6 - Modern</a></li>
                                <li><a href="home7-shoes.html" class="site-nav last">Home 7 - Shoes</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="site-nav">Home Group 2<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="home8-jewellery.html" class="site-nav">Home 8 - Jewellery</a></li>
                                <li><a href="home9-parallax.html" class="site-nav">Home 9 - Parallax</a></li>
                                <li><a href="home10-minimal.html" class="site-nav">Home 10 - Minimal</a></li>
                                <li><a href="home11-grid.html" class="site-nav">Home 11 - Grid</a></li>
                                <li><a href="home12-category.html" class="site-nav">Home 12 - Category</a></li>
                                <li><a href="home13-auto-parts.html" class="site-nav">Home 13 - Auto Parts</a></li>
                                <li><a href="home14-bags.html" class="site-nav last">Home 14 - Bags</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="site-nav">New Sections<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="home11-grid.html" class="site-nav">Image Gallery</a></li>
                                <li><a href="home5-cosmetic.html" class="site-nav">Featured Product</a></li>
                                <li><a href="home7-shoes.html" class="site-nav">Columns with Items</a></li>
                                <li><a href="home6-modern.html" class="site-nav">Text columns with images</a></li>
                                <li><a href="home2-default.html" class="site-nav">Products Carousel</a></li>
                                <li><a href="home9-parallax.html" class="site-nav last">Parallax Banner</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="site-nav">New Features<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="home13-auto-parts.html" class="site-nav">Top Information Bar </a></li>
                                <li><a href="#" class="site-nav">Age Varification </a></li>
                                <li><a href="#" class="site-nav">Footer Blocks</a></li>
                                <li><a href="#" class="site-nav">2 New Megamenu style</a></li>
                                <li><a href="#" class="site-nav">Show Total Savings </a></li>
                                <li><a href="#" class="site-nav">New Custom Icons</a></li>
                                <li><a href="#" class="site-nav last">Auto Currency</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="lvl1 parent megamenu"><a href="#">Shop <i class="anm anm-plus-l"></i></a>
                    <ul>
                        <li><a href="#" class="site-nav">Shop Pages<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="shop-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
                                <li><a href="shop-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
                                <li><a href="shop-fullwidth.html" class="site-nav">Fullwidth</a></li>
                                <li><a href="shop-grid-3.html" class="site-nav">3 items per row</a></li>
                                <li><a href="shop-grid-4.html" class="site-nav">4 items per row</a></li>
                                <li><a href="shop-grid-5.html" class="site-nav">5 items per row</a></li>
                                <li><a href="shop-grid-6.html" class="site-nav">6 items per row</a></li>
                                <li><a href="shop-grid-7.html" class="site-nav">7 items per row</a></li>
                                <li><a href="shop-listview.html" class="site-nav last">Product Listview</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="site-nav">Shop Features<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="shop-left-sidebar.html" class="site-nav">Product Countdown </a></li>
                                <li><a href="shop-right-sidebar.html" class="site-nav">Infinite Scrolling</a></li>

                                <li><a href="shop-grid-3.html" class="site-nav">Pagination - Classic</a></li>
                                <li><a href="shop-grid-6.html" class="site-nav">Pagination - Load More</a></li>
                                <li><a href="product-labels.html" class="site-nav">Dynamic Product Labels</a></li>
                                <li><a href="product-swatches-style.html" class="site-nav">Product Swatches </a></li>
                                <li><a href="product-hover-info.html" class="site-nav">Product Hover Info</a></li>
                                <li><a href="shop-grid-3.html" class="site-nav">Product Reviews</a></li>
                                <li><a href="shop-left-sidebar.html" class="site-nav last">Discount Label </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="lvl1 parent megamenu"><a href="product-layout-1.html">Product <i
                            class="anm anm-plus-l"></i></a>
                    <ul>
                        <li><a href="product-layout-1.html" class="site-nav">Product Page<i
                                    class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="product-layout-1.html" class="site-nav">Product Layout 1</a></li>
                                <li><a href="product-layout-2.html" class="site-nav">Product Layout 2</a></li>
                                <li><a href="product-layout-3.html" class="site-nav">Product Layout 3</a></li>
                                <li><a href="product-with-left-thumbs.html" class="site-nav">Product With Left
                                        Thumbs</a></li>
                                <li><a href="product-with-right-thumbs.html" class="site-nav">Product With Right
                                        Thumbs</a></li>
                                <li><a href="product-with-bottom-thumbs.html" class="site-nav last">Product With Bottom
                                        Thumbs</a></li>
                            </ul>
                        </li>
                        <li><a href="short-description.html" class="site-nav">Product Features<i
                                    class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="short-description.html" class="site-nav">Short Description</a></li>
                                <li><a href="product-countdown.html" class="site-nav">Product Countdown</a></li>
                                <li><a href="product-video.html" class="site-nav">Product Video</a></li>
                                <li><a href="product-quantity-message.html" class="site-nav">Product Quantity
                                        Message</a></li>
                                <li><a href="product-visitor-sold-count.html" class="site-nav">Product Visitor/Sold
                                        Count </a></li>
                                <li><a href="product-zoom-lightbox.html" class="site-nav last">Product Zoom/Lightbox
                                    </a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="site-nav">Product Features<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="product-with-variant-image.html" class="site-nav">Product with Variant
                                        Image</a></li>
                                <li><a href="product-with-color-swatch.html" class="site-nav">Product with Color
                                        Swatch</a></li>
                                <li><a href="product-with-image-swatch.html" class="site-nav">Product with Image
                                        Swatch</a></li>
                                <li><a href="product-with-dropdown.html" class="site-nav">Product with Dropdown</a></li>
                                <li><a href="product-with-rounded-square.html" class="site-nav">Product with Rounded
                                        Square</a></li>
                                <li><a href="swatches-style.html" class="site-nav last">Product Swatches All Style</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#" class="site-nav">Product Features<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="product-accordion.html" class="site-nav">Product Accordion</a></li>
                                <li><a href="product-pre-orders.html" class="site-nav">Product Pre-orders </a></li>
                                <li><a href="product-labels-detail.html" class="site-nav">Product Labels</a></li>
                                <li><a href="product-discount.html" class="site-nav">Product Discount In %</a></li>
                                <li><a href="product-shipping-message.html" class="site-nav">Product Shipping
                                        Message</a></li>
                                <li><a href="product-shipping-message.html" class="site-nav last">Size Guide </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="lvl1 parent megamenu"><a href="about-us.html">Pages <i class="anm anm-plus-l"></i></a>
                    <ul>
                        <li><a href="cart-variant1.html" class="site-nav">Cart Page <i class="anm anm-plus-l"></i></a>
                            <ul class="dropdown">
                                <li><a href="cart-variant1.html" class="site-nav">Cart Variant1</a></li>
                                <li><a href="cart-variant2.html" class="site-nav">Cart Variant2</a></li>
                            </ul>
                        </li>
                        <li><a href="compare-variant1.html" class="site-nav">Compare Product <i
                                    class="anm anm-plus-l"></i></a>
                            <ul class="dropdown">
                                <li><a href="compare-variant1.html" class="site-nav">Compare Variant1</a></li>
                                <li><a href="compare-variant2.html" class="site-nav">Compare Variant2</a></li>
                            </ul>
                        </li>
                        <li><a href="checkout.html" class="site-nav">Checkout</a></li>
                        <li><a href="about-us.html" class="site-nav">About Us<span class="lbl nm_label1">New</span></a>
                        </li>
                        <li><a href="contact-us.html" class="site-nav">Contact Us</a></li>
                        <li><a href="faqs.html" class="site-nav">FAQs</a></li>
                        <li><a href="lookbook1.html" class="site-nav">Lookbook<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="lookbook1.html" class="site-nav">Style 1</a></li>
                                <li><a href="lookbook2.html" class="site-nav last">Style 2</a></li>
                            </ul>
                        </li>
                        <li><a href="404.html" class="site-nav">404</a></li>
                        <li><a href="coming-soon.html" class="site-nav">Coming soon<span
                                    class="lbl nm_label1">New</span></a></li>
                    </ul>
                </li>
                <li class="lvl1 parent megamenu"><a href="blog-left-sidebar.html">Blog <i
                            class="anm anm-plus-l"></i></a>
                    <ul>
                        <li><a href="blog-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
                        <li><a href="blog-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
                        <li><a href="blog-fullwidth.html" class="site-nav">Fullwidth</a></li>
                        <li><a href="blog-grid-view.html" class="site-nav">Gridview</a></li>
                        <li><a href="blog-article.html" class="site-nav">Article</a></li>
                    </ul>
                </li>
                <li class="lvl1"><a href="#"><b>Buy Now!</b></a>
                </li>
            </ul>
        </div>
        <!--End Mobile Menu-->

        <!--Body Content-->
        <div id="page-content">
            <!--MainContent-->
            <div id="MainContent" class="main-content" role="main">
                <!--Breadcrumb-->
                <div class="bredcrumbWrap">
                    <div class="container breadcrumbs">
                        <a href="{{url('/')}}" title="Back to the home page">Home</a><span
                            aria-hidden="true">›</span><span>Painting Accordion</span>
                    </div>
                </div>
                <!--End Breadcrumb-->

                <div id="ProductSection-product-template" class="product-template__container prstyle2 container">
                    <!--#ProductSection-product-template-->
                    <div class="product-single product-single-1">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product-details-img product-single__photos bottom">
                                    <div class="zoompro-wrap product-zoom-right pl-20">
                                        <div class="zoompro-span">
                                            <img class="blur-up lazyload zoompro" alt=""
                                                src="assets/images/collection/paint6.jpg" />
                                        </div>
                                        <div class="product-labels"><span class="lbl on-sale">Sale</span><span
                                                class="lbl pr-label1">new</span></div>
                                        <div class="product-buttons">
                                            <a href="#" class="btn popup-video" title="View Video"><i
                                                    class="icon anm anm-play-r" aria-hidden="true"></i></a>
                                            <a href="#" class="btn prlightbox" title="Zoom"><i
                                                    class="icon anm anm-expand-l-arrows" aria-hidden="true"></i></a>
                                        </div>
                                    </div>



                                </div>
                                <!--Product Feature-->
                                <div class="prFeatures">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 feature">
                                            <img src="assets/images/credit-card.png" alt="Safe Payment"
                                                title="Safe Payment" />
                                            <div class="details">
                                                <h3>Safe Payment</h3>Pay with the world's most payment methods.
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 feature">
                                            <img src="assets/images/shield.png" alt="Confidence" title="Confidence" />
                                            <div class="details">
                                                <h3>Confidence</h3>Protection covers your purchase and personal data.
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 feature">
                                            <img src="assets/images/worldwide.png" alt="Worldwide Delivery"
                                                title="Worldwide Delivery" />
                                            <div class="details">
                                                <h3>Worldwide Delivery</h3>FREE &amp; fast shipping to over 200+
                                                countries &amp; regions.
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 feature">
                                            <img src="assets/images/phone-call.png" alt="Hotline" title="Hotline" />
                                            <div class="details">
                                                <h3>Hotline</h3>Talk to help line for your question on 4141 456 789,
                                                4125 666 888
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Product Feature-->
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product-single__meta">
                                    <h1 class="product-single__title">Painting 1 <br>
                                        <h6> By: Atul Pratap Singh</h6>
                                    </h1>
                                    <div class="product-nav clearfix">
                                        <a href="#" class="next" title="Next"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i></a>
                                    </div>
                                    <div class="prInfoRow">
                                        <div class="product-stock"> <span class="instock ">In Stock</span> <span
                                                class="outstock hide">Unavailable</span> </div>
                                        <div class="product-sku">Product Id: <span class="variant-sku">19115-rdxs</span>
                                        </div>
                                        <div class="product-review"><a class="reviewLink" href="#tab2"><i
                                                    class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i
                                                    class="font-13 fa fa-star"></i><i
                                                    class="font-13 fa fa-star-o"></i><i
                                                    class="font-13 fa fa-star-o"></i><span class="spr-badge-caption">6
                                                    reviews</span></a></div>
                                    </div>
                                    <p class="product-single__price product-single__price-product-template">
                                        <span class="visually-hidden">Regular price</span>
                                        <s id="ComparePrice-product-template" style="text-decoration: none;"><span
                                                class="money">Bid Amount: </span></s>
                                        <span
                                            class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                            <span id="ProductPrice-product-template"><span
                                                    class="money">₹788.00</span></span>
                                        </span>
                                        <span class="discount-badge"> <span class="devider">|</span>&nbsp;
                                            <span>You Save</span>
                                            <span id="SaveAmount-product-template" class="product-single__save-amount">
                                                <span class="money">₹100.00</span>
                                            </span>
                                            <span class="off">(<span>16</span>%)</span>
                                        </span>
                                    </p>
                                    <div class="product-single__description rte">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book.</p>
                                    </div>
                                    <form method="post" action="http://annimexweb.com/cart/add"
                                        id="product_form_10508262282" accept-charset="UTF-8"
                                        class="product-form product-form-product-template hidedropdown"
                                        enctype="multipart/form-data">

                                        <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                            <div class="product-form__item">
                                                <label class="header">Painting Dimension: <span class="slVariant">18" h
                                                        x 36" w x .25" d
                                                        |
                                                        3 lbs. 0 oz.</span></label>

                                            </div>
                                        </div>
                                        <p class="infolinks">
                                            <a href="#productInquiry" class="emaillink btn"> Describe your proposal</a>
                                        </p>
                                        <!-- Product Action -->
                                        <div class="product-action clearfix">
                                            <div class="product-form__item--quantity">
                                                <div class="wrapQtyBtn">
                                                    <div class="qtyField">
                                                        <a class="qtyBtn minus" href="javascript:void(0);"><i
                                                                class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                        <input type="text" id="Quantity" name="quantity" value="1"
                                                            class="product-form__input qty">
                                                        <a class="qtyBtn plus" href="javascript:void(0);"><i
                                                                class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-form__item--submit">
                                                <button type="button" name="add" class="btn product-form__cart-submit">
                                                    <span>Place Bid</span>
                                                </button>
                                                <button type="button" name="add" class="btn product-form__cart-submit">
                                                    <span>Add to cart</span>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End Product Action -->
                                    </form>
                                    <div class="display-table shareRow">
                                        <div class="display-table-cell medium-up--one-third">
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist"><i
                                                        class="icon anm anm-heart-l" aria-hidden="true"></i> <span>Add
                                                        to Wishlist</span></a>
                                            </div>
                                        </div>
                                        <div class="display-table-cell text-right">
                                            <div class="social-sharing">
                                                <a target="_blank" href="#"
                                                    class="btn btn--small btn--secondary btn--share share-facebook"
                                                    title="Share on Facebook">
                                                    <i class="fa fa-facebook-square" aria-hidden="true"></i> <span
                                                        class="share-title" aria-hidden="true">Share</span>
                                                </a>
                                                <a target="_blank" href="#"
                                                    class="btn btn--small btn--secondary btn--share share-twitter"
                                                    title="Tweet on Twitter">
                                                    <i class="fa fa-twitter" aria-hidden="true"></i> <span
                                                        class="share-title" aria-hidden="true">Tweet</span>
                                                </a>
                                                <a href="#" title="Share on google+"
                                                    class="btn btn--small btn--secondary btn--share">
                                                    <i class="fa fa-google-plus" aria-hidden="true"></i> <span
                                                        class="share-title" aria-hidden="true">Google+</span>
                                                </a>
                                                <a target="_blank" href="#"
                                                    class="btn btn--small btn--secondary btn--share share-pinterest"
                                                    title="Pin on Pinterest">
                                                    <i class="fa fa-pinterest" aria-hidden="true"></i> <span
                                                        class="share-title" aria-hidden="true">Pin it</span>
                                                </a>
                                                <a href="#"
                                                    class="btn btn--small btn--secondary btn--share share-pinterest"
                                                    title="Share by Email" target="_blank">
                                                    <i class="fa fa-envelope" aria-hidden="true"></i> <span
                                                        class="share-title" aria-hidden="true">Email</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Product Tabs-->
                                <div class="tabs-listing">
                                    <div class="tab-container">
                                        <h3 class="acor-ttl active" rel="tab1">Product Details</h3>
                                        <div id="tab1" class="tab-content">
                                            <div class="product-description rte">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text
                                                    ever since the 1500s, when an unknown printer took a galley of type
                                                    and scrambled it to make a type specimen book. It has survived not
                                                    only five centuries, but also the leap into electronic typesetting,
                                                    remaining essentially unchanged.</p>
                                                <ul>
                                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                                    <li>Sed ut perspiciatis unde omnis iste natus error sit</li>
                                                    <li>Neque porro quisquam est qui dolorem ipsum quia dolor</li>
                                                    <li>Lorem Ipsum is not simply random text.</li>
                                                    <li>Free theme updates</li>
                                                </ul>
                                                <h3>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h3>
                                                <p>You can change the position of any sections such as slider, banner,
                                                    products, collection and so on by just dragging and dropping.&nbsp;
                                                </p>
                                                <h3>Lorem Ipsum is not simply random text.</h3>
                                                <p>But I must explain to you how all this mistaken idea of denouncing
                                                    pleasure and praising pain was born and I will give you a complete
                                                    account of the system, and expound the actual teachings of the great
                                                    explorer of the truth, the master-builder of human happiness.</p>
                                                <p>Change colors, fonts, banners, megamenus and more. Preview changes
                                                    are live before saving them.</p>
                                                <h3>1914 translation by H. Rackham</h3>
                                                <p>But I must explain to you how all this mistaken idea of denouncing
                                                    pleasure and praising pain was born and I will give you a complete
                                                    account of the system, and expound the actual teachings of the great
                                                    explorer of the truth, the master-builder of human happiness.</p>
                                                <h3>Section 1.10.33 of "de Finibus Bonorum et Malorum", written by
                                                    Cicero in 45 BC</h3>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                                    blanditiis praesentium voluptatum deleniti atque corrupti quos
                                                    dolores et quas molestias excepturi sint occaecati cupiditate non
                                                    provident, similique sunt in culpa qui officia deserunt mollitia
                                                    animi, id est laborum et dolorum fuga.</p>
                                                <h3>The standard Lorem Ipsum passage, used since the 1500s</h3>
                                                <p>You can use variant style from colors, images or variant images. Also
                                                    available differnt type of design styles and size.</p>
                                                <h3>Lorem Ipsum is not simply random text.</h3>
                                                <p>But I must explain to you how all this mistaken idea of denouncing
                                                    pleasure and praising pain was born and I will give you a complete
                                                    account of the system, and expound the actual teachings of the great
                                                    explorer of the truth, the master-builder of human happiness.</p>
                                                <h3>Proin ut lacus eget elit molestie posuere.</h3>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text
                                                    ever since the 1500s, when an unknown printer took a galley of type
                                                    and scrambled.</p>
                                            </div>
                                        </div>
                                        <h3 class="acor-ttl" rel="tab2">Product Reviews</h3>
                                        <div id="tab2" class="tab-content">
                                            <div id="shopify-product-reviews">
                                                <div class="spr-container">
                                                    <div class="spr-header clearfix">
                                                        <div class="spr-summary">
                                                            <span class="product-review"><a class="reviewLink"><i
                                                                        class="font-13 fa fa-star"></i><i
                                                                        class="font-13 fa fa-star"></i><i
                                                                        class="font-13 fa fa-star"></i><i
                                                                        class="font-13 fa fa-star-o"></i><i
                                                                        class="font-13 fa fa-star-o"></i> </a><span
                                                                    class="spr-summary-actions-togglereviews">Based on 6
                                                                    reviews456</span></span>
                                                            <span class="spr-summary-actions">
                                                                <a href="#"
                                                                    class="spr-summary-actions-newreview btn">Write a
                                                                    review</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="spr-content">
                                                        <div class="spr-form clearfix">
                                                            <form method="post" action="#" id="new-review-form"
                                                                class="new-review-form">
                                                                <h3 class="spr-form-title">Write a review</h3>
                                                                <fieldset class="spr-form-contact">
                                                                    <div class="spr-form-contact-name">
                                                                        <label class="spr-form-label"
                                                                            for="review_author_10508262282">Name</label>
                                                                        <input
                                                                            class="spr-form-input spr-form-input-text "
                                                                            id="review_author_10508262282" type="text"
                                                                            name="review[author]" value=""
                                                                            placeholder="Enter your name">
                                                                    </div>
                                                                    <div class="spr-form-contact-email">
                                                                        <label class="spr-form-label"
                                                                            for="review_email_10508262282">Email</label>
                                                                        <input
                                                                            class="spr-form-input spr-form-input-email "
                                                                            id="review_email_10508262282" type="email"
                                                                            name="review[email]" value=""
                                                                            placeholder="john.smith@example.com">
                                                                    </div>
                                                                </fieldset>
                                                                <fieldset class="spr-form-review">
                                                                    <div class="spr-form-review-rating">
                                                                        <label class="spr-form-label">Rating</label>
                                                                        <div class="spr-form-input spr-starrating">
                                                                            <div class="product-review"><a
                                                                                    class="reviewLink" href="#"><i
                                                                                        class="fa fa-star-o"></i><i
                                                                                        class="font-13 fa fa-star-o"></i><i
                                                                                        class="font-13 fa fa-star-o"></i><i
                                                                                        class="font-13 fa fa-star-o"></i><i
                                                                                        class="font-13 fa fa-star-o"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="spr-form-review-title">
                                                                        <label class="spr-form-label"
                                                                            for="review_title_10508262282">Review
                                                                            Title</label>
                                                                        <input
                                                                            class="spr-form-input spr-form-input-text "
                                                                            id="review_title_10508262282" type="text"
                                                                            name="review[title]" value=""
                                                                            placeholder="Give your review a title">
                                                                    </div>

                                                                    <div class="spr-form-review-body">
                                                                        <label class="spr-form-label"
                                                                            for="review_body_10508262282">Body of Review
                                                                            <span
                                                                                class="spr-form-review-body-charactersremaining">(1500)</span></label>
                                                                        <div class="spr-form-input">
                                                                            <textarea
                                                                                class="spr-form-input spr-form-input-textarea "
                                                                                id="review_body_10508262282"
                                                                                data-product-id="10508262282"
                                                                                name="review[body]" rows="10"
                                                                                placeholder="Write your comments here"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                                <fieldset class="spr-form-actions">
                                                                    <input type="submit"
                                                                        class="spr-button spr-button-primary button button-primary btn btn-primary"
                                                                        value="Submit Review">
                                                                </fieldset>
                                                            </form>
                                                        </div>
                                                        <div class="spr-reviews">
                                                            <div class="spr-review">
                                                                <div class="spr-review-header">
                                                                    <span
                                                                        class="product-review spr-starratings spr-review-header-starratings"><span
                                                                            class="reviewLink"><i
                                                                                class="fa fa-star"></i><i
                                                                                class="font-13 fa fa-star"></i><i
                                                                                class="font-13 fa fa-star"></i><i
                                                                                class="font-13 fa fa-star"></i><i
                                                                                class="font-13 fa fa-star"></i></span></span>
                                                                    <h3 class="spr-review-header-title">Lorem ipsum
                                                                        dolor sit amet</h3>
                                                                    <span
                                                                        class="spr-review-header-byline"><strong>dsacc</strong>
                                                                        on <strong>Apr 09, 2019</strong></span>
                                                                </div>
                                                                <div class="spr-review-content">
                                                                    <p class="spr-review-content-body">Lorem ipsum dolor
                                                                        sit amet, consectetur adipiscing elit, sed do
                                                                        eiusmod tempor incididunt ut labore et dolore
                                                                        magna aliqua. Ut enim ad minim veniam, quis
                                                                        nostrud exercitation ullamco laboris nisi ut
                                                                        aliquip ex ea commodo consequat.</p>
                                                                </div>
                                                            </div>
                                                            <div class="spr-review">
                                                                <div class="spr-review-header">
                                                                    <span
                                                                        class="product-review spr-starratings spr-review-header-starratings"><span
                                                                            class="reviewLink"><i
                                                                                class="fa fa-star"></i><i
                                                                                class="font-13 fa fa-star"></i><i
                                                                                class="font-13 fa fa-star"></i><i
                                                                                class="font-13 fa fa-star"></i><i
                                                                                class="font-13 fa fa-star"></i></span></span>
                                                                    <h3 class="spr-review-header-title">Lorem Ipsum is
                                                                        simply dummy text of the printing</h3>
                                                                    <span
                                                                        class="spr-review-header-byline"><strong>larrydude</strong>
                                                                        on <strong>Dec 30, 2018</strong></span>
                                                                </div>

                                                                <div class="spr-review-content">
                                                                    <p class="spr-review-content-body"><br><br>Lorem
                                                                        Ipsum is simply dummy text of the printing and
                                                                        typesetting industry. Lorem Ipsum has been the
                                                                        industry's standard dummy text ever since the
                                                                        1500s, when an unknown printer took a galley of
                                                                        type and scrambled.<br><br>
                                                                        Lorem Ipsum is simply dummy text of the printing
                                                                        and typesetting industry.<br><br>Lorem Ipsum is
                                                                        simply dummy text of the printing and
                                                                        typesetting industry.<br>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="spr-review">
                                                                <div class="spr-review-header">
                                                                    <span
                                                                        class="product-review spr-starratings spr-review-header-starratings"><span
                                                                            class="reviewLink"><i
                                                                                class="fa fa-star"></i><i
                                                                                class="font-13 fa fa-star"></i><i
                                                                                class="font-13 fa fa-star"></i><i
                                                                                class="font-13 fa fa-star"></i><i
                                                                                class="font-13 fa fa-star"></i></span></span>
                                                                    <h3 class="spr-review-header-title">Neque porro
                                                                        quisquam est qui dolorem ipsum quia dolor sit
                                                                        amet, consectetur, adipisci velit...</h3>
                                                                    <span
                                                                        class="spr-review-header-byline"><strong>quoctri1905</strong>
                                                                        on <strong>Dec 30, 2018</strong></span>
                                                                </div>

                                                                <div class="spr-review-content">
                                                                    <p class="spr-review-content-body">Lorem Ipsum is
                                                                        simply dummy text of the printing and
                                                                        typesetting industry. Lorem Ipsum has been the
                                                                        industry's standard dummy text ever since the
                                                                        1500s, when an unknown printer took a galley of
                                                                        type and scrambled.<br>
                                                                        <br>Lorem Ipsum is simply dummy text of the
                                                                        printing and typesetting industry.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h3 class="acor-ttl" rel="tab4">Shipping &amp; Returns</h3>
                                        <div id="tab4" class="tab-content">
                                            <h4>Returns Policy</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eros
                                                justo, accumsan non dui sit amet. Phasellus semper volutpat mi sed
                                                imperdiet. Ut odio lectus, vulputate non ex non, mattis sollicitudin
                                                purus. Mauris consequat justo a enim interdum, in consequat dolor
                                                accumsan. Nulla iaculis diam purus, ut vehicula leo efficitur at.</p>
                                            <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. In blandit
                                                nunc enim, sit amet pharetra erat aliquet ac.</p>
                                            <h4>Shipping</h4>
                                            <p>Pellentesque ultrices ut sem sit amet lacinia. Sed nisi dui, ultrices ut
                                                turpis pulvinar. Sed fringilla ex eget lorem consectetur, consectetur
                                                blandit lacus varius. Duis vel scelerisque elit, et vestibulum metus.
                                                Integer sit amet tincidunt tortor. Ut lacinia ullamcorper massa, a
                                                fermentum arcu vehicula ut. Ut efficitur faucibus dui Nullam tristique
                                                dolor eget turpis consequat varius. Quisque a interdum augue. Nam ut
                                                nibh mauris.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End Product Tabs-->
                            </div>
                        </div>
                        <!--End-product-single-->



                        <!--Recently Product Slider-->
                        <div class="related-product grid-products">
                            <header class="section-header">
                                <h2 class="section-header__title text-center h2"><span>Recently Viewed Painting</span>
                                </h2>

                            </header>
                            <div class="productPageSlider">
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload"
                                                src="assets/images/collection/paint5.jpg" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload"
                                                data-src="assets/images/collection/paint5.jpg"
                                                src="assets/images/collection/paint5.jpg" alt="image" title="product">
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels rectangular"><span
                                                    class="lbl on-sale">-16%</span> <span
                                                    class="lbl pr-label1">new</span></div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">Painting</a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload"
                                                data-src="assets/images/collection/paint5.jpg"
                                                src="assets/images/collection/paint5.jpg" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload"
                                                data-src="assets/images/collection/paint5.jpg"
                                                src="assets/images/collection/paint5.jpg" alt="image" title="product">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">Painting</a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload"
                                                data-src="assets/images/collection/paint5.jpg"
                                                src="assets/images/collection/paint5.jpg" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload"
                                                data-src="assets/images/collection/paint5.jpg"
                                                src="assets/images/collection/paint5.jpg" alt="image" title="product">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                    </div>

                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">Painting</a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload"
                                                data-src="assets/images/collection/paint5.jpg"
                                                src="assets/images/collection/paint5.jpg" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload"
                                                data-src="assets/images/collection/paint5.jpg"
                                                src="assets/images/collection/paint5.jpg" alt="image" title="product">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">Painting</a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload"
                                                data-src="assets/images/collection/paint5.jpg"
                                                src="assets/images/collection/paint5.jpg" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload"
                                                data-src="assets/images/collection/paint5.jpg"
                                                src="assets/images/collection/paint5.jpg" alt="image" title="product">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">Painting</a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload"
                                                data-src="assets/images/collection/paint5.jpg"
                                                src="assets/images/collection/paint5.jpg" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload"
                                                data-src="assets/images/collection/paint5.jpg"
                                                src="assets/images/collection/paint5.jpg" alt="image" title="product">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                    </div>

                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">Painting</a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload"
                                                data-src="assets/images/collection/paint5.jpg"
                                                src="assets/images/collection/paint5.jpg" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload"
                                                data-src="assets/images/collection/paint5.jpg"
                                                src="assets/images/collection/paint5.jpg" alt="image" title="product">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">Painting</a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload"
                                                data-src="assets/images/collection/paint5.jpg"
                                                src="assets/images/collection/paint5.jpg" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload"
                                                data-src="assets/images/collection/paint5.jpg"
                                                src="assets/images/collection/paint5.jpg" alt="image" title="product">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">Painting</a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                        </div>
                        <!--End Recently Product Slider-->

                    </div>
                    <!--#ProductSection-product-template-->
                </div>
                <!--MainContent-->
            </div>
            <!--End Body Content-->
        </div>
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