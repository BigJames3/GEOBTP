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
                        
                        <!--Top Right
                        <div class="top-right clearfix">
                            <ul class="clearfix">                            
                                <li><a href="#">Careers</a></li>                                
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Feedback</a></li>
                                <li><a href="#">Updates</a></li>                                
                                <li class="language dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"><span class="flag-img"><img src="images/icons/flag.jpg" alt="" /></span>English &nbsp;<span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu2">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">German</a></li>
                                        <li><a href="#">Arabic</a></li>
                                        <li><a href="#">Hindi</a></li>
                                    </ul>
                                </li>                                
                            </ul>                        
                        </div>
                        Language-->                        
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
                            <div class="logo"><a href="index.html"><img src="images/logo-2.png" alt=""></a></div>
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
                                        <!-- Toggle Button 
                                        <li class="current dropdown"><a href="#">Home</a>
                                            <ul>                                            
                                                <li><a href="index-2.html">Homepage 02</a></li>
                                                <li><a href="index-3.html">Homepage 03</a></li>
                                                <li><a href="index-4.html">Homepage 04</a></li>
                                                <li class="dropdown"><a href="#">Header Styles</a>
                                                    <ul>
                                                        <li><a href="index.html">Header Style One</a></li>
                                                        <li><a href="index-2.html">Header Style Two</a></li>
                                                        <li><a href="index-3.html">Header Style Three</a></li>
                                                        <li><a href="index-4.html">Header Style Four</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li> --> 
                                        <li><a href="about.php">Apropos</a></li>
                                        <li class="dropdown"><a href="#">Vos besoins</a>
                                            <ul>
                                                <li><a href="market-sectors.php">GEOTECHNIQUE</a></li>
                                                <li><a href="market-single.php">LES LOGICIELS TECHNIQUES</a></li>
                                            </ul>
                                        </li>                                    
                                        <li class="dropdown"><a href="#">Careers</a>
                                            <ul>                                            
                                                <li><a href="index.php">Nos offres d'emploi</a></li>
                                                <li class="dropdown"><a href="#">Mon futur métier</a>
                                                    <ul>
                                                        <li><a href="index.html">Topographe</a></li>
                                                        <li><a href="index-2.html">Formation</a></li>
                                                        <li><a href="index-3.html">Conseil et accompagnement technique</a></li>
                                                        <li><a href="index-4.html">Header Style Four</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--
                                        <li class="dropdown has-mega-menu"><a href="#">Vos besoins</a>
                                            <div class="mega-menu" style="background-image:url(images/background/mega-menu-layer.png)">
                                                <div class="mega-menu-bar row clearfix">
                                                    <div class="column col-md-3 col-sm-3 col-xs-12">
                                                        <h3>GEOTECHNIQUE</h3>
                                                        <ul>
                                                            <li><a href="shop.html">Shop Prodcuts</a></li>
                                                            <li><a href="shop-single.html">Prodcut Single</a></li>
                                                            <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                                            <li><a href="checkout.html">Checkout</a></li>
                                                            <li><a href="account.html">My Account</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="column col-md-3 col-sm-3 col-xs-12">
                                                        <h3>Others</h3>
                                                        <ul>
                                                            <li><a href="testimonial.html">Testimonials</a></li>
                                                            <li><a href="faq.html">FAQ’s</a></li>
                                                            <li><a href="error-page.html">404</a></li>
                                                            <li><a href="maintenance.html">Maintenance</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="column col-md-3 col-sm-3 col-xs-12">
                                                        <h3>Blog & News</h3>
                                                        <ul>
                                                            <li><a href="blog.html">Blog Default</a></li>
                                                            <li><a href="blog-classic.html">Blog Large Image</a></li>
                                                            <li><a href="blog-detail.html">Single Post</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="column col-md-3 col-sm-3 col-xs-12">
                                                        <h3>Projects</h3>
                                                        <ul>
                                                            <li><a href="projects.html">Projects Default</a></li>
                                                            <li><a href="projects-modern.html">Projects Modern</a></li>
                                                            <li><a href="projects-single.html">Single Project</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        -->
                                        <li><a href="contact.html">Contact</a></li>
                                        <li class="dropdown"><a href="#">rapport</a>
                                            <ul>
                                                <li><a href="form-add-rapport.php">Ajouter un rapport</a></li>
                                                <li><a href="accueil_page_des_rapports.php">Liste rapport</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Certificat</a>
                                            <ul>
                                                <li><a href="form-add-certificat.php">Ajouter un Certificat</a></li>
                                                <li><a href="accueil_page_des_certificats.php">Liste Certificat</a></li>
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
                        <div class="logo-box pull-left">
                            <div class="logo"><a href="index.html"><img src="images/logo-small.png" alt=""></a></div>
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
                                        <li><a href="index.php">Bienvenue</a></li>
                                        <!-- Toggle Button 
                                        <li class="current dropdown"><a href="#">Home</a>
                                            <ul>                                            
                                                <li><a href="index-2.html">Homepage 02</a></li>
                                                <li><a href="index-3.html">Homepage 03</a></li>
                                                <li><a href="index-4.html">Homepage 04</a></li>
                                                <li class="dropdown"><a href="#">Header Styles</a>
                                                    <ul>
                                                        <li><a href="index.html">Header Style One</a></li>
                                                        <li><a href="index-2.html">Header Style Two</a></li>
                                                        <li><a href="index-3.html">Header Style Three</a></li>
                                                        <li><a href="index-4.html">Header Style Four</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li> --> 
                                        <li><a href="about.php">Apropos</a></li>
                                        <li class="dropdown"><a href="#">Vos besoins</a>
                                            <ul>
                                                <li><a href="market-sectors.php">Market Sectors</a></li>
                                                <li><a href="market-single.php">Market Sector Single</a></li>
                                            </ul>
                                        </li>                                    
                                        <li class="current dropdown"><a href="#">Careers</a>
                                            <ul>                                            
                                                <li><a href="index.php">Nos offres d'emploi</a></li>
                                                <li class="dropdown"><a href="#">Mon futur métier</a>
                                                    <ul>
                                                        <li><a href="index.html">Topographe</a></li>
                                                        <li><a href="index-2.html">Formation</a></li>
                                                        <li><a href="index-3.html">Conseil et accompagnement technique</a></li>
                                                        <li><a href="index-4.html">Header Style Four</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown has-mega-menu"><a href="#">Pages</a>
                                            <div class="mega-menu" style="background-image:url(images/background/mega-menu-layer.png)">
                                                <div class="mega-menu-bar row clearfix">
                                                    <div class="column col-md-3 col-sm-3 col-xs-12">
                                                        <h3>Shop</h3>
                                                        <ul>
                                                            <li><a href="shop.html">Shop Prodcuts</a></li>
                                                            <li><a href="shop-single.html">Prodcut Single</a></li>
                                                            <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                                            <li><a href="checkout.html">Checkout</a></li>
                                                            <li><a href="account.html">My Account</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="column col-md-3 col-sm-3 col-xs-12">
                                                        <h3>Others</h3>
                                                        <ul>
                                                            <li><a href="testimonial.html">Testimonials</a></li>
                                                            <li><a href="faq.html">FAQ’s</a></li>
                                                            <li><a href="error-page.html">404</a></li>
                                                            <li><a href="maintenance.html">Maintenance</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="column col-md-3 col-sm-3 col-xs-12">
                                                        <h3>Blog & News</h3>
                                                        <ul>
                                                            <li><a href="blog.html">Blog Default</a></li>
                                                            <li><a href="blog-classic.html">Blog Large Image</a></li>
                                                            <li><a href="blog-detail.html">Single Post</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
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
                                                        
                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                    <li><a href="#"><span class="fa fa-whatsapp"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="account.php" style="opacity: 0.1;">&nbsp;_&nbsp;</a></li>
                            </ul>
                        </div>
                        
                        <!--Top Right
                        <div class="top-right clearfix">
                            <ul class="clearfix">                            
                                <li><a href="#">Careers</a></li>
                                
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Feedback</a></li>
                                <li><a href="#">Updates</a></li>
                                
                                <li class="language dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"><span class="flag-img"><img src="images/icons/flag.jpg" alt="" /></span>English &nbsp;<span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu2">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">German</a></li>
                                        <li><a href="#">Arabic</a></li>
                                        <li><a href="#">Hindi</a></li>
                                    </ul>
                                </li>
                                
                            </ul>                        
                        </div>
                        Language-->
                        
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
                            <div class="logo"><a href="index.html"><img src="images/logo-2.png" alt=""></a></div>
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
                                        <li><a href="index.php">Bienvenue</a></li>
                                        <!-- Toggle Button 
                                        <li class="current dropdown"><a href="#">Home</a>
                                            <ul>                                            
                                                <li><a href="index-2.html">Homepage 02</a></li>
                                                <li><a href="index-3.html">Homepage 03</a></li>
                                                <li><a href="index-4.html">Homepage 04</a></li>
                                                <li class="dropdown"><a href="#">Header Styles</a>
                                                    <ul>
                                                        <li><a href="index.html">Header Style One</a></li>
                                                        <li><a href="index-2.html">Header Style Two</a></li>
                                                        <li><a href="index-3.html">Header Style Three</a></li>
                                                        <li><a href="index-4.html">Header Style Four</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li> --> 
                                        <li><a href="about.php">Apropos</a></li>
                                        <li class="dropdown"><a href="#">Vos besoins</a>
                                            <ul>
                                                <li><a href="market-sectors.php">Market Sectors</a></li>
                                                <li><a href="market-single.php">Market Sector Single</a></li>
                                            </ul>
                                        </li>                                    
                                        <li class="current dropdown"><a href="#">Careers</a>
                                            <ul>                                            
                                                <li><a href="index.php">Nos offres d'emploi</a></li>
                                                <li class="dropdown"><a href="#">Mon futur métier</a>
                                                    <ul>
                                                        <li><a href="index.html">Topographe</a></li>
                                                        <li><a href="index-2.html">Formation</a></li>
                                                        <li><a href="index-3.html">Conseil et accompagnement technique</a></li>
                                                        <li><a href="index-4.html">Header Style Four</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown has-mega-menu"><a href="#">Pages</a>
                                            <div class="mega-menu" style="background-image:url(images/background/mega-menu-layer.png)">
                                                <div class="mega-menu-bar row clearfix">
                                                    <div class="column col-md-3 col-sm-3 col-xs-12">
                                                        <h3>Shop</h3>
                                                        <ul>
                                                            <li><a href="shop.html">Shop Prodcuts</a></li>
                                                            <li><a href="shop-single.html">Prodcut Single</a></li>
                                                            <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                                            <li><a href="checkout.html">Checkout</a></li>
                                                            <li><a href="account.html">My Account</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="column col-md-3 col-sm-3 col-xs-12">
                                                        <h3>Others</h3>
                                                        <ul>
                                                            <li><a href="testimonial.html">Testimonials</a></li>
                                                            <li><a href="faq.html">FAQ’s</a></li>
                                                            <li><a href="error-page.html">404</a></li>
                                                            <li><a href="maintenance.html">Maintenance</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="column col-md-3 col-sm-3 col-xs-12">
                                                        <h3>Blog & News</h3>
                                                        <ul>
                                                            <li><a href="blog.html">Blog Default</a></li>
                                                            <li><a href="blog-classic.html">Blog Large Image</a></li>
                                                            <li><a href="blog-detail.html">Single Post</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="column col-md-3 col-sm-3 col-xs-12">
                                                        <h3>Projects</h3>
                                                        <ul>
                                                            <li><a href="projects.html">Projects Default</a></li>
                                                            <li><a href="projects-modern.html">Projects Modern</a></li>
                                                            <li><a href="projects-single.html">Single Project</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->                            
                            <!--Outer Box-->
                            <div class="outer-box">
                                <a href="#" class="theme-btn quote-btn" data-toggle="modal" data-target="#schedule-box">DEVI <span class="icon icon-two"></span></a>                           
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
                            <div class="icon-box"><span class="flaticon-signature"></span></div>
                            <ul>
                                <li><strong>ENTREPRISE CERTIFIÉE</strong>ISO 9001</li>
                            </ul>
                        </div>                        
                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-three-buildings"></span></div>
                            <ul>
                                <li><strong>ENTREPRISE NUMÉRO 1</strong>Côte d'Ivoire</li>
                            </ul>
                        </div>                        
                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-engineer-1"></span></div>
                            <ul>
                                <li><strong>FOURNISSEUR LEADER DE</strong>Solution Industrielle</li>
                            </ul>
                        </div>                        
                    </div>
                    <div class="lower-right pull-right">                        
                        <!-- Search -->
                        <div class="search-box">
                            <form method="post" action="contact.html">
                                <div class="form-group">
                                    <!---->
                                    <input type="search" name="search-field" value="" placeholder="Custom Search..." required>
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
                            <div class="logo"><a href="index.html"><img src="images/logo-small.png" alt=""></a></div>
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
                                        <li><a href="index.php">Bienvenue</a></li>
                                        <!-- Toggle Button 
                                        <li class="current dropdown"><a href="#">Home</a>
                                            <ul>                                            
                                                <li><a href="index-2.html">Homepage 02</a></li>
                                                <li><a href="index-3.html">Homepage 03</a></li>
                                                <li><a href="index-4.html">Homepage 04</a></li>
                                                <li class="dropdown"><a href="#">Header Styles</a>
                                                    <ul>
                                                        <li><a href="index.html">Header Style One</a></li>
                                                        <li><a href="index-2.html">Header Style Two</a></li>
                                                        <li><a href="index-3.html">Header Style Three</a></li>
                                                        <li><a href="index-4.html">Header Style Four</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li> --> 
                                        <li><a href="about.php">Apropos</a></li>
                                        <li class="dropdown"><a href="#">Vos besoins</a>
                                            <ul>
                                                <li><a href="market-sectors.php">Market Sectors</a></li>
                                                <li><a href="market-single.php">Market Sector Single</a></li>
                                            </ul>
                                        </li>                                    
                                        <li class="current dropdown"><a href="#">Careers</a>
                                            <ul>                                            
                                                <li><a href="index.php">Nos offres d'emploi</a></li>
                                                <li class="dropdown"><a href="#">Mon futur métier</a>
                                                    <ul>
                                                        <li><a href="index.html">Topographe</a></li>
                                                        <li><a href="index-2.html">Formation</a></li>
                                                        <li><a href="index-3.html">Conseil et accompagnement technique</a></li>
                                                        <li><a href="index-4.html">Header Style Four</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown has-mega-menu"><a href="#">Pages</a>
                                            <div class="mega-menu" style="background-image:url(images/background/mega-menu-layer.png)">
                                                <div class="mega-menu-bar row clearfix">
                                                    <div class="column col-md-3 col-sm-3 col-xs-12">
                                                        <h3>Shop</h3>
                                                        <ul>
                                                            <li><a href="shop.html">Shop Prodcuts</a></li>
                                                            <li><a href="shop-single.html">Prodcut Single</a></li>
                                                            <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                                            <li><a href="checkout.html">Checkout</a></li>
                                                            <li><a href="account.html">My Account</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="column col-md-3 col-sm-3 col-xs-12">
                                                        <h3>Others</h3>
                                                        <ul>
                                                            <li><a href="testimonial.html">Testimonials</a></li>
                                                            <li><a href="faq.html">FAQ’s</a></li>
                                                            <li><a href="error-page.html">404</a></li>
                                                            <li><a href="maintenance.html">Maintenance</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="column col-md-3 col-sm-3 col-xs-12">
                                                        <h3>Blog & News</h3>
                                                        <ul>
                                                            <li><a href="blog.html">Blog Default</a></li>
                                                            <li><a href="blog-classic.html">Blog Large Image</a></li>
                                                            <li><a href="blog-detail.html">Single Post</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="column col-md-3 col-sm-3 col-xs-12">
                                                        <h3>Projects</h3>
                                                        <ul>
                                                            <li><a href="projects.html">Projects Default</a></li>
                                                            <li><a href="projects-modern.html">Projects Modern</a></li>
                                                            <li><a href="projects-single.html">Single Project</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
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
