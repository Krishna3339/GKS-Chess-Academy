<?php 
$pageTitle = "Programs | GKS Chess Academy";
$pageDescription = "Explore various chess programs at GKS Chess Academy, including academy classes, online coaching, doorstep training, and school-based programs.";
$pageKeywords = "chess programs, academy chess classes, online chess coaching, doorstep chess training, school chess programs, GKS programs";
$pageCanonical = "https://gkschessacademy.com/programs";
include("Resources/header.php"); 
?>
<body>
  <?php include("Resources/navbar.php"); ?>
  <main>
    <!-- Breadcrumb Section -->
    <section class="bd-breadcrumb-area p-relative fix theme-bg">
      <div class="bd-breadcrumb-bg" data-background="assets/img/bg/about-banner.jpg"></div>
      <div class="bd-breadcrumb-wrapper mb-60 p-relative">
        <div class="container">
          <div class="bd-breadcrumb-shape d-none d-sm-block p-relative">
            <div class="bd-breadcrumb-shape-1"><img src="assets/img/shape/curved-line-2.png" alt=""></div>
            <div class="bd-breadcrumb-shape-2"><img src="assets/img/shape/white-curved-line.png" alt=""></div>
          </div>
          <div class="row justify-content-center">
            <div class="col-xl-10">
              <div class="bd-breadcrumb d-flex align-items-center justify-content-center">
                <div class="bd-breadcrumb-content text-center">
                  <h1 class="bd-breadcrumb-title">Our Programs</h1>
                  <div class="bd-breadcrumb-list">
                    <span><a href="index"><i class="flaticon-hut"></i>GKS</a></span>
                    <span>Programs</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bd-wave-wrapper bd-wave-wrapper-3">
        <div class="bd-wave bd-wave-3"></div><div class="bd-wave bd-wave-3"></div>
      </div>
    </section>

    <!-- Programs Listing Section -->
    <section class="bd-class-area pt-120 pb-90">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-6 text-center">
            <h2 class="bd-section-title mb-60">Choose the Right Program for You</h2>
          </div>
        </div>
        <div class="row">
          <!-- Program Card 1 -->
          <div class="col-md-6 col-lg-4 mb-4">
            <a href="academy-classes.html" class="mega-program">
              <div class="mega-menu-2-inner-num"><span>01</span></div>
              <div class="mega-menu-2-inner-title">
                <h6>Academy Classes</h6>
                <span>In-person coaching at our centers</span>
              </div>
            </a>
          </div>
          <!-- Program Card 2 -->
          <div class="col-md-6 col-lg-4 mb-4">
            <a href="online-classes.html" class="mega-program">
              <div class="mega-menu-2-inner-num"><span>02</span></div>
              <div class="mega-menu-2-inner-title">
                <h6>Online Classes</h6>
                <span>Live virtual sessions</span>
              </div>
            </a>
          </div>
          <!-- Program Card 3 -->
          <div class="col-md-6 col-lg-4 mb-4">
            <a href="doorstep-coaching.html" class="mega-program">
              <div class="mega-menu-2-inner-num"><span>03</span></div>
              <div class="mega-menu-2-inner-title">
                <h6>Doorstep Coaching</h6>
                <span>Learn chess at home</span>
              </div>
            </a>
          </div>
          <!-- Program Card 4 -->
          <div class="col-md-6 col-lg-4 mb-4">
            <a href="gated-communities.html" class="mega-program">
              <div class="mega-menu-2-inner-num"><span>04</span></div>
              <div class="mega-menu-2-inner-title">
                <h6>Gated Communities</h6>
                <span>Private community sessions</span>
              </div>
            </a>
          </div>
          <!-- Program Card 5 -->
          <div class="col-md-6 col-lg-4 mb-4">
            <a href="school-programs.html" class="mega-program">
              <div class="mega-menu-2-inner-num"><span>05</span></div>
              <div class="mega-menu-2-inner-title">
                <h6>School Programs</h6>
                <span>Integrated in-school coaching</span>
              </div>
            </a>
          </div>
          <!-- Program Card 6 -->
          <div class="col-md-6 col-lg-4 mb-4">
            <a href="contest-preparation.html" class="mega-program">
              <div class="mega-menu-2-inner-num"><span>06</span></div>
              <div class="mega-menu-2-inner-title">
                <h6>Contest Preparation</h6>
                <span>Advanced training for tournaments</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include("Resources/footer.php"); ?>
</body>
