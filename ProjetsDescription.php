<?php 
   session_start();
   global $val;
   if (isset($_POST['projets']) and isset($_POST['cat'])){
     $_SESSION["projet"]=$_POST['projets'];
     $_SESSION['catégorie']=$_POST['cat'];   
   }

   $pro = $_SESSION["projet"];

   try{
    $connect = new PDO ('mysql:host=localhost;dbname=chrysalidz;charset=utf8','root','');
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql=$connect->prepare("SELECT *  FROM projets WHERE NomProjet='$pro' ");
    $sql->execute();
    $result = $sql->fetchAll();
    
    foreach ($result as $elt){
      $_SESSION["client"]=$elt["NomEntreprise"];
      $_SESSION["date"]=$elt["Date"];
      $_SESSION["dest"]=$elt["Description"];
      $_SESSION["cat"]=$elt["Categorie"];
    }
    
  }catch(PDOException $e){
    echo "Erreur : ".$e->getMessage();
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FinancerProjet</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta charset="utf-8"/>
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
            <li>financer projet</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper-container">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-3.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Information sur le projet</h3>
              <ul>
                <li><strong style="color:yellow; background-color:black;border-radius:4px">Nom </strong> <strong> : <?php echo $_SESSION["projet"]; ?></strong></li>
                <li><strong style="color:yellow; background-color:black;border-radius:4px">Catégorie</strong> <strong> : <?php echo $_SESSION["cat"]; ?></strong></li>
                <li><strong style="color:yellow; background-color:black;border-radius:4px">Client</strong> <strong> : <?php echo $_SESSION["client"]; ?></strong></li>
                <li><strong style="color:yellow; background-color:black;border-radius:4px">Date de soumission</strong> <strong> : <?php echo $_SESSION["date"]; ?></strong></li>
                <!--<li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>-->
              </ul>
            </div>
            <div class="portfolio-description">
              <h2 class="text-center">Description du projet </h2>
              <p>
                 <?php 
                      echo $_SESSION["dest"]; 
                 ?>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->






<div style="height:4px; background-color: yellow; width: 100%; margin-top: 0%;">





</div>
<div  class="container">
      <div class="d-flex flex-row">
            <div class="flex-item flex-fill col-sm-2"></div>
            <div class="flex-item flex-fill col-sm-4">
                <button id="finance" class="btn btn-outline-warning text-dark btn-lg" style="font-weight:bold; margin-bottom:2cm; margin-top:1cm; margin-left:40%">Financer le projet!</button>
        
            </div>
            <div class="flex-item flex-fill col-sm-3">
            <button  class="btn btn-outline-warning text-dark btn-lg " id="forumm" style="font-weight:bold;  margin-top:1cm; ">Forum du projet!</button>
            </div>
            <div class="flex-item flex-fill col-sm-3"></div>

              
      </div>
    
          
    <form  class="form col-11 flex-item d-none" role="form" method="POST"   id="myform">
    

    <h3 style="font-weight:bold" class="text-center">Informations personnelles et bancaires </h3>
          
          <div class="form-group row mt-5  ">
              <label style="font-weight: bold;"  for="firstName" class="col-sm-3 control-label row mt-2">Status</label>
              <div class="col-sm-9">
                  <input type="text" class=" btn-outline-warning text-dark btn-lg col-12" name="firstName" id="firstName" placeholder="particulier/Entreprise" class="form-control"  >
              </div>
          </div>
          <div class="form-group row mt-2  ">
              <label style="font-weight: bold;" for="lastName" class="col-sm-3 control-label row mt-2">Nom Entreprise</label>
              <div class="col-sm-9">
                  <input type="text" class=" btn-outline-warning text-dark btn-lg col-12" name="lastName" id="lastName" placeholder="Exp: Naumur" class="form-control"  >
              </div>
          </div>
          <div class="form-group row mt-2 ">
              <label style="font-weight: bold;" for="mail" class="col-sm-3 control-label row mt-2">Nom du particulier </label>
              <div class="col-sm-9">
                  <input type="mail" class=" btn-outline-warning text-dark btn-lg col-12" value="<?php echo $_SESSION['nom'];?>" id="mail"  class="form-control" name= "mail" disabled>
              </div>
          </div>
          <div class="form-group row mt-2 ">
              <label style="font-weight: bold;" for="password" class="col-sm-3 control-label row mt-2">Prénom</label>
              <div class="col-sm-9">
                  <input type="text" class=" btn-outline-warning text-dark btn-lg col-12"  value="<?php echo $_SESSION['pnom'];?>" name="password" id="password"  class="form-control"  disabled>
              </div>
          </div>
          <div class="form-group row mt-2 ">
              <label style="font-weight: bold;" for="password1" class="col-sm-3 control-label row mt-2">Montant</label>
              <div class="col-sm-9">
                  <input type="text" class=" btn-outline-warning text-dark btn-lg col-12" name="password1" id="password1" placeholder="exp:100.000 fcfa" class="form-control" >
              </div>
          </div>
          
          <div class="form-group row mt-2 ">
              <label style="font-weight: bold;" for="phoneNumber" class="col-sm-3 control-label row mt-2 ">Numéro de télépone</label>
              <div class="col-sm-9">
                  <input class=" btn-outline-warning text-dark btn-lg col-12" type="phoneNumber" name="phoneNumber" id="phoneNumber" placeholder="Numéro de téléphone" class="form-control" required>
                  <div class="alert alert-info" style="display: none"></div>
                  <div class="alert alert-error" style="display: none"></div>
              </div>
          </div>
                    
          <div class="form-group row mt-2 ">
              <label style="font-weight: bold;" class="control-label col-sm-3 row mt-2">Mode Payement</label>
              <div class="col-sm-6">
                  <div class="row">
                      <div class="col-sm-3">
                          <label class="radio-inline">
                              <input name="choix" type="radio" id="femaleradio" value="Mtn Money" checked> 
                          </label>
                      </div>
                      <div class="col-sm-3">
                          <label class="radio-inline">
                              <input name="choix" type="radio" id="maleradio" value="Orange Money"> 
                          </label>
                      </div>
                  </div>
              </div>
              <div>
                <h4 id="sex" class="text-center text-danger d-none  m-5"> Veuillez cocher votre sexe ! </h4>
             </div>
          </div> <!-- /.form-group -->
          
          <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
          </div>
          <div class="d-flex flex-row">
            <div class="flex-item flex-fill col-sm-3"></div>
            <div class="flex-item flex-fill">
                 <button type="button submit" id="finance" class="btn btn-outline-warning text-dark btn-lg" style="font-weight:bold; margin-bottom:2cm; margin-top:1cm; margin-left:40%">Soumettre !</button>
            </div>
            <div class="flex-item flex-fill col-sm-3"></div>

              
          </div>
      </form> <!-- /form -->
      
















      
    </div> <!-- ./container -->













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
 <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<script>
   
   
   $(document).ready(function(){
     $("#finance").click(function(){
       $("#myform").removeClass("d-none");
     });
     $("#forumm").click(function(){
       alert("Le forum n'est pas encore disponible!");
     });
     $( "#myform" ).validate({
            rules: {
                firstName:{
                  required:true
                },
                mail:{
                  required:true
                },
                password:{
                  required:true
                },
                password1:{
                  required:true,
                },
                birthdate:{
                  required:true
                },
                phoneNumber:{
                  required:true
                },
              },
              messages:{
                  firstName:"<span class='text-danger'>Champ obligatoire !</span>",
                  mail:"<span class='text-danger'>Champ obligatoire! </span>",
                  password:"<span class='text-danger'>Champ obligatoire ! </span>",
                  password1:"<span class='text-danger'>Champ obligatoire ! </span>",
                  birthdate:"<span class='text-danger'>Champ obligatoire ! </span>",
                  phoneNumber:"<span class='text-danger'>Champ obligatoire! </span>"

                },
                
                submitHandler: function(form) {
                  var sexe=document.querySelector('input[name=choix]:checked').value;
                  ent = $("#lastName").val();
                  if (ent==""){
                    ent="Null";
                  }
                  $.ajax({
                      type: "post",
                      url: "Financer.php",
                      data: {
                          status : $("#firstName").val(),
                          ent : $("#lastName").val(),
                          nom : $("#mail").val(),
                          pnom : $("#password").val(),
                          montant : $("#password1").val(),
                          phoneNumber : $("#phoneNumber").val(),
                          moyen:sexe
                  },
                    cache: false,
                    success: function(responce){
                        $("#success").show();
				                $('#success').html('Votre Compte a été crée !');
                        alert('Vos informations ont été enregistré !');
                        setTimeout(() => {  window.location.reload();	 }, 6000);
                        $("#myform").addClass("d-none");	
        				
				            }
                  });
                    return false;
                },
          });
   });
</script>

</body>

</html>