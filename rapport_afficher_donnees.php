<?php
session_start();
// Connexion à la base de données avec PDO
require_once('connexion.php');
try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
    exit(); // Arrête l'exécution du script en cas d'échec de connexion
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Récupération des données pour l'ID spécifié depuis la base de données
    $conn = $pdo->prepare("SELECT * FROM rapport2023 WHERE id = :id");
    $conn->bindParam(':id', $id);
    $conn->execute();
    $donnees = $conn->fetch(PDO::FETCH_ASSOC);

    // Affichage des données spécifiques à l'ID
    if ($donnees) {
            $nom = $donnees['entreprise'];
            $opperation = $donnees['titre_rapport'];
            $coderapport = $donnees['code1'];
            $date = $donnees['date_enregistrement'];
            $code = $donnees['code2'];
        //echo "<p>ID : " . $donnees['id'] . "</p>"; 
        //Affichage de l'ID pour vérification
        //echo "<p>Nom : " . $donnees['entreprise'] . "</p>";
        //echo "<p>Email : " . $donnees['adresse_mail'] . "</p>";
        //Afficher d'autres champs...
        //Afficher d'autres champs...
    } else {
        echo "Aucune donnée trouvée pour cet ID.";
    }
} else {
    echo "ID non spécifié.";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>GEOBTP - ETUDES GEOTECHNIQUE DU BATIMENT ET DES TRAVAUX PUBLICS</title>
        <?php include 'head.php';?>
    </head>    
<body>

<div class="page-wrapper"> 	
    <!-- Preloader -->   
    <!-- Main Header / Header Style Two-->
    <?php include 'header.php';?>
    <!--End Main Header -->

<style>
    .lower-content{margin: 75px 0px;}
    .lower-content .bgc{background-color: #4472C7;border-radius: 39px;padding:20px; color:black;}
</style>
       <!--Lower Content-->
       <div class="lower-content">
        	<div class="auto-container">
                <div class="row clearfix">
                    <div class="column d-none d-sm-block col-sm-3 col-md-3 col-lg-3">
                    </div>
                    <!--Order Column-->
                    <div class="column col-12 col-sm-6 col-md-6 col-lg-6 bgc">
                        <!--Sec Title-->
                        <div class="cart-outer">
                            <table class="cart-table">
                                <div class="">
                                    <div class="row">
                                        <div class="zone-affichage">
                                            <div class="col-6" style="text-align: center;">
                                                <div class="title">
                                                    <span style="color: white;">SOCIETE</span><br>
                                                    <h2><strong style="color:#FBFD04"><?php echo $nom; ?></strong></h2>                                                    
                                                </div><br>
                                                <div class="rapport"> 
                                                    <span style="color: white;">OPPERATION</span> <br>
                                                    <h3><strong><?php echo $opperation; ?></strong></h3>
                                                </div><br>
                                                <div class="row clearfix">                                                    
                                                    <div class="column col-12 col-sm-6 col-md-6 col-lg-6">
                                                        <span style="color: white;">CODE RAPPORT</span>
                                                        <h4><strong>RAP N°: <?php echo $coderapport; ?></strong></h4>
                                                    </div>
                                                    <div class="column col-12 col-sm-6 col-md-6 col-lg-6">
                                                        <span style="color: white;">DATE EMISSION</span>
                                                        <h4><strong><?php echo $date; ?></strong></h4>
                                                    </div>
                                                </div><br>
                                                <?php  
                                                    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
                                                       //ne rien n'afficher
                                                    }else{
                                                        echo <<<HTML
                                                        <div class="rapport"> 
                                                                <span style="color: white;">NUMERO D'AUTHENTIFICATION</span> <br>
                                                                <h3><strong> $code </strong></h3>
                                                            </div>
                                                        HTML;
                                                    }
                                                 ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>                          
                            </table>
                        </div>
                    </div>
                    <!--Cart Column-->
                    <div class="column d-none d-sm-block col-sm-3 col-md-3 col-lg-3">
                    </div>
                </div>
            </div>
        </div>
        <!--End Lower Content-->

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