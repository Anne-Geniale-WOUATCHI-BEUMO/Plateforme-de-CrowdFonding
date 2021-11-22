
<?php 
   session_start();
   try{
    $connect = new PDO ('mysql:host=localhost;dbname=chrysalidz','root','');
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $n= $_SESSION["nom"];
    $pn=$_SESSION['pnom'];
    $m=$_SESSION['mail'];
    $mdp =$_SESSION['mdp'];
    $sql=$connect->prepare("SELECT *  FROM compte WHERE Nom='$n' AND Prenom='$pn' AND Email='$m' AND Mdp='$mdp' ");
    $sql->execute();
    $result = $sql->fetchAll();
    
    foreach ($result as $elt){
      $_SESSION["sexe"]=$elt["Sexe"];
      $_SESSION["mdp"]=$elt["Mdp"];
      $_SESSION["dn"]=$elt["DateNaissance"];
      $_SESSION["nt"]=$elt["NumTel"];
    }
    
  }catch(PDOException $e){
    echo "Erreur : ".$e->getMessage();
    exit();
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Espace membre</title>
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
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/User.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v4.3.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body >

 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">Chrysalidz<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link  " href="" style="color:">Acceuil</a></li>
          <li><a class="nav-link scrollto" href="#footer">A propos</a></li>
          <li><a class="nav-link scrollto" href="#">Forum</a></li>
          <li><a class="nav-link scrollto" href="#team">Equipe</a></li>
          <li class="dropdown"><a href="#"><span>Projets</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#soum">Soumettre Un Projet</a></li>
              <li><a href="#soum">Projets à Financer</a></li>
              <li><a href="#services">Projets Réalisés</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <?php 
          if(isset($_SESSION["nom"]) and isset($_SESSION["mail"])){
              echo '<button type="button" class="btn "  > <i  class="bi bi-person text-light"></i> <a href="UserProfil.php">'.$_SESSION["mail"].'</a></button>';
              echo '<button type="button" class="btn btn-outline-danger"  > <a href="deconnexion.php"><img   style="margin-left:0.2cm;border-radius:50%; height:0.7cm" src="./assets/img/images.jpg"></img></a></button>';
            }else{
           echo '<button type="button" class="btn btn-outline-light"  > <a href="#signUp">Créer Un  Compte</a></button>';
            echo '<button type="button" class="btn btn-outline-light"  > <a href="#signUp2">Se connecter</a></button>';
          }
       ?>
     

    </div>
  </header><!-- End Header -->
    























<div  style="margin-top:3cm; margin-bottom:3cm;" class="container" data-aos="zoom-in" data-aos-delay="100">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-4">
					<div class="card" style="border:1px solid yellow; box-shadow:6px 6px 6px black">
						<div class="card-body" >
							<div class="d-flex flex-column align-items-center text-center" >
								<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
								<div class="mt-3">
									<h4><?php echo $_SESSION["nom"];?></h4>
									<p class="text-secondary mb-1"></p>
									<p class="text-muted font-size-sm"></p>
									
									<button class="btn btn-outline-primary">Changer le profil</button>
								</div>
							</div>
							<hr class="my-4">
							<!--<ul class="list-group list-group-flush">
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
									<span class="text-secondary">https://bootdey.com</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github me-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
									<span class="text-secondary">bootdey</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter me-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
									<span class="text-secondary">@bootdey</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram me-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
									<span class="text-secondary">bootdey</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
									<span class="text-secondary">bootdey</span>
								</li>
							</ul>-->
						</div>
					</div>
				</div>
				<div class="col-lg-8" >
        



















					<form class="card" method="POST" id="myform">
						<div class="card-body" style="border:1px solid yellow">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 style="font-weight:bold" class="mb-0 ">Nom</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input name="firstName" id="firstName" type="text" class="form-control formul" value="<?php echo $_SESSION['nom'];?>" disabled>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 style="font-weight:bold" class="mb-0">Prenom</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input  name="lastName" id="lastName" type="text" class="form-control formul"  value="<?php echo $_SESSION['pnom'];?>" disabled>
								</div>
							</div>
              <div class="row mb-3 d-none formul">
								<div class="col-sm-3">
									<h6 style="font-weight:bold" class="mb-0">Acien mot de passe</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="password" class="form-control" value="">
								</div>
							</div>



              <div class="row mb-3 d-none formul">
								<div class="col-sm-3">
									<h6 style="font-weight:bold" class="mb-0">Nouveau mot de passe</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input  name="password" id="password" type="password" class="form-control" value="">
								</div>
							</div>


              <div class="row mb-3 d-none formul">
								<div class="col-sm-3">
									<h6 style="font-weight:bold" class="mb-0">Confirmé</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input name="password1" id="password1" type="password" class="form-control" value="">
								</div>
							</div>


							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 style="font-weight:bold" class="mb-0">Email</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input name="mail" id="mail" type="mail" class="form-control formul" value="<?php echo $_SESSION['mail'];?>" disabled>
								</div>
							</div>
              <div class="row mb-3">
								<div class="col-sm-3">
                  


									<h6 style="font-weight:bold" class="mb-0">Sexe</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input name="sexe" id="sexe" type="text" class="form-control formul" value="<?php echo $_SESSION['sexe'];?>"  disabled>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 style="font-weight:bold" class="mb-0">Tel</h6>
								</div>
								<div class="col-sm-9 text-secondary">
                
								<input name="phone" id="phone" type="text" class="form-control formul" value="<?php echo $_SESSION['nt'];?>"  disabled>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 style="font-weight:bold" class="mb-0">Date naissance</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input name="birthdate" id="birthdate" type="text" class="form-control formul" value="<?php echo $_SESSION['dn'];?>" disabled>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<input type="submit" id="soumettre" class="btn btn-outline-primary  d-none" value="Enregistrer!">
                  <input type="button" id="modif" class="btn btn-outline-primary px-4" value="Modifier">
								</div>
							</div>
              <div class="alert alert-success alert-dismissible mt-5" id="success" style="display:none;">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
             </div>
						</div>
					
        </form>
        </div>




					<div class="row text-center" style="margin-top:2cm ;">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<h3 style="font-weight:bold" class=" mb-3 text-center">Informations sur vos projets</h3>
									<div class="bg-dark">
                       <a class="mb-5"  id="soumis" href="#soumis"> <h4 style="color:yellow; background-color:black; border-radius:30%; width:30%"  ><span style="font-size:1cm">+</span> Projets soumis </h4></a>
                       <?php 
                        $cot=0;
                       try{
                        $connect = new PDO ('mysql:host=localhost;dbname=chrysalidz;charset=utf8','root','');
                        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $n= $_SESSION["nom"];
                        $pn=$_SESSION['pnom'];
                        $m=$_SESSION['mail'];
                        $mdp =$_SESSION['mdp'];
                        $sql=$connect->prepare("SELECT *  FROM projets WHERE Nom='$n' AND Prenom='$pn' AND Email='$m' AND Mdp='$mdp' ");
                        $sql->execute();
                        $result = $sql->fetchAll();
                        
                       
                       
                       ?>

                      <table id="matable" class="table table-dark table-hover table-sm table-responsive table-bordered d-none">
                        <thead>
                          <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nom Projet</th>
                              <th scope="col">Catégorie</th>
                              <th scope="col">Status</th>
                              <th scope="col">Description</th>
                              <th scope="col">Date soumission</th>
                          </tr>
                        </thead>
                        <tbody>
                      <?php
  
                        foreach ($result as $elt){
                          $cot=$cot+1;
                      ?>
                        <tr>
                          <th scope="row"><?php echo $cot ;?></th>
                          <td><?php echo $elt["NomProjet"];?>
                          <td><?php echo $elt["Categorie"];?>
                          <td><?php echo $elt["Status"];?>
                          <td><?php echo $elt["Description"];?>
                          <td><?php echo $elt["Date"];?>
                        </tr>
                      <?php
                        }
  
                          }catch(PDOException $e){
                            echo "Erreur : ".$e->getMessage();
                            exit();
                        }
  
  
  
                      ?>
                        </tbody>
                      </table>
                    </div>


























                  <div class="bg-dark">
                       <a id="finance" href="#finance"> <h4 style="color:yellow; background-color:black; border-radius:30%; width:30%"  ><span style="font-size:1cm">+</span> Projets financés </h4></a>
                 
                       <?php 
                        $cot=0;
                       try{
                        $connect = new PDO ('mysql:host=localhost;dbname=chrysalidz;charset=utf8','root','');
                        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $n= $_SESSION["nom"];
                        $pn=$_SESSION['pnom'];
                        $m=$_SESSION['mail'];
                        $mdp =$_SESSION['mdp'];
                        $sql=$connect->prepare("SELECT *  FROM financer WHERE NomParticulier='$n' AND Prenom='$pn'");
                        $sql->execute();
                        $result = $sql->fetchAll();
                        
                        
                       
                       ?>

                        <table id="matable2" class="table table-dark table-hover table-sm table-responsive table-bordered d-none">
                          <thead>
                            <tr>
                             <th scope="col">#</th>
                              <th scope="col">Nom Projet</th>
                              <th scope="col">Catégorie</th>
                              <th scope="col">Status</th>
                              <th scope="col">Mode payement</th>
                              <th scope="col">Montant</th>
                              <th scope="col">Date soumission</th>
                              <th scope="col">Date Financement</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php
  
                          foreach ($result as $elt){
                            $cot=$cot+1;
                            ?>
                            <tr>
                            <th scope="row"><?php echo $cot ;?></th>
                            <td><?php echo $elt["NomProjet"];?>
                            <td><?php echo $elt["Categorie"];?>
                            <td><?php echo $elt["Status"];?>
                            <td><?php echo $elt["Paiement"];?>
                            <td><?php echo $elt["Montant"];?>
                            <td><?php echo $elt["Datesoumission"];?>
                            <td><?php echo $elt["Date"];?>
                            </tr>
                           <?php
                          }
  
                        }catch(PDOException $e){
                           echo "Erreur : ".$e->getMessage();
                           exit();
                        }
  
  
  
                         ?>
                         </tbody>
                       </table>
                 
                 
                 
                  
                  
                  
                  
                  
                  
                  
                  </div>
                                    
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
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
              <li><i class="bx bx-chevron-right"></i> <a href="#soum">Projets</a></li>
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
      $("#modif").click(function(){
        $(".formul").removeClass("d-none");
        $("#soumettre").removeClass("d-none");
        $("#modif").addClass("d-none");
        $("input").prop('disabled', false);
        
      });
      $("#soumis").click(function(){
        $("#matable").removeClass("d-none");
      });
      $("#finance").click(function(){
        $("#matable2").removeClass("d-none");
      })





      $( "#myform" ).validate({
            rules: {
                firstName:{
                  required:true
                },
                lastName:{
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
                  equalTo: "#password"
                },
                birthdate:{
                  required:true
                },
                phone:{
                  required:true
                },
                sexe:{
                  required:true
                }
              },
              messages:{
                  firstName:"<span class='text-danger'>Veuillez entrez votre nom !</span>",
                  lastName:"<span class='text-danger'>Veuillez entrez votre prénom ! </span>",
                  mail:"<span class='text-danger'>Veuillez entrez votre E-mail! </span>",
                  password:"<span class='text-danger'>Veuillez entrer votre mot de passe ! </span>",
                  password1:"<span class='text-danger'>Confirmez votre mot de passe ! </span>",
                  birthdate:"<span class='text-danger'>Veuillez entrez votre date de naissance! </span>",
                  phone:"<span class='text-danger'>Entrez votre numéro de téléphone! </span>",
                  sexe:"<span class='text-danger'>Champ obligatoire! </span>"

                },
                
                submitHandler: function(form) {
                  
                  $.ajax({
                      type: "post",
                      url: "traitUser.php",
                      data: {
                          nom : $("#firstName").val(),
                          pnom : $("#lastName").val(),
                          mail : $("#mail").val(),
                          motpasse : $("#password").val(),
                          birthdate : $("#birthdate").val(),
                          phoneNumber : $("#phone").val(),
                          sexe:$("#sexe").val()
                  },
                    cache: false,
                    success: function(responce){
                        alert($("#firstName").val()+" "+$("#lastName").val()+" "+$("#mail").val()+" "+$("#password").val()+" "+$("#birthdate").val()+" "+$("#phone").val()+" "+$("#sexe").val());
                        alert(responce);
                        $("#success").show();
				                $('#success').html('Vos informations ont été modifiés !');
                        alert('Vos informations ont été modifiés !');
                        setTimeout(() => {  window.location.reload();	 }, 6000);
                        	
        				
				            }
                  });
                    return false;
                },
          });

    });
</script>
</body>
</html>