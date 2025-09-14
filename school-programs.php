<?php 
$pageTitle = "School Programs | GKS Chess Academy";
$pageDescription = "Bring structured chess education to schools with GKS Chess Academy's specialized curriculum and certified coaching staff.";
$pageKeywords = "school chess programs, chess curriculum, chess in education, school chess coaching";
$pageCanonical = "https://gkschessacademy.com/school-programs";
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
                  <h1 class="bd-breadcrumb-title">School Programs</h1>
                  <div class="bd-breadcrumb-list">
                    <span><a href="index"><i class="flaticon-hut"></i>GKS</a></span>
                    <span>School Programs</span>
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

    <!-- Coming Soon Section -->
    <section class="bd-class-area pt-120 pb-100">
      <div class="container text-center">
        <h1 class="bd-section-title text-black-50 mb-4">Coming Soon</h1>
        <a href="index" class="btn btn-primary">Back to Home</a>
      </div>
    </section>
  </main>
  <?php include("Resources/footer.php"); ?>
</body>
