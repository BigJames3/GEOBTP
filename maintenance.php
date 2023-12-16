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
    
	<!--Maintenance Section-->
    <section class="maintenance-section" style="background-image:url(images/resource/geotechnique01.png)">
    	<div class="auto-container">
        	<div class="maintenance-box">
                <div class="inner-box"> 
                    <h2>PAUSE DE <br> MAINTENANCE</h2>
                    <h3>NOUS REVIENDRONS BIENTÔT</h3>
                    <div class="text">Merci de votre patience</div>
                </div>
            </div>
        </div>
    </section>
    <!--End Maintenance Section-->
    
    <!--Quote Form-->
    <?php include 'quoteform.php';?>
    <!-- End of #schedule-box -->
    
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
<script src="js/appear.js"></script>
<script src="js/script.js"></script>
</body>
</html>