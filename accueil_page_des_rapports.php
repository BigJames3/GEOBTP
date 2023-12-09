<?php
session_start();
// Connexion à la base de données avec PDO
require_once('connexion.php');
// Vérifier si l'utilisateur est connecté
require_once('session.php');
// Le reste du contenu de la page formulaire.php ici
try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête pour récupérer les données
    $stmt = $pdo->query("SELECT * FROM rapport2023");
    $donnees = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>GEOBTP</title>
        <?php include 'head.php';?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.jqueryui.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap.min.css">
                
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.fancybox.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/owl.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/jquery.bootstrap-touchspin.js"></script>
        <script src="js/appear.js"></script>
        <script src="js/script.js"></script>

        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/dataTables.jqueryui.min.js"></script>
        <script src="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </head>
<body>
<style>
    .box{
        padding: 20px 10px;
        max-width: 1000px;
        margin: 0 auto;
        }
</style>
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
        	<h1 style="margin-top: 5px;color:#F0FA00">LISTE DES RAPPORTS <?php echo date("Y");?></h1>
        </div>
    </section>
    <!--End Page Title-->
    <style>
        .cart-section .cart-outer .cart-header .entete-table th{background-color:#4473C5;}
    </style>
    <section class="cart-section">
        <div class="auto-container">            
            <!--Cart Outer-->
            <div class="cart-outer">
                <div class="table-outer">
                <table id="example" class="table table-striped table-bordered" style="width:100%;">
                        <thead class="cart-header" >
                            <tr class="entete-table" style="text-transform: uppercase;text-align:center;">
                                <th>N°</th>
                                <th>Entreprise</th>
                                <th>Rapport</th>
                                <th>Abreviation</th>
                                <th>correspondant</th>
                                <th>mail</th>
                                <th>Lieu operation</th>
                                <th>Numero</th>
                                <th>DATE EMISSION</th>
                                <th>code</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($donnees as $row): ?>
                            <tr>
                                <td><?php echo "00".$row['id']; ?></td>
                                <td><?php echo $row['entreprise']; ?></td>
                                <td><?php echo $row['titre_rapport']; ?></td>
                                <td><?php echo $row['abreviation']; ?></td>
                                <td><?php echo $row['correspondents_name']; ?></td>
                                <td><?php echo $row['adresse_mail']; ?></td>
                                <td><?php echo $row['lieux_des_traveaux']; ?></td>
                                <td><?php echo $row['numero_correspondant']; ?></td>
                                <td><?php echo $row['date_enregistrement']; ?></td>
                                <td><?php echo $row['code1']; ?></td>
                                <td><?php echo $row['code2']; ?></td>
                                <!-- Ajoutez d'autres cellules en fonction de vos données -->
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--Cart Section-->
    
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
    <script type="text/javascript" language="javascript">
        $(document).ready(function() {
            $('#example').DataTable({
                "order": [
                    [0, "desc"] // Indiquez ici l'index de la colonne à trier en ordre décroissant (dans cet exemple, la première colonne)
                ]
            });
        });
    </script>
</body>
</html>