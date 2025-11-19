<?php include 'includes/header.php'; ?>

<!--================Home Banner Area =================-->
<!-- <section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="overlay bg-parallax"></div>

  
    <span class="banner_arrow_left">&#10094;</span>
    <span class="banner_arrow_right">&#10095;</span>

    <div class="container">
      <div class="banner_content text-center">

      
        <h1 class="about-top-line animated-title">
          Elevating People, Expanding Horizons — Under Cynture Global’s Expert Guidance
        </h1>

     
        <h5 class="about-main-heading">
          About Us
        </h5>

        <div class="page_link">
          <a href="index.php">Home</a>
          <a href="about-us.php">About Us</a>
        </div>

      </div>
    </div>
  </div>
</section>

<script>
let images = [
    "img/banner/Healthcare1.png",
    "img/banner/Healthcare2.png",
    "img/banner/Healthcare3.png"
];

let index = 0;
const overlay = document.querySelector(".banner_inner .overlay");


overlay.style.backgroundImage = `url('${images[index]}')`;


function changeImage(next = true) {
    const temp = document.createElement("div");
    temp.className = "overlay bg-parallax";
    temp.style.backgroundImage = `url('${images[next ? (index + 1) % images.length : (index - 1 + images.length) % images.length]}')`;
    temp.style.opacity = 0;
    temp.style.transition = "opacity 1s ease-in-out";
    document.querySelector(".banner_inner").appendChild(temp);

    setTimeout(() => temp.style.opacity = 0.7, 50);

    setTimeout(() => {
        overlay.style.backgroundImage = temp.style.backgroundImage;
        overlay.style.opacity = 0.7;
        temp.remove();
        index = next ? (index + 1) % images.length : (index - 1 + images.length) % images.length;
    }, 1050);
}


let autoSlide = setInterval(() => changeImage(true), 4000);


document.querySelector(".banner_arrow_right").addEventListener("click", function () {
    clearInterval(autoSlide);
    changeImage(true);
    autoSlide = setInterval(() => changeImage(true), 4000);
});

document.querySelector(".banner_arrow_left").addEventListener("click", function () {
    clearInterval(autoSlide);
    changeImage(false);
    autoSlide = setInterval(() => changeImage(true), 4000);
});


document.querySelectorAll('.animated-title').forEach(title => {
    let text = title.innerText;
    title.innerHTML = '';
    text.split('').forEach((char, i) => {
        let span = document.createElement('span');
        span.innerText = char;
        span.style.animationDelay = (i * 0.05) + "s";
        title.appendChild(span);
    });
});
</script> -->


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
        <div class="content-section company-overview">
          <div class="section-header">
            <h2>Company Overview</h2>
            <div class="section-divider"></div>
          </div>
          <div class="content-grid">
            <div class="content-card">
              <div class="card-icon">
                <i class="fas fa-cogs"></i>
              </div>
              <h4>Healthcare Excellence</h4>
              <p>Cynture Global Pvt. Ltd is a leading healthcare company involved in trade, exports, and providing clinical research, pharmacovigilance and scientific writing courses.</p>
            </div>
            <div class="content-card">
              <div class="card-icon">
                <i class="fas fa-cogs"></i>
              </div>
              <h4>Global Trade & Exports</h4>
              <p>With more than 5 years of experience in export of healthcare products through our concern <strong>CAREXUS EXPORTS</strong>. We offer variety of Pharmaceutical products and Nutraceuticals from GMP, MHRA, FDA and TGA approved plants.</p>
            </div>
            <div class="content-card">
              <div class="card-icon">
                <i class="fas fa-cogs"></i>
              </div>
              <h4>Premium Training</h4>
              <p>We are one of the best clinical research and pharmacovigilance training providers with students from different countries. Our course materials are prepared by industrial experts having 10+ years experience.</p>
            </div>
          </div>
        </div>

        <!-- Our Vision -->
        <div class="content-section vision-section">
          <div class="section-header">
            <h2>Our Vision and Training Goals</h2>
            <div class="section-divider"></div>
          </div>
          <div class="vision-content">
            <div class="vision-card">
              <div class="vision-icon">
                <i class="fas fa-rocket"></i>
              </div>
              <div class="vision-text">
                <h4>Quality Healthcare Products</h4>
                <p>Deliver high standard healthcare products to meet domestic and international needs with excellence and reliability.</p>
              </div>

            </div>
            <div class="vision-card">
              <div class="vision-icon">
                <i class="fas fa-rocket"></i>
              </div>
               <div class="vision-text">
                <h4>Empowering Professionals</h4>
                <p>At Cynture Global, we aim to empower aspiring professionals with practical skills and industry knowledge in pharmaceutical and clinical research.</p>
              </div>
            </div>
          </div>
        </div>


        <style>
          /* Enhanced About Us Page Styling */
          .about_area {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
          }
          
          /* Content Sections Styling */
          .content-section {
            margin-bottom: 60px;
          }
          
          .section-header {
            text-align: center;
            margin-bottom: 40px;
          }
          
          .section-header h2 {
            color: #7b2cbf;
            font-weight: 700;
            font-size: 32px;
            margin-bottom: 15px;
          }
          
          .section-header h2 i {
            margin-right: 10px;
            color: #9d4edd;
          }
          
          .section-divider {
            width: 80px;
            height: 4px;
            background: linear-gradient(135deg, #7b2cbf, #9d4edd);
            margin: 0 auto;
            border-radius: 2px;
          }
          
          /* Company Overview Grid */
          .content-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
          }
          
          .content-card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(123, 44, 191, 0.1);
            text-align: center;
            transition: all 0.3s ease;
            border-top: 4px solid #7b2cbf;
          }
          
          .content-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(123, 44, 191, 0.2);
          }
          
          .card-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #7b2cbf, #9d4edd);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
          }
          
          .card-icon i {
            font-size: 28px;
            color: white;
          }
          
          .content-card h4 {
            color: #7b2cbf;
            font-weight: 600;
            margin-bottom: 15px;
            font-size: 20px;
          }
          
          .content-card p {
            color: #495057;
            line-height: 1.7;
            font-size: 15px;
          }
          
          /* Vision Section */
          .vision-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 30px;
            margin-top: 40px;
          }
          
          .vision-card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(123, 44, 191, 0.1);
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
          }
          
          .vision-card:hover {
            transform: translateX(5px);
            box-shadow: 0 12px 30px rgba(123, 44, 191, 0.15);
          }
          
          .vision-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #7b2cbf, #9d4edd);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            flex-shrink: 0;
          }
          
          .vision-icon i {
            font-size: 24px;
            color: white;
          }
          
          .vision-text h4 {
            color: #7b2cbf;
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 18px;
          }
          
          .vision-text p {
            color: #495057;
            line-height: 1.6;
            margin: 0;
            font-size: 15px;
          }
          
          /* Commitment Section */
          .commitment-section {
            background: white;
            padding: 50px 40px;
            border-radius: 20px;
            margin-top: 50px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
          }
          
          .commitment-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
            gap: 40px;
            margin-top: 40px;
          }
          
          .commitment-card {
            display: flex;
            align-items: flex-start;
            padding: 25px;
            background: #f8f9fa;
            border-radius: 15px;
            border-left: 5px solid #7b2cbf;
            transition: all 0.3s ease;
          }
          
          .commitment-card:hover {
            background: #e9ecef;
            transform: translateY(-2px);
          }
          
          .commitment-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #7b2cbf, #9d4edd);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            flex-shrink: 0;
          }
          
          .commitment-icon i {
            font-size: 20px;
            color: white;
          }
          
          .commitment-text h4 {
            color: #7b2cbf;
            font-weight: 600;
            margin-bottom: 12px;
            font-size: 18px;
          }
          
          .commitment-text p {
            color: #495057;
            line-height: 1.7;
            margin: 0;
            font-size: 15px;
          }
          
          /* Accordion Styling */
          .accordion .card {
            border: none;
            border-radius: 10px;
            margin-bottom: 15px;
            box-shadow: 0 4px 15px rgba(123, 44, 191, 0.1);
            transition: all 0.3s ease;
          }
          
          .accordion .card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(123, 44, 191, 0.15);
          }
          
          .accordion .card-header {
            background: linear-gradient(135deg, #7b2cbf, #9d4edd);
            border: none;
            border-radius: 10px 10px 0 0;
            padding: 0;
          }
          
          .accordion .btn-link {
            color: white;
            text-decoration: none;
            font-weight: 600;
            padding: 20px 25px;
            width: 100%;
            text-align: left;
            border-radius: 10px 10px 0 0;
            position: relative;
          }
          
          .accordion .btn-link:hover {
            color: white;
            text-decoration: none;
          }
          
          .accordion .card-body {
            padding: 25px;
            background: white;
            border-radius: 0 0 10px 10px;
            color: #495057;
            line-height: 1.7;
          }
          
          .video_area {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            transition: transform 0.3s ease;
          }
          
          .video_area:hover {
            transform: scale(1.02);
          }
          
          .video_area img {
            border-radius: 15px;
          }
          
          .banner_content h2 {
            color: white;
            font-size: 48px;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
          }
          
          .page_link a {
            color: rgba(255,255,255,0.8);
            transition: color 0.3s ease;
          }
          
          .page_link a:hover {
            color: white;
          }
          
          /* Responsive Design */
          @media (max-width: 768px) {
            .content-grid {
              grid-template-columns: 1fr;
            }
            .vision-content {
              grid-template-columns: 1fr;
            }
            .commitment-content {
              grid-template-columns: 1fr;
            }
            .vision-card, .commitment-card {
              flex-direction: column;
              text-align: center;
            }
            .vision-icon, .commitment-icon {
              margin-right: 0;
              margin-bottom: 15px;
            }
          }
          
          /* Force footer to match other pages exactly */
          .footer-area {
            background: #fff !important;
          }
          .footer-bottom {
            background-color: #7b2cbf !important;
            padding: 20px 0 !important;
          }
          .footer-text {
            color: white !important;
            font-size: 14px !important;
          }
          .footer-social a {
            color: white !important;
          }
          .footer_title {
            color: black !important;
          }
          .tp_widgets .list li a {
            color: #7b2cbf !important;
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
                    Assistance to help students to identify career paths, and excel in the pharmaceutical and clinical research industry.
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
              <a class="popup-youtube" href="https://www.youtube.com/watch?v=wLNp3kgBuuQ">
                <img src="img/icon/video-icon-1.png" alt="Play Video">
              </a>
            </div>
          </div>
        </div>

        <!-- About Details -->
        <div class="commitment-section">
          <div class="section-header">
            <h2><i class="fas fa-handshake"></i> Cynture Global Commitment</h2>
            <div class="section-divider"></div>
          </div>
          <div class="commitment-content">
            <div class="commitment-card">
              <div class="commitment-icon">
                <i class="fas fa-cogs"></i>
              </div>
              <div class="commitment-text">
                <h4>Industry-Focused Training</h4>
                <p>Cynture Global is committed to delivering industry-focused training that blends theoretical knowledge with hands-on practice. Our courses in pharmacovigilance, clinical research, project management, and scientific writing are designed to enhance employability and professional competence.</p>
              </div>
            </div>
            <div class="commitment-card">
              <div class="commitment-icon">
                <i class="fas fa-cogs"></i>
              </div>
              <div class="commitment-text">
                <h4>Expert-Led Programs</h4>
                <p>Through our expert-led programs, students gain insights into real-world scenarios, learn regulatory compliance, master project management, and develop effective communication skills to thrive in the pharmaceutical and clinical research landscape.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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