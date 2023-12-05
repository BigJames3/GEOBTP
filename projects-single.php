<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: account.php"); // Redirection vers la page de connexion si l'utilisateur n'est pas connecté
    exit;
}
// Le reste du contenu de la page formulaire.php ici
?>
<!DOCTYPE html>
<html>
    <head>
        <title>The Metron - Industry and Factory HTML Template | Project Single</title>
        <?php include 'head.php';?>
    </head>    
<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->    
 	
    <!-- Main Header / Header Style Two-->
    <?php include 'header.php';?>
    <!--End Main Header -->
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/6.jpg)">
    	<div class="auto-container">
        	<ul class="page-breadcrumb">
            	<li><a href="index.html">Home</a></li>
                <li>Single Project</li>
            </ul>
        	<h1>Single Project</h1>
        </div>
    </section>
    <!--End Page Title-->
	
    <!--Project Single Section-->
    <section class="project-single-section">
    	<div class="auto-container">
        	<div class="inner-box">
                <div class="image">
                    <img src="images/resource/project-4.jpg" alt="" />
                </div>
                <h2>Water Based Coal Testing</h2>
                <div class="row clearfix">
                    <!--Content Column-->
                    <div class="content-column col-md-9 col-sm-12 col-xs-12">
                    	<div class="inner-column">
                        	<div class="text">
                            	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatems accusantium doloremqu laudantiums ut, totams our aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae duis autems vell eums iriure dolors in hendrerit saepe eveniet  in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at seds eros sed et accumsan et iusto odio dignissim. Temporibus autem quibusdam et aut officiis debitis autrerum necesy itatibus saepe evenit uts et ut voluptates repudiandae sint et molestiae non recusandae. </p>
                                <p>Architecto beatae duis autems vell eums iriure dolors in hendrerit saepe eveniet  in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at seds eros sed et accumsan et iusto odio works dignissim et autre officiis debitis autrerum sed necessitatibus saepe evenit.</p>
                            </div>
                            <ul class="social-icon-one">
                            	<li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                <li><a href="#"><span class="fa fa-skype"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Info Column-->
                    <div class="info-column col-md-3 col-sm-12 col-xs-12">
                    	<div class="inner-column">
                        	<ul>
                            	<li><strong>Category :</strong>Power and Energy</li>
                                <li><strong>Client :</strong>Energy Producers Ltd</li>
                                <li><strong>Date :</strong>18th Aug, 2017</li>
                                <li><strong>Link :</strong>www.Themekalia.com</li>
                                <li><strong>Rating :</strong><span class="star fa fa-star"></span><span class="star fa fa-star"></span><span class="star fa fa-star"></span><span class="star fa fa-star"></span><span class="star fa fa-star-half-o"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Options-->
            <div class="post-options">
            	<div class="inner-box">
                	<div class="clearfix">
                    	<ul>
                        	<li class="prev"><a href="#"><span class="icon fa fa-angle-left"></span> &nbsp; Prev</a></li>
                            <li class="next"><a href="#">Next &nbsp; <span class="icon fa fa-angle-right"></span></a></li>
                            <li class="grid"><a href="#"><span class="icon fa fa-th"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!--End Project Modern Section-->
    
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
<script src="js/appear.js"></script>
<script src="js/script.js"></script>
</body>
</html>