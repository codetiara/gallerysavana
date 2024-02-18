<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lumia Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url();?>assets/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/template/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/template/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/template/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/template/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url();?>assets/template/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Lumia
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>

.about {
  padding-top: 60px;
  padding-bottom: 60px;
}

.about img {
  max-width: 100%;
  border: 0;
  border-radius: 50%;
}

.about h3 {
  font-weight: 700;
  font-size: 24px;
  color: #242424;
}

.about p {
  font-size: 15px;
  color: #777;
  margin-bottom: 15px;
}

.about ul {
  list-style: none;
  padding: 0;
}

.about ul li {
  margin-bottom: 10px;
  position: relative;
  padding-left: 35px;
}

.about ul li:last-child {
  margin-bottom: 0;
}

.about ul li::before {
  content: "\f058";
  font-family: "Raleway", sans-serif;
  font-size: 16px;
  position: absolute;
  left: 0;
  color: #f82249;
  top: 2px;
}


  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center" style="background-color:  #FFC0CB">
  <div class="container d-flex align-items-center">
    <div class="logo me-auto">
    <img src="<?= base_url('assets/img/savanamemories.png') ?>" alt="Logo" class="img-fluid" style="width: 250px; height: auto; margin-right: 100px;">



    </div>

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a class="nav-link scrollto active" href="<?php echo site_url('Login/login'); ?>" style="color:  white;">Login</a></li>
        <li><a class="nav-link scrollto" href="<?php echo site_url('Registration/register'); ?>">Register</a></li>
      </ul>
    </nav><!-- .navbar -->
  </div>
</header><!-- End Header -->


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center" style="background-image: url('<?php echo base_url('assets/img/landingpage.jpg'); ?>'); background-size: 100%; background-repeat: no-repeat; box-shadow: none;">
    <div class="container text-center text-md-left" data-aos="fade-up">
        <h1>Welcome to <span>Savana Memories</span></h1>
        <br>
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
</section>

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio" style="background-color: white;">
      <div class="container">

        <div class="section-title">
          <h2>Gallery Foto</h2>
          <p>Berbagi Moment </p>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?= base_url('assets/img/foto1.jpg') ?>" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
              <img src="<?= base_url('assets/img/foto2.jpg') ?>" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
              <img src="<?= base_url('assets/img/foto3.jpg') ?>" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
              <img src="<?= base_url('assets/img/foto4.jpg') ?>" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
              <img src="<?= base_url('assets/img/foto5.jpg') ?>" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
              <img src="<?= base_url('assets/img/foto6.jpg') ?>" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
              <img src="<?= base_url('assets/img/foto7.jpg') ?>" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
              <img src="<?= base_url('assets/img/foto8.jpg') ?>" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
              <img src="<?= base_url('assets/img/foto9.jpg') ?>" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
  
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

   


    <!-- ======= Team Section ======= -->
  

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg" style="background-color: #FFC0CB;">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-5 justify-content-center">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>Jl. Kenangan Indah<br>No. 123, Kota Bahagia</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@savanamemories.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+62 858-8995-5145</p>
                </div>
              </div>
            </div>

          </div>

        </div>

       

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

 

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Lumia</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/lumia-bootstrap-business-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url();?> assets/template/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?php echo base_url();?> assets/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?> assets/template/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url();?> assets/template/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url();?> assets/template/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url();?> assets/template/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?php echo base_url();?> assets/template/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url();?> assets/template/js/main.js"></script>

</body>

</html>