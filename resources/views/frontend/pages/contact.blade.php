@extends('frontend/layout.main');
@section('title','Contact')
@section('content')
        <!-- Start page content -->
        <section id="page-content" class="page-wrapper section">

            <!-- ADDRESS SECTION START -->
            <div class="address-section mb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="contact-address box-shadow">
                                <i class="zmdi zmdi-pin"></i>
                                <h6>House 06, Road 01, Katashur, Mohammadpur,</h6>
                                <h6>Dhaka-1207, Bangladesh</h6>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-address box-shadow">
                                <i class="zmdi zmdi-phone"></i>
                                <h6><a href="tel:555-555-1212">555-555-1212</a></h6>
                                <h6><a href="tel:555-555-1212">666-666-1313</a></h6>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-address box-shadow">
                                <i class="zmdi zmdi-email"></i>
                                <h6>companyname@gmail.com</h6>
                                <h6>info@domainname.com</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ADDRESS SECTION END --> 
            
            <!-- GOOGLE MAP SECTION START -->
            <div class="google-map-section">
                <div class="container-fluid">
                    <div class="google-map plr-185">
                        <div id="googleMap">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7817670.208996176!2d96.15269849999999!3d16.914348799999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smm!4v1578029474486!5m2!1sen!2smm" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!-- GOOGLE MAP SECTION END -->
            
            <!-- MESSAGE BOX SECTION START -->
            <div class="message-box-section mt--50 mb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="message-box box-shadow white-bg">
                                <form id="contact-form" action="mail.php" method="post">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4 class="blog-section-title border-left mb-30">get in touch</h4>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" name="name" placeholder="Your name here">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" name="email" placeholder="Your email here">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" name="subject" placeholder="Subject here">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" name="phone" placeholder="Your phone here">
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea class="custom-textarea" name="message" placeholder="Message"></textarea>
                                            <button class="submit-btn-1 mt-30 btn-hover-1" type="submit">submit message</button>
                                        </div>
                                    </div>
                                </form>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MESSAGE BOX SECTION END --> 
        </section>
        <!-- End page content -->
        @endsection