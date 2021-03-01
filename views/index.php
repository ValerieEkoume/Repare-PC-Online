<?php use App\Connection;
$pdo = (new Connection())->getPdo();
require '../views/header.html';

?>
<!-- Leaflet CSS Files -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
      integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
      crossorigin=""/>
<!-- Leaflet JavaScript Files -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
<script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>
<!-- Leaflet -->
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css">
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css">
<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
<!--        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@example.com</a>-->
<!--        <i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55-->
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <a class="repare" href="/home">REPARE PC ONLINE by </a>
        <!-- Uncomment below if you prefer to use an image logo -->
         <a href="/home"><img id="online" src="../assets/img/OFP-rouge-texte-blanc.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">A propos</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#centres">Nos Centres</a></li>
          <li><a class="nav-link scrollto" href="#team">L'équipe</a></li>
            <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
<!--          <li><a class="nav-link scrollto" href="/admin">admin</a></li>-->


        </ul>
<!--        <i class="bi bi-list mobile-nav-toggle"></i>-->
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('../assets/img/slide/slide-1.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown " id="slide1">Bienvenue sur <span>REPARE PC online</span></h2>
                <p class="animate__animated animate__fadeInUp" id="slide1p" >Pour tous les petits bobos de votre matériel informatique.</p>
                  <img id="online_slide" src="../assets/img/OFP-rouge-texte-blanc.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('../assets/img/slide/slide-2.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Un problème informatique ?</h2>
                <p class="animate__animated animate__fadeInUp">Vous rencontrez des difficultés à gérer votre ordinateur ? Vous êtes au
                  bon endroit !  REPARE PC online effectue vos installations de logiciels, de la
                  maintenance préventive et ou curative sur vos appareils. Nous sommes à votre
                  écoute.</p>
<!--                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>-->
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('../assets/img/slide/slide-3.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
<!--                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>-->
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="col-lg-6 video-box">
            <img id="about_img" src="../assets/img/about1.jpg" class="img-fluid" alt="">
<!--            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>-->
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

            <div class="section-title">
              <h2 id="aprop">A Propos</h2>
              <p>Toute l'équipe de <span>REPARE PC online</span> vous souhaite la Bienvenue sur ce site et nous profitons de cette occasion pour vous parler
               de nous et des services que nous mettons à votre disposition.
                  <br>
                  Le projet "REPARE PC" initié par ONLINRFORMAPRO est né de la volonté de faire participer activement nos
                  apprenants sur des cas concrets de maintenance ou télémaintenance informatique.
                  En effet, comment mieux se préparer au monde du travail et à la réalité du terrain
                  lorsque l'on est encore en phase d'apprentissage ??!!
                  Il suffit de proposer ses compétences en informatique gratuitement et intervenir sur des pannes réelles
                  et des besoins spécifiques émanant de véritables clients (professionnels ou particuliers).
                  En ouvrant nos portes pendant deux après-midi par semaine en tant que centre de diagnostics et de
                  réparations gratuit et accessible au public, notre objectif est de permettre aux apprenants de mettre
                  en avant leurs apprentissages pratiques et théoriques abordés en centre et même de prolonger leurs
                  connaissances grâce à des compétences clés transverses au métier de technicien informatique.
              </p>
            </div>

          </div>
        </div>

      </div>
        <div class="counts section-bg" data-aos="fade-up">
            <div id="counts_h3">
                <h3>Online Repare en quelques chiffres...</h3>
            </div>
            <div class="counts_pic">

                <img src="../assets/img/about.jpg" class="img-fluid" alt="">
            </div>
        </div>

    </section>

       <!-- End About Section -->



    <!-- ======= Services Section ======= -->
    <section id="services" class="services ">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Nos Services</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-laptop"></i></div>
            <h4 class="title"><a href="">Installation de logiciels</a></h4>
            <p class="description">Vous n'avez pas le temps de configurer votre appareil ou bien vous doutez de pouvoir
              le faire correctement ? Nous sommes à votre service.
            </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-telephone"></i></div>
            <h4 class="title"><a href="">Intervention à distance</a></h4>
            <p class="description">Aucun centre à proximité ? Pas de problème ! Pour certaines <strong>opérations</strong>
              nous vous proposons une intervention / accédez à notre service d'intervention à distance à distance.
            </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-tools"></i></div>
            <h4 class="title"><a href="">Maintenance</a></h4>
            <p class="description"> Nous vous proposons également de la maintenance préventive et ou curative sur vos appareils</p>
          </div>

        </div>

      </div>

        <p id="services_p2">Nous avons  vocation à confronter nos apprenants sur des projets et incidents réels afin qu’ils soient
            opérationnels à l’issue de leur formation de technicien informatique. Ils pourront également réaliser une
            intervention à distance si vous le souhaitez et vous donner toutes les explications nécessaires à la bonne
            utilisation de votre outil informatique.
            <br>
            <br>
            L'environnement de travail est donc stimulant pour les étudiants mais il permet également à l'équipe
            pédagogique de donner un sens et une vision concrète des apports théoriques, même si nos formations sont
            orientées à 90% sur des cas pratiques "pédagogiques".
            Nos techniciens informatiques en herbe bénéficient de différents outils et différents logiciels pour pouvoir
            mener à bien leur mission. Si vous voulez profiter de ce service, vous avez également à votre disposition un
            formulaire de contact qui vous permettra d'être mis en relation avec le centre le plus proche.

        </p>
    </section><!-- End Services Section -->

    <!-- ======= Nos Centre ======= -->

    <section id="centres" class="centres">


        <div class="section-title">
            <div class="carte_h2" data-aos="fade-up">
            <h2>Nos Centres</h2>
            </div>
        </div>

        <!-- La carte -->
            <div class="container">

                <div class="directive"><img src="../assets/img/carteDirectives.jpg" class="img-fluid" alt=""></div>
                <div id="maCarte"></div>
            </div>
        <!-- End La carte -->

            <?php
            if (isset($erreur)) {
                echo "<div class='alert alert-danger' role='alert'>
  $erreur
</div>";
            }
            if (isset($succes)) {
                echo "<div class='alert alert-success' role='alert'>
  $succes
</div>";
            }
            ?>


    </section><!-- End nos centres Section -->





    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Nos étudiants</h2>
          <p>Voici certains des étudiants que nous formons au sein de nos centres, ils prendront le plus grand soin de
             vos appareils.
          </p>
        </div>

        <div class="row">

          <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up">
            <div class="member">
              <div class="pic"><img src="../assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">

              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic"><img src="../assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">

              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">

              <div class="member">
                  <div class="pic"><img src="../assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info"></div>
              </div>

          </div>

        </div>
          <div id="team_p2">
          <p>
              Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.
              Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme
              assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait
              que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en
              soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des
              passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de
              texte, comme Aldus PageMaker.
          </p>
          </div>
      </div>


    </section><!-- End Our Team Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Les questions les plus fréquemment posées</h2>
        </div>

        <div class="row  d-flex align-items-stretch">

          <div class="col-lg-6 faq-item" data-aos="fade-up">
            <h4>Ce sont des étudiants, comment être sûr que mon qu'ils saurons quoi faire</h4>
            <p>
             Les apprenants sont encadrés par des formateurs, toutes les opérations effectuées sur votre matériel seront
                au préalable approuvé par celui-ci.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="100">
            <h4>Combien de temps dure l'intervention sur mon matériel ?</h4>
            <p>
             Tout dépend du nombre d'intervention en cours et de la nature de celle-ci.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="200">
            <h4>Mon ordinateur est tombé et il ne s'allume plus, pouvez-vous le réparer ?</h4>
            <p>
              Malheureusement, nous n'intervenons pas lorsqu'il s'agit de changement de piècescsur un matériel informatique.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="300">
            <h4>Et si vous perdez mon appareil?</h4>
            <p>
              Aucune chance !
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Us Section ======= -->

      <!-- Modal -->
<!--      <div class="contain_modal">-->


          <?php if ( isset($_POST['success']) && $_POST['success'] == true): echo $msg = "<div class='alert alert-success 
      alert-dismissible fade show my-3' role='alert'>
         <strong>Votre message a été envoyé avec succès!</strong> Nous sommes déjà en train de le lire.
         <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
       </div>" ?>
       <?php  endif  ?>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
           aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header ">
                      <h5 class="modal-title" id="exampleModalLabel">Contact</h5>
                  </div>

                  <div style="margin-left: 10px" class="modal-body">
                      <form class="w-100" method="post" action="/mail">
                          <div class="form-group pt-3" class="msgError form-group" onsubmit="return validateForm()" method="POST">
                              <input type="email" required class="form-control"  id="exampleInputEmail1"
                                     aria-describedby="emailHelp" placeholder="Adresse Email" name="email">
                          </div>
                          <div class="form-group pt-3">
                              <input type="text" pattern="^[a-zA-Z" required class="form-control" id="exampleInputPassword1"
                                     placeholder="Nom, Prénom, Raison social" name="name"<span class="error" id="errorname"></span><br>
                              <span title="Veuillez entrer uniquement des lettres"></span>
                          </div>
                          <div class="form-group pt-3">
                              <input type="text" class="form-control" id="exampleInputPassword1"
                                     placeholder="Adresse" name="adresse">
                          </div>
                          <div class="form-group pt-3">
                              <input required type="text"  class="form-control" id="exampleInputPassword1"
                                     placeholder="Numéro de téléphone" name="tel">
                          </div>
                          <div class="input-group pt-3">
                                    <textarea required class="form-control"  aria-label="With textarea"
                                              placeholder="Dites-nous tout..." name="message"></textarea>
                          </div>

                  </div>
                  <div class="modal-footer">

                      <button name="form_submit" type="submit" class="btn btn-primary">Envoyer</button>
                  </div>

              </div>
          </div>
      </div>





  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3 id="footer_h3">REPARE PC ONLINE</h3>
            <p>
              By<br>
                <img id="footer_online" src="../assets/img/OFP-rouge-texte-blanc.png" alt="" class="img-fluid"><br><br>

            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Liens utiles</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">A propos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Nos centres</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">L'équipe</a></li>
            </ul>
          </div>



          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Notre Newsletter</h4>
            <p id="footer_p">Inscrivez-vous à notre newsletter</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Repare PC by Online</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/ -->
        Designed by <a>V-DesiGn</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  <!--Fichiers Js -->
<!--  <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>-->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>

</html>