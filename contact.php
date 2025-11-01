<?php include 'includes/header.php'; ?>

<!--================Home Banner Area =================-->
<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
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
<!--================End Home Banner Area =================-->
<!--================Contact Area =================-->
<section class="contact_area p_120">
  <div class="container">
    <!-- <div id="mapBox" class="mapBox"
      data-lat="19.0760"
      data-lon="72.8777"
      data-zoom="12"
      data-info="Cynture Global Pvt Ltd, Andheri East, Mumbai, India."
      data-mlat="19.0760"
      data-mlon="72.8777">
    </div> -->

    <div class="row">
      <!-- Contact -->
      <div class="col-lg-3">
        <div class="contact_info">
          <div class="info_item">
            <i class="lnr lnr-home"></i>
            <h6>Cynture Global Pvt. LTD.</h6>
            <p>W-126 3rd Floor,<br> 3rd Avenue,<br> Anna Nagar,<br> Chennai - 600040.</p>
          </div>
          <div class="info_item">
            <i class="lnr lnr-phone-handset"></i>
            <div class="phone-number">
              <a href="tel:+919385460145" style="color:#222222 !important; text-decoration:none !important; font-weight:bold !important;font-size:15px !important">+91 73388 99156</a>
            </div>
            <p>Mon - Sat, 9:00 AM to 6:00 PM</p>
          </div>
          <div class="info_item">
            <i class="lnr lnr-envelope"></i> 
            <h6><a href="mailto: cyntureglobal@gmail.com"> cyntureglobal@gmail.com</a></h6>
            <p>We respond within 24 hours!</p>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="col-lg-9">
        <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject (e.g., Course Inquiry)" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <textarea class="form-control" name="message" id="message" rows="5" placeholder="Write your message here..." required></textarea>
            </div>
          </div>
          <div class="col-md-12 text-right">
            <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!--================Contact Area =================-->



<!--================Contact Success and Error message Area =================-->
<div id="success" class="modal modal-message fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="fa fa-close"></i>
        </button>
        <h2>Thank you</h2>
        <p>Your message is successfully sent...</p>
      </div>
    </div>
  </div>
</div>

<!-- Modals error -->

<div id="error" class="modal modal-message fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="fa fa-close"></i>
        </button>
        <h2>Sorry !</h2>
        <p> Something went wrong </p>
      </div>
    </div>
  </div>
</div>
<!--================End Contact Success and Error message Area =================-->

<?php include 'includes/footer.php'; ?>
