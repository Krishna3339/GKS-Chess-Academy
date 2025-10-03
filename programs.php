<?php 
$pageTitle = "Programs | GKS Chess Academy";
$pageDescription = "Explore various chess programs at GKS Chess Academy, including academy classes, online coaching, doorstep training, and school-based programs.";
$pageKeywords = "chess programs, academy chess classes, online chess coaching, doorstep chess training, school chess programs, GKS programs";
$pageCanonical = "https://gkschessacademy.com/programs";
include("Resources/header.php"); 
?>

<!-- Custom CSS -->
<style>
.program-card {
  position: relative;
  display: block;
  overflow: hidden;
  border-radius: 12px;
  height: 280px;
  text-decoration: none;
  color: #fff;
  transition: transform 0.4s ease, box-shadow 0.4s ease;
}
.program-card:hover {
  transform: translateY(-8px) scale(1.03);
  box-shadow: 0 15px 25px rgba(0,0,0,0.25);
}
.program-img {
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center;
  filter: brightness(0.4);
  transition: transform 0.5s ease;
}

.program-card:hover .program-img {
  transform: scale(1.1);
}
.program-overlay {
  position: absolute;
  bottom: 20px;
  left: 20px;
  z-index: 2;
  opacity: 0;
  transform: translateY(30px);
  transition: all 0.4s ease;
}
.program-card:hover .program-overlay {
  opacity: 1;
  transform: translateY(0);
}
.program-overlay h6 {
  font-size: 1.2rem;
  font-weight: 600;
  margin-bottom: 4px;
}
.program-overlay span {
  font-size: 0.9rem;
  color: xf1f1f1;
}
.program-num {
  position: absolute;
  top: 15px;
  right: 20px;
  font-size: 2rem;
  font-weight: bold;
  opacity: 0.8;
  color: #fff;
}
h6,span{
  color: white;
}

</style>

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
    <!-- Programs Section -->
<section class="bd-class-area py-5">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-xl-6 text-center">
        <h2 class="bd-section-title">Choose the Right Program for You</h2>
      </div>
    </div>

    <div class="row g-4">
      <!-- Program Card -->
      <div class="col-md-6 col-lg-4">
        <a href="academy-classes.php" class="program-card">
          <div class="program-img" style="background-image:url('assets/img/services/1.png');"></div>
          <div class="program-overlay">
            <h6>Academy Classes</h6>
            <span>In-person coaching at our centers</span>
          </div>
          <div class="program-num">01</div>
        </a>
      </div>

      <div class="col-md-6 col-lg-4">
        <a href="online-classes.php" class="program-card">
          <div class="program-img" style="background-image:url('assets/img/services/2.png');"></div>
          <div class="program-overlay">
            <h6>Online Classes</h6>
            <span>Live virtual sessions</span>
          </div>
          <div class="program-num">02</div>
        </a>
      </div>

      <div class="col-md-6 col-lg-4">
        <a href="doorstep-coaching.php" class="program-card">
          <div class="program-img" style="background-image:url('assets/img/services/3.png');"></div>
          <div class="program-overlay">
            <h6>Doorstep Coaching</h6>
            <span>Learn chess at home</span>
          </div>
          <div class="program-num">03</div>
        </a>
      </div>

      <div class="col-md-6 col-lg-4">
        <a href="gated-communities.php" class="program-card">
          <div class="program-img" style="background-image:url('assets/img/services/4.png');"></div>
          <div class="program-overlay">
            <h6>Gated Communities</h6>
            <span>Private community sessions</span>
          </div>
          <div class="program-num">04</div>
        </a>
      </div>

      <div class="col-md-6 col-lg-4">
        <a href="school-programs.php" class="program-card">
          <div class="program-img" style="background-image:url('assets/img/services/5.png');"></div>
          <div class="program-overlay">
            <h6>School Programs</h6>
            <span>Integrated in-school coaching</span>
          </div>
          <div class="program-num">05</div>
        </a>
      </div>

      <div class="col-md-6 col-lg-4">
        <a href="contest-preparation.php" class="program-card">
          <div class="program-img" style="background-image:url('assets/img/services/6.png');"></div>
          <div class="program-overlay">
            <h6>Contest Preparation</h6>
            <span>Advanced training for tournaments</span>
          </div>
          <div class="program-num">06</div>
        </a>
      </div>
    </div>
  </div>
</section>

  </main>
  <?php include("Resources/footer.php"); ?>
</body>
