
<?php
//session_start();

// Vérifier si l'utilisateur est connecté
//if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  //  header("location: account.php"); // Redirection vers la page de connexion si l'utilisateur n'est pas connecté
    //exit;
//}
// Le reste du contenu de la page formulaire.php ici
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>The Metron - Industry and Factory HTML Template | Check-Out</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<!--<link href="css/color.css" rel="stylesheet">-->

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    <header class="main-header">
    
    	<!-- Header Top -->
    	<div class="header-top">
        	<div class="auto-container">
            	<div class="top-outer clearfix">
                    
                    <!--Top Left-->
                    <div class="top-left">
                    	<ul class="links clearfix">
                        	<li><a href="#"><span class="icon fa fa-phone"></span>  +0 625-07520-6644</a></li>
                            <li><a href="#"><span class="icon fa fa-envelope-o"></span>Mailus@Metroindustry.com</a></li>
                            <li><a href="#"><span class="icon flaticon-placeholder-2"></span>Locate Us</a></li>
                            <li><a href="#"><a href="deconnexion.php">Se déconnecter</a></a></li>
                             <!-- Lien pour se déconnecter -->
                        </ul>
                    </div>
                    
                    <!--Top Right-->
                    <div class="top-right clearfix">
                    	<ul class="clearfix">
                        	<li><a href="#">Careers</a></li>
                            <li><a href="#">Feedback</a></li>
                            <li><a href="#">Updates</a></li>
                            <!--Language-->
                            <li class="language dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"><span class="flag-img"><img src="images/icons/flag.jpg" alt="" /></span>English &nbsp;<span class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu2">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">Arabic</a></li>
                                    <li><a href="#">Hindi</a></li>
                                </ul>
                            </li>
                        </ul>                        
                    </div>
                    
                </div>
                
            </div>
        </div>
        <!-- Header Top End -->
        
        <!-- Main Box -->
    	<div class="main-box">
        	<div class="auto-container">
            	<div class="outer-container clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo"><a href="index.html"><img src="images/logo.png" alt=""></a></div>
                    </div>
                    
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                    
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->    	
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="dropdown"><a href="#">Home</a>
                                    	<ul>
                                            <li><a href="index.html">Homepage 01</a></li>
                                            <li><a href="index-2.html">Homepage 02</a></li>
                                            <li><a href="index-3.html">Homepage 03</a></li>
                                            <li><a href="index-4.html">Homepage 04</a></li>
                                            <li class="dropdown"><a href="#">Header Styles</a>
                                                <ul>
                                                    <li><a href="index.html">Header Style One</a></li>
                                                    <li><a href="index-2.html">Header Style Two</a></li>
                                                    <li><a href="index-3.html">Header Style Three</a></li>
                                                    <li><a href="index-4.html">Header Style Four</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About us</a></li>
                                    <li class="dropdown"><a href="#">Market Sectors</a>
                                    	<ul>
                                            <li><a href="market-sectors.html">Market Sectors</a></li>
                                            <li><a href="market-single.html">Market Sector Single</a></li>
                                        </ul>
                                    </li>
                                    <li class="current has-mega-menu dropdown"><a href="#">Pages</a>
                                    	<div class="mega-menu" style="background-image:url(images/background/mega-menu-layer.png)">
                                            <div class="mega-menu-bar row clearfix">
                                                <div class="column col-md-3 col-sm-3 col-xs-12">
                                                    <h3>Shop</h3>
                                                    <ul>
                                                        <li><a href="shop.html">Shop Prodcuts</a></li>
                                                        <li><a href="shop-single.html">Prodcut Single</a></li>
                                                        <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="account.html">My Account</a></li>
                                                    </ul>
                                                </div>
                                                <div class="column col-md-3 col-sm-3 col-xs-12">
                                                    <h3>Others</h3>
                                                    <ul>
                                                        <li><a href="testimonial.html">Testimonials</a></li>
                                                        <li><a href="faq.html">FAQ’s</a></li>
                                                        <li><a href="error-page.html">404</a></li>
                                                        <li><a href="maintenance.html">Maintenance</a></li>
                                                    </ul>
                                                </div>
                                                <div class="column col-md-3 col-sm-3 col-xs-12">
                                                    <h3>Blog & News</h3>
                                                    <ul>
                                                        <li><a href="blog.html">Blog Default</a></li>
                                                        <li><a href="blog-classic.html">Blog Large Image</a></li>
                                                        <li><a href="blog-detail.html">Single Post</a></li>
                                                    </ul>
                                                </div>
                                                <div class="column col-md-3 col-sm-3 col-xs-12">
                                                    <h3>Projects</h3>
                                                    <ul>
                                                        <li><a href="projects.html">Projects Default</a></li>
                                                        <li><a href="projects-modern.html">Projects Modern</a></li>
                                                        <li><a href="projects-single.html">Single Project</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                 </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                        
                        <!--Outer Box-->
                        <div class="outer-box">
                            <a href="#" class="theme-btn quote-btn" data-toggle="modal" data-target="#schedule-box">Get a Quote <span class="icon"></span></a>
                            <ul class="social-icon-one">
                            	<li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                            </ul>
                        </div>
                        
                    </div>
                    <!--Nav Outer End-->
                    
            	</div>    
            </div>
        </div>
    	
        <!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container">
            	
                <div class="outer-container clearfix">
                    <!--Logo Box-->
                    <div class="logo-box pull-left">
                        <div class="logo"><a href="index.html"><img src="images/logo-small.png" alt=""></a></div>
                    </div>
                    
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->    	
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="dropdown"><a href="#">Home</a>
                                    	<ul>
                                            <li><a href="index.html">Homepage 01</a></li>
                                            <li><a href="index-2.html">Homepage 02</a></li>
                                            <li><a href="index-3.html">Homepage 03</a></li>
                                            <li><a href="index-4.html">Homepage 04</a></li>
                                            <li class="dropdown"><a href="#">Header Styles</a>
                                                <ul>
                                                    <li><a href="index.html">Header Style One</a></li>
                                                    <li><a href="index-2.html">Header Style Two</a></li>
                                                    <li><a href="index-3.html">Header Style Three</a></li>
                                                    <li><a href="index-4.html">Header Style Four</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">About Us</a>
                                    	<ul>
                                            <li><a href="about.html">About us</a></li>
                                            <li><a href="testimonial.html">Testimonials</a></li>
                                            <li><a href="faq.html">FAQ’s</a></li>
                                            <li><a href="error-page.html">404</a></li>
                                            <li><a href="maintenance.html">Maintenance</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Market Sectors</a>
                                    	<ul>
                                            <li><a href="market-sectors.html">Market Sectors</a></li>
                                            <li><a href="market-single.html">Market Sector Single</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Projects</a>
                                    	<ul>
                                            <li><a href="projects.html">Projects Default</a></li>
                                            <li><a href="projects-modern.html">Projects Modern</a></li>
                                            <li><a href="projects-single.html">Single Project</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Blogs</a>
                                    	<ul>
                                            <li><a href="blog.html">Blog Default</a></li>
                                            <li><a href="blog-classic.html">Blog Large Image</a></li>
                                            <li><a href="blog-detail.html">Single Post</a></li>
                                        </ul>
                                    </li>
                                    <li class="current dropdown"><a href="#">Shops</a>
                                    	<ul>
                                            <li><a href="shop.html">Shop Prodcuts</a></li>
                                            <li><a href="shop-single.html">Prodcut Single</a></li>
                                            <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="account.html">My Account</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                 </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                        
                    </div>
                    <!--Nav Outer End-->
                    
            	</div>
                
            </div>
        </div>
        <!--End Sticky Header-->
        
    </header>
    <!--End Main Header -->
    
    <!--Page Title-->
    <section class="page-title shop-title" style="background-image:url(images/background/14.jpg)">
    	<div class="auto-container">
        	<ul class="page-breadcrumb">
            	<li><a href="index.html">Home</a></li>
                <li>Checkout</li>
            </ul>
        	<h1>Checkout</h1>
        </div>
    </section>
    <!--End Page Title-->
	
    <!--CheckOut Page-->
    <div class="checkout-page">
    	<div class="auto-container">
        
        	<!--Default Links-->
            <ul class="default-links">
                <li>Exisitng Customer? <a href="#">Click here to login</a></li>
                <li>Have a coupon? <a href="#">Click here to enter your code</a></li>
            </ul>
        	<!--Checkout Details-->
            <div class="checkout-form">
                <form method="post" action="checkout.html">
                    <div class="row clearfix">
                    	<!--Column-->
                        <div class="column col-md-6 col-sm-12 col-xs-12">
                            <div class="checkout-title">
                            	<h2>Billing Address</h2>
                            </div>
                            <div class="row clearfix">
                            
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Country <sup>*</sup></div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">First Name <sup>*</sup></div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Last Name <sup>*</sup></div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Address <sup>*</sup></div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Town / City <sup>*</sup></div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Contact Info <sup>*</sup></div>
                                    <input type="text" name="field-name" value="" placeholder="Email Address">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" name="field-name" value="" placeholder="Phone Number">
                                </div>
                                
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                	<div class="check-box"><input type="checkbox" name="shipping-option" id="account-option"> &ensp; <label for="account-option">Create an account?</label></div>
                                </div>
                                
                            </div>
                        </div>
                        <!--Column-->
                        <div class="column col-md-6 col-sm-12 col-xs-12">
                            <div class="checkout-title">
                            	<h2>Shiping to a Different Address</h2>
                            </div>
                            
                            <div class="row clearfix">
                            
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Country <sup>*</sup></div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">First Name <sup>*</sup></div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Last Name <sup>*</sup></div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Address <sup>*</sup></div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Town / City <sup>*</sup></div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Other Notes</div>
                                    <textarea class="" placeholder="Special notes about your order..." ></textarea>
                                </div>
                                
                            </div>
                            
                        </div>
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