<?php 
$pageTitle = "Academy Classes | GKS Chess Academy";
$pageDescription = "Explore GKS Chess Academy's in-person academy classes designed for all levels to build strong chess foundations.";
$pageKeywords = "academy chess classes, GKS academy programs, in-person chess training";
$pageCanonical = "https://gkschessacademy.com/academy-classes";
include("Resources/header.php"); 
?>
<style>
  /* ===================== 
   GLOBAL THEME VARIABLES 
===================== */
:root {
  --primary: #0b3d91;   /* Deep Blue */
  --accent: #f2c94c;    /* Gold */
  --muted: #6b7280;
  --card: #ffffff;
  --bg: #f6f8fb;
  --gradient-primary: linear-gradient(90deg, #0b3d91, #072b6a);
  --gradient-accent: linear-gradient(90deg, #f2c94c, #f4b400);
  --radius: 14px;
  --shadow: 0 8px 24px rgba(11, 61, 145, 0.12);
}

body {
  font-family: 'Inter', system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial;
  background: var(--bg);
  color: #111827;
  line-height: 1.6;
}

/* ===================== 
   HERO SECTION 
===================== */
.hero {
  background: var(--gradient-primary);
  color: #fff;
  padding: 80px 0;
  border-radius: 0 0 40px 40px;
  overflow: hidden;
}
.hero h1 {
  line-height: 1.3;
}
.hero .lead {
  color: rgba(255, 255, 255, 0.9);
}
.hero .btn {
  transition: all 0.3s ease;
}
.hero .btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 18px rgba(255,255,255,0.25);
}

/* ===================== 
   CHIPS / LABEL 
===================== */
.chip {
  display: inline-flex;
  align-items: center;
  gap: .5rem;
  padding: .4rem .75rem;
  border-radius: 999px;
  font-weight: 600;
  background: rgba(255, 255, 255, 0.15);
  backdrop-filter: blur(6px);
}

/* ===================== 
   FEATURE CARDS 
===================== */
.feature-card {
  background: var(--card);
  border-radius: var(--radius);
  padding: 22px;
  box-shadow: var(--shadow);
  transition: all 0.35s ease;
}
.feature-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 12px 28px rgba(11, 61, 145, 0.15);
}
.feature-card h6 {
  font-weight: 600;
}

/* ===================== 
   ORDERED STEP LIST 
===================== */
.ol-step {
  counter-reset: step;
}
.ol-step li {
  list-style: none;
  position: relative;
  padding-left: 60px;
  margin-bottom: 22px;
}
.ol-step li:before {
  counter-increment: step;
  content: counter(step);
  position: absolute;
  left: 0;
  top: 0;
  width: 44px;
  height: 44px;
  border-radius: 50%;
  background: var(--primary);
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 700;
  font-size: 1rem;
  box-shadow: var(--shadow);
}

/* ===================== 
   CTA HIGHLIGHT BOX 
===================== */
.cta-hero {
  background: var(--gradient-accent);
  color: #08203a;
  border-radius: 12px;
  padding: 14px 20px;
  display: inline-block;
  font-weight: 600;
  box-shadow: var(--shadow);
}

/* ===================== 
   TESTIMONIALS 
===================== */
.testi {
  background: linear-gradient(180deg, #fff, #f9fbff);
  border-radius: var(--radius);
  padding: 20px;
  box-shadow: 0 6px 20px rgba(9, 30, 66, 0.06);
  transition: all 0.35s ease;
}
.testi:hover {
  transform: translateY(-6px);
  box-shadow: 0 10px 26px rgba(11, 61, 145, 0.15);
}

/* ===================== 
   FORM STYLING 
===================== */
form.feature-card input,
form.feature-card select {
  border-radius: 10px;
  border: 1px solid #d1d5db;
  padding: .65rem .9rem;
}
form.feature-card input:focus,
form.feature-card select:focus {
  border-color: var(--primary);
  box-shadow: 0 0 0 0.2rem rgba(11, 61, 145, 0.25);
}
form .btn {
  padding: .7rem 1.2rem;
  border-radius: 10px;
  font-weight: 600;
  transition: 0.3s ease;
}
form .btn:hover {
  transform: scale(1.02);
}

/* ===================== 
   FOOTER 
===================== */
.footer {
  background: #0b254d;
  color: #e6eefc;
  padding: 40px 0;
  font-size: .95rem;
}
.footer a {
  color: #f2c94c;
  text-decoration: none;
}
.footer a:hover {
  text-decoration: underline;
}

/* ===================== 
   RESPONSIVE 
===================== */
@media (max-width: 767px) {
  .hero {
    padding: 50px 0;
    border-radius: 0 0 20px 20px;
  }
  .hero .display-5 {
    font-size: 1.7rem;
  }
  .ol-step li {
    padding-left: 50px;
  }
}

</style> 
<body>
  <?php include("Resources/navbar.php"); ?>
  <main>
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
                  <h1 class="bd-breadcrumb-title">Academy Classes</h1>
                  <div class="bd-breadcrumb-list">
                    <span><a href="index"><i class="flaticon-hut"></i>GKS</a></span>
                    <span>Academy Classes</span>
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
   <section class="bd-class-area pt-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div 
              class="bd-section-title-wrapper text-center mb-55 wow fadeInUp"
              data-wow-duration="1s"
              data-wow-delay=".2s"
            >
              <h1 class="bd-section-title text-black-50 mb-0">Grow with the GKS Chess Academy Family</h1>
              <p style="text-align: justify;">
                Our academy classes are designed for students who want structured, step-by-step growth in chess. From basics to advanced tactics, kids are trained under an expert curriculum with regular practice games.
              </p>
            </div>
          </div>
        </div>
      </div>
  </section>


<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 text-white">
        <span class="chip mb-3"><i class="fa-solid fa-chess-knight"></i> Contest Preparation</span>
        <h1 class="display-5 fw-bold mt-3 text-white  ">Train Like a Champion — Contest & Tournament Coaching</h1>
        <p class="lead mt-3">Specialised training for students preparing for district, state, national, and international chess competitions. Focused curriculum, mock tournaments, and mental conditioning to make your child competition-ready.</p>

        <div class="d-flex gap-2 mt-4">
          <a href="#signup" class="btn btn-lg btn-light text-primary me-2">Book Free Assessment</a>
          <a href="#curriculum" class="btn btn-outline-light btn-lg">View Curriculum</a>
        </div>

        <div class="mt-4 cta-hero d-inline-block">
          <strong>Next batch starts:</strong> <span id="next-batch">Contact us for schedule</span>
        </div>
      </div>

      <div class="col-lg-5 d-none d-lg-block">
        <div class="card" style="border-radius:16px;overflow:hidden;box-shadow:0 20px 50px rgba(11,61,145,0.12)">
          <img src="assets/img/program-sub/chess-contest.jpg" alt="Contest Training" class="img-fluid" style="height:320px;object-fit:cover;width:100%">
          <div class="p-4">
            <h5 class="mb-2">Advanced Contest Program</h5>
            <p class="mb-2 text-muted">Tactics, openings, endgames, time management, and psychological readiness — all under one program.</p>
            <div class="d-flex gap-2">
              <span class="badge bg-primary">Mock Tournaments</span>
              <span class="badge bg-secondary">Performance Analysis</span>
              <span class="badge bg-warning text-dark">FIDE Guidance</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>  
  
<!-- KEY BENEFITS -->
<section class="py-5">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-6 col-lg-3">
        <div class="feature-card h-100 text-center">
          <i class="fa-solid fa-bullseye fa-2x text-primary mb-3"></i>
          <h6 class="mb-2">Tournament Readiness</h6>
          <p class="text-muted small">Match-specific prep, clock discipline and result-oriented practice.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="feature-card h-100 text-center">
          <i class="fa-solid fa-chess-rook fa-2x text-primary mb-3"></i>
          <h6 class="mb-2">Opening & Endgame Mastery</h6>
          <p class="text-muted small">Curated opening repertoires and practical endgame drills.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="feature-card h-100 text-center">
          <i class="fa-solid fa-chart-line fa-2x text-primary mb-3"></i>
          <h6 class="mb-2">Performance Analysis</h6>
          <p class="text-muted small">Detailed post-game analysis and progress reports for parents.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="feature-card h-100 text-center">
          <i class="fa-solid fa-brain fa-2x text-primary mb-3"></i>
          <h6 class="mb-2">Strategy & Psychology</h6>
          <p class="text-muted small">Time pressure, mindset training and competitive resilience.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CURRICULUM / HOW IT WORKS -->
<section id="curriculum" class="py-5 bg-white">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <h3 class="fw-bold">Curriculum</h3>
        <p class="text-muted">A progressive curriculum designed for measurable improvement across openings, middlegame tactics and endgames. Emphasis on tournament formats and time controls.</p>

        <ol class="ol-step mt-4">
          <li>
            <h6 class="mb-1">Assessment & Goal Setting</h6>
            <p class="mb-0 text-muted">Initial rating & strengths/weaknesses analysis to create a tailored plan.</p>
          </li>
          <li>
            <h6 class="mb-1">Opening Repertoire</h6>
            <p class="mb-0 text-muted">Build a reliable and practical opening set that suits the student’s style.</p>
          </li>
          <li>
            <h6 class="mb-1">Tactics & Calculation</h6>
            <p class="mb-0 text-muted">Daily tactical drills and visualization exercises to sharpen calculation speed.</p>
          </li>
          <li>
            <h6 class="mb-1">Endgames & Practical Play</h6>
            <p class="mb-0 text-muted">Essential endgame knowledge and practical plans to convert advantages.</p>
          </li>
          <li>
            <h6 class="mb-1">Mock Tournaments & Review</h6>
            <p class="mb-0 text-muted">Weekly mock events with detailed post-mortem analysis.</p>
          </li>
        </ol>

      </div>

      <div class="col-lg-6">
        <div class="p-4 feature-card">
          <h5 class="mb-3">Sample Weekly Schedule</h5>
          <table class="table table-borderless small">
            <tbody>
              <tr><td>Mon</td><td>Opening study + 30 min practice game</td></tr>
              <tr><td>Tue</td><td>Tactics session (calculation drills)</td></tr>
              <tr><td>Wed</td><td>Middlegame strategy + annotated games</td></tr>
              <tr><td>Thu</td><td>Endgame practice</td></tr>
              <tr><td>Fri</td><td>Mock tournament / time control practice</td></tr>
              <tr><td>Sat</td><td>One-on-one review & coach feedback</td></tr>
            </tbody>
          </table>
          <div class="d-grid mt-3"><a href="#signup" class="btn btn-primary">Enroll for Trial Week</a></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- WHO CAN JOIN & PRICING HIGHLIGHT -->
<section class="py-5">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-7">
        <h4 class="fw-bold">Who Can Join</h4>
        <p class="text-muted">Intermediate and advanced players, school-level champions, and ambitious beginners aiming for competitive play. Age 7+</p>

        <ul class="list-unstyled mt-3">
          <li class="mb-2"><i class="fa-solid fa-check text-primary me-2"></i>Students preparing for district/state/national competitions</li>
          <li class="mb-2"><i class="fa-solid fa-check text-primary me-2"></i>Players aiming for FIDE rating improvement</li>
          <li class="mb-2"><i class="fa-solid fa-check text-primary me-2"></i>Parents seeking structured contest-focused training</li>
        </ul>
      </div>

      <div class="col-md-5">
        <div class="feature-card">
          <h5 class="mb-3">Pricing Snapshot</h5>
          <p class="small text-muted mb-2">Transparent, tiered coaching plans — pay monthly or for a full training block.</p>
          <div class="d-flex align-items-center justify-content-between">
            <div>
              <h6 class="mb-0">Trial Week</h6>
              <small class="text-muted">₹499</small>
            </div>
            <div>
              <h6 class="mb-0">Monthly</h6>
              <small class="text-muted">₹3,999</small>
            </div>
          </div>
          <hr>
          <small class="text-muted">Custom one-on-one packages & FIDE preparation available on request.</small>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="py-5 bg-white">
  <div class="container">
    <h4 class="fw-bold text-center mb-4">Success Stories</h4>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="testi h-100">
          <p class="mb-2">"GK's coaching helped me win my state-level championship. The mock tournaments and endgame drills were game changers."</p>
          <div class="d-flex align-items-center">
            <img src="https://via.placeholder.com/48" class="rounded-circle me-2" alt="student">
            <div>
              <strong>Riya Sharma</strong><br><small class="text-muted">State-level champion, Age 13</small>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="testi h-100">
          <p class="mb-2">"My son's calculation speed and confidence improved dramatically. Coaches are patient and very experienced."</p>
          <div class="d-flex align-items-center">
            <img src="https://via.placeholder.com/48" class="rounded-circle me-2" alt="parent">
            <div>
              <strong>Mr. & Mrs. Verma</strong><br><small class="text-muted">Parent</small>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="testi h-100">
          <p class="mb-2">"Structured training, personal attention and professional guidance. Excellent for serious players."</p>
          <div class="d-flex align-items-center">
            <img src="https://via.placeholder.com/48" class="rounded-circle me-2" alt="coach">
            <div>
              <strong>Coach GK</strong><br><small class="text-muted">Head Coach</small>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- SIGNUP CTA -->
<section id="signup" class="py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-7">
        <h4 class="fw-bold">Ready to Prepare for Your Next Tournament?</h4>
        <p class="text-muted">Book a free assessment and trial week to let our coaches evaluate and prepare a personalised plan.</p>
      </div>
      <div class="col-md-5">
        <form class="p-4 feature-card">
          <div class="mb-3">
            <label class="form-label">Parent / Player Name</label>
            <input class="form-control" placeholder="Your name">
          </div>
          <div class="mb-3">
            <label class="form-label">Phone / WhatsApp</label>
            <input class="form-control" placeholder="+91 9XXXXXXXXX">
          </div>
          <div class="mb-3">
            <label class="form-label">Preferred Mode</label>
            <select class="form-select">
              <option>Online Group</option>
              <option>1-on-1 Coaching</option>
              <option>Doorstep Coaching</option>
            </select>
          </div>
          <div class="d-grid"><button class="btn btn-primary">Request Free Assessment</button></div>
        </form>
      </div>
    </div>
  </div>
</section>
  </main>
  <?php include("Resources/footer.php"); ?>
</body>
