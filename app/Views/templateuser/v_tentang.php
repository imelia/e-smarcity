<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Download</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url() ?>/assetsuser/img/logo.png" rel="icon">
  <link href="<?php echo base_url() ?>/assetsuser/img/logo.png" rel="apple-touch-icon">

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

<!-- Custom fonts for this template -->
<link href="<?php echo base_url() ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url() ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="<?php echo base_url() ?>/assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="<?php echo base_url() ?>/assetsuser/css/style.css" rel="stylesheet">
</head>

<body>

   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="/home">Diskominfo <span>.</span></a></h1>

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
  <section id="middle">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">DATA TABLE</h1>
            <p class="mb-4"></a></p>
               <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-body">
                <div class="card-header py-3"></div>
                  <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis / Nomor Peraturan</th>
                            <th>Tentang</th>
                          </tr>
                        </thead>
                              <?php $no = 1; 
                                foreach ($tentang as $h) : ?>
                            <tr>
                              <td><?= $no++; ?></td>
                              <td><?=$h['judul_download'];?></td>
                              <td><?=$h['tentang_download'];?>
                              <br>
                              <br><a href="<?php echo base_url()?>/users/detail/<?php echo $h['id_download']?>" class="btn btn-primary" >Detail</a></td>
                    </div>
                  </div>
                            </tr>
                        <?php endforeach; ?>
                      </table>
                </div>
              </div>
            </div>
    </section>
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
<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url() ?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>/assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url() ?>/assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url() ?>/assets/js/demo/datatables-demo.js"></script>
</body>

</html>