<?php 
$pageTitle = "404 - Page Not Found | GKS Chess Academy";
$pageDescription = "Oops! The page you’re looking for doesn’t exist or has been moved. Let’s get you back to playing chess!";
$pageKeywords = "404 error, page not found, chess website error, GKS Chess Academy";
$pageCanonical = "https://gkschessacademy.com/404";
include("Resources/header.php"); 
?>
<body>
  <?php include("Resources/navbar.php"); ?>

  <main>
    <!-- 404 Section -->
    <section class="bd-class-area pt-120 pb-100 text-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="bd-section-title-wrapper wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
              <h1 class="display-1 text-danger mb-3">404</h1>
              <h2 class="mb-4">Page Not Found</h2>
              <p class="mb-4 text-muted">The page you are looking for might have been removed, renamed, or is temporarily unavailable.</p>
              <a href="index" class="btn btn-primary">Back to Homepage</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include("Resources/footer.php"); ?>
</body>
