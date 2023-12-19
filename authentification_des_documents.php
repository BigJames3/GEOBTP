<?php
session_start();
?>
     
<!DOCTYPE html>
<html>
    <head>
        <title>GEOBTP - ETUDES GEOTECHNIQUE DU BATIMENT ET DES TRAVAUX PUBLICS</title>
        <?php include 'head.php';?>
    </head>    
<body>

<style>
    .lower-content{margin: 75px 0px;}
    .lower-content .bgc{background-color: #4472C7;border-radius: 39px;padding:20px; color:black;}
    body{background: #d5d5d5bf}
    strong{text-transform: uppercase;}
</style>

<div class="page-wrapper"> 	
    <!-- Preloader -->   
    <!-- Main Header / Header Style Two-->
    <?php include 'header.php';?>
    <!--End Main Header -->
	<!--Page Title-->


    <?php
        // Votre code PHP pour la recherche du code2
        require_once('connexion.php');
        if(isset($_GET['code2'])) {
            $code2 = $_GET['code2'];
            try {
                // Préparez et exécutez la requête
                $stmt = $conn->prepare("SELECT * FROM rapport2023 WHERE code2 = :code2");
                $stmt->bindParam(':code2', $code2);
                $stmt->execute();
                if ($stmt->rowCount() > 0) {
                    // Afficher les données si le code2 existe
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    ?>
    <section class="page-title shop-title" style="background-image:url(images/background/14.jpg);padding: 20px 0px 20px;">
        <div class="auto-container">
            <ul class="page-breadcrumb">
                <li><a href="index.html">GEOBTP</a></li>
                <li>Connexion</li>
            </ul>            
        	<h1 style="margin-top: 5px;color:#113676; text-transform: none;font-size:35px;">Nous certifions l'authenticité du document</h1>
        </div>
    </section>
        <div class="lower-content" >
        	<div class="auto-container">
                <div class="row clearfix">
                    <div class="column d-none d-sm-block col-sm-3 col-md-3 col-lg-3"></div>
                    <div class="column col-12 col-sm-6 col-md-6 col-lg-6 bgc">
                        <div class="cart-outer">
                            <table class="cart-table">
                                <div class="">
                                    <div class="row">
                                        <div class="zone-affichage">
                                            <div class="col-6" style="text-align: center;">
                                                <div class="title">
                                                    <span style="color: white;">SOCIETE</span><br>
                                                    <h2><strong style="color:#FBFD04"><?php echo $row["entreprise"]; ?></strong></h2>                                                    
                                                </div><br>
                                                <div class="rapport"> 
                                                    <span style="color: white;">OPPERATION</span> <br>
                                                    <h3><strong><?php echo $row["titre_rapport"]; ?></strong></h3>
                                                </div><br>
                                                <div class="row clearfix">                                                    
                                                    <div class="column col-12 col-sm-6 col-md-6 col-lg-6">
                                                        <span style="color: white;">CODE RAPPORT</span>
                                                        <h4><strong>RAP N°: <?php echo $row["code1"]; ?></strong></h4>
                                                    </div>                                               
                                                    <div class="column col-12 col-sm-6 col-md-6 col-lg-6">
                                                        <span style="color: white;">LIEU DES TRAVEAUX</span>
                                                        <h4><strong><?php echo $row["lieux_des_traveaux"]; ?></strong></h4>
                                                    </div>
                                                </div><br>
                                                <div class="row clearfix">                                                    
                                                    <div class="column col-12 col-sm-6 col-md-6 col-lg-6">
                                                        <span style="color: white;">DATE EMISSION</span>
                                                        <h4><strong><?php echo $row["date_enregistrement"]; ?> </strong></h4>
                                                    </div>
                                                    <div class="rapport"> 
                                                        <span style="color: white;">NUMERO D'AUTHENTIFICATION</span> <br>
                                                        <h4><strong><?php echo $row["code2"]; ?> </strong></h4>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>              
                                    </div>   
                                </div>                          
                            </table>
                        </div>
                    </div>
                    <div class="column d-none d-sm-block col-sm-3 col-md-3 col-lg-3"></div>
                </div>
            </div>
        </div>                                
    <?php }
            } else {
                // Afficher un message d'erreur si le code2 n'existe pas
                ?>
            <section class="page-title shop-title" style="background-image:url(images/background/14.jpg);">
                <div class="auto-container">
                    <ul class="page-breadcrumb">
                        <li><a href="index.html">GEOBTP</a></li>
                        <li>authentification des documents</li>
                    </ul>            
                    <h1 style="margin-top: 5px;color:white; text-transform: none;font-size:35px;margin-top:12px;">Veuillez vérifier à nouveau <br> votre code d'authentification.</h1>
                </div>
            </section>
                <?php
            }
        } catch(PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
        // Fermer la connexion à la base de données
        $conn = null;
    }
?> 
    <!--Appointment Form-->
    <?php include 'quoteform.php';?>
    <!-- End of #schedule-box -->
    
    <!--Main Footer-->
    <!--<footer>-->
    <?php include 'footer.php';?>
    <!--</footer>-->

</div>
<!--End pagewrapper-->


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