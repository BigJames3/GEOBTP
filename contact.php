<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>The Metron - Industry and Factory HTML Template | Contact</title>
        <?php include 'head.php';?>
    </head>    
<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->    
 	
    <!-- Main Header / Header Style Two-->
    <?php include 'header.php';?>
    <!--End Main Header -->
    
    <!--Location Section-->
    <section class="location-section" style="background-image:url(images/background/pattern-1.png)">
    	<div class="auto-container">
        	<ul class="page-breadcrumb">
            	<li><a href="index.html">Home</a></li>
                <li>About Us</li>
            </ul>
        	<div class="sec-title centered light">
            	<h2>Visit Our Location</h2>
                <div class="separator"></div>
            </div>
            
            <!--Map Outer-->
            <div class="map-outer">
                <!--Map Canvas-->
                <div class="map-canvas"
                    data-zoom="12"
                    data-lat="-37.817085"
                    data-lng="144.955631"
                    data-type="roadmap"
                    data-hue="#ffc400"
                    data-title="Envato"
                    data-icon-path="images/icons/map-marker.png"
                    data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                </div>
            </div>
            
        </div>
    </section>
    <!--End Page Title-->
    
    <section class="contact-section">
    	<div class="auto-container">
        	
            <!--Title Box-->
            <div class="sec-title">
            	<div class="clearfix">
                	<div class="pull-left">
                    	<h2>Quick Contact</h2>
                        <div class="separator"></div>
                    </div>
                    <div class="text">You have questions? Dont hesitate to contact us, Our supportteam here to <br> help you by 24*7.</div>
                </div>
            </div>
        
        	<div class="inner-container">
            	<div class="clearfix">
                	
                    <!--Info Column-->
                    <div class="info-column col-md-4 col-sm-12 col-xs-12">
                    	<div class="inner-column">
                        	<div class="upper-box">
                            	<ul class="list-style-three">
                                	<li><span class="icon flaticon-technology-2"></span><strong>Call Us: </strong>+321 4567 89 012 & 345</li>
                                    <li><span class="icon flaticon-envelope-1"></span><strong>Mail Us: </strong>Supportteam@Metroindustry.com</li>
                                    <li><span class="icon flaticon-time-1"></span><strong>Office Hrs: </strong>Monday - Satday: 9.00am to 5.00pm</li>
                                </ul>
                            </div>
                            <div class="lower-box">
                            	<div class="lower-inner">
                                	<div class="image">
                                    	<img src="images/resource/author-7.jpg" alt="" />
                                    </div>
                                    <h3>Jenifer Hearly</h3>
                                    <div class="designation">Manager</div>
                                    <div class="emailed">Jenifer@Metroindustry.com</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Form Column-->
                    <div class="form-column col-md-8 col-sm-12 col-xs-12">
                    	<div class="inner-column">
                        	
                            <!-- Contact Form -->
                            <div class="contact-form">
                                <!--Default Form-->
                                <form method="post" action="sendemail.php" id="contact-form">
                                    <div class="row clearfix">
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            <input type="text" name="username" placeholder="Name" required>
                                        </div>
                                        
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            <input type="email" name="email" placeholder="E-Mail" required>
                                        </div>
                                        
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            <input type="text" name="phone" placeholder="Phone" required>
                                        </div>
                                        
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            <input type="text" name="subject" placeholder="Company" required>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <textarea name="message" placeholder="Massage"></textarea>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <button class="theme-btn submit-btn" type="submit" name="submit-form">Submit Now <span class="icon flaticon-right-arrow-1"></span></button>
                                        </div>
                                        
                                    </div>
                                </form>
                                    
                            </div>
                            <!--End Contact Form -->
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
    <!--Quote Form-->
    <?php include 'quoteform.php';?>
    <!-- End of #schedule-box -->
    
    <!--Main Footer-->
    <!--<footer>-->
    <?php include 'footer.php';?>
    <!--</footer>-->
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/validate.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->
</body>
</html>