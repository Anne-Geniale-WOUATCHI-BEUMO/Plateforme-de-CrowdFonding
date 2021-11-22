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
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/img/flags.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/img/flags@2x.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.css">

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
    


  





 

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>PLATEFORME  <span style="color: yellow;">CROWDFUNDING</span><span>.</span></h1>
          <h2>Solutions de développement de projets!</h2>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center " style="overflow: hidden; height: 4cm;" data-aos="zoom-in" data-aos-delay="250">
        <div style="margin-bottom:0; border: 2px solid yellow; opacity: 0.5;  background-image: url(assets/img/acceuil/1.jpg); background-size:cover;"   class="col-xl-2 col-md-2  mr-1" style="overflow: hidden;">
          <div  class="icon-box">
            <i class="ri-store-line" ></i>
            <div ></div>
          </div>
        </div>
        <div style=" margin-bottom:0; border: 2px solid yellow; opacity: 0.5; background-image: url(assets/img/acceuil/2.PNG); background-size: cover;"   class="col-xl-2 col-md-2 mr-1 ">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line"></i>
            <h3><a href=""></a></h3>
          </div>
        </div>
        <div style=" margin-bottom:0; border: 2px solid yellow;  opacity: 0.5 ; background-image: url(assets/img/acceuil/3.PNG); background-size: cover;"   class="col-xl-2 col-md-2 mr-1">
          <div class="icon-box">
            <i class="ri-calendar-todo-line"></i>
            <h3><a href=""></a></h3>
          </div>
        </div>
        <div style=" margin-bottom:0; border: 2px solid yellow;  opacity: 0.5; margin-right: 1px; background-image: url(assets/img/acceuil/4.PNG); background-size: cover;"   class="col-xl-2 col-md-2 mr-1">
          <div class="icon-box">
            <i class="ri-paint-brush-line"></i>
            <h3><a href=""></a></h3>
          </div>
        </div>
        <div style=" margin-bottom:0; border: 2px solid yellow;  opacity: 0.5;  background-image: url(assets/img/acceuil/5.PNG); background-size: cover;" class="col-xl-2 col-md-2">
          <div class="icon-box">
            <i class="ri-database-2-line"></i>
            <h3><a href=""></a></h3>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->


  





  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/meeting.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>CROWDFUNDING ou financement participatif ou sociofinancement.</h3>
            <p class="fst-italic">
              C'est un outil de collecte des fonds fonctionnant sur une plateforme internet et permettant a un ensemble de contributeurs
              de choisir collectivement de financer directement et de maniere tracable des projets identifies. Ces porteurs de projet souhaitant collecter des fond pour une initiative:
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Personnelle</li>
              <li><i class="ri-check-double-line"></i> Professionnel</li>
              <li><i class="ri-check-double-line"></i> Communautaire.</li>
            </ul>
            <p>
            Peuvent etre des entreprises, des associations et des particuliers etc.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
  <!--
      <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper-container">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> -->
    <!-- End Clients Section -->
              
    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <h1 style="font-weight:bold; color: black;" class="text-center mb-5">Pourquoi Choisir Chrysalidz ?</h1>
          <div class="image col-lg-6" style='background-image: url("assets/img/features.jpg");' data-aos="fade-right"></div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
            <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-receipt"></i>
              <h4>Sécurité</h4>
              <p>Chez Chrysalidz, nous respectons nos engagements de confidentialité. Vos informations de paiement et vos contributions sont sécurisées. Notre partenaire local se charge de remettre au porteur de projet via un processus transparent</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-cube-alt"></i>
              <h4>Professionnalisme</h4>
              <p>Notre aptitude à sélectionner pour vous des projets ambitieux, originaux et innovants dans des domaines porteurs tels que l'enseignement, la santé, les technologies, l'environnement, l'agriculture, la culture etc ... Nous travaillons pour cela avec de nombreux partenaires en Europe et en Afrique</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-images"></i>
              <h4>Fiabilité</h4>
              <p>Vous avez l'assurance que vos dons seront reçus par le porteur de projet bénéficiare. En effet la Banque de France encadre strictement l'activité de détention de fonds pour le compte de tiers et garantit la destination des fonds via l'agrément qu'elle donne à notre intermédiaire de paiement et les obligations légales de Chrysalidz.</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-shield"></i>
              <h4>Transparence  </h4>
              <p>Chrysalidz est une entreprise responsable. Nous travaillons avec des partenaires agréés par les autorités administratives et financières françaises et internationales. Nous mettons tout en oeuvre pour garantir la sécurité de vos informations et des fonds que vous nous confiez pour des tiers.              </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Projets realisés</h2>
          <p>Nos différents projets realisés </p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Ecobeam</a></h4>
              <p>plateforme
                en ligne qui permet de vous
                guider dans la construction de belle maison</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Construction des crèches</a></h4>
              <p>Construction et ouverture des crèches,
                dans les villes de Yaoundé et Douala</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">plateforme E-leaning</a></h4>
              <p>Mise sur pieds d'une plateforme de E-learning,
                Dans le soucis de former a distance des Consultants de qualité</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="">Energie renouvellable</a></h4>
              <p>Développement dess solutions d'énergie renouvellable,
                Afin de minimiser les dépenses d'energie électrique</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="">Aménagemnt des Orphelinats</a></h4>
              <p>Ouverture et aménagemnt des Orphelinats
                Pour les sans habrits et personnes démunies,
                Dans les villes de Yaoundé et Douala.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">Construction espace agricole</a></h4>
              <p>Construction et aménagement d'un espace agricole
                Dans la ville de Yagoua.</p>
            </div>
          </div>
























          

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-world"></i></div>
            <h4><a href="">Aménagement milieux des animaux</a></h4>
            <p>Aménagement et protection des milieux naturels des animaux.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-slideshow"></i></div>
            <h4><a href="">Construction d'usine de fabrication du café.</a></h4>
            <p></p>
          </div>
        </div>

        <div id="soum" class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-arch"></i></div>
            <h4><a href="">Solutions télétravail</a></h4>
            <p>Developpement des solutions de télétravail..</p>
          </div>
        </div>

      </div>




      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Appel à l'action </h3>
          <p>Laissez nous mettre vos projets à la vue de tous pour des financement futurs ou apportez votre financement à des projets qui vous passionne.</p>
          <a class="cta-btn" href="./soumettre.php">Soumettre un projet</a>
          <a class="cta-btn" href="#portfolio">Financer un projet</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Projets à financer</h2>
          <p>Projets en entente de financement</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Tout</li>
              <li data-filter=".filter-app">Numérique</li>
              <li data-filter=".filter-card">Alimentaire</li>
              <li data-filter=".filter-web">Education</li>
              <li data-filter=".filter-web">Santé</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Easy credit</h4>
                <p>Numérique</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a id="n1" href="ProjetsDescription.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Construction d'une crêche </h4>
                <p>Education</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a id="n2" href="ProjetsDescription.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Chambis</h4>
                <p>Numérique</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a id="n3" href="ProjetsDescription.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Projet en attente de traitement!</h4>
                <p>Alimentaire</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a id="n4" href="#n1" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>ConCeptRealisation</h4>
                <p>Education</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a id="n5" href="ProjetsDescription.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Conceptions d'application numerique1</h4>
                <p>Numérique</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a id="n6" href="ProjetsDescription.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Projet en attente de traitement!</h4>
                <p>Alimentaire</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a id="n7" href="#n1" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Projet en attente de traitement!</h4>
                <p>Alimentaire</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a id="n8" href="#n1" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Projet en attente de traitement!</h4>
                <p>Education</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a id="n9" href="#n1" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100"></div>
          <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
            <div class="content d-flex flex-column justify-content-center">
              <h3>Données statistiques </h3>
              <p>
                 Découvrez nos données statistiques relatives à la qualité de nos services;
              </p>
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="125" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong>Clients satisfaits</strong> De nombreuses personnes ont été satisfaits aprés nous avoir confié leur projets</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong>Projects</strong> Notre plateforme a réalisés un grand nombres de projets de divers domaine</p>
                  </div>
                </div>
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-clock"></i>
                    <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="4" class="purecounter"></span>
                    <p><strong>Expériences</strong> Aprés plusieurs années d'expériences nos travaux procure des résultats plus que satisfaisant</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-award"></i>
                    <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="4" class="purecounter"></span>
                    <p><strong>A realiser</strong> Notre plateforme dispose de quelques projets en attente de financement pour mener une realisation</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      
      <div class="container" data-aos="zoom-in">
        <h1 style="color: white; z-index: 1000;" class="text-center text-light">Nos différents témoignages</h1>
        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Grace à Chrysalidz j'ai pu rencontrer des nouveaux entrepreuneurs avec qui je pourrai travailler a l'avenir. Et j'ai compris parfaitement la notion de crowfunfing.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  J'ai pu finaliser mon projet de developpement d'une plateforme de design en ligne. Et grace au forum que propose Chrysalidz j'ai rencontrée des pro du domaine avec qui j'ai nouée des rélations.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Chrysalidz est un projet porteur et encourageant. J'exhorte tous les jeunes entrepreuneurs de s'y inscrire sur la plateforme.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Grace a Chrysalidz j'ai pu travailler sur des projets en tant que freelancer et décrocher des gros contrats chez des particuliers.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  J'ai pu trouver du financement pour concrétiser mon projet de création de crèche grace a Chrysalidz. Très belle initiative du crowfunding au Cameroun.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Equipe</h2>
          <p> Découvrez les membres de notre Equipe</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/team/team-1.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Garnier NGANDO</h4>
                <span>Directeur géneral</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/dir.jpeg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Louise NGONGANG</h4>
                <span>Directrice</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/team/an.jpeg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Anicet NGANSO</h4>
                <span>Manager Projet</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="assets/img/team/gen.jpeg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Geniale WOUATCHI</h4>
                <span>MOA</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->













    
    <!--FORMULAIRE DE CREATION DE COMPTE -->





    <div style="height:2px; background-color: yellow; width: 100%; margin-top: 0%;" id="signUp">
    </div>
    <div style="margin-top: 1cm; background-color: rgba(255, 254, 255, 0.9);" class="container d-flex flex-row justify-content-center" >
     <div data-aos="zoom-in" data-aos-delay="100" style="filter: drop-shadow(0 0 0.1rem black); background-color:white" class="col-6 flex-item flex-fill ">
      <div class="d-flex flex-row">
        <div class="flex-item col-1">
        </div>
        <form  class="form col-11 flex-item" role="form" method="POST"   id="myform">
          <h2 class="text-center mt-4" style="color: black;">Créer votre Compte !</h2>
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
          <div class="form-group row mt-2 ">
              <label style="font-weight: bold;" for="birthDate" class="col-sm-3 control-label row mt-2">Date naissance*</label>
              <div class="col-sm-9">
                  <input type="date" name="birthdate"id="birthDate" class="form-control" >
              </div>
          </div>
          
          <div class="form-group row mt-2 ">
              <label style="font-weight: bold;" for="phoneNumber" class="col-sm-3 control-label row mt-2 ">Numéro de télépone</label>
              <div class="col-sm-9">
                  <input type="phoneNumber" name="phoneNumber" id="phoneNumber" placeholder="Numéro de téléphone" class="form-control" required>
                  <div class="alert alert-info" style="display: none"></div>
                  <div class="alert alert-error" style="display: none"></div>
              </div>
          </div>
                    
          <div class="form-group row mt-2 ">
              <label style="font-weight: bold;" class="control-label col-sm-3 row mt-2">Sexe</label>
              <div class="col-sm-6">
                  <div class="row">
                      <div class="col-sm-3">
                          <label class="radio-inline">
                              <input name="choix" type="radio" id="femaleradio" value="Female" checked> Feminin
                          </label>
                      </div>
                      <div class="col-sm-3">
                          <label class="radio-inline">
                              <input name="choix" type="radio" id="maleradio" value="Male"> Masculin
                          </label>
                      </div>
                  </div>
              </div>
              <div>
                <h4 id="sex" class="text-center text-danger d-none  m-5"> Veuillez cocher votre sexe ! </h4>
             </div>
          </div> <!-- /.form-group -->
          <div   class="form-group row mt-5 ">
              <div class="col-sm-9 col-sm-offset-3">
                  <span  class="help-block">*Champs obligatoires</span>
              </div>
          </div>
          <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
          </div>
          <button type="button submit" class="btn btn-outline-success mt-5 mb-5 "  > Créer Un  Compte</button>
      </form> <!-- /form -->
      </div>
              </div>
  

  <div class="flex-item flex-fill col-1">
              </div>














  <div data-aos="zoom-in" data-aos-delay="100" id="signUp2" style="filter: drop-shadow(0 0 0.1rem black); margin-top:3cm; margin-bottom:3cm; background-color:white;" class="col-5 flex-item flex-fill " >
      <div class="d-flex flex-row">
        <div class="flex-item col-1"></div>
      <form class="flex-item form-horizontal col-11 " role="form" method="POST"  data-aos="zoom-in" data-aos-delay="100" id="myform2">
          <h2 class="text-center mt-4" style="color: black;">Se connecter !</h2>
          <div class="form-group row mt-5  ">
              <label style="font-weight: bold;"  for="firstName2" class="col-sm-3 control-label row mt-2">Nom</label>
              <div class="col-sm-9">
                  <input type="text" name="firstName2" id="firstName2" placeholder="Nom" class="form-control"  >
              </div>
          </div>
          <div class="form-group row mt-2  ">
              <label style="font-weight: bold;" for="lastName2" class="col-sm-3 control-label row mt-2">Prénom</label>
              <div class="col-sm-9">
                  <input type="text" name="lastName2" id="lastName2" placeholder="Prénom" class="form-control"  >
              </div>
          </div>
          <div class="form-group row mt-2 ">
              <label style="font-weight: bold;" for="mail2" class="col-sm-3 control-label row mt-2">Email* </label>
              <div class="col-sm-9">
                  <input type="mail" id="mail2" placeholder="Email" class="form-control" name= "mail2" >
              </div>
          </div>
          <div class="form-group row mt-2 ">
              <label style="font-weight: bold;" for="password2" class="col-sm-3 control-label row mt-2">Mot de passe*</label>
              <div class="col-sm-9">
                  <input type="password" name="password2" id="password2" placeholder="Mot de passe" class="form-control" >
              </div>
          </div>
          <div class="form-group row mt-2 ">
              <label style="font-weight: bold;" for="password3" class="col-sm-3 control-label row mt-2">Confirmer*</label>
              <div class="col-sm-9">
                  <input type="password" name="password3" id="password3" placeholder="Confirmé votre mot de passe" class="form-control" >
              </div>
          </div>
          
          <div class="alert alert-success alert-dismissible" id="success2" style="display:none;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
          </div>
          <button type="button submit" class="btn btn-outline-success mt-5 mb-5 "> Je me connecte</button>
      </form> <!-- /form -->
     </div> <!-- ./container -->
              </div>
  </div> <!-- ./container -->


  <div style="height:2px; background-color: yellow; width: 100%; margin-top:2cm;" id="signUp">
    </div>





















    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contacter Nous</p>
        </div>

        <div>
          <div class="mapouter"><div class="gmap_canvas"><iframe  style="border:0; width: 100%; height: 270px;" id="gmap_canvas" src="https://maps.google.com/maps?q=yaound%C3%A9&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net">fmovies.os</a><br><style>.mapouter{position:relative;text-align:right;height:355px;width:702px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:355px;width:702px;}</style></div></div>
          <!--<iframe src="https://www.google.com/maps/place/Yaoundé/@3.8302938,11.3703651,11z/data=!3m1!4b1!4m5!3m4!1s0x108bcf7a309a7977:0x7f54bad35e693c51!8m2!3d3.8480325!4d11.5020752" frameborder="0" allowfullscreen></iframe>
          https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621-->
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Entrée Marché Huitième</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>contact@naumur.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Appel:</h4>
                <p>+33 641 09 29 82</p>
              </div>

            </div>

          </div>
          
          <div class="col-lg-8 mt-5 mt-lg-0">
            <div>
              <h3 style="color:black" class="m-8">Laissez un commentaire !</h3>
            </div>

            <form action="commentaires.php" method="post" role="form" class="php-email-form" id="myform3">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nom" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="mail" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Chargement</div>
                <div class="error-message"></div>
                <div class="sent-message">Votre message a été envoyé </div>
              </div>
              <div class="text-center"><button type="submit">Envoyez message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->











  
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/intlTelInput.min.js"></script>

























<script>
        const phoneInputField = document.querySelector("#phoneNumber");
        const phoneInput = window.intlTelInput(phoneInputField, {
          utilsScript:
            "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });

        const info = document.querySelector(".alert-info");
        const error = document.querySelector(".alert-error");

      // Disable form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
                const phoneNumber = phoneInput.getNumber();
              var phone;
              info.style.display = "none";
              error.style.display = "none";
              //alert("gin");
           
           
          // Get the forms we want to add validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (phoneInput.isValidNumber()) {
                info.style.display = "";
                phone = phoneNumber;
                info.innerHTML = `<span>Numéro correct!.</span>`;
              }  else {
                error.style.display = "";
                error.innerHTML = `<span style="color:red">Veuillez entrer un numéro valide!.<span>`;
              }
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
      </script>
  <script >
     
      var projet="";
      $(document).ready(function(){
        
        $("#n1").click(function(){
          $.ajax({
            type: "post",
            url: "ProjetsDescription.php",
            dataType: "text",
            data: {
                projets : "Easy credit",
                cat : "Numérique"
            },
            success:function(data){
                alert(data);
            }
          });
           
        });




        $("#n2").click(function(){
          $.ajax({
            type: "post",
            url: "ProjetsDescription.php",
            dataType: "text",
            data: {
                projets : "Conception des sites et des applications2",
                cat : "Education"
            },
            success:function(){
            }
          });
        });





        $("#n3").click(function(){
          $.ajax({
            type: "post",
            url: "ProjetsDescription.php",
            dataType: "text",
            data: {
                projets : "Chambis",
                cat : "Numérique"
            },
            success:function(){
               
            }
          });
        });





        $("#n4").click(function(){
          $.ajax({
            type: "post",
            url: "ProjetsDescription.php",
            dataType: "text",
            data: {
                projets : "Conception des sites et des applications4",
                cat : "Alimentaire"
            },
            success:function(){
               
            }
          });
          
        });





        $("#n5").click(function(){
          $.ajax({
            type: "post",
            url: "ProjetsDescription.php",
            dataType: "text",
            data: {
                projets : "ConCeptRealisation",
                cat : "Education"
            },
            success:function(){
               
            }
          });
          
        });







        $("#n6").click(function(){
          $.ajax({
            type: "post",
            url: "ProjetsDescription.php",
            dataType: "text",
            data: {
                projets : "Conceptions d\\'application numerique1",
                cat : "Numérique"
            },
            success:function(){
               
            }
          });
          
        });






        $("#n7").click(function(){
          $.ajax({
            type: "post",
            url: "ProjetsDescription.php",
            dataType: "text",
            data: {
                projets : "Conception des sites et des applications1",
                cat : "Alimentaire"
            },
            success:function(){
               
            }
          });
          
        });







        $("#n8").click(function(){
          $.ajax({
            type: "post",
            url: "ProjetsDescription.php",
            dataType: "text",
            data: {
                projets : "Conception des sites et des applications8",
                cat : "Alimentaire"
            },
            success:function(){
               
            }
          });
          
        });






        $("#n9").click(function(){
          $.ajax({
            type: "post",
            url: "ProjetsDescription.php",
            dataType: "text",
            data: {
                projets : "Conception des sites et des applications9",
                cat : "Education"
            },
            success:function(){
               
            }
          });
        });
       
        
        
        /*$("#cree").click(function(){
             
            $("#myform").removeClass("d-none");
        });
        $("#con").click(function(){
            $("#myform2").removeClass("d-none");
        });*/
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
                phoneNumber:{
                  required:true
                },
              },
              messages:{
                  firstName:"<span class='text-danger'>Veuillez entrez votre nom !</span>",
                  lastName:"<span class='text-danger'>Veuillez entrez votre prénom ! </span>",
                  mail:"<span class='text-danger'>Veuillez entrez votre E-mail! </span>",
                  password:"<span class='text-danger'>Veuillez entrer votre mot de passe ! </span>",
                  password1:"<span class='text-danger'>Confirmez votre mot de passe ! </span>",
                  birthdate:"<span class='text-danger'>Veuillez entrez votre date de naissance! </span>",
                  phoneNumber:"<span class='text-danger'>Entrez votre numéro de téléphone! </span>"

                },
                
                submitHandler: function(form) {
                  var sexe=document.querySelector('input[name=choix]:checked').value;
                  $.ajax({
                      type: "post",
                      url: "traitCompte.php",
                      data: {
                          nom : $("#firstName").val(),
                          pnom : $("#lastName").val(),
                          mail : $("#mail").val(),
                          motpasse : $("#password").val(),
                          birthdate : $("#birthDate").val(),
                          phoneNumber : $("#phoneNumber").val(),
                          sexe:sexe
                  },
                    cache: false,
                    success: function(responce){
                        $("#success").show();
				                $('#success').html('Votre Compte a été crée !');
                        alert('Votre Compte a été crée !');
                        setTimeout(() => {  window.location.reload();	 }, 6000);
                        $("#myform").addClass("d-none");	
        				
				            }
                  });
                    return false;
                },
          });




          $( "#myform2" ).validate({
            rules: {
                firstName2:{
                  required:true
                },
                lastName2:{
                   required:true
                },
                mail2:{
                  required:true
                },
                password2:{
                  required:true
                },
                password3:{
                  required:true,
                  equalTo: "#password2"
                }
              },
              messages:{
                  firstName2:"<span class='text-danger'>Veuillez entrez votre nom !</span>",
                  lastName2:"<span class='text-danger'>Veuillez entrez votre prénom ! </span>",
                  mail2:"<span class='text-danger'>Veuillez entrez votre E-mail! </span>",
                  password2:"<span class='text-danger'>Veuillez entrer votre mot de passe ! </span>",
                  password3:"<span class='text-danger'>Confirmez votre mot de passe ! </span>",

                },
                
                submitHandler: function(form) {
                  $.ajax({
                      type: "post",
                      url: "connexion.php",
                      
                      data: {
                          nom : $("#firstName2").val(),
                          pnom : $("#lastName2").val(),
                          mail : $("#mail2").val(),
                          motpasse : $("#password2").val(),
                  },
                    cache: false,
                    success: function(data){
                      console.log(data.localeCompare("success"));
                       if (data.localeCompare("success")==1){
                          $("#myform2").addClass("d-none");	
                          $("#cree").addClass("d-none");
                          $("#con").addClass("d-none");	
                          setTimeout(() => {  window.location.reload();	 }, 1000);
                       }else
                        {
                         alert("Information Incorrect!");
                       }
				            }
                  });
                    return false;
                },
          });


          $( "#myform3" ).validate({
            rules: {
                name:{
                  required:true
                },
                email:{
                   required:true
                },
                subject:{
                  required:true
                },
                message:{
                  required:true
                },
                
              },
              messages:{
                  name:"<span class='text-danger'>Veuillez entrez votre nom !</span>",
                  email:"<span class='text-danger'>Veuillez entrez votre prénom ! </span>",
                  subject:"<span class='text-danger'>Veuillez entrez votre E-mail! </span>",
                  message:"<span class='text-danger'>Veuillez entrer votre mot de passe ! </span>",
                  
                },
                
                submitHandler: function(form) {
           
                  $.ajax({
                      type: "post",
                      url: "commentaires.php",
                      data: {
                          nom : $("#name").val(),
                          pnom : $("#email").val(),
                          mail : $("#subject").val(),
                          motpasse : $("#message").val(),
                  },
                    cache: false,
                    success: function(responce){
                        $("#success").show();
				                $('#success').html('Votre commentaire a bien été récu !');
                        alert('Votre commentaire a bien été récu  !');
                        setTimeout(() => {  window.location.reload();	 }, 4000);
                        $("#myform3").addClass("d-none");	
        				
				            }
                  });
                    return false;
                },
          });

      });
    
</script>

</body>

</html>