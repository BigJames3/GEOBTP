<?php
session_start();

if(isset($_GET['message'])) {
    $message = $_GET['message'];
    echo "<script>alert('" . $message . "');</script>";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>GEOBTP - ETUDES GEOTECHNIQUE DU BATIMENT ET DES TRAVAUX PUBLICS | CONTACT</title>
        <?php include 'head.php';?>
    </head>    
<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->    
 	
    <!-- Main Header / Header Style Two-->
    <?php include 'header.php';?>
    <!--End Main Header -->
    
    <!--Location Section-->
    <section class="location-section" style="background-image:url(images/background/pattern-1.png);padding: 20px 0px 20px;">
    	<div class="auto-container">
        	<ul class="page-breadcrumb">
            	<li><a href="index.html">GEOBTP</a></li>
                <li>Contact</li>
            </ul>
        	<div class="sec-title centered light">
            	<h2>VISITEZ NOTRE EMPLACEMENT</h2>
                <div class="separator"></div>
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
                    	<h2>CONTACT</h2>
                        <div class="separator"></div>
                    </div>
                    <div class="text">Vous avez des questions ? N'hésitez pas à nous contacter <br></div>
                </div>
            </div>
        
        	<div class="inner-container">
            	<div class="clearfix">
                	
                    <!--Info Column-->
                    <div class="info-column col-md-4 col-sm-12 col-xs-12">
                    	<div class="inner-column">
                        	<div class="upper-box">
                            	<ul class="list-style-three">
                                	<li><span class="icon flaticon-technology-2"></span><strong>Appelez-nous : </strong>+225 27 22 46 52 72</li>
                                    <li><span class="icon flaticon-envelope-1"></span><strong>Envoyez-nous un courrier: </strong>infos@geobtp.ci</li>
                                    <li><span class="icon flaticon-time-1"></span><strong>Heures de bureau: </strong>Lundi - Vendredi : 8h00 à 17h30</li>
                                </ul>
                            </div>
                            <div class="lower-box">
                            	<div class="lower-inner">
                                	<div class="image">
                                    	<img src="images/resource/author-7.jpg" alt="" />
                                    </div>
                                    <h3>Marlène</h3>
                                    <div class="designation">Secrétaire</div>
                                    <div class="emailed">Marlene@geobtp.ci</div>
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
                                            <input type="text" name="username" placeholder="Nom" required>
                                        </div>
                                        
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            <input type="email" name="email" placeholder="E-Mail" required>
                                        </div>
                                        
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            <input type="text" name="phone" placeholder="Télephone" required>
                                        </div>
                                        
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            <input type="text" name="subject" placeholder="Société" required>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <textarea name="message" placeholder="Massage"></textarea>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <button class="theme-btn submit-btn" type="submit" name="submit-form">SOUMETTRE MAINTENANT <span class="icon flaticon-right-arrow-1"></span></button>
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

    <!--Clients Section Two-->
    <?php include 'clients_section.php';?>
    <!--End Clients Section Two-->

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
<script src="js/map-script.js"></script>
<!--End Google Map APi-->
</body>
</html>