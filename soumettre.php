<?php session_start();?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SoumettreProjet</title>
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
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

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
 <header id="header" class="fixed-top header-inner-pages">
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
              <li><a href="soumettre.php">Soumettre Un Projet</a></li>
              <li><a href="./index.php#soum">Projets à Financer</a></li>
              <li><a href="./index.php#services">Projets Réalisés</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="./index.php#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <?php 
          if(isset($_SESSION["nom"]) and isset($_SESSION["mail"])){
              echo '<button type="button" class="btn "  disabled> <i  class="bi bi-person text-light"></i> <a href="#signUp">'.$_SESSION["mail"].'</a></button>';
              echo '<button type="button" class="btn btn-outline-danger"  > <a href="deconnexion.php"><img   style="margin-left:0.2cm;border-radius:50%; height:0.7cm" src="./assets/img/images.jpg"></img></a></button>';
            }else{
           echo '<button type="button" class="btn btn-outline-light"  > <a href="./index.php#signUp">Créer Un  Compte</a></button>';
            echo '<button type="button" class="btn btn-outline-light"  > <a href="./index.php#signUp2">Se connecter</a></button>';
          }
       ?>

    </div>
  </header><!-- End Header -->


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Details sur les projets</h2>
          <ol>
            <li><a href="index.php">Acceuil</a></li>
            <li>projets</li>
            <li>Soumettre un projet</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->






    
<section id="hero1"></section>
<div style="height:4px; background-color: yellow; width: 100%; margin-top: 0%;">
</div>
    <div  class="container">
        <form class="form-horizontal" role="form" id="myform" method="POST" >
            <h2>Soumettre un projet</h2>
            <div style="font-weight: bold;" class="form-group row mt-2">
                <label for="lastName" class="col-sm-3 control-label">Status </label>
                <div class="col-sm-9">
                    <input type="text" name="status" id="status" placeholder="particulier / entreprise" class="form-control" autofocus>
                </div>
            </div>
            <div style="font-weight: bold;" class="form-group row mt-3 ">
                <label for="noment" class="col-sm-3 control-label">Nom Entreprise </label>
                <div class="col-sm-9">
                    <input type="text"  name="ent" id="ent" placeholder="Nom entreprise" class="form-control" autofocus>
                </div>
            </div>
            <div style="font-weight: bold;" class="form-group row mt-3 ">
                <label for="firstName" class="col-sm-3 control-label">Nom</label>
                <div class="col-sm-9">
                    <input type="text"  value="<?php echo $_SESSION['nom'];?>" disabled name="firstName" id="firstName" placeholder="First Name" class="form-control" autofocus>
                </div>
            </div>
            <div style="font-weight: bold;"  class="form-group row mt-3">
                <label for="lastName" class="col-sm-3 control-label">Prénom</label>
                <div class="col-sm-9">
                    <input type="text"  value="<?php echo $_SESSION['pnom'];?>" disabled name="lastName" id="lastName" placeholder="Last Name" class="form-control" autofocus>
                </div>
            </div>
            <div style="font-weight: bold;"   class="form-group row mt-3">
                <label for="email" class="col-sm-3 control-label">Email* </label>
                <div class="col-sm-9">
                    <input type="email" id="email"  value="<?php echo $_SESSION['mail'];?>" disabled placeholder="Email" class="form-control" name= "email">
                </div>
            </div>
            <div style="font-weight: bold;" class="form-group row mt-3">
                <label for="password" class="col-sm-3 control-label">Mot de passe*</label>
                <div class="col-sm-9">
                    <input type="password"  value="<?php echo $_SESSION['mdp'];?>" disabled id="password" placeholder="Password" class="form-control">
                </div>
            </div>
            
           
            <h3 class="text-center text-dark m-5">informations sur le projet</h3>
            <div style="font-weight: bold;" class="form-group row mt-3">
                <label for="lastName" class="col-sm-3 control-label">Nom</label>
                <div class="col-sm-9">
                    <input type="text" name="nomp" id="nomp" placeholder="Nom projet" class="form-control" autofocus>
                </div>
            </div>
            <div style="font-weight: bold;" class="form-group row mt-3">
                <label for="lastName" class="col-sm-3 control-label">Catégories</label>
                <div class="col-sm-9">
                <select name="cat" id="cat"  size="1" class="form-control" autofocus>
                     <option>Alimentation</option>
                     <option>Education</option>
                     <option>Numérique</option>
                     <option>Santé</option>
                </select>
                </div>
            </div>
            <div style="font-weight: bold;" class="form-group row mt-3">
                <label for="lastName" class="col-sm-3 control-label">Description</label>
                <div class="col-sm-9">
                    <textarea name="dest"   rows=2 cols=40 id="dest" class="form-control" autofocus> Entrez la description de votre projet</textarea>
                </div>
            </div>
            
            <?php 
          if(isset($_SESSION["nom"]) and isset($_SESSION["mail"])){
          
           echo '<input    class="text-center" style=" left:40%;color: yellow; background-color: black;width:5cm;height:1cm; border-radius: 20%; right: 25%; position: relative; margin-top:1cm" type="submit" value="Soumettre !">';
            
          }else{
            echo '<input    class="text-center" style=" left:40%;color: yellow; background-color: black;width:5cm;height:1cm; border-radius: 20%; right: 25%; position: relative; margin-top:1cm" type="submit" value="Soumettre !" disabled>';
            echo "<h3 style='color:red; font-weight:bold; text-align:center' >Veuillez vous connectez pour pouvoir soumettre un projet !</h3>";
          }
          ?>
        </form> <!-- /form -->
    </div> <!-- ./container -->
</section>
<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
 </div>
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
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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
  <script src="assets/js/jquery-1.12.4.min.js"></script>
 <script src="assets/js/popper.min.js"></script>
 <script src="assets/js/main.js"></script>
 <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>









  
<script>


$(document).ready(function(){
        
          $( "#myform" ).validate({
            rules: {
                firstName:{
                  required:true
                },
                lastName:{
                   required:true
                },
                email:{
                  required:true
                },
                password:{
                  required:true
                },
                
                status:{
                  required:true
                },
                nomp:{
                  required:true
                },
                cat:{
                  required:true
                },
                dest:{
                  required:true
                }
              },
              messages:{
                  firstName:"<span class='text-danger'>Veuillez entrez votre nom !</span>",
                  lastName:"<span class='text-danger'>Veuillez entrez votre prénom ! </span>",
                  email:"<span class='text-danger'>Veuillez entrez votre E-mail! </span>",
                  password:"<span class='text-danger'>Veuillez entrer votre mot de passe ! </span>",
                  password1:"<span class='text-danger'>Confirmez votre mot de passe ! </span>",
                  status:"<span class='text-danger'>Ce champs est obligatoire ! </span>",
                  nomp:"<span class='text-danger'>Ce champs est obligatoire ! </span>"

                },
                
                submitHandler: function(form) {
                  var cat = document.getElementById("cat").selectedIndex;
                  var catt = document.getElementById("cat").options[cat].value;
                  ent = $("#ent").val();
                  if (ent==""){
                    ent="Null";
                  }
                  alert(ent+" "+catt+" "+$('#firstName').val()+" "+$('#lastName').val()+" "+$('#email').val()+" "+$('#password').val()+" "+$('#status').val()+" "+$('#nomp').val()+" "+$('#dest').val());
                  
                  $.ajax({
                      type: "post",
                      url: "traitSoum.php",
                      data: {
                          nom : $("#firstName").val(),
                          pnom : $("#lastName").val(),
                          mail : $("#email").val(),
                          motpasse : $("#password").val(),
                          status : $("#status").val(),
                          ent : ent,
                          dest : $("#dest").val(),
                          nomp : $("#nomp").val(),
                          cat: catt
                  },
                    cache: false,
                    success: function(responce){
                        
				                $('#success').html('Votre projet a été soumis !');
                        alert('Votre projet a été soumis avec succès!');
                        setTimeout(() => {  window.location.reload();	 }, 6000);
                        $("#myform").addClass("d-none");	
        				      
				            }
                  });
                    return false;
                }
          });
        });
</script>

</body>

</html>