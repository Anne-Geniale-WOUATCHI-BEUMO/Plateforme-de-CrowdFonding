<?php 
    session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Chrysalidz</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="./assets/css/soum.css" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v4.3.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>









  <!-- ======= Header ======= -->
  
  <header id="header" class="fixed-top  header-inner-pages">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">Chrysalidz<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link  " href="./index.php">Acceuil</a></li>
          <li><a class="nav-link scrollto" href="#footer">A propos</a></li>
          <li><a class="nav-link scrollto" href="#">Forum</a></li>
          <li><a class="nav-link scrollto" href="./index.php#team">Equipe</a></li>
          <li class="dropdown"><a href="#"><span>Projets</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="./index.php#soum">Soumettre Un Projet</a></li>
              <li><a href="./index.php#soum">Projets à Financer</a></li>
              <li><a href="./index.php#services">Projets Réalisés</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="./index.php#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <?php 
          
      ?>
      <button type="button" class="btn btn-outline-light"  > <a href="./index.php#signUp">Créer Un  Compte</a></button>
      <button type="button" class="btn btn-outline-light"  > <a href="./index.php#signUp2">Se connecté</a></button>
      
    </div>
  </header><!-- End Header -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Vos Informations Personnelles</h2>
        <ol>
          <li><a href="index.php">Acceuil</a></li>
          <li><a style="color:blue" href="#">Modifier votre compte </a></li>
          <li style="color:gray"><a href="#">Supprimer votre compte</a></li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  
  <section id="infos" class="infos" style="background-color: pink; border:none; border-top:2px solid blue">
    <div class="container">
 <form>
   <label> Nom: </label>
   <label> nom de la session </label> </br></br>

   
   <label> Prenom: </label>
   <label> prenom de la session </label></br></br>

   
   <label> Email: </label>
   <label> Email de la session </label></br></br>

   <label> Nombre de projet financés: </label>
   <label> Nombre </label></br>

</form>
     
    </div>
  </section><!-- End Breadcrumbs -->




<section id="hero1"></section>
<div style="height:4px; background-color: yellow; width: 100%; margin-top: 0%;">
</div>
    <div  class="container">
    <form class="form-horizontal " role="form" method="POST" onsubmit="process(event)" data-aos="zoom-in" data-aos-delay="100" id="myform">
          <h2 class="text-center" style="color: black;">Modifier votre Compte</h2>
          <div class="form-group row mt-5  ">
              <label style="font-weight: bold;"  for="firstName" class="col-sm-3 control-label row mt-2">Nom</label>
              <div class="col-sm-9">
                  <input type="text" name="firstName" id="firstName" placeholder="Nom" class="form-control"  >
              </div>
          </div>
          <div class="form-group row mt-2  ">
              <label style="font-weight: bold;" for="lastName" class="col-sm-3 control-label row mt-2">Prénom</label>
              <div class="col-sm-9">
                  <input type="text" name="lastName" id="lastName" placeholder="Prénom" class="form-control"  >
              </div>
          </div>
          <div class="form-group row mt-2 ">
              <label style="font-weight: bold;" for="mail" class="col-sm-3 control-label row mt-2">Email* </label>
              <div class="col-sm-9">
                  <input type="mail" id="mail" placeholder="Email" class="form-control" name= "mail" >
              </div>
          </div>
          <div class="form-group row mt-2 ">
              <label style="font-weight: bold;" for="password" class="col-sm-3 control-label row mt-2">Mot de passe*</label>
              <div class="col-sm-9">
                  <input type="password" name="password" id="password" placeholder="Mot de passe" class="form-control" >
              </div>
          </div>
          <div class="form-group row mt-2 ">
              <label style="font-weight: bold;" for="password1" class="col-sm-3 control-label row mt-2">Confirmation*</label>
              <div class="col-sm-9">
                  <input type="password" name="password1" id="password1" placeholder="Confirmé votre mot de passe" class="form-control" >
              </div>
          </div>
         
          </div>
          <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
          </div>
        <input    class="text-center" style=" left:40%;color: yellow; background-color: black;width:5cm;height:1cm; border-radius: 20%; right: 25%; position: relative;" type="submit" value="Sauvegarder"> 
      </form> <!-- /form -->
    </div> <!-- ./container -->
</section>

<div style="height:4px; background-color: yellow; width: 100%;">
</div>




 <!-- ======= Footer ======= -->
 <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Chrysalidz<span>.</span></h3>
              <p>
                 <br>
              <br><br>
                <strong>Phone:</strong> +33 641 09 29 82<br>
                <strong>Email:</strong> contact@naumur.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Liens Utiles </h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Acceuil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#footer">A propos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Forum</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="./index.php#soum">Projets</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Politiques confidentialités</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nos services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Financement des projets</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Gestion des projets</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Accompagnements des projets</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Conseils entrepreunariat</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Ingénieurie informatique</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Newsletter</h4>
            <p> Laissez nous votre e-mail pour plus de détails  </p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Envoyez">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Chrysalidz</span></strong>. Tout droit reservé @2021
      </div>
      
    </div>
  </footer><!-- End Footer -->




   
   

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/soum.js"></script>



</script>
</body>

</html>