<?php include 'includes/header.php'; ?>

<!--================Home Banner Area =================-->
<section class="home_banner_area">

    <div id="homeBannerCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="7000">
        <div class="carousel-inner">

            <!-- Image 1 + Content 1 -->    
            <div class="carousel-item active">
                <img src="img/banner/Healthcare6.png" class="d-block w-100" alt="">
                <div class="carousel-caption caption-mobile">
                    <h2 class="animated-h2">
                        Elevating People, Expanding Horizons — Under Cynture Global’s Expert Guidance
                    </h2>
                    <h4>Building Strong Foundations for a Smarter and Healthier World</h4>
                    <p>True progress in healthcare begins with knowledge — and at Cynture Global, we turn learning into meaningful impact through expert-led, hands-on training.</p>
                </div>
            </div>

            <!--  Image 2 + Content 2 (Client AI Content) -->
            <div class="carousel-item">
                <img src="img/banner/Healthcare7.png" class="d-block w-100" alt="">
                <div class="carousel-caption caption-mobile">
                    <h2 class="animated-h2">
                        Elevating People, Expanding Horizons — Under Cynture Global’s Expert Guidance
                    </h2>
                    <h4>Certification in Fundamentals of Artificial Intelligence in the Healthcare Industry</h4>
                    <p>Gain essential AI knowledge tailored for modern healthcare applications, empowering you to adapt, innovate, and excel in a rapidly advancing industry.</p>

                </div>
            </div>

            <!-- Image 3 + Content 3 (Waiting for your next content) -->
            <div class="carousel-item">
                <img src="img/banner/Healthcare8.png" class="d-block w-100" alt="">
                <div class="carousel-caption caption-mobile">
                    <h2 class="animated-h2">
                        Elevating People, Expanding Horizons — Under Cynture Global’s Expert Guidance
                    </h2>
                    <h4>Transforming Skills Through Industry-Driven Healthcare Training</h4>
                    <p>Empowering professionals with practical expertise, cutting-edge tools, and globally aligned learning programs designed to uplift careers and strengthen the healthcare ecosystem.</p>
                </div>
            </div>

        </div>

        <!-- Left Arrow -->
        <a class="carousel-control-prev" href="#homeBannerCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>

        <!-- Right Arrow -->
        <a class="carousel-control-next" href="#homeBannerCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <script>
        document.querySelectorAll('.animated-h2').forEach(h2 => {
            let text = h2.innerText;
            h2.innerHTML = '';
            text.split('').forEach((char, i) => {
                let span = document.createElement('span');
                span.innerText = char;
                span.style.animationDelay = (i * 0.03) + "s";
                h2.appendChild(span);
            });
        });
    </script>
</section>


<!--================Services Partitions Area =================-->
<section class="services_partitions_area py-5">
    <div class="container">
        <div class="main_title text-center mb-5">
            <h2>Our Services</h2>
            <p>Choose your path to excellence in healthcare and clinical research</p>
        </div>

        <div class="row">
            <!-- Clinical Services Partition -->
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="service_partition_card h-100">
                    <div class="service_image">
                        <img src="img/ClinincalResearch.png" alt="Clinical Services" class="img-fluid">
                    </div>
                    <div class="service_content text-center p-4">
                        <h3>Clinical Services</h3>
                        <p>Comprehensive training programs in Pharmacovigilance, Clinical Research, and Scientific Writing</p>
                        <a href="courses.php" class="course_btn">Explore Courses</a>
                    </div>
                </div>
            </div>

            <!-- Healthcare Partition -->
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="service_partition_card h-100">
                    <div class="service_image">
                        <img src="img/Healthcare.png" alt="Healthcare Products" class="img-fluid">
                    </div>
                    <div class="service_content text-center p-4">
                        <h3>Healthcare</h3>
                        <p>Export quality pharmaceuticals, nutraceuticals, and healthcare products worldwide</p>
                        <a href="elements.php" class="course_btn">View Products</a>



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
    .main_title {
        margin-bottom: 50px;
    }

    .main_title h2 {
        /* font-size: 2.5rem; */
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 15px;
        position: relative;
    }

    .main_title h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 2px;
    }

    .main_title p {
        font-size: 1.1rem;
        color: #666;
        margin-top: 20px;
        line-height: 1.6;
    }

    .services_partitions_area {
        background: #f8f9fa;
    }

    .service_partition_card {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
    }

    .service_partition_card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    }

    .service_image {
        height: 250px;
        overflow: hidden;
    }

    .service_image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .service_partition_card:hover .service_image img {
        transform: scale(1.05);
    }

    .service_content h3 {
        color: #2c3e50;
        font-weight: 600;
        margin-bottom: 15px;
    }

    .service_content p {
        color: #666;
        margin-bottom: 20px;
        line-height: 1.6;
    }

    .service_btn {
        display: inline-block;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: #fff;
        padding: 12px 30px;
        border-radius: 25px;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .service_btn:hover {
        background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
        color: #fff;
        text-decoration: none;
        transform: translateY(-2px);
    }
</style>
<!--================End Services Partitions Area =================-->



<!--================Courses Preview Area =================-->
<section class="courses_preview_area p_110">
    <div class="container">
        <div class="main_title">
            <h2>SPECIALIZED CLINICAL RESEARCH, PHARMACOVIGILANCE AND SCIENTIFIC WRITING COURSES</h2>
            <p>India's largest Clinical Research & PVG Training Providers</p>
        </div>

        <div class="row courses_preview_inner">
            <!-- Course 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="course_card">
                    <div class="course_image">
                        <img src="img/Professional Certificate1 .png" alt="Professional Certificate in Pharmacovigilance">
                        <div class="course_badge">Specialty Course</div>
                    </div>
                    <div class="course_content">
                        <h4>Professional Certificate in Pharmacovigilance (PCPV)</h4>
                        <!-- <p>Master drug safety monitoring, adverse event reporting, and risk management with real-world case studies.</p> -->
                        <!-- <div class="course_price">₹9,999/-</div> -->
                        <a href="course-pharmacovigilance.php" class="course_btn">View course details</a>
                    </div>
                </div>
            </div>

            <!-- Course 2 -->
            <!-- <div class="col-lg-4 col-md-6 mb-4">
                <div class="course_card">
                    <div class="course_image">
                        <img src="img/courses/course-3.jpg" alt="Professional Diploma in Clinical Research">
                        <div class="course_badge">Specialty Course</div>
                    </div>
                    <div class="course_content">
                        <h4>Professional Diploma in Clinical Research (PDCR)</h4>
                        <p>Comprehensive training in clinical trial design, conduct, and management for aspiring clinical research professionals.</p>
                        <div class="course_price">₹9,999/-</div>
                        <a href="course-clinical-research-diploma.php" class="course_btn">View course details</a>
                    </div>
                </div>
            </div> -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="course_card">
                    <div class="course_image">
                        <img src="img/PDCRcourse2.png" alt="Professional Diploma in Clinical Research">
                        <div class="course_badge">Specialty Course</div>
                    </div>
                    <div class="course_content">
                        <h4>Professional Diploma in Clinical Research (PDCR)</h4>
                        <!-- <ul class="list">
                            <li>Drug Development Process</li>
                            <li>New Drug Discovery</li>
                            <li>Clinical Development of Drug</li>
                            <li>Essential Clinical Trial Documents</li>
                            <li>Clinical Trials Terminology</li>
                            <li>GCP</li>
                            <li>Ethics in Clinical Research</li>
                            <li>Informed Consent</li>
                            <li>Biostatistics</li>
                            <li>Regulatory Affairs</li>
                            <li>Roles and Responsibilities of Clinical Trial Personnel</li>
                        </ul> -->
                        <a href="course-clinical-research-diploma.php" class="course_btn">View course details</a>
                    </div>
                </div>
            </div>



            <!-- Course 3 -->
            <!-- <div class="col-lg-4 col-md-6 mb-4">
                <div class="course_card">
                    <div class="course_image">
                        <img src="img/Scientific_Writing.png" alt="Advanced Certificate in Scientific Writing">
                        <div class="course_badge advanced">Specialty Course</div>
                    </div>
                    <div class="course_content">
                        <h4>Advanced Certificate Program in Scientific Writing (SW)</h4>
                        <p>Develop skills to create precise clinical study reports, regulatory submissions, and pharmacovigilance narratives.</p>
                        <div class="course_price">₹11,999/-</div>
                        <a href="course-scientific-writing.php" class="course_btn">View course details</a>
                    </div>
                </div>
            </div>
        </div> -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="course_card">
                    <div class="course_image">
                        <img src="img/Scientific_Writing.png" alt="Advanced Certificate in Scientific Writing">
                        <div class="course_badge advanced">Specialty Course</div>
                    </div>
                    <div class="course_content">
                        <h4>Advanced Certificate Program in Scientific Writing (SW)</h4>
                        <!-- <ul class="list">
                            <li>Introduction to Clinical Research</li>
                            <li>Clinical Study Process</li>
                            <li>Development of Standard Operating Procedures (SOPs)</li>
                            <li>Protocol</li>
                            <li>Case Report Form (CRF)</li>
                            <li>Clinical Study Report</li>
                            <li>Other Regulatory Documents</li>
                            <li>Aggregate Safety Reports</li>
                            <li>Publication</li><br><br>
                        </ul> -->
                        <a href="course-scientific-writing.php" class="course_btn">View course details</a>
                    </div>
                </div>
            </div>


        </div>

        <div class="mt-5">
            <a href="courses.php" class="main_btn" style="position: absolute; left:580px;margin-top:-60px;">View All Courses</a>
        </div>

        <style>
            @media (max-width: 768px) {
                .main_btn {
                    position: relative !important;
                    left: auto !important;
                    display: block;
                    margin: 0 auto;
                }
            }
        </style>

    </div>
</section>
<!--================End Courses Preview Area =================-->

<!--================Statistics Area =================-->
<section class="stats_section">
    <div class="container">
        <div class="stats_inner">
            <h2 class="stats_title">Our aspects</h2>
            <p class="stats_subtitle">Best Clinical Research, SW & PV Training Providers</p>

            <div class="stats_grid">
                <div class="stat_item">
                    <!-- <div class="stat_number">12000+</div>
                    <div class="stat_label">Participants</div>
                    <p style="font-size: 14px; margin-top: 10px; opacity: 0.8;">Participants from different countries</p> -->
                    <div class="stat_label">Participants from different countries</div>
                </div>

                <div class="stat_item">
                    <!-- <div class="stat_number">200+</div>
                    <div class="stat_label">Cities</div>
                    <p style="font-size: 14px; margin-top: 10px; opacity: 0.8;">Multiple locations across India and Other countries</p> -->
                    <div class="stat_label">Multiple locations across India and Other countries</div>
                </div>

                <!-- <div class="stat_item">
                    <div class="stat_number">30+</div>
                    <div class="stat_label">Countries & Counting</div>
                    <p style="font-size: 14px; margin-top: 10px; opacity: 0.8;">Global Outreach</p>
                </div> -->
                <div class="stat_item">
                    <!-- <div class="stat_number">10+</div>
                    <div class="stat_label">Years Experience</div>
                    <p style="font-size: 14px; margin-top: 10px; opacity: 0.8;">Course materials from industrial experts having 10+ years experience</p> -->
                    <div class="stat_label">Course materials from industrial experts having 10+ years experience</div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--================End Statistics Area =================-->

<!--================Courses Area =================-->


<!-- <section class="team_area p_120">
    <div class="container">
        <div class="main_title">
            <h2>Guidance from Clinical Research Experts</h2>
            <p>Learn from experienced professionals and industry experts who bring real-world knowledge, hands-on experience, and mentorship to guide your journey in pharmaceutical and clinical research.</p>
        </div>

        <div class="row team_inner">

            <div class="col-lg-3 col-sm-6">
                <div class="team_item">
                    <div class="team_img">
                        <img class="rounded-circle" src="img/team/team-1.jpg" alt="Dr. S. Kumar">
                        <div class="hover">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="team_name">
                        <h4>Dr. S. Kumar</h4>
                        <p>Pharmacovigilance Expert</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="team_item">
                    <div class="team_img">
                        <img class="rounded-circle" src="img/team/team-2.jpg" alt="Dr. A. Mehta">
                        <div class="hover">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="team_name">
                        <h4>Dr. A. Mehta</h4>
                        <p>Clinical Trial Management Specialist</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="team_item">
                    <div class="team_img">
                        <img class="rounded-circle" src="img/team/team-3.jpg" alt="Dr. R. Sharma">
                        <div class="hover">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="team_name">
                        <h4>Dr. R. Sharma</h4>
                        <p>Project Management Trainer</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="team_item">
                    <div class="team_img">
                        <img class="rounded-circle" src="img/team/team-4.jpg" alt="Dr. P. Nair">
                        <div class="hover">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="team_name">
                        <h4>Dr. P. Nair</h4>
                        <p>Scientific Writing Mentor</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section> -->
<!--================End Team Area =================-->

<!--================Latest Cynture Global =================-->
<!-- <section class="latest_blog_area p_120">
        <div class="container">
            <div class="main_title">
                <h2>Essential Knowledge Areas in Pharmacovigilance and Clinical Research</h2>
                <p>Stay informed with the latest trends, expert insights, and practical guidance in pharmaceutical and clinical research from Cynture Global’s knowledge hub.</p>
            </div>


            <div class="row latest_blog_inner">

                <div class="col-lg-3 col-md-6">
                    <div class="l_blog_item">
                        <img class="img-fluid" src="img/Pharmacovigilance.png" alt="Understanding Pharmacovigilance">
                        <a class="date" href="#">10 October, 2025 | By Dr. S. Kumar</a>
                        <a href="single-blog.php?post=pharmacovigilance">
                            <h4>Understanding Pharmacovigilance: Key Concepts & Practices</h4>
                        </a>
                    
                        <p>Explore the essentials of drug safety monitoring, adverse event reporting, and risk management in the pharmaceutical industry.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="l_blog_item">
                        <img class="img-fluid" src="img/Clinical_Trial.png" alt="Clinical Trial Best Practices">
                        <a class="date" href="#">15 October, 2025 | By Dr. A. Mehta</a>
                        <a href="single-blog.php?post=clinical-trial">
                            <h4>Clinical Trial Best Practices for Aspiring CRAs</h4>
                        </a>
                        <p>Learn effective trial planning, site management, and regulatory compliance tips to succeed in clinical research projects.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="l_blog_item">
                        <img class="img-fluid" src="img/Scientific_Writing.png" alt="Scientific Writing Tips">
                        <a class="date" href="#">18 October, 2025 | By Dr. P. Nair</a>
                        <a href="single-blog.php?post=scientific-writing">
                            <h4>Scientific Writing Tips for Regulatory Documents</h4>
                        </a>
                        <p>Enhance your scientific writing skills to create accurate study reports, safety narratives, and regulatory submissions.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="l_blog_item">
                        <img class="img-fluid" src="img/Career_Growth.png" alt="Career Growth in Clinical Research">
                        <a class="date" href="#">20 October, 2025 | By Dr. R. Sharma</a>
                        <a href="single-blog.php?post=career-growth">
                            <h4>Career Growth Strategies in Clinical Research</h4>
                        </a>
                        <p>Discover how to advance your career in the clinical research industry with certifications, practical experience, and mentorship.</p>
                    </div>
                </div>

            </div>
        </div>
    </section> -->
<!--================End Latest Cynture Global =================-->

<!--================Testimonials Area =================-->
<!-- <section class="testimonials_area p_120">
    <div class="container">
        <div class="main_title">
            <h2>What Our Students Say</h2>
            <p>Hear from learners who have gained skills and confidence through our practical, industry-focused training programs.</p>
        </div>

        <div class="testi_slider owl-carousel">

            <div class="item">
                <div class="testi_item">
                    <img src="img/testimonials/testi-1.png" alt="Anita Verma">
                    <h4>Anita Verma</h4>
                    <ul class="list">
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                    </ul>
                    <p>The Pharmacovigilance course helped me understand drug safety monitoring in real-world scenarios. The hands-on training and mentorship were excellent.</p>
                </div>
            </div>

            <div class="item">
                <div class="testi_item">
                    <img src="img/testimonials/testi-2.png" alt="Rahul Singh">
                    <h4>Rahul Singh</h4>
                    <ul class="list">
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                    </ul>
                    <p>The Clinical Trial Management course gave me confidence to manage trials efficiently. The trainers shared real case studies which were very helpful.</p>
                </div>
            </div>

            <div class="item">
                <div class="testi_item">
                    <img src="img/testimonials/testi-3.png" alt="Priya Nair">
                    <h4>Priya Nair</h4>
                    <ul class="list">
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                    </ul>
                    <p>The Scientific Writing course improved my ability to create accurate study reports and regulatory documents. The guidance from experts was invaluable.</p>
                </div>
            </div>

        </div>
    </div>
</section> -->
<!--================End Testimonials Area =================-->
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

<!--================End Impress Area =================-->

<?php include 'includes/footer.php'; ?>