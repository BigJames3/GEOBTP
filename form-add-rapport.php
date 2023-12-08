<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>The Metron - Industry and Factory HTML Template | Homepage Style Two</title>
        <?php include 'head.php';?>
    </head>    
<body>

<div class="page-wrapper"> 	
    <!-- Preloader -->     	
    <!-- Main Header / Header Style Two-->
    <?php include 'header.php';?>
    <!--End Main Header -->
    
    <!--Page Title-->
    <section class="page-title shop-title" style="background-image:url(images/background/14.jpg);padding: 20px 0px 20px;">
        <div class="auto-container">
            <ul class="page-breadcrumb">
                <li><a href="index.html">GEOBTP</a></li>
                <li>Rapports</li>
            </ul>            
        	<h1 style="margin-top: 5px;color:#F0FA00">NEW RAPPORT <?php echo date("Y");?></h1>
        </div>
    </section>
    <!--End Page Title-->
	<style>
        .checkout-page .row .field-label{text-transform: uppercase;}
    </style>
    <!--CheckOut Page-->
    <div class="checkout-page">
    	<div class="auto-container">
        	<!--Checkout Details-->
            <div class="checkout-form">
                <form method="post" action="enregistrer.php">
                    <div class="row">
                    	<!--Column-->
                        <div class="col-md-6 ">
                            <div class="checkout-title">
                            	<h2>ENREGISTREMENT DE RAPPORT</h2>
                            </div>
                            <div class="row justify-content-center clearfix">                            
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">ENTREPRISE<sup>*</sup></div>
                                    <input type="text" name="entreprise" value="" placeholder="Nom entreprise" required>
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Titre de rapport<sup>*</sup></div>
                                    <input type="text" name="titre_rapport" value="" placeholder="" required>
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Abreviation du titre de rapport <sup>*</sup></div>
                                    <input type="text" name="abreviation" value="" placeholder="" required>
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Lieu des traveaux <sup>*</sup></div>
                                    <input type="text" name="lieux_des_traveaux" value="" placeholder="" required>
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Nom du correspondant <sup>*</sup></div>
                                    <input type="text" name="correspondents_name" value="" placeholder="" required>
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Addresse Email  <sup>*</sup></div>
                                    <input type="text" name="adresse_mail" value="" placeholder="" required>
                                </div>
                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Numéro<sup>*</sup></div>
                                    <input type="number" name="numero_correspondant" value="" placeholder="">
                                </div>
                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Date enregistrement<sup>*</sup></div>
                                    <input type="date" name="date_enregistrement" value="" placeholder="Date enregistrement">
                                </div>
                                
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                	<div class="check-box"><label for="account-option"><strong>NB: &ensp; </strong> Vérifiez les informations avant de valider.</label></div>
                                </div>                                
                            </div>
                            <button type="submit" class="theme-btn btn-style-one place-order">Enregistrer</button>
                        </div>
                        <!--Column-->                        
                    </div>
                </form>
            </div>
            <!--End Checkout Details-->
            
       </div>
       
       <!--Lower Content-->
        <div class="lower-content">
        	<div class="auto-container">
                <div class="row clearfix">
                    <!--Order Column-->
                    <div class="order-column column col-md-6 col-sm-12 col-xs-12">
                        <!--Sec Title-->
                        <div class="checkout-title">
                            <h2>Order Summary</h2>
                        </div>
                        <div class="cart-outer">
                            <table class="cart-table">
                                <thead class="cart-header">
                                    <tr>
                                        <th class="prod-column">Product</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
    
                                <tbody>
                                
                                    <tr>
                                        <td class="prod-column">
                                            <div class="column-box">
                                                <figure class="prod-thumb"><img src="images/resource/products/prod-thumb-4.jpg" alt=""></figure>
                                                <h4 class="prod-title">The Innovators Dilemma</h4>
                                            </div>
                                        </td>
                                        <td class="qty"><input type="text" /></td>
                                        <td class="sub-total">$34.99</td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="prod-column">
                                            <div class="column-box">
                                                <figure class="prod-thumb"><img src="images/resource/products/prod-thumb-5.jpg" alt=""></figure>
                                                <h4 class="prod-title">Good to Great Look</h4>
                                            </div>
                                        </td>
                                        <td class="qty"><input type="text" /></td>
                                        <td class="sub-total">$29.99</td>
                                    </tr>
                                    
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                    <!--Cart Column-->
                    <div class="column col-md-6 col-sm-12 col-xs-12">
                        <!--Sec Title-->
                        <div class="checkout-title">
                            <h2>Cart Totals</h2>
                        </div>
                        <!--Totals Table-->
                        <ul class="totals-table">
                            <li class="clearfix"><span class="col title">Cart Subtotal</span><span class="col">$146.00</span></li>
                            <li class="clearfix"><span class="col title">Shipping and Handling</span><span class="col total">Free Shipping</span></li>
                            <li class="clearfix"><span class="col title">Order Total</span><span class="col total">$146.00</span></li>
                        </ul>
                        
                        <!--Payment Options-->
                        <div class="payment-options">
                            <ul>
                                <li>
                                    <div class="radio-option">
                                        <input type="radio" name="payment-group" id="payment-1" checked>
                                        <label for="payment-1"><strong>Direct Bank Transfer</strong><span class="small-text">Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</span></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-option">
                                        <input type="radio" name="payment-group" id="payment-3">
                                        <label for="payment-3"><strong>Paypal <a href="#">What is Paypal</a></strong></label>
                                    </div>
                                </li>
                            </ul>
                            <button type="button" class="theme-btn btn-style-one place-order">Place Order</button>
                        </div>
                        <!--End Place Order-->
                        
                    </div>
                </div>
            </div>
        </div>
        <!--End Lower Content-->
       
   </div>
    <!--End CheckOut Page-->
    
    <!--Quote Form-->
    <div class="modal fade" id="schedule-box" tabindex="-1" role="dialog">
      <div class="modal-dialog popup-container container" role="document">
        <div class="modal-content">
            <div class="appoinment_form_wrapper clear_fix">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
                <div class="get-quote-form" style="background-image:url(images/background/13.jpg)">
                	<div class="inner-box">
                    	<!--Sec Title-->
                        <div class="sec-title">
                        	<div class="clearfix">
                            	<div class="pull-left">
                                	<h2>Get a Quote</h2>
                                    <div class="separator centered"></div>
                                </div>
                                <div class="pull-left">
                                	<div class="text">Get a free quote for your industrial or engineering business solutions, We are here 24/7.</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Quote Form / Style Two-->
                        <div class="quote-form style-two">
                            <!--Shipping Form-->
                            <form method="post" action="contact.html">
                                <div class="row clearfix">
                                	<div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="text" placeholder="Your Name" required>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="text" placeholder="Company Name" required>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="text" placeholder="Phone" required>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <select class="custom-select-box">
                                            <option>Select Needed Service</option>
                                            <option>Services One</option>
                                            <option>Services Two</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <textarea placeholder="Your Message..."></textarea>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">Send Now <span class="icon flaticon-arrow-pointing-to-right"></span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div> 
        </div> 
      </div> 
      <a href="index.html" class="backhome">Back to Home <span class="icon flaticon-arrow-pointing-to-right"></span></a>
    </div>
    <!-- End of Quote box -->
    
    <!--Main Footer-->
    <footer class="main-footer">
    	<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!--Column-->
                    <div class="column col-md-5 col-sm-6 col-xs-12">
						<div class="footer-widget logo-widget">
							<div class="logo">
                            	<a href="index.html"><img src="images/footer-logo.png" alt="" /></a>
                            </div>
                            <div class="widget-content">
                            	<div class="text">Global Street 5004, Newyork, United States.</div>
                                <ul class="list">
                                	<li>+0 625-07520-6644 </li>
                                    <li>Mailus@Metroindustry.com</li>
                                </ul>
                                <div class="timing">
                                	<span>Visit Our Office:</span>Monday - Satday: 9.00am to 5.00pm
                                </div>
                                <ul class="social-icon-one">
                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!--Column-->
                    <div class="column col-md-4 col-sm-6 col-xs-12">
						<div class="footer-widget links-widget">
                        	<div class="footer-title">
                            	<h2>Usefull Links</h2>
                            </div>
                            <div class="row clearfix">
                                <div class="column col-md-6 col-sm-6 col-xs-12">
                                	<ul class="links">
                                    	<li><a href="#">About Us</a></li>
                                        <li><a href="#">Meet Our Team</a></li>
                                        <li><a href="#">Case Studies</a></li>
                                        <li><a href="#">Get a Quote</a></li>
                                        <li><a href="#">Testimonials</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                                <div class="column col-md-6 col-sm-6 col-xs-12">
                                	<ul class="links">
                                    	<li><a href="#">Market Sectors</a></li>
                                        <li><a href="#">Industries</a></li>
                                        <li><a href="#">News</a></li>
                                        <li><a href="#">Why Choose Us</a></li>
                                        <li><a href="#">Sustainability</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Column-->
                    <div class="column col-md-3 col-sm-6 col-xs-12">
						<div class="footer-widget material-widget">
                        	<div class="footer-title">
                            	<h2>Our Materials</h2>
                            </div>
                            <ul class="list-style-two">
                            	<li><span class="icon flaticon-doc"></span><a href="#">Company Investors</a>Year 2017-18</li>
                                <li><span class="icon flaticon-doc"></span><a href="#">Industrial Training</a>For Constructors</li>
                                <li><span class="icon flaticon-pdf"></span><a href="#">Company Growth</a>In Last 3 Years</li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="footer-bottom">
        	<div class="auto-container">
                <div class="row clearfix">
                    
                    <!--Title Column-->
                    <div class="title-column col-md-5 col-sm-12 col-xs-12">
                        <div class="text"><span class="icon flaticon-rss-updates-subscription"></span> Keep up to date, Get latest updates, news and special offers in your inbox...</div>
                    </div>
                    <!--Subscribe Column-->
                    <div class="subscribe-column col-md-7 col-sm-12 col-xs-12">
                        <div class="subscribe-form">
                            <form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="email" name="email" value="" placeholder="Your E-mail Address..." required="">
                                    <button type="submit" class="theme-btn">Subscribe Us <span class="flaticon-right-arrow-1"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
                
                <div class="copyright">Copyright © 2012-2018 <a href="#">The Metron Industry</a> Theme by <a href="#">Themekalia.</a> All rights reserved.</div>
                
            </div>
        </div>
    </footer>
    <!--End Main Footer-->
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery.bootstrap-touchspin.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>
</body>
</html>