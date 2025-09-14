<?php 
$pageTitle = "Contact Us | GKS Chess Academy";
$pageDescription = "Contact GKS Chess Academy for inquiries about our chess programs, timings, and enrollment. Reach out via phone, email, or visit us in person.";
$pageKeywords = "contact chess academy, GKS Chess contact, chess classes info";
$pageCanonical = "https://gkschessacademy.com/contact";
include("Resources/header.php"); ?>
<body>
  <!-- Preloader,  back-to-top, header -->
  <?php include("Resources/navbar.php"); ?>


   <!-- main area start here  -->
   <main>
      <!-- breadcrumb area start here -->
      <section class="bd-breadcrumb-area p-relative fix theme-bg">
         <!-- breadcrumb background image -->
         <div class="bd-breadcrumb-bg" data-background="assets/img/bg/contact-banner.jpg"></div>
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
                           <h1 class="bd-breadcrumb-title">Contact Us</h1>
                           <div class="bd-breadcrumb-list">
                              <span><a href="index"><i class="flaticon-hut"></i>GKS</a></span>
                              <span>Contact Us</span>
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

      <!-- contact info area start here -->
      <section class="bd-contact-info-area pt-120 pb-95">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-4 col-md-4 col-sm-12" >
                  <div class="bd-contact-info-wrap mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                     <div class="bd-contact-info">
                        <div class="bd-contact-info-content">
                           <div class="bd-contact-info-icon cat-1">
                              <a href="tel:9353012221"><i class="flaticon-phone-call"></i></a>
                           </div>
                           <h6><a href="tel:9353012221">935-301-2221</a></h6>
                           <br>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="bd-contact-info-wrap mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                     <div class="bd-contact-info">
                        <div class="bd-contact-info-content">
                           <div class="bd-contact-info-icon cat-2">
                              <a href="#"><i class="flaticon-location-pin"></i></a>
                           </div>
                           <h6><a href="#" class="text-center"> Devasandra Main Rd, JC Layout, Krishnarajapuram, Bengaluru, Karnataka 560036</a></h6>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="bd-contact-info-wrap mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                     <div class="bd-contact-info">
                        <div class="bd-contact-info-content">
                           <div class="bd-contact-info-icon cat-3">
                              <a href="mailto:gkschessacademy@gmail.com"><i class="flaticon-email"></i></a>
                           </div>
                           <h6><a href="mailto:gkschessacademy@gmail.com">gkschessacademy@gmail.com</a></h6>
                           <br>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- contact info area end here-->

      <!-- contact area start here  -->
      <section class="bd-contact-area pb-60">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 mb-60">
                  <div class="bd-contact-form wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                     <h3 class="bd-contact-form-title mb-25">Contact Us Right Here</h3>
                     <form action="#">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="bd-contact-input mb-30">
                                 <label for="name">Name <sup><i class="fa-solid fa-star-of-life"></i></sup></label>
                                 <input id="name" type="text">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="bd-contact-input mb-30">
                                 <label for="email">Email <sup><i class="fa-solid fa-star-of-life"></i></sup></label>
                                 <input id="email" type="text">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="bd-contact-input mb-30">
                                 <label for="phone">Phone <sup><i class="fa-solid fa-star-of-life"></i></sup></label>
                                 <input id="phone" type="text">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="bd-contact-input mb-30">
                                 <label for="subject">Subject <sup><i
                                          class="fa-solid fa-star-of-life"></i></sup></label>
                                 <select name="subject" id="subject" class="bd-nice-select">
                                    <option>Select Subject</option>
                                    <option>Beginner Level</option>
                                    <option>Intermediate Level</option>
                                    <option>Advanced Level</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="bd-contact-input mb-20">
                                 <label for="textarea">Comments <sup><i
                                          class="fa-solid fa-star-of-life"></i></sup></label>
                                 <textarea name="textarea" id="textarea"></textarea>
                              </div>
                           </div>
                           <div class="col-md-12 mb-30">
                              <div class="bd-contact-agree d-flex align-items-center">
                                 <input class="" type="checkbox" id="check-agree">
                                 <label class="check-label" for="check-agree">Save Data for Next Comment</label>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="bd-contact-agree-btn">
                                 <button type="submit" class="bd-btn">
                                    <span class="bd-btn-inner">
                                       <span class="bd-btn-normal">Send
                                          now</span>
                                       <span class="bd-btn-hover">Send
                                          now</span>
                                    </span>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="col-xl-6 mb-60">
                  <div class="bd-contact-map wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                     <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.447962755305!2d77.69339696842532!3d13.007120686083303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae11a67862ae83%3A0xb5f59f0dc1ea9c2!2sGKS%20chess%20academy!5e0!3m2!1sen!2sin!4v1755432994585!5m2!1sen!2sin"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- contact area end here  -->

      
   </main>
   <!-- main area end here  -->
 
  <!-- footer area start -->
  <?php include("Resources/footer.php"); ?>
  <!-- footer area end -->
</body>
