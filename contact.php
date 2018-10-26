<?php
    $title = "Contact Us || XYZ";
    include 'header.php';
?>
    
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url(assets/images/bg/my-bg-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col">
                    
                    <div class="page-banner text-center">
                        <h1>Contact us</h1>
                        <ul class="page-breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li>Contact us</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->
    
    <!--Contact section start-->
    <div class="conact-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50  pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
        <div class="container">
           
            <div class="row mb-50">
                <div class="col">
                    <div id="contact-map" class="contact-map"></div>
                </div>
            </div>
           
            <div class="row">
                <div class="col-lg-5 col-12 mb-sm-50 mb-xs-50">
                    <div class="contact-information">
                        <h3>Contact Information</h3>
                        <ul>
                            <li>
                                <span class="icon"><i class="pe-7s-map"></i></span>
                                <span class="text"><span>##########</span></span>
                            </li>
                            <li>
                                <span class="icon"><i class="pe-7s-call"></i></span>
                                <span class="text"><a href="tel: +x-xxx-xxx-xxxx">+x-xxx-xxx-xxxx</a></span>
                            </li>
                            <li>
                                <span class="icon"><i class="pe-7s-mail-open"></i></span>
                                <span class="text"><a href="mailto: contact@Xyz.com">contact@Xyz.com</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="contact-form">
                        <h3>Leave Your Message</h3>
                        <form action="mailsend.php" method="post">
                            <div class="row row-10">
                                <div class="col-md-6 col-12 mb-20"><input name="name" type="text" placeholder="Your Name"></div>
                                <div class="col-md-6 col-12 mb-20"><input name="phone" type="text" placeholder="Your Phone"></div>
                                <div class="col-md-12 col-12 mb-20"><input name="email" type="email" placeholder="Your Email"></div>
                                <div class="col-12 mb-20"><input name="subject" type="text" placeholder="Subject"></div>
                                <div class="col-12 mb-20"><textarea name="message" placeholder="Your Message"></textarea></div>
                                <div class="col-12"><button>Send Message</button></div>
                            </div>
                        </form>
                        <p class="form-message"></p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!--Contact section end-->

<?php
    include 'footer.php';
?>