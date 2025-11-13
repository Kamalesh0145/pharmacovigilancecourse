<?php include 'includes/header.php'; ?>

<!--================Home Banner Area =================-->
<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
      <div class="banner_content text-center">
        <h2>About Us</h2>
        <div class="page_link">
          <a href="index.php">Home</a>
          <a href="about-us.php">About Us</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================End Home Banner Area =================-->

<!--================About Area =================-->
<section class="about_area p_120">
  <div class="container">
    <section class="about_area p_120">
      <div class="container">

        <!-- Company Overview -->
        <div class="main_title">
          <h2>Company Overview</h2>
          <p>
            Cynture Global Pvt. Ltd is a leading healthcare company involved in trade, exports, and providing
            clinical research, pharmacovigilance and scientific writing courses.
          </p>
          <p>
            With regards to trade and exports, we have more than 5 years of experience in export of healthcare
            products through our another concern <strong>Carexexports</strong>. We offer variety of Pharmaceutical
            products and Nutraceuticals. We export products from well recognized premium GMP, MHRA, FDA and
            TGA approved plants. We export high standard and high quality products. We always exceed customer expectations.
          </p>
          <p>
            With regards training, we are one of the best clinical research and pharmacovigilance training providers.
            We have students are from different countries. Our course materials are prepared by industrial experts having
            10+ years experience. Unlike others, our materials are up to date.
          </p>
        </div>

        <!-- Our Vision -->
        <div class="main_title mt-5">
          <h2>Our Vision and Training Goals</h2>
          <p>
            At Cynture Global, we aim to empower aspiring professionals with practical skills and industry knowledge
            in pharmaceutical and clinical research. And deliver high standard healthcare products to the domestic and international needs.
          </p>
        </div>
        <style>
          /* ===== About Us Page Styling ===== */
          .about_area {
            background-color: #f9f9f9;
            padding: 80px 0;
            font-family: "Poppins", sans-serif;
          }

          .about_area .main_title {
            margin-bottom: 40px;
            text-align: left;
          }

          .about_area .main_title h2 {
            font-size: 30px;
            font-weight: 700;
            color: #002147;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
          }

          .about_area .main_title h2::after {
            content: "";
            position: absolute;
            width: 60px;
            height: 3px;
            background-color: #007bff;
            bottom: -8px;
            left: 0;
            border-radius: 2px;
          }

          .about_area .main_title p {
            font-size: 16px;
            color: #555;
            line-height: 1.8;
            margin-bottom: 15px;
          }

          .about_area .main_title strong {
            color: #007bff;
          }

          .about_area .mt-5 {
            margin-top: 60px !important;
          }

          /* Responsive Adjustments */
          @media (max-width: 768px) {
            .about_area {
              padding: 60px 20px;
            }

            .about_area .main_title h2 {
              font-size: 24px;
            }

            .about_area .main_title p {
              font-size: 15px;
            }
          }
        </style>

        <div class="row about_inner">
          <!-- Accordion with Goals -->
          <div class="col-lg-6">
            <div class="accordion" id="accordionExample">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Comprehensive Knowledge
                    <i class="lnr lnr-chevron-down"></i>
                    <i class="lnr lnr-chevron-up"></i>
                  </button>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    Provide students with a strong foundation in pharmacology, clinical research methods, and regulatory frameworks to excel in their careers.
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header" id="headingTwo">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Training
                    <i class="lnr lnr-chevron-down"></i>
                    <i class="lnr lnr-chevron-up"></i>
                  </button>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                    Exposure through real-world case studies, mock trials, and project simulations to bridge theory with practice.
                  </div>
                </div>
              </div>


              <div class="card">
                <div class="card-header" id="headingThree">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Career Assistance
                    <i class="lnr lnr-chevron-down"></i>
                    <i class="lnr lnr-chevron-up"></i>
                  </button>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                    Assistance to help students identify career paths, and excel in the pharmaceutical and clinical research industry.
                  </div>
                </div>
              </div>


              <div class="card">
                <div class="card-header" id="headingFour">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Industry-Relevant Skills
                    <i class="lnr lnr-chevron-down"></i>
                    <i class="lnr lnr-chevron-up"></i>
                  </button>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                  <div class="card-body">
                    Equip learners with the latest tools, regulations, and best practices to stay competitive and confident in the ever-evolving pharmaceutical sector.
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header" id="headingFive">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Trade and Exports
                    <i class="lnr lnr-chevron-down"></i>
                    <i class="lnr lnr-chevron-up"></i>
                  </button>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                  <div class="card-body">
                    Boasts dynamic team of experienced, accomplished, and well-trained professionals who are well-versed in the latest advancements in healthcare.
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- Video Section -->
          <div class="col-lg-6">
            <div class="video_area" id="video">
              <img class="img-fluid" src="img/video-1.jpg" alt="Cynture Global Training Video">
              <a class="popup-youtube" href="https://www.youtube.com/watch?v=VufDd-QL1c0">
                <img src="img/icon/video-icon-1.png" alt="Play Video">
              </a>
            </div>
          </div>
        </div>

        <!-- About Details -->
        <div class="about_details">
          <p>Cynture Global is committed to delivering industry-focused training that blends theoretical knowledge with hands-on practice. Our courses in pharmacovigilance, clinical research, project management, and scientific writing are designed to enhance employability and professional competence.</p>
          <p>Through our expert-led programs, students gain insights into real-world scenarios, learn regulatory compliance, master project management, and develop effective communication skills to thrive in the pharmaceutical and clinical research landscape.</p>
        </div>
      </div>
    </section>
    <!--================Team Area =================-->

    <!--================ Course Details Area =================-->
    <!-- <section class="course_details_area p_120">
      <div class="container">
        <div class="row course_details_inner">
          Left Section
          <div class="col-lg-8">
            <div class="c_details_img">
          <img class="img-fluid" src="img/courses/pharmacovigilance-course.jpg" alt="Professional Certificate in Pharmacovigilance">
        </div>

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
              <div class="tab-pane fade" id="eligibility" role="tabpanel" aria-labelledby="eligibility-tab">
                <div class="objctive_text">
                  <ul class="list">
                    <li>Graduates or postgraduates in Life Sciences, Pharmacy, Medicine, Nursing, or Allied Health fields.</li>
                    <li>Professionals working in Clinical Research, Drug Safety, or Regulatory Affairs who wish to enhance their skills.</li>
                    <li>Students aspiring to start a career in the Pharmaceutical or CRO industry.</li>
                  </ul>
                </div>
              </div>
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
    </section> -->
    <!--================ End Course Details Area =================-->
    <!--================Impress Area =================-->
    <!-- <section class="impress_area p_120">
    <div class="container">
        <div class="impress_inner text-center">
            <h2>Join Us as an Instructor</h2>
            <p>Share your expertise and industry experience with aspiring professionals in pharmaceutical and clinical research. Guide learners, conduct workshops, and shape the next generation of experts.</p>
            <a class="main_btn2" href="#">Apply Now</a>
        </div>
    </div>
</section> -->

    <!--================ Achievements Area =================-->
    <!-- <section class="achievements_area p_120">
  <div class="container">
    <div class="main_title text-center">
      <h2>Our Achievements</h2>
      <p>We’re proud of our continuous growth, milestones, and recognition in training and development.</p>
    </div>

    <div class="logo_slider">
      <div class="logo_track">
        <img src="img/Achive_img1.jpg" alt="Achievement 1">
        <img src="img/Achive_img2.jpg" alt="Achievement 2">
        <img src="img/Achive_img3.jpg" alt="Achievement 3">`
        <img src="img/Achive_img4.jpg" alt="Achievement 4">
        <img src="img/Achive_img5.jpg" alt="Achievement 5">
        <img src="img/Achive_img1.jpg" alt="Achievement 6">
        <img src="img/Achive_img2.jpg" alt="Achievement 7">
        <img src="img/Achive_img3.jpg" alt="Achievement 7">
        <img src="img/Achive_img4.jpg" alt="Achievement 7">
        <img src="img/Achive_img5.jpg" alt="Achievement 7">

      </div>
    </div>
  </div>
</section> -->
    <!--================ End Achievements Area =================-->


    <!--================ Placement Partners Area =================-->
    <!-- <section class="clients_area p_120">
  <div class="container">
    <div class="main_title text-center">
      <h2>Our Placement Partners</h2>
      <p>Our students have been placed with top pharmaceutical and healthcare organizations worldwide.</p>
    </div>

    <div class="logo_slider">
      <div class="logo_track">
        <img src="img/Achive_img1.jpg" alt="Company 1">
        <img src="img/Achive_img2.jpg" alt="Company 2">
        <img src="img/Achive_img3.jpg" alt="Company 3">
        <img src="img/Achive_img4.jpg" alt="Company 4">
        <img src="img/Achive_img5.jpg" alt="Company 5">
        <img src="img/Achive_img1.jpg" alt="Company 6">
        <img src="img/Achive_img2.jpg" alt="Company 7">
        <img src="img/Achive_img3.jpg" alt="Company 8">
        <img src="img/Achive_img4.jpg" alt="Company 8">
        <img src="img/Achive_img4.jpg" alt="Company 8">

      </div>
    </div>
  </div>
</section> -->
    <!--================ End Placement Partners Area =================-->

    <!--================End Impress Area =================-->
    <?php include 'includes/footer.php'; ?>