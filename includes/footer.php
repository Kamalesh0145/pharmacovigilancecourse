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

        <?php if (basename($_SERVER['PHP_SELF']) == 'contact.php' || basename($_SERVER['PHP_SELF']) == 'contact..php'): ?>
            <!-- contact js -->
            <script src="js/jquery.form.js"></script>
            <script src="js/jquery.validate.min.js"></script>
            <script src="js/contact.js"></script>
            <!--gmaps Js-->
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
            <script src="js/gmaps.min.js"></script>
        <?php endif; ?>

        <script src="js/theme.js"></script>
        </body>

        </html>
        <!--================ Start Footer Area =================-->
        <footer class="footer-area p_120" style="background: #fff !important; margin-top: 50px !important;">
            <div class="container">
                <div class="row">
                    <!-- About / Programs -->
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h6 class="footer_title">Our Programs</h6>
                            <ul class="list">
                                <li><a href="course-pharmacovigilance.php">Pharmacovigilance</a></li>
                                <li><a href="course-clinical-research-diploma.php">Clinical Research</a></li>
                                <li><a href="course-scientific-writing.php">Medical Writing</a></li>
                                <li><a href="course-clinical-trial-management.php">Clinical Trial Management</a></li>
                                <li><a href="course-project-management.php">Project Management</a></li>
                            </ul>
                        </div>
                    </div>


                    <!-- Quick Links -->
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h6 class="footer_title">Quick Links</h6>
                            <ul class="list">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about-us.php">About</a></li>
                                <li><a href="courses.php">Courses</a></li>
                                <!-- <li><a href="blog.php">Research Publications</a></li>
                        <li><a href="elements.php">Career</a></li> -->
                                <li><a href="elements.php">Products</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Student Support -->
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h6 class="footer_title">Student Support</h6>
                            <ul class="list">
                                <li><a href="faq.php">FAQs</a></li>
                                <!-- <li><a href="#">Placement Assistance</a></li> -->
                                <li><a href="contact.php">Learning Portal</a></li>
                                <li><a href="certification-process.php">Certification Process</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Healthcare -->
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h6 class="footer_title">Healthcare</h6>
                            <ul class="list">
                                <li><a href="elements.php">Pharmaceutical and Nutraceutical Products</a></li>
                            </ul>
                        </div>
                    </div>


                    <!-- Newsletter -->
                    <!-- <div class="col-lg-4 col-md-6 col-sm-6">
                        <aside class="f_widget news_widget">
                            <div class="f_title">
                                <h3 class="footer_title">Subscribe to Our Newsletter</h3>
                            </div>
                            <p>Stay updated with the latest trends and news in the pharmaceutical and clinical research industry.</p>
                            <div id="mc_embed_signup">
                                <form target="_blank" action="#" method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Enter your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your email'" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>
                                    </div>
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </aside>
                    </div> -->
                </div>
            </div>
            

        <!-- WhatsApp Floating Button -->
                    <a href="https://wa.m e/919876543210" class="whatsapp_float" target="_blank">
            <i class="fa fa-whatsapp whatsapp-icon"></i>
        </a>

        <!--Start of Tawk.to Script-->
                             
        <script>
        var Tawk_API = Tawk_API || {};

        Tawk_API.onLoad = function () {

            function injectStyle() {
                var iframe = document.querySelector('iframe[title="chat widget"]');
                if (!iframe) return;

                var iframeDoc = iframe.contentDocument || iframe.contentWindow.document;
                if (!iframeDoc) return;

                var style = iframeDoc.getElementById("tawkResizeStyle");
                if (!style) {
                    style = iframeDoc.createElement("style");
                    style.id = "tawkResizeStyle";
                    iframeDoc.head.appendChild(style);
                }

                style.innerHTML = `
                    .tawk-button-circle {
                        width: 40px !important;
                        height: 40px !important;
                        top:0px !important;
                        right: 10px !important;
                    }
                `;
            }

    // Run immediately
            injectStyle();

    // Watch for ANY change inside iframe — instant resize
            var iframe = document.querySelector('iframe[title="chat widget"]');
            if (iframe) {
                var observer = new MutationObserver(injectStyle);

                var check = setInterval(function () {
                    var iframeDoc = iframe.contentDocument || iframe.contentWindow.document;

                    if (iframeDoc && iframeDoc.body) {
                        observer.observe(iframeDoc.body, {
                            childList: true,
                            subtree: true,
                            attributes: true
                        });
                        injectStyle();
                        clearInterval(check);
                    }
                }, 200);
            }
        };
        </script>


        <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();

        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];

            s1.async = true;
            s1.src = 'https://embed.tawk.to/691aba10dde8a319591808a4/1ja86dkri';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
        </script>


        <!--End of Tawk.to Script-->

        </footer>
            <div class="footer-bottom" style="background-color: #7b2cbf !important; padding: 0px 0 !important; margin-top: 50px !important; position: relative !important;">
                <div class="container">
                    <div class="row d-flex justify-content-between align-items-center">
                        <p class="col-lg-8 col-md-8 footer-text m-0" style="color: white !important; font-size: 14px !important;">
                            Copyright &copy; <script>
                                document.write(new Date().getFullYear());
                            </script>
                            <strong>Cynture Global Pvt Ltd</strong> | All Rights Reserved.
                            Designed & Developed with <i class="fa fa-heart-o" aria-hidden="true" style="color: #ff6b6b !important;"></i> SmartiApps Technologies.
                        </p>
                        <div class="col-lg-4 col-md-4 footer-social text-center text-md-right">
                            <a href="https://www.facebook.com/YourPageName" target="_blank" title="Facebook" style="color: white !important; margin: 0 5px !important; font-size: 16px !important;"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.linkedin.com/company/YourCompanyName" target="_blank" title="LinkedIn" style="color: white !important; margin: 0 5px !important; font-size: 16px !important;"><i class="fa fa-linkedin"></i></a>
                            <a href="https://twitter.com/YourHandle" target="_blank" title="Twitter" style="color: white !important; margin: 0 5px !important; font-size: 16px !important;"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com/YourProfile" target="_blank" title="Instagram" style="color: white !important; margin: 0 5px !important; font-size: 16px !important;"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                
            </div>
        <!--================ End Footer Area =================-->