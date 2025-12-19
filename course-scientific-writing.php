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
          <img class="img-fluid" src="img/courses/course-5.jpg" alt="Scientific Writing in Pharma">
          <div class="course_badge_overlay">Professional Course</div>
        </div>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="objectives-tab" data-toggle="tab" href="#objectives" role="tab" aria-controls="objectives" aria-selected="true">📋 Course Objectives</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="eligibility-tab" data-toggle="tab" href="#eligibility" role="tab" aria-controls="eligibility" aria-selected="false">👥 Eligibility</a>
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
                The <strong>Scientific Writing in Pharma</strong> program is designed to develop advanced writing skills for pharmaceutical and clinical research professionals.
                This comprehensive course covers all aspects of scientific communication in the pharmaceutical industry.
              </p>
              <p>
                Participants will learn to write clear, concise, and compelling scientific documents that meet regulatory standards and industry best practices.
              </p>
              <h4>Key Learning Outcomes:</h4>
              <ul class="list">
                <li>Master scientific writing principles and techniques</li>
                <li>Learn to write regulatory documents and submissions</li>
                <li>Develop skills in clinical study reports and protocols</li>
                <li>Understand publication writing and peer review process</li>
                <li>Gain expertise in technical writing and documentation</li>
                <li>Learn to present complex scientific data effectively</li>
              </ul>
            </div>
          </div>

          <!-- Eligibility -->
          <div class="tab-pane fade" id="eligibility" role="tabpanel" aria-labelledby="eligibility-tab">
            <div class="objctive_text">
              <h4>Who Should Enroll:</h4>
              <ul class="list">
                <li>Medical Writers and Scientific Writers</li>
                <li>Clinical Research Associates and Coordinators</li>
                <li>Regulatory Affairs professionals</li>
                <li>Pharmacovigilance professionals</li>
                <li>Quality Assurance professionals</li>
                <li>Graduates in Life Sciences, Pharmacy, or Medicine</li>
              </ul>
              <h4>Prerequisites:</h4>
              <ul class="list">
                <li>Strong foundation in life sciences or pharmaceutical sciences</li>
                <li>Good command of English language</li>
                <li>Basic understanding of clinical research processes</li>
                <li>Computer literacy for document preparation</li>
                <li>Attention to detail and analytical thinking</li>
              </ul>
            </div>
          </div>

          <!-- Course Outline -->
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
                    <img src="img/blog/c4.jpg" alt="">
                  </div>
                  <div class="desc">
                    <h5><a href="#">Dr. M. Iyer</a></h5>
                    <p class="date">November 10, 2025</p>
                    <p class="comment">This course significantly improved my scientific writing skills. The practical exercises and real-world examples helped me understand the nuances of pharmaceutical writing. Highly recommended for anyone in the industry.</p>
                  </div>
                </div>
              </div>

              <div class="comment-list">
                <div class="single-comment d-flex">
                  <div class="thumb">
                    <img src="img/blog/c5.jpg" alt="">
                  </div>
                  <div class="desc">
                    <h5><a href="#">Sarah Johnson</a></h5>
                    <p class="date">October 22, 2025</p>
                    <p class="comment">Excellent course that covers all aspects of scientific writing in pharma. The instructors are experienced medical writers who provide valuable insights from the industry.</p>
                  </div>
                </div>
              </div>

              <div class="comment-list">
                <div class="single-comment d-flex">
                  <div class="thumb">
                    <img src="img/blog/c6.jpg" alt="">
                  </div>
                  <div class="desc">
                    <h5><a href="#">Dr. Vikram Rao</a></h5>
                    <p class="date">September 15, 2025</p>
                    <p class="comment">The course structure is well-designed with practical assignments. I learned to write regulatory documents and clinical reports that meet industry standards. Great investment for career growth.</p>
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
            <li><a href="#">Trainer's Name <span>Dr. M. Iyer</span></a></li>
            <li><a href="#">Course Fee <span>₹16,000</span></a></li>
            <li><a href="#">Duration <span>8 Weeks</span></a></li>
            <li><a href="#">Available Seats <span>18</span></a></li>
            <li><a href="#">Schedule <span>Mon–Wed, 7:00 PM – 9:00 PM</span></a></li>
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