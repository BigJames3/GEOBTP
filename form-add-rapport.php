<?php
session_start();
// Connexion à la base de données avec PDO
require_once('connexion.php');
// Vérifier si l'utilisateur est connecté
require_once('session.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>GEOBTP - ETUDES GEOTECHNIQUE DU BATIMENT ET DES TRAVAUX PUBLICS | RAPPORTS</title>
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
        .checkout-page .checkout-form .form-group sup{color: red;}
        .checkout-page .checkout-form .form-group input{border-radius: 25px;}
    </style>
    <!--CheckOut Page-->
    <div class="checkout-page" style="margin-bottom: 20px;">
    	<div class="auto-container">
        	<!--Checkout Details-->
            <div class="checkout-form">
                <form method="post" action="enregistrer.php">
                    <div class="row">
                        <!--Column-->
                        <div class="column d-none d-sm-block col-sm-3 col-md-3 col-lg-3">
                            <div class="checkout-title">
                            	<h2></h2>
                            </div>                       
                        </div>  
                    	<!--Column-->
                        <div class="column col-12 col-sm-6 col-md-6 col-lg-6 ">
                            <div class="checkout-title">
                            	<h2>ENREGISTREMENT DE RAPPORT</h2>
                            </div>
                            <div class="row justify-content-center clearfix">                            
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">ENTREPRISE <sup>*</sup></div>
                                    <input type="text" name="entreprise" value="" placeholder="Nom de l'entreprise" required>
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Titre de rapport <sup>*</sup></div>
                                    <input type="text" name="titre_rapport" value="" placeholder="" required>
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Abreviation du titre de rapport <sup>*</sup></div>
                                    <input type="text" name="abreviation" value="" placeholder="Example: " required>
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
                                    <div class="field-label">Adresse Mail  <sup>*</sup></div>
                                    <input type="email" name="adresse_mail" value="" placeholder="" required>
                                </div>
                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Numéro <sup>*</sup></div>
                                    <input type="number" name="numero_correspondant" value="" placeholder="">
                                </div>
                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Date d'enregistrement <sup>*</sup></div>
                                    <input type="date" name="date_enregistrement" value="<?php echo date('Y-m-d'); ?>">
                                </div>
                                
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                	<div class="check-box"><label for="account-option"><strong>NB: &ensp; </strong> Vérifiez les informations avant de valider.</label></div>
                                </div>                                
                            </div>
                            <button type="submit" class="theme-btn btn-style-one place-order">Enregistrer</button>
                        </div>
                        <!--Column-->
                        <div class="column d-none d-sm-block col-sm-3 col-md-3 col-lg-3">
                            <div class="checkout-title">
                            	<h2></h2>
                            </div>                       
                        </div>                       
                    </div>
                </form>
            </div>
            <!--End Checkout Details-->            
       </div>       
       <!--Lower Content
        <div class="lower-content">
        	<div class="auto-container">
                <div class="row clearfix">
                    <div class="order-column column col-md-6 col-sm-12">
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
                    <div class="column col-md-6 col-sm-12">
                        <div class="checkout-title">
                            <h2>Cart Totals</h2>
                        </div>
                        <ul class="totals-table">
                            <li class="clearfix"><span class="col title">Cart Subtotal</span><span class="col">$146.00</span></li>
                            <li class="clearfix"><span class="col title">Shipping and Handling</span><span class="col total">Free Shipping</span></li>
                            <li class="clearfix"><span class="col title">Order Total</span><span class="col total">$146.00</span></li>
                        </ul>
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
                    </div>
                </div>
            </div>
        </div>
        End Lower Content-->       
   </div>
    <!--End CheckOut Page-->
    
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
<script src="js/jquery-ui.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery.bootstrap-touchspin.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>
</body>
</html>