   <!-- Services -->

  <!-- Portfolio Grid -->
  <section class="bg-light page-section" id="portfolio" style="margin-top: -20%">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase" style="margin-bottom: 10%">SMART CITY</h2>
        </div>
      </div>

     
      <div class="row">
      <?php foreach ($homefront as $h) : ?>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="/assets/img/<?= $h['gambar']; ?>" width="100%" height="50%" alt="">
          </a>
          <div class="portfolio-caption">
            <h4><?= $h['nama_kategori']; ?></h4>
            <p class="text-muted"></p>
          </div>
        </div>
        <?php endforeach; ?>
    
        <!-- <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="gambar" src="/assetsfrontend/img/logos/ width="150%" height="150%" alt="">
          </a>
          <div class="portfolio-caption">
            <h4></h4>
            <p class="text-muted"></p>
          </div>
        </div>  -->
       
        <!-- <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="../assetsfrontend/img/logos/ENVIRONMENT.png" width="150%" height="150%" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Smart Environment</h4>
            <p class="text-muted"></p>
          </div>
        </div> -->

        <!-- <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="../assetsfrontend/img/logos/LIVING.png" width="150%" height="150%"width="150%" height="150%" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Smart Living</h4>
            <p class="text-muted"></p>
          </div>
        </div> -->

        <!-- <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="../assetsfrontend/img/logos/ECONOMY.png" width="150%" height="150%" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Smart Economy</h4>
            <p class="text-muted"></p>
          </div>
        </div> -->
        
        <!-- <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="../assetsfrontend/img/logos/SOCIETY.png" width="150%" height="150%" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Smart Society</h4>
            <p class="text-muted"></p> 
          </div> -->
       </div> 


  <!-- About -->

  <!-- Team -->

  <!-- Clients -->

  <!-- Contact -->