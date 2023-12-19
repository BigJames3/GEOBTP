<script>
        // Récupère le nom de la page actuelle
        var currentPage = location.pathname.split("/").pop();

        // Vérifie la page actuelle et active la classe "current" sur l'élément approprié
        if (currentPage === 'index.php') {
         document.getElementById('menuBienvenue').classList.add('current');
     } else if (currentPage === 'about.php') {
         document.getElementById('menuabout').classList.add('current');
     } else if (currentPage === 'service_geotechnique.php') {
         document.getElementById('menuGeotechnique').classList.add('current');
     } else if (currentPage === 'service-maitrise-oeuvre.php') {
         document.getElementById('maitrise-oeuvre').classList.add('current');
     } else if (currentPage === 'service-materiaux-routes.php') {
         document.getElementById('menumateriaux-routes').classList.add('current');
     } else if (currentPage === 'contact.php') {
         document.getElementById('menucontact').classList.add('current');
     } else if (currentPage === 'form-add-rapport.php') {
         document.getElementById('rapport1').classList.add('current');
     } else if (currentPage === 'accueil_page_des_rapports.php') {
         document.getElementById('rapport1').classList.add('current');
    }
</script>
<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>

<script src="js/jquery.js"></script>
<!--Revolution Slider-->
<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="js/main-slider-script.js"></script>

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/owl.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>
<script src="js/jquery.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/knob.js"></script>
<script src="js/validate.js"></script>
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
<script src="js/map-script.js"></script>
