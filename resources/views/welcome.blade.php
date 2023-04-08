@include('frontend.inc.navbar')
<div id="page-content">
    <!--Dashboard slider-->
    <div class="slideshow slideshow-wrapper pb-section sliderFull">
        <div class="home-slideshow">
            <div class="slide">
                <div class="blur-up lazyload bg-size">
                    <img class="blur-up lazyload bg-img" src="{{url('assets/images/slideshow-banners/banner.jpg')}}"
                        alt="" title="" />
                 
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
                                   
                                    src="assets/images/collection/paint3.jpg" alt="image"
                                    title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="grid-view-item__image hover blur-up lazyload"
                                
                                    src="assets/images/collection/paint3.jpg" alt="image"
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
                                        <a class="compare add-to-compare" href="#"
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
                                    
                                    src="assets/images/collection/paint4.jpg" alt="image"
                                    title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="grid-view-item__image hover blur-up lazyload"
                                    
                                    src="assets/images/collection/paint4.jpg" alt="image"
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
                                        <a class="compare add-to-compare" href="#"
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
                                        <a class="compare add-to-compare" href="#"
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
                                   
                                    src="assets/images/collection/painti1.jpg" alt="image"
                                    title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="grid-view-item__image hover blur-up lazyload"
                                    
                                    src="assets/images/collection/painti1.jpg" alt="image"
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
                                        <a class="compare add-to-compare" href="#"
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
                                    <a href="{{url('/product')}}">Artist 1</a>
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
                                   
                                    src="assets/images/collection/paint4.jpg" alt="image"
                                    title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="grid-view-item__image hover blur-up lazyload"
                                
                                    src="assets/images/collection/paint4.jpg" alt="image"
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
                                    <a href="{{url('/product')}}">Artist 2</a>
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
                                    
                                    src="assets/images/collection/paint3.jpg" alt="image"
                                    title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="grid-view-item__image hover blur-up lazyload"
                                    
                                    src="assets/images/collection/paint3.jpg" alt="image"
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
                                    <a href="{{url('/product')}}">Artist 3</a>
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
                                   
                                    src="assets/images/collection/painti1.jpg" alt="image"
                                    title="product">
                                
                                <img class="grid-view-item__image hover blur-up lazyload"
                                   
                                    src="assets/images/collection/painti1.jpg" alt="image"
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
                                    <a href="{{url('/product')}}">Artist 4</a>
                                </div>
                               
                                <div class="product-price">
                                    
                                    <span class="price">₹788.00</span>
                                </div>
                               
                            </div>
                            
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

@include('frontend.inc.footer')