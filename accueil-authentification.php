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
        <title>login page</title>
        <?php include 'head.php';?>
    </head>    
<body>

<div class="page-wrapper"> 	
    <!-- On affiche le nenu en fonction du statut de l'utilisateur -->

    <!-- Main Header / Header Style Two-->
    <?php include 'header.php';?>
    <!--End Main Header -->
    
    <!--Page Title-->
    <section class="page-title shop-title" style="background-image:url(images/background/coverlogin.jpg)">
    	<div class="auto-container">
        	<div class="row">
                <div class="col-6 col-sm-6 col-md-6	col-lg-6 col-xl-6">
                    <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-warning btn-lg">ENREGISTRER UN RAPPORT</a>
                    </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6	col-lg-6 col-xl-6">
                    <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-warning btn-lg">ENREGISTRER UN CERTIFICAT</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->
	    
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