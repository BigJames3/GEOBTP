<?php
session_start();
// Connexion à la base de données avec PDO
//require_once('connexion.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>GEOBTP | AUTHENTIFICATION DES DOCUMENTS</title>
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
                <li>authentification des documents</li>
            </ul>            
        	<h1 style="margin-top: 5px;color:#F0FA00">Authentification </h1>
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
                <form method="GET" action="authentification_des_documents.php">
                    <div class="row">
                        <!--Column-->
                        <div class="column d-none d-sm-block col-sm-3 col-md-3 col-lg-3">
                            <div class="checkout-title">
                            	<h2></h2>
                            </div>                       
                        </div>  
                    	<!--Column-->
                        <div class="column col-12 col-sm-6 col-md-6 col-lg-6 ">
                            <div class="row justify-content-center clearfix">                            
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
                                    <div class="field-label">CODE D'AUTHENTIFICATION DU DOCUMENT </div>                                    
                                    <input type="text" name="code2" id="code2" value="" placeholder="..."  required>                                    
                                </div>                             
                            </div>
                            <button type="submit" class="theme-btn btn-style-one place-order">VERIFICATION</button>
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