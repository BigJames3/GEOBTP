<?php
// Vérifie si l'utilisateur est connecté
//if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    //// Affichage du menu supplémentaire pour un utilisateur connecté
   // echo '<a href="profil.php">Profil</a>'; // Exemple de lien vers le profil utilisateur
   // echo '<a href="deconnexion.php">Déconnexion</a>'; // Lien pour se déconnecter
//} else {
    // Affichage d'un menu pour les utilisateurs non connectés
  //  echo '<a href="connexion.php">Connexion</a>'; // Lien vers la page de connexion
 //   echo '<a href="inscription.php">Inscription</a>'; // Lien vers la page d'inscription
//}
?>
<?php
    function currentPageClass($fileName) {
        $currentPage = basename($_SERVER['PHP_SELF']);
        return ($currentPage === $fileName) ? 'class="current"' : '';
    }
?>
<?php
// Vérifie si l'utilisateur est connecté
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // Affichage du menu supplémentaire pour un utilisateur connecté
    echo <<<HTML
        <!-- Preloader -->
        <div class="preloader"></div>
        <!-- Main Header / Header Style Two-->
        <header class="main-header header-style-two">
            <!-- Header Top -->
            <div class="header-top">
                <div class="auto-container">
                    <div class="top-outer clearfix">                        
                        <!--Top Left-->
                        <div class="top-right">
                            <ul class="links clearfix">
                                <li><a href="#"><span class="icon fa fa-phone"></span>+225 27 22 46 52 72</a></li>
                                <li><a href="#"><span class="icon fa fa-envelope-o"></span>infos@geobtp.com</a></li>
                                <li><a href="#"><span class="icon flaticon-placeholder-2"></span>COCODY 2 PLATEAUX MOBIL</a></li>                                                        
                                    <li><a href="https://www.facebook.com/geobtp.ci.75"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                    <li><a href="#"><span class="fa fa-whatsapp"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="deconnexion.php">Deconnexion</a></li>
                            </ul>
                        </div>                                  
                    </div>                    
                </div>
            </div>
            <!-- Header Top End -->
            
            <!-- Main Box -->
            <div class="main-box">
                <div class="auto-container">
                    <div class="outer-container clearfix">
                        <!--Logo Box-->
                        <div class="logo-box"> <!-- images/logo-2.png-->
                            <div class="logo"><a href="index.php"><img src="images/logogeobtp.png" alt=""></a></div>
                        </div>                        
                        <!--Nav Outer-->
                        <div class="nav-outer clearfix">                        
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->    	
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>                                
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li id="menuBienvenue"><a href="index.php">Bienvenue</a></li>
                                        <li id="menuabout"><a href="about.php">À propos</a></li>                                        
                                        <li id="menuGeotechnique"><a href="service_geotechnique.php">Géotechnique</a></li>
                                        <li id="maitrise-oeuvre"><a href="service-maitrise-oeuvre.php">Maitrise d'oeuvre</a></li>
                                        <li id="menumateriaux-routes"><a href="service-materiaux-routes.php">matériaux - Routes</a></li>
                                        <li id="menucontact"><a href="contact.html">Contact</a></li>
                                        <li id="rapport1" class="dropdown"><a href="#">rapport</a>
                                            <ul>
                                                <li><a href="form-add-rapport.php">Ajouter un rapport</a></li>
                                                <li><a href="accueil_page_des_rapports.php">Liste rapport</a></li>
                                            </ul>
                                        </li>                              
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->                                                  
                        </div>
                        <!--Nav Outer End-->                        
                    </div>    
                </div>
            </div>
                        
            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">                    
                    <div class="outer-container clearfix">
                        <!--Logo Box-->
                        <div class="logo-box pull-left"><!-- logogeobtp.png -->
                            <div class="logo"><a href="index.php"><img src="images/logogeobtp.png" alt=""></a></div>
                        </div>                        
                        <!--Nav Outer-->
                        <div class="nav-outer clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->    	
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>                               
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="current"><a href="index.php">Bienvenue</a></li>
                                        <li><a href="about.php">À propos</a></li>
                                        
                                        <li><a href="service_geotechnique.php">Géotechnique</a></li>
                                        <li><a href="service-maitrise-oeuvre.php">Maitrise d'oeuvre</a></li>
                                        <li><a href="service-materiaux-routes.php">matériaux - Routes</a></li>
                                        <!-- Main Menu End
                                        <li class="dropdown"><a href="#">Vos besoins</a>
                                            <ul>
                                                <li><a href="service_geotechnique.php">GEOTECHNIQUE</a></li>
                                                <li><a href="service-maitrise-oeuvre.php">MAITRISE D’OEUVRE</a></li>
                                                <li><a href="service-materiaux-routes.php">MATERIAUX - ROUTES</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="carrier.php">Carrière</a></li>
                                        -->
                                        <li><a href="contact.html">Contact</a></li>                               
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->                            
                        </div>
                        <!--Nav Outer End-->                        
                    </div>                    
                </div>
            </div>
            <!--End Sticky Header-->            
        </header>
        <!--End Main Header -->
    HTML;
} else {
    // Affichage d'un menu pour les utilisateurs non connectés
    echo <<<HTML
        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header / Header Style Two-->
        <header class="main-header header-style-two">

            <!-- Header Top -->
            <div class="header-top">
                <div class="auto-container">
                    <div class="top-outer clearfix">
                        
                        <!--Top Left-->
                        <div class="top-right">
                            <ul class="links clearfix">
                                <li><a href="#"><span class="icon fa fa-phone"></span>+225 27 22 46 52 72</a></li>
                                <li><a href="#"><span class="icon fa fa-envelope-o"></span>infos@geobtp.com</a></li>
                                <li><a href="#"><span class="icon flaticon-placeholder-2"></span>COCODY 2 PLATEAUX MOBIL</a></li>                                                        
                                    <li><a href="https://www.facebook.com/geobtp.ci.75"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                    <li><a href="account.php" style="opacity: 0.1;">&nbsp;_&nbsp;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Top End -->
            
            <!-- Main Box -->
            <div class="main-box">
                <div class="auto-container">
                    <div class="outer-container clearfix">
                        <!--Logo Box-->
                        <div class="logo-box">
                            <div class="logo"><a href="index.php"><img src="images/logogeobtp.png" alt=""></a></div>
                        </div>                        
                        <!--Nav Outer-->
                        <div class="nav-outer clearfix">                        
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->    	
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>                               
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="current"><a href="index.php">Bienvenue</a></li>
                                        <li><a href="about.php">À propos</a></li>
                                        <!-- Main Menu End
                                        <li><a href="service_geotechnique.php">Géotechnique</a></li>
                                        <li><a href="service-maitrise-oeuvre.php">Maitrise d'oeuvre</a></li>
                                        <li><a href="service-materiaux-routes.php">matériaux - Routes</a></li>                                        
                                        <li><a href="carrier.php">Carrière</a></li>
                                         -->
                                        <li class="dropdown"><a href="#">Vos besoins</a>
                                            <ul>
                                                <li><a href="service_geotechnique.php">GEOTECHNIQUE</a></li>
                                                <li><a href="service-maitrise-oeuvre.php">MAITRISE D’OEUVRE</a></li>
                                                <li><a href="service-materiaux-routes.php">MATERIAUX - ROUTES</a></li>
                                            </ul>
                                        </li>                                        
                                        <li><a href="authentification.php">authentification</a></li>
                                        <li><a href="carrier.php">Carrière</a></li>                           
                                        <li><a href="contact.php">Contact</a></li>                               
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->                            
                            <!--Outer Box-->
                            <div class="outer-box">
                                <a href="#" class="theme-btn quote-btn" data-toggle="modal" data-target="#schedule-box">OBTENIR UN DEVIS </a>                           
                            </div>                        
                        </div>
                        <!--Nav Outer End-->                        
                    </div>    
                </div>
            </div>
            <!--Header Lower-->
            <div class="header-lower">
                <div class="auto-container clearfix">
                    <div class="lower-left pull-left">                    
                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><img src="images/certificatISO.png" alt="" style="width: 60px;height: 57px;"></div>
                            <ul>
                                <li><a href="certificats.php"><strong>BUREAU CERTIFIÉE</strong>ISO 9001</a></li>
                            </ul>
                        </div>                        
                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-three-buildings"></span></div>
                            <ul>
                                <li><strong>BUREAU D'ETUDES</strong>GEOTECHNIQUE</li>
                            </ul>
                        </div>                        
                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-engineer-1"></span></div>
                            <ul>
                                <li><strong>UN PERSONNEL QUALIFIÉ</strong> ET DYNAMIQUE</li>
                            </ul>
                        </div>                        
                    </div>
                    <div class="lower-right pull-right">                        
                        <!-- Search -->
                        <div class="search-box">
                            <form method="GET" action="authentification_des_documents.php">
                                <div class="form-group">
                                    <input type="search" name="code2" id="code2" value="" placeholder="CODE VERIFICATION DOCUMENT" required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>                        
                    </div>
                </div>
            </div>
            
            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    
                    <div class="outer-container clearfix">
                        <!--Logo Box-->
                        <div class="logo-box pull-left">
                            <div class="logo"><a href="index.php"><img src="images/logogeobtp.png" alt=""></a></div>
                        </div>
                        
                        <!--Nav Outer-->
                        <div class="nav-outer clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->    	
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>                               
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="current"><a href="index.php">Bienvenue</a></li>
                                        <li><a href="about.php">À propos</a></li>
                                        
                                        <li><a href="service_geotechnique.php">Géotechnique</a></li>
                                        <li><a href="service-maitrise-oeuvre.php">Maitrise d'oeuvre</a></li>
                                        <li><a href="service-materiaux-routes.php">matériaux - Routes</a></li>
                                        <!-- Main Menu End
                                        <li class="dropdown"><a href="#">Vos besoins</a>
                                            <ul>
                                                <li><a href="service_geotechnique.php">GEOTECHNIQUE</a></li>
                                                <li><a href="service-maitrise-oeuvre.php">MAITRISE D’OEUVRE</a></li>
                                                <li><a href="service-materiaux-routes.php">MATERIAUX - ROUTES</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="carrier.php">Carrière</a></li>
                                        -->
                                        <li><a href="contact.html">Contact</a></li>                               
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->                            
                        </div>
                        <!--Nav Outer End-->                        
                    </div>                    
                </div>
            </div>
            <!--End Sticky Header-->            
        </header>
        <!--End Main Header -->
    HTML;
}
?>
