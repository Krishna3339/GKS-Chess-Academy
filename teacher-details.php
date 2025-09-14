<?php 
$pageTitle = "Trainer Details | GKS Chess Academy";
$pageDescription = "Meet the experienced and dedicated trainers of GKS Chess Academy who guide students to master chess with skill and strategy.";
$pageKeywords = "GKS chess coaches, trainer profiles, chess instructors, GKS Academy teachers";
$pageCanonical = "https://gkschessacademy.com/teacher-details";
include("Resources/header.php"); 

// Trainer Details
@$tn = $_REQUEST['Trainer'];
  if ($tn == 'kiranSundar') {
      $trainerName = "G Kiran Sundar";
      $role = "Founder & Director";
      $image = "assets/img/trainers/GKS.jpg";
      $paragraph="Kiran Sundar’s mission at GKS Chess Academy is to empower every student with the skills, confidence, and competitive edge needed to thrive in chess and beyond.";
  }
  else if($tn == 'Jishitha')
  {
      $trainerName = "D Jishitha";
      $role = "Women FIDE Master";
      $image = "assets/img/trainers/Jishitha.png";
      $paragraph="Jishitha D. is a highly accomplished chess player who holds the prestigious WFM title and brings over 11 years of experience to her role as a chess instructor. With international victories in tournaments like the World Youth Chess Championship and the Asian Youth Chess Championship, she has represented India with distinction.";
  }
  else if($tn == 'Harsh')
  {
      $trainerName = "Harsh";
      $role = "Chess Coach";
      $image = "assets/img/trainers/Harsh.png";
      $paragraph="Coach Harsh brings energy, expertise, and dedication to the GKS team, helping young players reach their highest potential in chess and beyond. His coaching style blends traditional and modern techniques for effective learning, emphasizing interactive sessions, personalized attention, and strategic improvement.";
  }
  else{
    $trainerName = "Anna D.Brown";
    $image = "assets/img/teacher/8.jpg";
  }
?>
<body>
  <!-- Preloader, back-to-top, header -->
  <?php include("Resources/navbar.php"); ?>

    <!-- main area start here  -->
   <main>
      <!-- breadcrumb area start here -->
      <section class="bd-breadcrumb-area p-relative fix theme-bg">
         <!-- breadcrumb background image -->
         <div class="bd-breadcrumb-bg" data-background="assets/img/bg/breadcrumb-bg.jpg"></div>
         <div class="bd-breadcrumb-wrapper mb-60 p-relative">
            <div class="container">
               <div class="bd-breadcrumb-shape d-none d-sm-block p-relative">
                  <div class="bd-breadcrumb-shape-1">
                     <img src="assets/img/shape/curved-line-2.png" alt="img not found!">
                  </div>
                  <div class="bd-breadcrumb-shape-2">
                     <img src="assets/img/shape/white-curved-line.png" alt="img not found!">
                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-xl-10">
                     <div class="bd-breadcrumb d-flex align-items-center justify-content-center">
                        <div class="bd-breadcrumb-content text-center">
                           <h1 class="bd-breadcrumb-title">Teachers Details</h1>
                           <div class="bd-breadcrumb-list">
                              <span><a href="index"><i class="flaticon-hut"></i>GKS</a></span>
                              <span>Teachers Details</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="bd-wave-wrapper bd-wave-wrapper-3">
            <div class="bd-wave bd-wave-3"></div>
            <div class="bd-wave bd-wave-3"></div>
         </div>
      </section>
      <!-- breadcrumb area end here  -->

      <!-- teacher details widget start here-->
      <section class="bd-teacher-widget-area pb-70 pt-120">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 mb-50">
                  <div class="bd-teacher-widget wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                     <div class="bd-teacher-widget-thumb p-relative">
                        <img src="<?php echo $image; ?>" alt="<?php echo $trainerName; ?>">
                        <div class="panel wow"></div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 mb-50">
                  <div class="bd-teacher-widget theme-bg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                     <div class="bd-teacher-widget-content">
                        <h3 class="bd-teacher-widget-title"><?php echo $trainerName; ?></h3>
                        <span class="bd-teacher-widget-tag"><?php echo $role; ?></span>
                        <p class="text-justify"><?php echo $paragraph; ?></p>
                        <p class="text-justify">Observers of the students often note that they are confident, perceptive, caring, and independent—qualities that reflect the trainer’s thoughtful and empowering teaching style, much like the nurturing approach seen in Montessori education. Through chess, trainers foster not only critical thinking but also emotional intelligence and self-reliance in every child they mentor.
                        </p>
                        <div class="bd-teacher-widget-social">
                           <span>Follow Me:</span>
                           <ul>
                              <li><a target="_blank" href="https://www.facebook.com/"><i
                                       class="fa-brands fa-facebook-f"></i></a></li>
                              <li><a target="_blank" href="https://twitter.com/"><i
                                       class="fa-brands fa-twitter"></i></a></li>
                              <li><a target="_blank" href="https://www.youtube.com/"><i
                                       class="fa-brands fa-youtube"></i></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 mb-50">
                  <div class="bd-teacher-widget theme-bg-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                     <div class="bd-teacher-widget-content">
                        <h4 class="bd-teacher-widget-title-2 mb-25">My Skills :</h4>
                        <div class="bd-teacher-skill-wrap">
                           <div class="bd-teacher-skill mb-30">
                              <div class="bd-teacher-skill-content">
                                 <span>Preschool Education</span>
                                 <span>97%</span>
                              </div>
                              <div class="progress">
                                 <div class="progress-bar" role="progressbar" style="width: 97%" aria-valuenow="97"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                           </div>
                           <div class="bd-teacher-skill mb-30">
                              <div class="bd-teacher-skill-content">
                                 <span>Physical Education</span>
                                 <span>87%</span>
                              </div>
                              <div class="progress">
                                 <div class="progress-bar" role="progressbar" style="width: 87%" aria-valuenow="87"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                           </div>
                           <div class="bd-teacher-skill mb-30">
                              <div class="bd-teacher-skill-content">
                                 <span>Manner Education</span>
                                 <span>95%</span>
                              </div>
                              <div class="progress">
                                 <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 mb-50">
                  <div class="bd-teacher-widget theme-bg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                     <div class="bd-teacher-widget-content">
                        <h4 class="bd-teacher-widget-title-2 mb-15">Personal Info : </h4>
                        <div class="bd-teacher-widget-info-wrap">
                           <div class="bd-teacher-widget-info">
                              <p>Email:</p>
                              <p><a href="mailto:gkschessacademy.com">annadbrown@GKS.com</a></p>
                           </div>
                           <div class="bd-teacher-widget-info">
                              <p>Education:</p>
                              <p>University of California, Los Angeles</p>
                           </div>
                           <div class="bd-teacher-widget-info">
                              <p>Teaching Since:</p>
                              <p>2016</p>
                           </div>
                           <div class="bd-teacher-widget-info">
                              <p>At Clears Since: </p>
                              <p>2018</p>
                           </div>
                           <div class="bd-teacher-widget-info">
                              <p>What I love Most: </p>
                              <p>The Kids with Creative Mind</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- teacher details widget end here-->

      <!-- routine area start here  -->
      <section class="bd-routine-2-area pb-120">
         <div class="container">
            <div class="row">
               <div class="row justify-content-center">
                  <div class="col-lg-8">
                     <div class="bd-section-title-wrapper text-center mb-55 wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay=".3s">
                        <h2 class="bd-section-title mb-0">My Time Table</h2>
                        <p>Our multi-level kindergarten programs cater to the age group of 2-5 years<br> with a
                           curriculum
                           focussing children.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="bd-routine-2-wrapper wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
               <div class="row">
                  <div class="col-12">
                     <div class="bd-routine-2-nav">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                           <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="all-class-tab" data-bs-toggle="tab"
                                 data-bs-target="#all-class" type="button" role="tab" aria-controls="all-class"
                                 aria-selected="true">All Class</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="sports-class-tab" data-bs-toggle="tab"
                                 data-bs-target="#sports-class" type="button" role="tab" aria-controls="sports-class"
                                 aria-selected="false">Sports
                                 Classs</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="dancing-class-tab" data-bs-toggle="tab"
                                 data-bs-target="#dancing-class" type="button" role="tab" aria-controls="dancing-class"
                                 aria-selected="false">Dancing
                                 Class</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="drawing-tab" data-bs-toggle="tab" data-bs-target="#drawing"
                                 type="button" role="tab" aria-controls="drawing" aria-selected="false">Drawing
                                 Class</button>
                           </li>
                        </ul>
                     </div>
                     <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="all-class" role="tabpanel"
                           aria-labelledby="all-class-tab">
                           <div class="bd-routine-2">
                              <div class="table-responsive d-none d-md-block">
                                 <table class="table">
                                    <thead>
                                       <tr>
                                          <th scope="col" class="clr-4">Sunday</th>
                                          <th scope="col" class="clr-5">Monday</th>
                                          <th scope="col" class="clr-4">Tuesday</th>
                                          <th scope="col" class="clr-5">Wednessday</th>
                                          <th scope="col" class="clr-4">Thursday</th>
                                          <th scope="col" class="clr-5">Friday</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td class="clr-5"></td>
                                          <td class="clr-1">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-6">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-2">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-7">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-4"></td>
                                       </tr>
                                       <tr>
                                          <td class="clr-6">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-5"></td>
                                          <td class="clr-3">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-5">

                                          </td>
                                          <td class="clr-4"></td>
                                          <td class="clr-6">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td class="clr-5"></td>
                                          <td class="clr-2">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-8">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-4"></td>
                                          <td class="clr-1">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-4"></td>
                                       </tr>
                                       <tr>
                                          <td class="clr-3">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-1">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-4"></td>
                                          <td class="clr-1">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-2">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-5"></td>
                                       </tr>
                                       <tr>
                                          <td class="clr-5"></td>
                                          <td class="clr-6">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-2">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-4"></td>
                                          <td class="clr-3">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-7">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td class="clr-1">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-5"></td>
                                          <td class="clr-8">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-7">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-5"></td>
                                          <td class="clr-4">
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                              <div class="bd-routine-list-wrap d-md-none">
                                 <div class="bd-routine-list">
                                    <h4 class="bd-routine-day">Monday</h4>
                                    <ul>
                                       <li>
                                          <span class="class-title">Sports Class</span>
                                          <span>8:00am - 8:30am </span>
                                       </li>
                                       <li>
                                          <span class="class-title">Dance Class</span>
                                          <span>8:30am - 9:00am </span>
                                       </li>
                                       <li>
                                          <span class="class-title">Drowing Class</span>
                                          <span>9:30am - 10:00am </span>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="bd-routine-list">
                                    <h4 class="bd-routine-day">Tuesday</h4>
                                    <ul>
                                       <li>
                                          <span class="class-title">Sports Class</span>
                                          <span>8:00am - 8:30am </span>
                                       </li>
                                       <li>
                                          <span class="class-title">Dance Class</span>
                                          <span>8:30am - 9:00am </span>
                                       </li>
                                       <li>
                                          <span class="class-title">Drowing Class</span>
                                          <span>9:30am - 10:00am </span>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="bd-routine-list">
                                    <h4 class="bd-routine-day">Wednesday</h4>
                                    <ul>
                                       <li>
                                          <span class="class-title">Sports Class</span>
                                          <span>8:00am - 8:30am </span>
                                       </li>
                                       <li>
                                          <span class="class-title">Dance Class</span>
                                          <span>8:30am - 9:00am </span>
                                       </li>
                                       <li>
                                          <span class="class-title">Drowing Class</span>
                                          <span>9:30am - 10:00am </span>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="bd-routine-list">
                                    <h4 class="bd-routine-day">Thursday</h4>
                                    <ul>
                                       <li>
                                          <span class="class-title">Sports Class</span>
                                          <span>8:00am - 8:30am </span>
                                       </li>
                                       <li>
                                          <span class="class-title">Dance Class</span>
                                          <span>8:30am - 9:00am </span>
                                       </li>
                                       <li>
                                          <span class="class-title">Drowing Class</span>
                                          <span>9:30am - 10:00am </span>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="bd-routine-list">
                                    <h4 class="bd-routine-day">Friday</h4>
                                    <ul>
                                       <li>
                                          <span class="class-title">Sports Class</span>
                                          <span>8:00am - 8:30am </span>
                                       </li>
                                       <li>
                                          <span class="class-title">Dance Class</span>
                                          <span>8:30am - 9:00am </span>
                                       </li>
                                       <li>
                                          <span class="class-title">Drowing Class</span>
                                          <span>9:30am - 10:00am </span>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="bd-routine-list">
                                    <h4 class="bd-routine-day">Saturday</h4>
                                    <ul>
                                       <li>
                                          <span class="class-title">Sports Class</span>
                                          <span>8:00am - 8:30am </span>
                                       </li>
                                       <li>
                                          <span class="class-title">Dance Class</span>
                                          <span>8:30am - 9:00am </span>
                                       </li>
                                       <li>
                                          <span class="class-title">Drowing Class</span>
                                          <span>9:30am - 10:00am </span>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="sports-class" role="tabpanel" aria-labelledby="sports-class-tab">
                           <div class="bd-routine-2">
                              <div class="table-responsive d-none d-md-block">
                                 <table class="table">
                                    <thead>
                                       <tr>
                                          <th scope="col" class="clr-4">Sunday</th>
                                          <th scope="col" class="clr-5">Monday</th>
                                          <th scope="col" class="clr-4">Tuesday</th>
                                          <th scope="col" class="clr-5">Wednessday</th>
                                          <th scope="col" class="clr-4">Thursday</th>
                                          <th scope="col" class="clr-5">Friday</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td class="clr-5"></td>
                                          <td class="clr-3">
                                             8:00am - 8:30am
                                             <span>Sports Class</span>
                                          </td>
                                          <td class="clr-6">
                                             8:00am - 8:30am
                                             <span>Sports Class</span>
                                          </td>
                                          <td class="clr-1">
                                             8:00am - 8:30am
                                             <span>Sports Class</span>
                                          </td>
                                          <td class="clr-7">
                                             8:00am - 8:30am
                                             <span>Sports Class</span>
                                          </td>
                                          <td class="clr-4"></td>
                                       </tr>
                                       <tr>
                                          <td class="clr-6">
                                             8:00am - 8:30am
                                             <span>Sports Class</span>
                                          </td>
                                          <td class="clr-5"></td>
                                          <td class="clr-2">
                                             8:00am - 8:30am
                                             <span>Sports Class</span>
                                          </td>
                                          <td class="clr-5">

                                          </td>
                                          <td class="clr-4"></td>
                                          <td class="clr-6">
                                             8:00am - 8:30am
                                             <span>Sports Class</span>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td class="clr-5"></td>
                                          <td class="clr-3">
                                             8:00am - 8:30am
                                             <span>Sports Class</span>
                                          </td>
                                          <td class="clr-8">
                                             8:00am - 8:30am
                                             <span>Sports Class</span>
                                          </td>
                                          <td class="clr-4"></td>
                                          <td class="clr-2">
                                             8:00am - 8:30am
                                             <span>Sports Class</span>
                                          </td>
                                          <td class="clr-4"></td>
                                       </tr>
                                       <tr>
                                          <td class="clr-3">
                                             8:00am - 8:30am
                                             <span>Sports Class</span>
                                          </td>
                                          <td class="clr-2">
                                             8:00am - 8:30am
                                             <span>Sports Class</span>
                                          </td>
                                          <td class="clr-4"></td>
                                          <td class="clr-1">
                                             8:00am - 8:30am
                                             <span>Sports Class</span>
                                          </td>
                                          <td class="clr-2">
                                             8:00am - 8:30am
                                             <span>Sports Class</span>
                                          </td>
                                          <td class="clr-5"></td>
                                       </tr>
                                       <tr>
                                          <td class="clr-5"></td>
                                          <td class="clr-6">
                                             8:00am - 8:30am
                                             <span>Sports Class</span>
                                          </td>
                                          <td class="clr-2">
                                             8:00am - 8:30am
                                             <span>Sports Class</span>
                                          </td>
                                          <td class="clr-4"></td>
                                          <td class="clr-3">
                                             8:00am - 8:30am
                                             <span>Sports Class</span>
                                          </td>
                                          <td class="clr-7">
                                             8:00am - 8:30am
                                             <span>Sports Class</span>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td class="clr-1">
                                             8:00am - 8:30am
                                             <span>Sports Class</span>
                                          </td>
                                          <td class="clr-5"></td>
                                          <td class="clr-8">
                                             8:00am - 8:30am
                                             <span>Sports Class</span>
                                          </td>
                                          <td class="clr-7">
                                             8:00am - 8:30am
                                             <span>Sports Class</span>
                                          </td>
                                          <td class="clr-5"></td>
                                          <td class="clr-4">
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                              <div class="bd-routine-list-wrap d-md-none">
                                 <div class="bd-routine-list">
                                    <h4 class="bd-routine-day">Monday</h4>
                                    <ul>
                                       <li>
                                          <span class="class-title">Sports Class</span>
                                          <span>8:00am - 8:30am </span>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="bd-routine-list">
                                    <h4 class="bd-routine-day">Tuesday</h4>
                                    <ul>
                                       <li>
                                          <span class="class-title">Sports Class</span>
                                          <span>8:00am - 8:30am </span>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="bd-routine-list">
                                    <h4 class="bd-routine-day">Wednesday</h4>
                                    <ul>
                                       <li>
                                          <span class="class-title">Sports Class</span>
                                          <span>8:00am - 8:30am </span>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="bd-routine-list">
                                    <h4 class="bd-routine-day">Thursday</h4>
                                    <ul>
                                       <li>
                                          <span class="class-title">Sports Class</span>
                                          <span>8:00am - 8:30am </span>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="bd-routine-list">
                                    <h4 class="bd-routine-day">Friday</h4>
                                    <ul>
                                       <li>
                                          <span class="class-title">Sports Class</span>
                                          <span>8:00am - 8:30am </span>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="bd-routine-list">
                                    <h4 class="bd-routine-day">Saturday</h4>
                                    <ul>
                                       <li>
                                          <span class="class-title">Sports Class</span>
                                          <span>8:00am - 8:30am </span>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="dancing-class" role="tabpanel"
                           aria-labelledby="dancing-class-tab">
                           <div class="bd-routine-2">
                              <div class="table-responsive d-none d-md-block">
                                 <table class="table">
                                    <thead>
                                       <tr>
                                          <th scope="col" class="clr-4">Sunday</th>
                                          <th scope="col" class="clr-5">Monday</th>
                                          <th scope="col" class="clr-4">Tuesday</th>
                                          <th scope="col" class="clr-5">Wednessday</th>
                                          <th scope="col" class="clr-4">Thursday</th>
                                          <th scope="col" class="clr-5">Friday</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td class="clr-5"></td>
                                          <td class="clr-1">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-6">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-2">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-7">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-4"></td>
                                       </tr>
                                       <tr>
                                          <td class="clr-6">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-5"></td>
                                          <td class="clr-3">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-5">

                                          </td>
                                          <td class="clr-4"></td>
                                          <td class="clr-6">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td class="clr-5"></td>
                                          <td class="clr-2">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-8">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-4"></td>
                                          <td class="clr-1">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-4"></td>
                                       </tr>
                                       <tr>
                                          <td class="clr-3">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-1">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-4"></td>
                                          <td class="clr-1">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-2">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-5"></td>
                                       </tr>
                                       <tr>
                                          <td class="clr-5"></td>
                                          <td class="clr-6">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-2">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-4"></td>
                                          <td class="clr-3">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-7">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td class="clr-1">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-5"></td>
                                          <td class="clr-8">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-7">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-5"></td>
                                          <td class="clr-4">
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                              <div class="bd-routine-list-wrap d-md-none">
                                 <div class="bd-routine-list">
                                    <h4 class="bd-routine-day">Monday</h4>
                                    <ul>
                                       <li>
                                          <span class="class-title">Dance Class</span>
                                          <span>8:30am - 9:00am </span>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="bd-routine-list">
                                    <h4 class="bd-routine-day">Tuesday</h4>
                                    <ul>
                                       <li>
                                          <span class="class-title">Dance Class</span>
                                          <span>8:30am - 9:00am </span>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="bd-routine-list">
                                    <h4 class="bd-routine-day">Wednesday</h4>
                                    <ul>
                                       <li>
                                          <span class="class-title">Dance Class</span>
                                          <span>8:30am - 9:00am </span>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="bd-routine-list">
                                    <h4 class="bd-routine-day">Thursday</h4>
                                    <ul>
                                       <li>
                                          <span class="class-title">Dance Class</span>
                                          <span>8:30am - 9:00am </span>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="bd-routine-list">
                                    <h4 class="bd-routine-day">Friday</h4>
                                    <ul>
                                       <li>
                                          <span class="class-title">Dance Class</span>
                                          <span>8:30am - 9:00am </span>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="bd-routine-list">
                                    <h4 class="bd-routine-day">Saturday</h4>
                                    <ul>
                                       <li>
                                          <span class="class-title">Dance Class</span>
                                          <span>8:30am - 9:00am </span>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="drawing" role="tabpanel" aria-labelledby="drawing-tab">
                           <div class="bd-routine-2">
                              <div class="table-responsive d-none d-md-block">
                                 <table class="table">
                                    <thead>
                                       <tr>
                                          <th scope="col" class="clr-4">Sunday</th>
                                          <th scope="col" class="clr-5">Monday</th>
                                          <th scope="col" class="clr-4">Tuesday</th>
                                          <th scope="col" class="clr-5">Wednessday</th>
                                          <th scope="col" class="clr-4">Thursday</th>
                                          <th scope="col" class="clr-5">Friday</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td class="clr-5"></td>
                                          <td class="clr-3">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-6">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-1">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-7">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-4"></td>
                                       </tr>
                                       <tr>
                                          <td class="clr-6">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-5"></td>
                                          <td class="clr-2">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-5">

                                          </td>
                                          <td class="clr-4"></td>
                                          <td class="clr-6">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td class="clr-5"></td>
                                          <td class="clr-1">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-8">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-4"></td>
                                          <td class="clr-3">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-4"></td>
                                       </tr>
                                       <tr>
                                          <td class="clr-2">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-3">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-4"></td>
                                          <td class="clr-1">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-3">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-5"></td>
                                       </tr>
                                       <tr>
                                          <td class="clr-5"></td>
                                          <td class="clr-6">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-2">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-4"></td>
                                          <td class="clr-3">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-7">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td class="clr-1">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-5"></td>
                                          <td class="clr-8">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-7">
                                             8:00am - 8:30am
                                             <span> Play Class</span>
                                          </td>
                                          <td class="clr-5"></td>
                                          <td class="clr-4">
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                              <div class="bd-routine-list-wrap d-md-none">
                                 <div class="bd-routine-list">
                                    <h4 class="bd-routine-day">Monday</h4>
                                    <ul>
                                       <li>
                                          <span class="class-title">Drowing Class</span>
                                          <span>9:30am - 10:00am </span>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="bd-routine-list">
                                    <h4 class="bd-routine-day">Tuesday</h4>
                                    <ul>
                                       <li>
                                          <span class="class-title">Drowing Class</span>
                                          <span>9:30am - 10:00am </span>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="bd-routine-list">
                                    <h4 class="bd-routine-day">Wednesday</h4>
                                    <ul>
                                       <li>
                                          <span class="class-title">Drowing Class</span>
                                          <span>9:30am - 10:00am </span>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="bd-routine-list">
                                    <h4 class="bd-routine-day">Thursday</h4>
                                    <ul>
                                       <li>
                                          <span class="class-title">Drowing Class</span>
                                          <span>9:30am - 10:00am </span>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="bd-routine-list">
                                    <h4 class="bd-routine-day">Friday</h4>
                                    <ul>
                                       <li>
                                          <span class="class-title">Drowing Class</span>
                                          <span>9:30am - 10:00am </span>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="bd-routine-list">
                                    <h4 class="bd-routine-day">Saturday</h4>
                                    <ul>
                                       <li>
                                          <span class="class-title">Drowing Class</span>
                                          <span>9:30am - 10:00am </span>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- routine area end here  -->

   
   </main>
   <!-- main area end here  -->

  <!-- Footer -->
  <?php include("Resources/footer.php"); ?>
</body>
