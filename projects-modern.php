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
        <title>The Metron - Industry and Factory HTML Template | Project Modern</title>
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
                <li>Projects Modern</li>
            </ul>
        	<h1>Projects Modern</h1>
        </div>
    </section>
    <!--End Page Title-->
	
    <!--Project Modern Section-->
    <section class="project-modern-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Project Block Four-->
                <div class="project-block-four style-two col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="projects-single.html"><img src="images/resource/project-1.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                        	<h3><a href="projects-single.html">US Gas Company</a></h3>
                            <div class="text">Teachings of the great explorer of the truth, builder of human happiness.</div>
                            <a href="projects-single.html" class="read-more">Read More <span class="icon flaticon-arrow-pointing-to-right"></span></a>
                        </div>
                    </div>
                </div>
                
                <!--Project Block Four-->
                <div class="project-block-four style-two col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="projects-single.html"><img src="images/resource/project-2.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                        	<h3><a href="projects-single.html">Boston Railway Station</a></h3>
                            <div class="text">There anyone who loves or pursues desires to obtain pain of itself.</div>
                            <a href="projects-single.html" class="read-more">Read More <span class="icon flaticon-arrow-pointing-to-right"></span></a>
                        </div>
                    </div>
                </div>
                
                <!--Project Block Four-->
                <div class="project-block-four style-two col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="projects-single.html"><img src="images/resource/project-3.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                        	<h3><a href="projects-single.html">Golden Gate Bridge</a></h3>
                            <div class="text">Except to obtain some advantage from it? But who has any right to find fault.</div>
                            <a href="projects-single.html" class="read-more">Read More <span class="icon flaticon-arrow-pointing-to-right"></span></a>
                        </div>
                    </div>
                </div>
                
                <!--Project Block Four-->
                <div class="project-block-four style-two col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="projects-single.html"><img src="images/resource/service-4.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                        	<h3><a href="projects-single.html">Boston Railway Station</a></h3>
                            <div class="text">There anyone who loves or pursues desires to obtain pain of itself.</div>
                            <a href="projects-single.html" class="read-more">Read More <span class="icon flaticon-arrow-pointing-to-right"></span></a>
                        </div>
                    </div>
                </div>
                
                <!--Project Block Four-->
                <div class="project-block-four style-two col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="projects-single.html"><img src="images/resource/service-5.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                        	<h3><a href="projects-single.html">Golden Gate Bridge</a></h3>
                            <div class="text">Except to obtain some advantage from it? But who has any right to find fault.</div>
                            <a href="projects-single.html" class="read-more">Read More <span class="icon flaticon-arrow-pointing-to-right"></span></a>
                        </div>
                    </div>
                </div>
                
                <!--Project Block Four-->
                <div class="project-block-four style-two col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="projects-single.html"><img src="images/resource/service-6.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                        	<h3><a href="projects-single.html">US Gas Company</a></h3>
                            <div class="text">Teachings of the great explorer of the truth, builder of human happiness.</div>
                            <a href="projects-single.html" class="read-more">Read More <span class="icon flaticon-arrow-pointing-to-right"></span></a>
                        </div>
                    </div>
                </div>
                
                <!--Project Block Four-->
                <div class="project-block-four style-two col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="projects-single.html"><img src="images/resource/service-7.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                        	<h3><a href="projects-single.html">Golden Gate Bridge</a></h3>
                            <div class="text">Except to obtain some advantage from it? But who has any right to find fault.</div>
                            <a href="projects-single.html" class="read-more">Read More <span class="icon flaticon-arrow-pointing-to-right"></span></a>
                        </div>
                    </div>
                </div>
                
                <!--Project Block Four-->
                <div class="project-block-four style-two col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="projects-single.html"><img src="images/resource/service-8.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                        	<h3><a href="projects-single.html">US Gas Company</a></h3>
                            <div class="text">Teachings of the great explorer of the truth, builder of human happiness.</div>
                            <a href="projects-single.html" class="read-more">Read More <span class="icon flaticon-arrow-pointing-to-right"></span></a>
                        </div>
                    </div>
                </div>
                
                <!--Project Block Four-->
                <div class="project-block-four style-two col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="projects-single.html"><img src="images/resource/service-9.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                        	<h3><a href="projects-single.html">Boston Railway Station</a></h3>
                            <div class="text">There anyone who loves or pursues desires to obtain pain of itself.</div>
                            <a href="projects-single.html" class="read-more">Read More <span class="icon flaticon-arrow-pointing-to-right"></span></a>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <!--Styled Pagination-->
            <ul class="styled-pagination text-center">
            	<li class="prev"><a href="#"><span class="fa fa-angle-left"></span></a></li>
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li class="next"><a href="#"><span class="fa fa-angle-right"></span></a></li>
            </ul>                
            <!--End Styled Pagination-->
            
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