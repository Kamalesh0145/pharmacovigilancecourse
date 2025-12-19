<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="css/course-details-enhanced.css">

<!--================Home Banner Area =================-->
<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="overlay bg-parallax"></div>

    <div class="container">
      <div class="banner_content text-center">
        <!-- NEW breadcrumb wrapper -->
        <div class="custom-breadcrumb">
          <a href="index.php">Home</a>
          <span>-></span>
          <a href="courses.php">Courses</a>
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
        <div class="c_details_img">
          <img class="img-fluid" src="img/courses/course-1.jpg" alt="Professional Certificate in Pharmacovigilance">
          <div class="course_badge_overlay">Certificate Program</div>
        </div>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="objectives-tab" data-toggle="tab" href="#objectives" role="tab" aria-controls="objectives" aria-selected="true">🎯 Course Objectives</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="eligibility-tab" data-toggle="tab" href="#eligibility" role="tab" aria-controls="eligibility" aria-selected="false">✓ Eligibility</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="outline-tab" data-toggle="tab" href="#outline" role="tab" aria-controls="outline" aria-selected="false">📚 Course Outline</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" id="comments-tab" data-toggle="tab" href="#comments" role="tab" aria-controls="comments" aria-selected="false">Reviews</a>
          </li> -->
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
              <h4>Key Learning Outcomes:</h4>
              <ul class="list">
                <li>Master the fundamentals of pharmacovigilance and drug safety</li>
                <li>Learn to identify and assess adverse drug reactions (ADRs)</li>
                <li>Understand regulatory guidelines (ICH, WHO, EMA, USFDA)</li>
                <li>Develop skills in signal detection and risk assessment</li>
                <li>Learn aggregate reporting (PSURs, DSURs)</li>
              </ul>
            </div>
          </div>

          <!-- Eligibility -->
          <div class="tab-pane fade" id="eligibility" role="tabpanel" aria-labelledby="eligibility-tab">
            <div class="objctive_text">
              <h4>Who Should Enroll:</h4>
              <ul class="list">
                <li>Graduates or postgraduates in Life Sciences, Pharmacy, Medicine, Nursing, or Allied Health fields</li>
                <li>Professionals working in Clinical Research, Drug Safety, or Regulatory Affairs who wish to enhance their skills</li>
                <li>Eligible students or working professionals aspiring to start a career pharmacovigilance domain</li>
              </ul>
              <h4>Prerequisites:</h4>
              <ul class="list">
                <li>Basic understanding of pharmaceutical sciences</li>
                <li>Good command of English language</li>
                <li>Computer literacy for database operations</li>
              </ul>
            </div>
          </div>

          <!-- Course Outline -->
          <div class="tab-pane fade" id="outline" role="tabpanel" aria-labelledby="outline-tab">
            <div class="objctive_text">
              <ul class="list">
                <li>Introduction to Pharmacovigilance</li>
                <li>History of Pharmacovigilance</li>
                <li>Pharmaceutical Regulatory Agencies and Organizations</li>
                <li>Brief note on new drug registration process</li>
                <li>Drugs withdrawals</li>
                <li>Pharmacovigilance Methods</li>
                <li>Causality assessment</li>
                <li>Signal detection in Pharmacovigilance</li>
                <li>Guidelines and standards Governing Pharmacovigilance</li>
                <li>Individual Case Safety Reports (ICSRs)</li>
                <li>AE reporting forms</li>
                <li>Medical Dictionary for Drug Regulatory Activities (MedDRA)</li>
                <li>Aggregate safety reports</li>
                <li>Pharmacovigilance Inspections</li>
                <li>UMC Glossaries</li>
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
                    <p class="comment">The sessions were interactive and practical. I gained deep insight into drug safety practices used in the industry. The hands-on training with databases was particularly valuable.</p>
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
                    <p class="comment">Very informative and well-structured course. The trainers are experienced and supportive. I got a job in a CRO immediately after completing this course.</p>
                  </div>
                </div>
              </div>

              <div class="comment-list">
                <div class="single-comment d-flex">
                  <div class="thumb">
                    <img src="img/blog/c3.jpg" alt="">
                  </div>
                  <div class="desc">
                    <h5><a href="#">Dr. Anjali Patel</a></h5>
                    <p class="date">July 28, 2025</p>
                    <p class="comment">Excellent course content and practical approach. The case studies and real-world examples made complex concepts easy to understand.</p>
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
      <!-- <div class="col-lg-4">
        <div class="c_details_list">
          <ul class="list">
            <li><a href="#">Trainer's Name <span>Dr. K. Sharma</span></a></li>
            <li><a href="#">Course Fee <span>₹15,000</span></a></li>
            <li><a href="#">Duration <span>8 Weeks</span></a></li>
            <li><a href="#">Available Seats <span>25</span></a></li>
            <li><a href="#">Schedule <span>Mon–Fri, 6:00 PM – 8:00 PM</span></a></li>
            <li><a href="#">Mode <span>Online / Offline</span></a></li>
            <li><a href="#">Language <span>English</span></a></li>
            <li><a href="#">Certificate <span>Industry Validated</span></a></li>
          </ul>
          <a class="main_btn" href="#">Enroll Now</a>
        </div>
      </div> -->
    </div>
  </div>
</section>
<!--================ End Course Details Area =================-->

<script src="js/course-details-enhanced.js"></script>
<?php include 'includes/footer.php'; ?>