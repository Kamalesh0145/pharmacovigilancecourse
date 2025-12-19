<?php include 'includes/header.php'; ?>

<!--================Home Banner Area =================-->
<section class="home_banner_area">

    <div id="homeBannerCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="9900">
        <div class="carousel-inner">



            <!--  Image 1 + Content 1 (Client AI Content) -->
            <div class="carousel-item active">
                <img src="img/banner/two.jpeg" class="d-block w-100" alt="">
                <div class="carousel-caption caption-mobile">
                    <h2 class="animated-h2">
                        Elevating people Expanding Horizons
                    </h2><br>
                    <!-- <h4>We believe every patient deserves high quality medicine, and our company strives to make that a reality.</h4> -->
                    <!-- <p>Gain essential AI knowledge tailored for modern healthcare applications, empowering you to adapt, innovate, and excel in a rapidly advancing industry.</p> -->


                </div>
            </div>
            <!-- Image 2 + Content 2 -->
            <div class="carousel-item">
                <img src="img/banner/one.jpeg" class="d-block w-100" alt="">
                <div class="carousel-caption caption-mobile">
                    <h2 class="animated-h2">
                        We believe every patient deserves high quality medicine, <br>
                        and our company strives to make that a reality
                    </h2><br>
                    <!-- <h4>We pioneer the future of healthcare through specialized education, blending cutting-edge technology with actionable industry insights to ensure lasting success.</h4> -->
                    <!-- <p>True progress in healthcare begins with knowledge — and at Cynture Global, we turn learning into meaningful impact through expert-led, hands-on training.</p> -->
                </div>
            </div>
            <!-- Image 3 + Content 3 (Waiting for your next content) -->
            <div class="carousel-item">
                <img src="img/banner/four.jpeg" class="d-block w-100" alt="">
                <div class="carousel-caption caption-mobile">
                    <h2 class="animated-h2">
                        We uphold ethics and integrity as the driving force behind all that we do.
                    </h2><br>
                    <!-- <h4>We uphold ethics and integrity as the driving force behind all that we do.</h4> -->
                    <!-- <p>Empowering professionals with practical expertise, cutting-edge tools, and globally aligned learning programs designed to uplift careers and strengthen the healthcare ecosystem.</p> -->
                </div>
            </div>

            <!-- Image 4 + Content 4 (Waiting for your next content) -->
            <div class="carousel-item">
                <img src="img/banner/three.jpeg" class="d-block w-100" alt="">
                <div class="carousel-caption caption-mobile">
                    <h2 class="animated-h2">
                        Trust shapes our vision and guides our mission.
                    </h2><br>
                    <!-- <h4>Trust shapes our vision and guides our mission.</h4> -->
                    <!-- <p>Empowering professionals with practical expertise, cutting-edge tools, and globally aligned learning programs designed to uplift careers and strengthen the healthcare ecosystem.</p> -->
                </div>
            </div>

            <!-- Image 5 + Content 5 (Waiting for your next content) -->
            <div class="carousel-item">
                <img src="img/banner/Five.jpeg" class="d-block w-100" alt="">
                <div class="carousel-caption caption-mobile">
                    <h2 class="animated-h2">
                        We pioneer the future of healthcare through specialized education,<br>
                        blending cutting-edge technology with actionable industry insights to ensure lasting success.
                    </h2><br>
                    <!-- <h4>Trust shapes our vision and guides our mission.</h4> -->
                    <!-- <p>Empowering professionals with practical expertise, cutting-edge tools, and globally aligned learning programs designed to uplift careers and strengthen the healthcare ecosystem.</p> -->
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
                        <p>Develop skills to create precise clinical study reports, SOPs, protocols, CRFs, etc.</p>
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
                        <h3>Healthcare Products</h3>
                        <p>
                            Cyntureglobal is a well-established and trusted exporter of high-quality pharmaceutical and nutraceutical products,
                            with over five years of strong expertise in supplying to various international markets.
                        </p>
                        <p>
                            We believe that every patient deserves access to safe, effective, and affordable medicines.
                            Based on customer requirements, we supply a wide range of pharmaceutical and nutraceutical products
                            manufactured in facilities approved by leading global regulatory authorities.
                        </p>
                        <a href="elements.php" class="course_btn">View products</a>
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

    /* View All Courses Button Center Alignment & Center place btn Alingn */
    .view-all-right {
        display: block !important;
        margin: 0 auto !important;
    }

    .service_content .course_btn {
        margin: auto auto 0 auto;
        /* horizontal center + bottom align */
        width: fit-content;
        /* button width content-ku mattum */
        padding: 8px 18px;
        /* small & neat size */
        text-align: center;
    }

    .service_partition_card {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .service_content {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .service_content p {
        flex-grow: 1;
    }

    .service_content .course_btn {
        margin-top: auto;
    }
</style>
<!--================End Services Partitions Area =================-->



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


<!--================End Testimonials Area =================-->
<!--================Impress Area =================-->


<!--================End Impress Area =================-->

<?php include 'includes/footer.php'; ?>