@include('frontend.inc.navbar')

<!--Body Content-->
<div id="page-content">
    <!--Collection Banner-->
    <div class="collection-header">
        <div class="collection-hero">
            <div class="collection-hero__image"><img data-src="assets/images/collection/paint3.jpg" src="assets/images/collection/paint3.jpg" alt="Women" title="Women" /></div>
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
                                            <img class="grid-view-item__image" src="assets/images/collection/paint2.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="details"> <a class="grid-view-item__title" href="#">Painting 1</a>
                                    </div>
                                  </div>
                                </div>
                                
                                <div class="grid__item">
                                  <div class="mini-list-item">
                                    <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="assets/images/collection/paint4.jpg" alt="" /></a> </div>
                                    <div class="details"> <a class="grid-view-item__title" href="#">Painting 2</a>
                                    </div>
                                  </div>
                                </div>
                                <div class="grid__item">
                                  <div class="mini-list-item">
                                    <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="assets/images/collection/paint4.jpg" alt="" /></a> </div>
                                    <div class="details"> <a class="grid-view-item__title" href="#">Painting 3</a>
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
                          <li><a href="#" title="Show products matching tag ₹100 - ₹400">₹100 - ₹400</a></li>
                          <li><a href="#" title="Show products matching tag ₹400 - ₹600">₹400 - ₹600</a></li>
                          <li><a href="#" title="Show products matching tag ₹600 - ₹800">₹600 - ₹800</a></li>
                          <li><a href="#" title="Show products matching tag Above ₹800">Above ₹800</a></li>
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
                    <button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Artist Filters</button>
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
                                    <a href="{{url('/product')}}"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/collection/paint5.jpg" src="assets/images/collection/paint5.jpg" alt="image" title="product"></a>
                                    <!-- End Image -->
                                </div>
                            </div>
                            <div class="list-view-item__title-column">
                                <div class="h4 grid-view-item__title"><a href="{{url('/product')}}">Artist 1</a></div>
                                <!-- Product Review -->
                                <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                               
                                <p>Hello welcome that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                                
                                
                                
                            </div>
                        </div>
                        <!--End ListView Item-->
                        <!--ListView Item-->
                        <div class="list-product list-view-item">
                            <div class="list-view-item__image-column">
                                <div class="list-view-item__image-wrapper">
                                    <!-- Image -->
                                    <a href="{{url('/product')}}"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/collection/paint4.jpg" src="assets/images/collection/paint5.jpg" alt="image" title="product"></a>
                                    <!-- End Image -->
                                </div>
                            </div>
                            <div class="list-view-item__title-column">
                                <div class="h4 grid-view-item__title"><a href="{{url('/product')}}">Artist 2</a></div>
                                <!-- Product Review -->
                                <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></p>
                                <!-- End Product Review -->
                                <!-- Sort Description -->
                                <p>Hello welcome that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                                <!-- End Sort Description -->
                                <!-- Price -->
                               
                                <!-- End Price -->
                                
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

@include('frontend.inc.footer')