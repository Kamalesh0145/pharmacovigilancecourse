<?php include 'includes/header.php'; ?>
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Course Details</h2>
						<div class="page_link">
							<a href="index.php">Home</a>
							<a href="courses.php">Course</a>
							<a href="course-details.php">Course Details</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
<!--================ Course Details Area =================-->
<section class="course_details_area p_120">
  <div class="container">
    <div class="row course_details_inner">
      <!-- Left Section -->
      <div class="col-lg-8">
        <!-- <div class="c_details_img">
          <img class="img-fluid" src="img/courses/pharmacovigilance-course.jpg" alt="Professional Certificate in Pharmacovigilance">
        </div> -->

        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="objectives-tab" data-toggle="tab" href="#objectives" role="tab" aria-controls="objectives" aria-selected="true">Course Objectives</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="eligibility-tab" data-toggle="tab" href="#eligibility" role="tab" aria-controls="eligibility" aria-selected="false">Eligibility</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="outline-tab" data-toggle="tab" href="#outline" role="tab" aria-controls="outline" aria-selected="false">Course Outline</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="comments-tab" data-toggle="tab" href="#comments" role="tab" aria-controls="comments" aria-selected="false">Reviews</a>
          </li>
        </ul>

        <div class="tab-content" id="myTabContent">
          <!-- Objectives -->
          <div class="tab-pane fade show active" id="objectives" role="tabpanel" aria-labelledby="objectives-tab">
            <div class="objctive_text">
              <p>
                The <strong>Professional Certificate in Pharmacovigilance</strong> program is designed to build a strong foundation in drug safety, risk management, and regulatory reporting.
                It enables learners to develop the technical expertise needed to work in global pharmaceutical and clinical research environments.
              </p>
              <p>
                By the end of this course, participants will understand how to identify, assess, and report adverse drug reactions (ADRs), apply international pharmacovigilance guidelines, and use industry-standard tools effectively.
              </p>
            </div>
          </div>

          <!-- Eligibility -->
          <div class="tab-pane fade" id="eligibility" role="tabpanel" aria-labelledby="eligibility-tab">
            <div class="objctive_text">
              <ul class="list">
                <li>Graduates or postgraduates in Life Sciences, Pharmacy, Medicine, Nursing, or Allied Health fields.</li>
                <li>Professionals working in Clinical Research, Drug Safety, or Regulatory Affairs who wish to enhance their skills.</li>
                <li>Students aspiring to start a career in the Pharmaceutical or CRO industry.</li>
              </ul>
            </div>
          </div>

          <!-- Course Outline -->
          <div class="tab-pane fade" id="outline" role="tabpanel" aria-labelledby="outline-tab">
            <div class="objctive_text">
              <ul class="list">
                <li><a href="#">Introduction to Pharmacovigilance</a></li>
                <li><a href="#">Drug Development and Safety Regulations</a></li>
                <li><a href="#">Adverse Event Reporting & Case Processing</a></li>
                <li><a href="#">Signal Detection and Risk Assessment</a></li>
                <li><a href="#">Regulatory Guidelines (ICH, WHO, EMA, USFDA)</a></li>
                <li><a href="#">Aggregate Reporting (PSURs, DSURs)</a></li>
                <li><a href="#">Pharmacovigilance Database Tools</a></li>
                <li><a href="#">Career Development in Drug Safety</a></li>
              </ul>
            </div>
          </div>

          <!-- Comments / Reviews -->
          <div class="tab-pane fade" id="comments" role="tabpanel" aria-labelledby="comments-tab">
            <div class="comments-area">
              <h4>Student Reviews</h4>

              <div class="comment-list">
                <div class="single-comment d-flex">
                  <div class="thumb">
                    <img src="img/blog/c1.jpg" alt="">
                  </div>
                  <div class="desc">
                    <h5><a href="#">Priya Sharma</a></h5>
                    <p class="date">August 14, 2025</p>
                    <p class="comment">The sessions were interactive and practical. I gained deep insight into drug safety practices used in the industry.</p>
                  </div>
                </div>
              </div>

              <div class="comment-list">
                <div class="single-comment d-flex">
                  <div class="thumb">
                    <img src="img/blog/c2.jpg" alt="">
                  </div>
                  <div class="desc">
                    <h5><a href="#">Rahul Menon</a></h5>
                    <p class="date">September 2, 2025</p>
                    <p class="comment">Very informative and well-structured course. The trainers are experienced and supportive.</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Leave a Review Form -->
            <div class="comment-form">
              <h4>Leave a Review</h4>
              <form>
                <div class="form-group form-inline">
                  <div class="form-group col-lg-6 col-md-6 name">
                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 email">
                    <input type="email" class="form-control" id="email" placeholder="Enter email address">
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="subject" placeholder="Subject">
                </div>
                <div class="form-group">
                  <textarea class="form-control mb-10" rows="5" name="message" placeholder="Write your feedback"></textarea>
                </div>
                <a href="#" class="primary-btn submit_btn">Post Review</a>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Section -->
      <div class="col-lg-4">
        <div class="c_details_list">
          <ul class="list">
            <li><a href="#">Trainer’s Name <span>Dr. Ananya Patel</span></a></li>
            <li><a href="#">Course Fee <span>₹12,500</span></a></li>
            <li><a href="#">Duration <span>6 Weeks</span></a></li>
            <li><a href="#">Available Seats <span>20</span></a></li>
            <li><a href="#">Schedule <span>Mon–Fri, 2:00 PM – 4:00 PM</span></a></li>
            <li><a href="#">Mode <span>Online / Offline</span></a></li>
          </ul>
          <a class="main_btn" href="#">Enroll Now</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================ End Course Details Area =================-->

        

        
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>
    </body>
<?php include 'includes/footer.php'; ?>
