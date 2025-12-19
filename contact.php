<?php include 'includes/header.php'; ?>


<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="overlay bg-parallax" data-stellar-ratio="0.9"></div>
    <div class="container">
      <div class="banner_content text-center">
        <h2>Contact Us</h2>
        <div class="page_link">
          <a href="index.php">Home</a>
          <a href="contact.php">Contact</a>
        </div>
      </div>
    </div>
  </div>
</section>
<style>
/* ===========================
   Contact Page UI Enhancements
   =========================== */

.contact_area {
  padding: 80px 140px;
}

/* Contact Info Cards */
.contact_info .info_item {
  background: #fff;
  width:300px;
  padding: 25px;
  border-radius: 12px;
  margin-bottom: 20px;
  box-shadow: 0 3px 10px rgba(0,0,0,0.08);
  transition: 0.3s ease;
}

.contact_info .info_item:hover {
  transform: translateY(-3px);
  box-shadow: 0 8px 18px rgba(0,0,0,0.12);
}

.contact_info .info_item i {
  font-size: 15px;
  color: #6a11cb;
  top: 24px;
  margin-left:6px;
}
@media (max-width: 768px) {
  .contact_info .info_item i {
    top: 19px !important;
    margin-left:0px !important;
    font-size:15px;
  }
}

/* Form Inputs */
.contact_form .form-control,
.contact_form select,
.contact_form textarea {
  border-radius: 10px;
  padding: 5px 25px;
  border: 1px solid #ddd;
  font-size: 15px;
  box-shadow: none;
  transition: 0.3s ease;
}

.contact_form .form-control:focus,
.contact_form select:focus,
.contact_form textarea:focus {
  border-color: #5e2ced;
  box-shadow: 0 0 8px rgba(94,44,237,0.3);
}

/* Submit Button */
.submit_btn {
  background: linear-gradient(135deg, #6a11cb, #2575fc);
  color: #fff !important;
  padding: 12px 28px;
  border-radius: 30px;
  font-size: 16px;
  font-weight: bold;
  border: none;
  transition: 0.3s ease;
}

.submit_btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 8px 18px rgba(0,0,0,0.15);
}

.form_card {
  background: #ffffff;
  padding: 35px;
  border-radius: 15px;
  box-shadow: 0 5px 20px rgba(0,0,0,0.1);

  margin-left:200px; /* 👉 Moves card to the right */
}

/* Banner Heading */
.banner_area h2 {
  font-size: 42px;
  font-weight: 700;
}

.page_link a {
  font-weight: 600;
  font-size: 15px;
  color: #444;
}

/* Mobile Responsive Styles */
@media (max-width: 768px) {
  .contact_area {
    padding: 40px 20px;
  }
  
  .contact_info .info_item {
    width: 100%;
    margin-bottom: 15px;
    padding: 20px;
  }
  
  .form_card {
    margin-left: 0;
    padding: 25px 20px;
    margin-top: 20px;
  }
  
  .banner_area h2 {
    font-size: 28px;
  }
  
  .contact_form .form-control,
  .contact_form select,
  .contact_form textarea {
    padding: 6px 28px;
    font-size: 14px;
  }
}

@media (max-width: 480px) {
  .contact_area {
    padding: 30px 15px;
  }
  
  .form_card {
    padding: 20px 15px;
  }
  
  .banner_area h2 {
    font-size: 24px;
  }
}

</style>

<!--================Home Banner Area =================-->
<!--================Contact Area =================-->
<section class="contact_area">
  <div class="container">
    <div class="row">

      <!-- Contact Info -->
      <div class="col-lg-3">
        <div class="contact_info">
          <div class="info_item">
            <i class="lnr lnr-home"></i>
            <h6>Cynture Global Pvt. LTD.</h6>
            <p>W-126 3rd Floor,<br> 3rd Avenue,<br> Anna Nagar,<br> Chennai - 600040.</p>
          </div>

          <div class="info_item">
            <i class="lnr lnr-phone-handset"></i>
            <a href="tel:+917338899156" style="color:#222; font-weight:bold;">+91 73388 99156</a>
            <p>Mon - Sat, 9:00 AM to 6:00 PM</p>
          </div>

          <div class="info_item">
            <i class="lnr lnr-envelope"></i>
            <h6><a href="mailto:clinicalservices@cyntureglobal.com">clinicalservices@cyntureglobal.com</a></h6>
            <h6><a href="mailto:sales@cyntureglobal.com">sales@cyntureglobal.com</a></h6>
            <p>We respond within 24 hours!</p>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="col-lg-9">
        <div class="form_card">

          <h3 class="mb-4" style="font-weight:700; font-size:24px;">Send Us a Message</h3>

          <form class="row contact_form" action="contact_process.php" method="post" id="contactForm">

            <div class="col-md-6">
              <div class="form-group mb-3">
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
              </div>

              <div class="form-group mb-3">
                <input type="text" class="form-control" id="Number" name="Number" placeholder="Enter your phone number" required>
              </div>

              <div class="form-group mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" required>
              </div>

              <div class="form-group mb-3">
                <select class="form-control" id="service" name="service" required>
                  <option value="">Select a service</option>
                  <option value="Clinical Services">Clinical Services</option>
                  <option value="Healthcare">Healthcare</option>
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group mb-3">
                <textarea class="form-control" name="message" id="message" rows="7" placeholder="Write your message here..." required></textarea>
              </div>
            </div>

            <div class="col-md-12 text-right mt-2">
              <button type="submit" class="course_btn">Send Message</button>

            </div>

          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Success Modal -->
<div id="success" class="modal modal-message fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
        <h2>Thank you</h2>
        <p>Your message is successfully sent...</p>
      </div>
    </div>
  </div>
</div>

<!-- Error Modal -->
<div id="error" class="modal modal-message fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
        <h2>Sorry !</h2>
        <p>Something went wrong</p>
      </div>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
