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
                <li>Certificat</li>
            </ul>            
        	<h1 style="margin-top: 5px;color:#F0FA00">LISTE DES CERTIFICATS <?php echo date("Y");?></h1>
        </div>
    </section>
    <!--End Page Title-->
    <style>
        .cart-section .cart-outer .cart-header .entete-table th{background-color:#4473C5; color: white; text-align: center;}
    </style>
    <section class="cart-section">
        <div class="auto-container">            
            <!--Cart Outer-->
            <div class="cart-outer">
                <div class="table-outer">
                <table id="example" class="table table-striped table-bordered" style="width:100%;">
                        <thead class="cart-header">
                            <tr class="entete-table" >
                                <th>ID Certificat</th>
                                <th>Entreprises</th>
                                <th>Nom & prénoms</th>
                                <th>Formation</th>
                                <th>Date debut formation</th>
                                <th>Date Fin formation</th>
                                <th>Durée</th>
                                <th>Mails</th>
                                <th>Contacts</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>0551654505122023</td>
                                <td>System Architect</td>
                                <td>RAPPORT DE CONTROLE PAR RESSUAGE</td>
                                <td>CR</td>
                                <td>Yopougon zone industriel</td>
                                <td>05/12/2023</td>
                                <td>KONAN</td>
                                <td>konan@geobtp.com</td>
                                <td>Numero</td>
                                <td class="remove">
<button class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-patch-plus-fill" viewBox="0 0 16 16" style="color: blue;">
  <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zM8.5 6v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0"/>
</svg></button>                 
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011-07-25</td>
                                <td>$170,750</td>
                                <th>Lieu</th>
                                <th>Date</th>
                                <th>Options</th>
                                <td class="remove"><a href="#" class="remove-btn"><span class="flaticon-cancel-1"></span></a></td>
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td>59</td>
                                <td>2012-08-06</td>
                                <td>$137,500</td>
                                <th>Lieu</th>
                                <th>Date</th>
                                <th>Options</th>
                                <td class="unit-price"><div class="available-info"><span class="icon fa fa-check"></span> Item(s) <br>Avilable Now</div></td>
                            </tr>
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
    <script>
        $(document).ready(function() {  	
            $('#example').DataTable();  
        });
    </script>
</body>
</html>