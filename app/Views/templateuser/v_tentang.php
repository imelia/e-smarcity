<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Download</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url() ?>/assetsuser/img/favicon.png" rel="icon">
  <link href="<?php echo base_url() ?>/assetsuser/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url() ?>/assetsuser/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assetsuser/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assetsuser/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assetsuser/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assetsuser/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assetsuser/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assetsuser/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url() ?>/assetsuser/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v2.1.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="/home">Diskominfo <span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
              <li class="active"><a href="/user/">Home</a></li>
              <li class="active"><a href="/tentang/">Download</a></li>
              <li><a href="/login" class="get-started-btn scrollto">Login</a></li>
        </ul>
      </nav><!-- .nav-menu -->
      
    </div>
  </header><!-- End Header -->

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="owl-carousel testimonials-carousel"></div>

      </div>
    </section><!-- End Testimonials Section -->
    
  <main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2></h2>
          <p>DINAS KOMUNIKASI INFORMATIKA STATISTIK DAN PERSANDIAN</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <!--<li data-filter="*" class="filter-active">All</li>-->
              <li data-filter=".filter-app"></li>
            </ul>
          </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTabel File</h6>
            </div>
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>File</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <?php foreach ($tentang as $t):?>
                  <tr>
                    <td><?=$t['id_download'];?></td>
                    <td><?php
                        if (!empty($t["nama_file"])) {
                            echo '<img src="'.base_url("assets/img/file/$t[nama_file]").'" width="100">';
                        }
                    ?></td>
                    <td><?=$t['judul_download'];?></td>
                    
                    <td><a href="download/form_edit/<?=$t['id_download'];?>" class="btn btn-primary" onclick="return confirm('Apakah Anda yakin ingin mengedit kategori <?php echo $t['judul_download']; ?> ini?')">Edit</a> | <a href="download/hapus/<?=$t['id_download'];?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori <?php echo $t['judul_download']; ?> ini?')">Hapus</a> </td>
                </tr>
                <?php endforeach;?>
                  </table>
              </div>
            </div>
          </div>
         <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>-->

          <!--<div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
           <p> <mark>VISI MISI : </mark></p>
           <p> <mark>VISI : </mark></p>
           <p> <mark>MISI : </mark></p> -->
              <!--<img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>-->
            </div>
          </div>

         <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
            <p><mark>TUJUAN : </mark></p>
            <p><mark>Berdasarkan visi dan misi, Dinas Komunikasi, Informatika, Statistik dan Persandian Kabupaten Probolinggo menentukan tujuan, sebagai berikut :</mark></p>
               <p><mark> 1. Meningkatkan Keterbukaan Informasi Publik</mark></p>
               <p><mark> 2. Meningkatkan Implementasi Electronic Government</mark></p> -->
             <!-- <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>-->
            </div>
          </div>

         <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
           <p><mark>STRUKTUR ORGANISASI : </mark></p>
            <p><mark>- Kepala Dinas : Yulius Cristian S.I.P, MM. </mark></p>
            <p><mark>- Sekretaris : Drs. Sumaidi</mark></p>
            <p><mark>- Kasubbag. Umum dan Kepegawaian : Rasyidi, S.Sos, MM.</mark></p>
            <p><mark>- Kasubbag. Perencanaan dan Keuangan : Hasyim Ashari, SH,MM.</mark></p>
            <p><mark>- Kepala Bidang Informasi dan Komunikasi Publik : Ofie Agustin, ST., M.Si.</mark></p>
            <p><mark>- Kasi Pengelolaan Informasi Publik : Wahyu Hidayat, S.Sos. M.Si</mark></p>
            <p><mark>- Kasi Pengelolaan Komunikasi Publik : Yogo Prasetyo, S.Kom</mark></p>
            <p><mark>- Kasi Media Publik : Yulistina Widya Ningrum, S.Sos.</mark></p>
            <p><mark>- Kepala Bidang Aplikasi dan Infrastruktur TIK : Ir. R. Sugeng Rahardjo, MMA.</mark></p>
            <p><mark>- Kasi Pengembangan Aplikasi : Dewi Suci Rani, S.Kom.</mark></p>
            <p><mark>- Kasi Infrastruktur TIK : Dody Kusbiantoro, S.Kom.</mark></p>
            <p><mark>- Kasi Tata Kelola E-Goverment dan Pemberdayaan TIK : Mirza Surya Adhita, S.Kom</mark></p>
            <p><mark>- Kepala Bidang Statistik dan Persandian : Drs. MA. Satrio Sinung Raharjo</mark></p>
            <p><mark>- Kasi Pengolahan Data dan Dokumentasi : Ninuk Isnaeni, SH.</mark></p>
            <p><mark>- Kasi Statistik : Aloysius Agus Mulyanto, S.Si, M.Si</mark></p>
            <p><mark>- Kasi Persandian : Bambang Heri Purnomo, SE.</mark></p> -->
             <!-- <img src="../assetsuser/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="../assetsuser/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>-->
            </div>
          </div>

         <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="../assetsuser/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="../assetsuser/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="../assetsuser/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="../assetsuser/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="../assetsuser/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="../assetsuser/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="../assetsuser/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="../assetsuser/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>-->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Diskominfo Kabupaten Probolinggo<span>.</span></h3>
              <p>
                JL. PANGLIMA SUDIRMAN No. 134 KOTA KRAKSAAN, KABUPATEN PROBOLINGGO <br>
                <br><br>
                <strong>Phone:</strong> +62335 846665<br>
                <strong>Email:</strong> redaksi@probolinggokab.go.id<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://twitter.com/Infokabprob" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/infoprobolinggokab" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.youtube.com/channel/UCl1Skf0XEOJG0Ll_DBqRvMA" class="youtube"><i class="bx bxl-youtube"></i></a>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span></span></strong> All Rights Reserved
      </div>
      <div class="credits">
        Diskominfo Kabupaten Probolinggo
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url() ?>/assetsuser/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>/assetsuser/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url() ?>/assetsuser/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url() ?>/assetsuser/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url() ?>/assetsuser/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url() ?>/assetsuser/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url() ?>/assetsuser/vendor/venobox/venobox.min.js"></script>
  <script src="<?php echo base_url() ?>/assetsuser/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url() ?>/assetsuser/vendor/counterup/counterup.min.js"></script>
  <script src="<?php echo base_url() ?>/assetsuser/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url() ?>/assetsuser/js/main.js"></script>

</body>

</html>