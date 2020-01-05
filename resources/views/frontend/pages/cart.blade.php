@extends('frontend/layout.main');
@section('title','Your Shopping Cart')
@section('content')

            <!-- Start page content -->
            <section id="page-content" class="page-wrapper section">

                <!-- SHOP SECTION START -->
                <div class="shop-section mb-80">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2">
                                <ul class="cart-tab">
                                    <li>
                                        <a class="active" href="#shopping-cart" data-toggle="tab">
                                            <span>01</span>
                                            Shopping cart
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#wishlist" data-toggle="tab">
                                            <span>02</span>
                                            Wishlist
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#checkout" data-toggle="tab">
                                            <span>03</span>
                                            Checkout
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#order-complete" data-toggle="tab">
                                            <span>04</span>
                                            Order complete
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-10">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- shopping-cart start -->
                                    <div class="tab-pane active" id="shopping-cart">
                                        <div class="shopping-cart-content">
                                            <form action="#">
                                                <div class="table-content table-responsive mb-50">
                                                    <table class="text-center">
                                                        <thead>
                                                            <tr>
                                                                <th class="product-thumbnail">product</th>
                                                                <th class="product-price">price</th>
                                                                <th class="product-quantity">Quantity</th>
                                                                <th class="product-subtotal">total</th>
                                                                <th class="product-remove">remove</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <!-- tr -->
                                                            <tr>
                                                                <td class="product-thumbnail">
                                                                    <div class="pro-thumbnail-img">
                                                                    <img src="{{asset('frontend/images/test_img/product1.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="pro-thumbnail-info text-left">
                                                                        <h6 class="product-title-2">
                                                                            <a href="#">dummy product name</a>
                                                                        </h6>
                                                                        <p>Brand: Brand Name</p>
                                                                        <p>Model: Grand s2</p>
                                                                        <p> Color: Black, White</p>
                                                                    </div>
                                                                </td>
                                                                <td class="product-price">$560.00</td>
                                                                <td class="product-quantity">
                                                                    <div class="cart-plus-minus f-left">
                                                                        <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                                    </div>
                                                                </td>
                                                                <td class="product-subtotal">$1020.00</td>
                                                                <td class="product-remove">
                                                                    <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                                </td>
                                                            </tr>
                                                            <!-- tr -->
                                                            <tr>
                                                                <td class="product-thumbnail">
                                                                    <div class="pro-thumbnail-img">
                                                                        <img src="{{asset('frontend/images/test_img/product2.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="pro-thumbnail-info text-left">
                                                                        <h6 class="product-title-2">
                                                                            <a href="#">dummy product name</a>
                                                                        </h6>
                                                                        <p>Brand: Brand Name</p>
                                                                        <p>Model: Grand s2</p>
                                                                        <p> Color: Black, White</p>
                                                                    </div>
                                                                </td>
                                                                <td class="product-price">$560.00</td>
                                                                <td class="product-quantity">
                                                                    <div class="cart-plus-minus f-left">
                                                                        <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                                    </div>
                                                                </td>
                                                                <td class="product-subtotal">$1020.00</td>
                                                                <td class="product-remove">
                                                                    <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                                </td>
                                                            </tr>
                                                            <!-- tr -->
                                                            <tr>
                                                                <td class="product-thumbnail">
                                                                    <div class="pro-thumbnail-img">
                                                                        <img src="{{asset('frontend/images/test_img/product3.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="pro-thumbnail-info text-left">
                                                                        <h6 class="product-title-2">
                                                                            <a href="#">dummy product name</a>
                                                                        </h6>
                                                                        <p>Brand: Brand Name</p>
                                                                        <p>Model: Grand s2</p>
                                                                        <p> Color: Black, White</p>
                                                                    </div>
                                                                </td>
                                                                <td class="product-price">$560.00</td>
                                                                <td class="product-quantity">
                                                                    <div class="cart-plus-minus f-left">
                                                                        <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                                    </div>
                                                                </td>
                                                                <td class="product-subtotal">$1020.00</td>
                                                                <td class="product-remove">
                                                                    <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="coupon-discount box-shadow p-30 mb-50">
                                                            <h6 class="widget-title border-left mb-20">coupon discount</h6>
                                                            <p>Enter your coupon code if you have one!</p>
                                                            <input type="text" name="name" placeholder="Enter your code here.">
                                                            <button class="submit-btn-1 black-bg btn-hover-2" type="submit">apply coupon</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="payment-details box-shadow p-30 mb-50">
                                                            <h6 class="widget-title border-left mb-20">payment details</h6>
                                                            <table>
                                                                <tr>
                                                                    <td class="td-title-1">Cart Subtotal</td>
                                                                    <td class="td-title-2">$155.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="td-title-1">Shipping and Handing</td>
                                                                    <td class="td-title-2">$15.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="td-title-1">Vat</td>
                                                                    <td class="td-title-2">$00.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="order-total">Order Total</td>
                                                                    <td class="order-total-price">$170.00</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="culculate-shipping box-shadow p-30">
                                                            <h6 class="widget-title border-left mb-20">culculate shipping</h6>
                                                            <p>Enter your coupon code if you have one!</p>
                                                            <div class="row">
                                                                <div class="col-sm-4 col-xs-12">
                                                                    <input type="text"  placeholder="Country">
                                                                </div>
                                                                <div class="col-sm-4 col-xs-12">
                                                                    <input type="text"  placeholder="Region / State">
                                                                </div>
                                                                <div class="col-sm-4 col-xs-12">
                                                                    <input type="text"  placeholder="Post code">
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <button class="submit-btn-1 black-bg btn-hover-2">get a quote</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SHOP SECTION END -->

            </section>
            <!-- End page content -->



@endsection





