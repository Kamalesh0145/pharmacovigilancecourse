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

    <!-- Company Overview -->
    <div class="content-section company-overview">
      <div class="section-header">
        <h2>Company Overview</h2>
        <div class="section-divider"></div>
      </div>
      <div class="content-grid">
        <div class="content-card">
          <div class="card-image">
            <img src="img/Healthcare.png" alt="Healthcare Excellence">
          </div>
          <h4>Healthcare Excellence</h4>
          <p>Cynture Global Pvt. Ltd is a leading healthcare company involved in trade, exports, and providing clinical research, pharmacovigilance and scientific writing courses.</p>
        </div>
        <div class="content-card">
          <div class="card-image">
            <img src="img/cynture_global1.png" alt="Global Trade">
          </div>
          <h4>Global Trade & Exports</h4>
          <p>With more than 5 years of experience in export of healthcare products through our concern <strong>CAREXUS EXPORTS</strong>. We offer variety of Pharmaceutical products and Nutraceuticals from GMP, MHRA, FDA and TGA approved plants.</p>
        </div>
        <div class="content-card">
          <div class="card-image">
            <img src="img/Empowering_Future .png" alt="Premium Training">
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
          <div class="vision-image">
            <img src="img/Our Vision.png" alt="Our Vision">
          </div>
          <div class="vision-text">
            <h4>Quality Healthcare Products</h4>
            <p>Deliver high standard healthcare products to meet domestic and international needs with excellence and reliability.</p>
          </div>
        </div>
        <div class="vision-card">
          <div class="vision-image">
            <img src="img/Career_Growth.png" alt="Career Growth">
          </div>
          <div class="vision-text">
            <h4>Empowering Professionals</h4>
            <p>At Cynture Global, we aim to empower aspiring professionals with practical skills and industry knowledge in pharmaceutical and clinical research.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Specialization Areas -->
    <!-- <div class="content-section specialization-section">
      <div class="section-header">
        <h2>Our Specialization Areas</h2>
        <div class="section-divider"></div>
      </div>
      <div class="specialization-grid">
        <div class="spec-card">
          <div class="spec-image">
            <img src="img/Pharmacovigilance.png" alt="Pharmacovigilance">
          </div>
          <h5>Pharmacovigilance</h5>
        </div>
        <div class="spec-card">
          <div class="spec-image">
            <img src="img/Clinical_Trial.png" alt="Clinical Research">
          </div>
          <h5>Clinical Research</h5>
        </div>
        <div class="spec-card">
          <div class="spec-image">
            <img src="img/Scientific_Writing.png" alt="Scientific Writing">
          </div>
          <h5>Scientific Writing</h5>
        </div>
        <div class="spec-card">
          <div class="spec-image">
            <img src="img/ClinincalResearch.png" alt="Clinical Research">
          </div>
          <h5>Project Management</h5>
        </div>
      </div>
    </div> -->


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

      .card-image {
        width: 80px;
        height: 80px;
        margin: 0 auto 20px;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(123, 44, 191, 0.2);
      }

      .card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
      }

      .content-card:hover .card-image img {
        transform: scale(1.1);
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

      .vision-image {
        width: 100px;
        height: 100px;
        margin-right: 25px;
        flex-shrink: 0;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(123, 44, 191, 0.2);
      }

      .vision-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
      }

      .vision-card:hover .vision-image img {
        transform: scale(1.05);
      }

      /* Specialization Section */
      .specialization-section {
        margin-bottom: 60px;
      }

      .specialization-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 25px;
        margin-top: 40px;
      }

      .spec-card {
        background: white;
        padding: 25px;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0 5px 20px rgba(123, 44, 191, 0.1);
        transition: all 0.3s ease;
        border: 2px solid transparent;
      }

      .spec-card:hover {
        transform: translateY(-8px);
        border-color: #7b2cbf;
        box-shadow: 0 12px 30px rgba(123, 44, 191, 0.2);
      }

      .spec-image {
        width: 60px;
        height: 60px;
        margin: 0 auto 15px;
        border-radius: 12px;
        overflow: hidden;
      }

      .spec-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .spec-card h5 {
        color: #7b2cbf;
        font-weight: 600;
        font-size: 16px;
        margin: 0;
      }

      /* Responsive Design */
      @media (max-width: 768px) {
        .content-grid {
          grid-template-columns: 1fr;
        }
        
        .vision-content {
          grid-template-columns: 1fr;
        }
        
        .vision-card {
          flex-direction: column;
          text-align: center;
        }
        
        .vision-image {
          margin: 0 auto 20px;
        }
        
        .specialization-grid {
          grid-template-columns: repeat(2, 1fr);
        }
      }

      @media (max-width: 480px) {
        .specialization-grid {
          grid-template-columns: 1fr;
        }
      }

      .vision-icon i {
        font-size: 10px;
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
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
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
        width: 20px;
        height: 20px;
        background: linear-gradient(135deg, #7b2cbf, #9d4edd);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 20px;
        flex-shrink: 0;
      }

      .commitment-icon i {
        font-size: 10px;
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
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
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
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      }

      .page_link a {
        color: rgba(255, 255, 255, 0.8);
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

        .vision-card,
        .commitment-card {
          flex-direction: column;
          text-align: center;
        }

        .vision-icon,
        .commitment-icon {
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

          <!-- <div class="card">
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
              </div> -->

        </div>
      </div>

      <!-- Video Section -->
      <div class="col-lg-6">
        <div class="video_area" id="video">
          <img class="img-fluid" src="img/video_img.png" alt="Cynture Global Training Video">       
        </div>
      </div>
    </div>

    <!-- About Details -->
    <!-- <div class="commitment-section">
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
    </div> -->
  </div>
</section>



<!--================ Placement Area =================-->
<section class="achievements_area p_120">
  <div class="container">
    <!-- <div class="main_title text-center">
      <h2>Our Placement & Hiring Partners</h2>
      <h5>We are proud to be associated with leading organizations that recognize the quality of our training programs and recruit skilled professionals from our institute</h5>
    </div> -->
    <div class="logo_slider">
      <div class="logo_track">
        <img src="img/Placement(1).png" alt="Achievement 1">
        <img src="img/Placement(2).png" alt="Achievement 2">
        <img src="img/Placement(3).png" alt="Achievement 3">`
        <img src="img/Placement(4).png" alt="Achievement 4">
        <img src="img/Placement(5).png" alt="Achievement 5">
        <img src="img/Placement(6).png" alt="Achievement 6">
        <img src="img/Placement(7).png" alt="Achievement 7">
        <img src="img/Placement(8).png" alt="Achievement 8">
        <img src="img/Placement(9).png" alt="Achievement 9">
        <img src="img/Placement(11).png" alt="Achievement 11">
        <img src="img/Placement(12).png" alt="Achievement 12">
        <img src="img/Placement(13).png" alt="Achievement 13">
        <img src="img/Placement(14).png" alt="Achievement 14">
        <img src="img/Placement(15).png" alt="Achievement 15">
        <img src="img/Placement(16).png" alt="Achievement 16">
        <img src="img/Placement(17).png" alt="Achievement 17">
        <img src="img/Placement(18).png" alt="Achievement 18">
      </div>
    </div>
  </div>
</section>


<!--================End Impress Area =================-->
<?php include 'includes/footer.php'; ?>