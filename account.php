<?php
    session_start();
    require_once('connexion.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM user WHERE username = :username AND password = :password";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        $count = $stmt->rowCount();

        if ($count == 1) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("location: accueil-authentification.php"); // Redirection après la connexion
        } else {
            $error = "Identifiants invalides";
        }
    }
?>  
<!DOCTYPE html>
<html>
    <head>
        <title>The Metron - Industry and Factory HTML Template | Account</title>
        <?php include 'head.php';?>
    </head> 
<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->    
 	
    <!-- Main Header / Header Style Two-->
    <?php include 'header.php';?>
    <!--End Main Header -->
    
    <!--Page Title-->
    <section class="page-title shop-title" style="background-image:url(images/background/14.jpg)">
    	<div class="auto-container">
        	<ul class="page-breadcrumb">
            	<li><a href="index.html">Home</a></li>
                <li>My Account</li>
            </ul>
        	<h1>My Account</h1>
        </div>
    </section>
    <!--End Page Title-->
	
    <!--Register Section-->
    <section class="register-section">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Form Column-->
                <div class="form-column column col-lg-6 col-md-6 col-sm-12 col-xs-12">
                
                    <div class="sec-title">
                        <h2>CONNEXION</h2>
                    </div>
                    
                    <!--Login Form-->
                    <div class="styled-form login-form">
                        <form method="post" action="">
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-user"></span></span>
                                <input type="text" name="username" value="" placeholder="Nom d'utilisateur *" required>
                            </div>
                            <!--
                                <div class="form-group">
                                    <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                                    <input type="email" name="useremil" value="" placeholder="Emai Address*">
                                </div>
                            -->
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-unlock-alt"></span></span>
                                <input type="password" name="password" value="" placeholder="Mot de passe" required>
                            </div>
                            <div class="clearfix">
                                <div class="form-group pull-left">
                                     <button  type="submit" class="theme-btn btn-style-one">Se connecter</button> 
                                    <!--<input type="submit" value="Se connecter" />-->
                                </div>
                            </div>                            
                        </form>
                        <?php if(isset($error)) { echo $error; } ?>
                    </div>
                    
                </div>
                
                <!--Form Column-->
                <div class="form-column column col-lg-6 col-md-6 col-sm-12 col-xs-12">
                
                    <div class="sec-title">
                        <h2>LABORATOIRE GEOTECHNIQUE</h2>
                    </div>
                    
                    <!--Login Form-->
                    <img src="../GEOBTP/images/resource/geobtp.webp" class="img-fluid" alt="Responsive image" class="img-thumbnail">
                    
                </div>
                
            </div>
        </div>
    </section>
    <!--End Register Section-->
    
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