@extends('frontend/layout.main');
@section('title','Single Product')
@section('content')

        <!-- Start page content -->
        <section id="page-content" class="page-wrapper section">

            <!-- SHOP SECTION START -->
            <div class="shop-section mb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <!-- single-product-area start -->
                            <div class="single-product-area mb-80">
                                <div class="row">
                                    <!-- imgs-zoom-area start -->
                                    <div class="col-lg-5">
                                        <div class="imgs-zoom-area">
                                            <img id="zoom_03" src="{{asset('frontend/images/test_img/product3.jpg')}}" data-zoom-image="{{asset('frontend/images/test_img/product3.jpg')}}" alt="">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div id="gallery_01" class="carousel-btn slick-arrow-3 mt-30">
                                                        <div class="p-c">
                                                            <a href="#" data-image="{{asset('frontend/images/test_img/product2.jpg')}}" data-zoom-image="{{asset('frontend/images/test_img/product2.jpg')}}">
                                                                <img class="zoom_03" src="{{asset('frontend/images/test_img/product1.jpg')}}" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="p-c">
                                                            <a href="#" data-image="{{asset('frontend/images/test_img/product1.jpg')}}" data-zoom-image="{{asset('frontend/images/test_img/product1.jpg')}}">
                                                                <img class="zoom_03" src="{{asset('frontend/images/test_img/product3.jpg')}}" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="p-c">
                                                            <a href="#" data-image="{{asset('frontend/images/test_img/product2.jpg')}}" data-zoom-image="{{asset('frontend/images/test_img/product2.jpg')}}">
                                                                <img class="zoom_03" src="{{asset('frontend/images/test_img/product2.jpg')}}" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="p-c">
                                                            <a href="#" data-image="{{asset('frontend/images/test_img/product2.jpg')}}" data-zoom-image="{{asset('frontend/images/test_img/product2.jpg')}}">
                                                                <img class="zoom_03" src="{{asset('frontend/images/test_img/product1.jpg')}}" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="p-c">
                                                            <a href="#" data-image="{{asset('frontend/images/test_img/product1.jpg')}}" data-zoom-image="{{asset('frontend/images/test_img/product1.jpg')}}">
                                                                <img class="zoom_03" src="{{asset('frontend/images/test_img/product1.jpg')}}" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="p-c">
                                                            <a href="#" data-image="{{asset('frontend/images/test_img/product1.jpg')}}" data-zoom-image="{{asset('frontend/images/test_img/product1.jpg')}}">
                                                                <img class="zoom_03" src="{{asset('frontend/images/test_img/product1.jpg')}}" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- imgs-zoom-area end -->
                                    <!-- single-product-info start -->
                                    <div class="col-lg-7"> 
                                        <div class="single-product-info">
                                            <h3 class="text-black-1">Dummy Product Name </h3>
                                            <h6 class="brand-name-2">brand name</h6>
                                            <!--  hr -->
                                            <hr>
                                            <!-- single-pro-color-rating -->
                                            <div class="single-pro-color-rating clearfix">
                                                <div class="sin-pro-color f-left">
                                                    <p class="color-title f-left">Color</p>
                                                    <div class="widget-color f-left">
                                                        <ul>
                                                            <li class="color-1"><a href="#"></a></li>
                                                            <li class="color-2"><a href="#"></a></li>
                                                            <li class="color-3"><a href="#"></a></li>
                                                            <li class="color-4"><a href="#"></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <!-- hr -->
                                            <hr>
                                            <!-- plus-minus-pro-action -->
                                            <div class="plus-minus-pro-action clearfix">
                                                <div class="sin-plus-minus f-left clearfix">
                                                    <p class="color-title f-left">Qty</p>
                                                    <div class="cart-plus-minus f-left">
                                                        <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                    </div>   
                                                </div>
                                                <div class="sin-pro-action f-right">
                                                    <ul class="action-button">
                                                        <li>
                                                            <a href="#" title="Wishlist" tabindex="0"><i class="zmdi zmdi-favorite"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" data-toggle="modal" data-target="#productModal" title="Quickview" tabindex="0"><i class="zmdi zmdi-zoom-in"></i></a>
                                                        </li>
                                                        
                                                        <li>
                                                            <a href="#" title="Add to cart" tabindex="0"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- plus-minus-pro-action end -->
                                            <!-- hr -->
                                            <hr>
                                            <!-- single-product-price -->
                                            <h3 class="pro-price">Price: $ 869.00</h3>
                                            <!--  hr -->
                                            <hr>
											<div>
												<a href="#" class="button extra-small button-black" tabindex="-1">
													<span class="text-uppercase">Buy now</span>
												</a>
											</div>
                                        </div>    
                                    </div>
                                    <!-- single-product-info end -->
                                </div>
								<!-- single-product-tab -->
								<div class="row">
									<div class="col-lg-12">
										<!-- hr -->
										<hr>
										<div class="single-product-tab reviews-tab">
											<ul class="nav mb-20">
												<li><a class="active" href="#description" data-toggle="tab">description</a></li>
												<li ><a href="#information" data-toggle="tab">information</a></li>
												<li ><a href="#reviews" data-toggle="tab">reviews</a></li>
											</ul>
											<div class="tab-content">
												<div role="tabpanel" class="tab-pane active show" id="description">
													<p>There are many variations of passages of Lorem Ipsum available, but the majo Rity have be suffered alteration in some form, by injected humou or randomis Rity have be suffered alteration in some form, by injected humou or randomis words which donot look even slightly believable. If you are going to use a passage Lorem Ipsum.</p>
													<p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem. rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>
												</div>
												<div role="tabpanel" class="tab-pane" id="information">
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, neque fugit inventore quo dignissimos est iure natus quis nam illo officiis,  deleniti consectetur non ,aspernatur.</p>
													<p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>
												</div>
												<div role="tabpanel" class="tab-pane" id="reviews">
													<!-- reviews-tab-desc -->
													<div class="reviews-tab-desc">
														<!-- single comments -->
														<div class="media mt-30">
															<div class="media-left">
																<a href="#"><img class="media-object" src="frontend/img/author/1.jpg" alt="#"></a>
															</div>
															<div class="media-body">
																<div class="clearfix">
																	<div class="name-commenter pull-left">
																		<h6 class="media-heading"><a href="#">Gerald Barnes</a></h6>
																		<p class="mb-10">27 Jun, 2019 at 2:30pm</p>
																	</div>
																	<div class="pull-right">
																		<ul class="reply-delate">
																			<li><a href="#">Reply</a></li>
																			<li>/</li>
																			<li><a href="#">Delate</a></li>
																		</ul>
																	</div>
																</div>
																<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas .</p>
															</div>
														</div>
														<!-- single comments -->
														<div class="media mt-30">
															<div class="media-left">
																<a href="#"><img class="media-object" src="frontend/img/author/2.jpg" alt="#"></a>
															</div>
															<div class="media-body">
																<div class="clearfix">
																	<div class="name-commenter pull-left">
																		<h6 class="media-heading"><a href="#">Gerald Barnes</a></h6>
																		<p class="mb-10">27 Jun, 2019 at 2:30pm</p>
																	</div>
																	<div class="pull-right">
																		<ul class="reply-delate">
																			<li><a href="#">Reply</a></li>
																			<li>/</li>
																			<li><a href="#">Delate</a></li>
																		</ul>
																	</div>
																</div>
																<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas .</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--  hr -->
										<hr>
									</div>
								</div>
                            </div>
                            <!-- single-product-area end -->
                            <div class="related-product-area">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-title text-left mb-40">
                                            <h2 class="uppercase">related product</h2>
                                            <h6>There are many variations of passages of brands available,</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="active-related-product">
                                    <!-- product-item start -->
                                    <div class="col-lg-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img src="{{asset('frontend/images/test_img/product3.jpg')}}" alt="" />
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="single-product.html">Product Name</a>
                                                </h6>
                                              
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#productModal" title="Quickview"><i
                                                                class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    
                                                    <li>
                                                        <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-lg-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img src="{{asset('frontend/images/test_img/product3.jpg')}}" alt="" />
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="single-product.html">Product Name</a>
                                                </h6>
                                               
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#productModal" title="Quickview"><i
                                                                class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    
                                                    <li>
                                                        <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-lg-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img src="{{asset('frontend/images/test_img/product1.jpg')}}" alt="" />
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="single-product.html">Product Name</a>
                                                </h6>
                                                
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#productModal" title="Quickview"><i
                                                                class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    
                                                    <li>
                                                        <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-lg-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img src="{{asset('frontend/images/test_img/product3.jpg')}}" alt="" />
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="single-product.html">Product Name</a>
                                                </h6>
                                                
                                                <h3 class="pro-price">$ 869.00</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#productModal" title="Quickview"><i
                                                                class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                   
                                                    <li>
                                                        <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <!-- widget-search -->
                            <aside class="widget-search mb-30">
                                <form action="#">
                                    <input type="text" placeholder="Search here...">
                                    <button type="submit"><i class="zmdi zmdi-search"></i></button>
                                </form>
                            </aside>
                            <!-- widget-categories -->
                            <aside class="widget widget-categories box-shadow mb-30">
                                <h6 class="widget-title border-left mb-20">Categories</h6>
                                <div id="cat-treeview" class="product-cat">
                                    <ul>
                                        <li class="closed"><a href="#">Brand One</a>
                                            <ul>
                                                <li><a href="#">Mobile</a></li>
                                                <li><a href="#">Tab</a></li>
                                                <li><a href="#">Watch</a></li>
                                                <li><a href="#">Head Phone</a></li>
                                                <li><a href="#">Memory</a></li>
                                            </ul>
                                        </li>                                       
                                        <li class="open"><a href="#">Brand Two</a>
                                            <ul>
                                                <li><a href="#">Mobile</a></li>
                                                <li><a href="#">Tab</a></li>
                                                <li><a href="#">Watch</a></li>
                                                <li><a href="#">Head Phone</a></li>
                                                <li><a href="#">Memory</a></li>
                                            </ul>
                                        </li>
                                        <li class="closed"><a href="#">Accessories</a>
                                            <ul>
                                                <li><a href="#">Footwear</a></li>
                                                <li><a href="#">Sunglasses</a></li>
                                                <li><a href="#">Watches</a></li>
                                                <li><a href="#">Utilities</a></li>
                                            </ul>
                                        </li>
                                        <li class="closed"><a href="#">Top Brands</a>
                                            <ul>
                                                <li><a href="#">Mobile</a></li>
                                                <li><a href="#">Tab</a></li>
                                                <li><a href="#">Watch</a></li>
                                                <li><a href="#">Head Phone</a></li>
                                                <li><a href="#">Memory</a></li>
                                            </ul>
                                        </li>
                                        <li class="closed"><a href="#">Jewelry</a>
                                            <ul>
                                                <li><a href="#">Footwear</a></li>
                                                <li><a href="#">Sunglasses</a></li>
                                                <li><a href="#">Watches</a></li>
                                                <li><a href="#">Utilities</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                           
                            <!-- widget-product -->
                            <aside class="widget widget-product box-shadow">
                                <h6 class="widget-title border-left mb-20">recent products</h6>
                                <!-- product-item start -->
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img src="frontend/img/product/4.jpg" alt=""/>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                            <a href="single-product.html">Product Name</a>
                                        </h6>
                                        <h3 class="pro-price">$ 869.00</h3>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img src="frontend/img/product/8.jpg" alt=""/>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                            <a href="single-product.html">Product Name</a>
                                        </h6>
                                        <h3 class="pro-price">$ 869.00</h3>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img src="frontend/img/product/12.jpg" alt=""/>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                            <a href="single-product.html">Product Name</a>
                                        </h6>
                                        <h3 class="pro-price">$ 869.00</h3>
                                    </div>
                                </div>
                                <!-- product-item end -->                               
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SHOP SECTION END -->             

        </section>
        <!-- End page content -->


@endsection
,