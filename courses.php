<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'brochure_download') {
  $mail = new PHPMailer(true);
  try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'cyntureglobal@gmail.com';
    $mail->Password   = 'qggw fibr pjoq lqpb';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->setFrom('cyntureglobal@gmail.com', 'Cynture Global');
    $mail->addAddress('clinicalservices@cyntureglobal.com');

    $mail->isHTML(true);
    $mail->Subject = 'New Student Download: Brochure';

    // Simplified Professional Email Body
    $bodyContent = '
        <div style="font-family: Arial, sans-serif; max-width: 500px; margin: auto; border: 2px solid #7b2cbf; border-radius: 12px; overflow: hidden;">
            <div style="background-color: #7b2cbf; color: white; padding: 15px; text-align: center;">
                <h2 style="margin: 0; font-size: 18px; text-transform: uppercase;">New Student Download</h2>
            </div>
            <div style="padding: 25px; background-color: #ffffff;">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="padding: 15px; border: 1px solid #eee; background-color: #fcfcfc; font-weight: bold; color: #555; width: 40%;">Email ID</td>
                        <td style="padding: 15px; border: 1px solid #eee; color: #7b2cbf; font-weight: bold;">' . htmlspecialchars($_POST['dl_email']) . '</td>
                    </tr>
                    <tr>
                        <td style="padding: 15px; border: 1px solid #eee; background-color: #fcfcfc; font-weight: bold; color: #555;">Phone Number</td>
                        <td style="padding: 15px; border: 1px solid #eee; font-weight: bold; color: #333;">' . htmlspecialchars($_POST['dl_phone']) . '</td>
                    </tr>
                </table>
                <div style="margin-top: 20px; text-align: center;">
                    <a href="tel:' . htmlspecialchars($_POST['dl_phone']) . '" style="background-color: #28a745; color: white; padding: 12px 25px; text-decoration: none; border-radius: 6px; font-weight: bold; display: inline-block;">📞 Call Student Now</a>
                </div>
            </div>
            <div style="background-color: #f4f4f4; color: #999; padding: 10px; text-align: center; font-size: 11px;">
                Cynture Global
            </div>
        </div>';

    $mail->Body = $bodyContent;
    $mail->AltBody = "Lead: Email: {$_POST['dl_email']}, Phone: {$_POST['dl_phone']}";

    $mail->send();

    header("Location: " . $_SERVER['PHP_SELF'] . "?download=success");
    exit();
  } catch (Exception $e) {
    echo "<script>alert('Error: Mail send aagala.');</script>";
  }
}
?>

<?php include 'includes/header.php'; ?>

<!--================Home Banner Area =================-->
<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
      <div class="banner_content text-center">
        <h2>Courses</h2>
        <div class="page_link">
          <a href="index.php">Home</a>
          <a href="courses.php">Courses</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================Finance Area =================-->
<section class="finance_area">
  <div class="container">
    <div class="finance_inner row">

      <!-- Feature 1 -->
      <div class="col-lg-3 col-sm-6">
        <div class="finance_item">
          <div class="media">
            <div class="d-flex">
              <i class="lnr lnr-rocket"></i>
            </div>
            <div class="media-body">
              <h5>Advanced Pharmacovigilance</h5>
              <p>Master drug safety monitoring, adverse event reporting, and risk management with real-world case studies.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Feature 2 -->
      <div class="col-lg-3 col-sm-6">
        <div class="finance_item">
          <div class="media">
            <div class="d-flex">
              <i class="lnr lnr-earth"></i>
            </div>
            <div class="media-body">
              <h5>Clinical Trial Management</h5>
              <p>Learn protocol development, site management, and regulatory compliance to lead successful clinical trials.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Feature 3 -->
      <div class="col-lg-3 col-sm-6">
        <div class="finance_item">
          <div class="media">
            <div class="d-flex">
              <i class="lnr lnr-smile"></i>
            </div>
            <div class="media-body">
              <h5>Project Management Skills</h5>
              <p>Enhance planning, budgeting, and communication skills for effective management of clinical research projects.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Feature 4 -->
      <div class="col-lg-3 col-sm-6">
        <div class="finance_item">
          <div class="media">
            <div class="d-flex">
              <i class="lnr lnr-tag"></i>
            </div>
            <div class="media-body">
              <h5>Scientific Writing Expertise</h5>
              <p>Develop skills to create precise clinical study reports, regulatory submissions, and pharmacovigilance narratives.</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!--================End Finance Area =================-

<!================Courses Area =================-->
<section class="courses_area p_120">
  <div class="container">
    <div class="main_title">
      <h2>SPECIALIZED CLINICAL RESEARCH, PHARMACOVIGILANCE, SCIENTIFIC WRITING & AI COURSES</h2>
      <!-- <p>India's largest Clinical Research & PVG Training Providers</p> -->
    </div>


    <!-- Course Categories -->
    <div class="row courses_inner">

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="course_card">
          <a href="course-pharmacovigilance.php">
            <div class="course_image">
              <img src="img/Professional Certificate1 .png" alt="Professional Certificate in Pharmacovigilance">
              <div class="course_badge">Specialty Course</div>
            </div>
          </a>
          <div class="course_content">
            <h4>Professional Certificate in Pharmacovigilance (PCPV)</h4>
            <ul class="list">
              <li>Introduction to Pharmacovigilance</li>
              <li>History of Pharmacovigilance</li>
              <li>Pharmaceutical Regulatory Agencies and Organizations</li>
              <li>New Drug Registration Process (Brief Overview)</li>
              <li>Drug Withdrawals and Safety Alerts</li>
              <li>Pharmacovigilance Methods</li>
              <li>Causality Assessment</li>
              <li>Signal Detection in Pharmacovigilance</li>
              <li>Guidelines and Standards Governing Pharmacovigilance</li>
              <li>Individual Case Safety Reports (ICSRs)</li>
              <li>Adverse Event (AE) Reporting Forms</li>
              <li>MedDRA (Medical Dictionary for Regulatory Activities)</li>
              <li>Aggregate Safety Reports</li>
            </ul>
            <a href="course-pharmacovigilance.php" class="course_btn">View course details</a>
          </div>
        </div>
      </div>


      <div class="col-lg-4 col-md-6 mb-4">
        <div class="course_card">
          <a href="course-clinical-research-diploma.php">
            <div class="course_image">
              <img src="img/PCCRcourse2.png" alt="Professional Diploma in Clinical Research">
              <div class="course_badge">Specialty Course</div>
            </div>
          </a>
          <div class="course_content">
            <h4>Professional Certificate in Clinical Research (PCCR)</h4>
            <ul class="list">
              <li>Drug Development Process</li>
              <li>New Drug Discovery</li>
              <li>Clinical Development of Drug</li>
              <li>Essential Clinical Trial Documents</li>
              <li>Clinical Trials Terminology</li>
              <li>Good Clinical Practice (GCP)</li>
              <li>Ethics in Clinical Research</li>
              <li>Informed Consent</li>
              <li>Biostatistics</li>
              <li>Regulatory Affairs</li>
              <li>Roles and Responsibilities of Clinical Trial Personnel</li>
            </ul>
            <a href="course-clinical-research-diploma.php" class="course_btn">View course details</a>
          </div>
        </div>
      </div>


      <div class="col-lg-4 col-md-6 mb-4">
        <div class="course_card">
          <a href="course-scientific-writing.php">
            <div class="course_image">
              <img src="img/Scientific_Writing.png" alt="Advanced Certificate in Scientific Writing">
              <div class="course_badge advanced">Specialty Course</div>
            </div>
          </a>
          <div class="course_content">
            <h4>Advanced Certificate Program in Scientific Writing (SW)</h4>
            <ul class="list">
              <li>Introduction to Clinical Research</li>
              <li>Clinical Study Process</li>
              <li>Development of Standard Operating Procedures (SOPs)</li>
              <li>Protocol</li>
              <li>Case Report Form (CRF)</li>
              <li>Clinical Study Report</li>
              <li>Other Regulatory Documents</li>
              <li>Aggregate Safety Reports</li>
              <li>Publications</li>

            </ul>
            <a href="course-scientific-writing.php" class="course_btn">View course details</a>
          </div>
        </div>
      </div>


      <div class="col-lg-4 col-md-6 mb-4">
        <div class="course_card">
          <a href="course-project-management.php">
            <div class="course_image">
              <img src="img/PMcourse5.png" alt="Project Management for Clinical Research">
              <div class="course_badge advanced">Specialty Course</div>
            </div>
          </a>
          <div class="course_content">
            <h4>Advanced Certificate Program in Project Management (PM)</h4>
            <ul class="list">
              <li>Introduction to Clinical Research</li>
              <li>Project Milestones Planning and Forecasting</li>
              <li>Cost Estimate and Financial Planning</li>
              <li>Logistics Planning, Vendor Selection and Management</li>
              <li>Creation of Trial Master File</li>
              <li>Management of Regulatory Document Submission</li>
              <li>Co-ordination of Individual Site Set-up Activities</li>
              <li>Import Export Requirements for Clinical Trials</li>
              <li>Organization of Investigator Training Meeting</li>
              <li>Study Initiation, Conduct and Milestones Tracking</li>
              <li>Audits and Quality Assurance</li>
              <li>Regulatory Inspection</li>
              <li>Study Closeout</li>
            </ul>
            <a href="course-project-management.php" class="course_btn">View course details</a>
          </div>
        </div>
      </div>


      <div class="col-lg-4 col-md-6 mb-4">
        <div class="course_card">
          <a href="course-clinical-trial-management.php">
            <div class="course_image">
              <img src="img/CTMcourse6.png" alt="Clinical Trial Management (CTM)">
              <div class="course_badge advanced">Specialty Course</div>
            </div>
          </a>
          <div class="course_content">
            <h4>Advanced Certificate Program in Clinical Trial Monitoring (CTM)</h4>
            <ul class="list">
              <li>Fundamentals of Clinical Research</li>
              <li>Regulatory and Ethical Framework</li>
              <li>Clinical Trial Protocol and Documentation</li>
              <li>Site Management and Regulatory Compliance</li>
              <li>Data Management</li>
              <li>Pharmacovigilance and Safety Reporting</li>
              <li>Biostatistics Requirements</li>
              <li>Quality Assurance and Risk-Based Monitoring</li>
              <li>Clinical Supply and Logistics</li>
              <li>Clinical Project Management</li>
            </ul>
            <a href="course-clinical-trial-management.php" class="course_btn">View course details</a>
          </div>
        </div>
      </div>



      <div class="col-lg-4 col-md-6 mb-4">
        <div class="course_card">
          <a href="course-regulatory-affairs.php">
            <div class="course_image">
              <img src="img/CTMcourse6.png" alt="Clinical Trial Management (CTM)">
              <div class="course_badge advanced">Specialty Course</div>
            </div>
          </a>
          <div class="course_content">
            <h4>Certification in fundamentals of Artificial intelligence in Healthcare industry (AI)</h4>
            <ul class="list">
              <li>Introduction to AI in Healthcare</li>
              <li>Core AI Concepts</li>
              <li>Healthcare Data Management</li>
              <li>AI Applications in Healthcare</li>
              <li>AI in Drug Discovery & Clinical Research</li>
              <li>Regulatory, Ethical & Safety Framework</li>
              <li>Brief Note on AI Tools</li>
              <li>Future Trends & Workforce Transformation</li>
            </ul>

            <a href="course-regulatory-affairs.php" class="course_btn">View course details</a>
          </div>
        </div>
      </div>

    </div>

    <style>
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

      /* Responsive Design */
      @media (max-width: 768px) {
        .content-grid {
          grid-template-columns: 1fr;
        }

        .commitment-content {
          grid-template-columns: 1fr;
        }

        .commitment-card {
          flex-direction: column;
          text-align: center;
        }

        .commitment-icon {
          margin-right: 0;
          margin-bottom: 15px;
        }
      }

      /* Potential Opportunities Section Styling */
      .achievements_area {
        padding: 20px 0 10px 0;
      }

      .achievements_area .main_title h2 {
        font-size: 32px;
        font-weight: 700;
        color: #7b2cbf;
        margin: 0;
        text-transform: uppercase;
        letter-spacing: 1px;
      }

      /* --- Old Button Styles (Keep these) --- */
      .brochure-heading {
        font-family: sans-serif;
        color: #7b2cbf;
        font-size: 18px;
        margin-bottom: 15px;
        font-weight: 600;
      }

      .download_btn_red {
        color: #ffffff !important;
        display: inline-block;
        padding: 6px 15px;
        background: #dc3545;
        text-decoration: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
        font-weight: 600;
        transition: background 0.3s ease;
        font-family: sans-serif;
      }

      /* Toast Container - Screenshot style layout */
      #toast-container {
        visibility: hidden;
        position: fixed;
        top: 30px;
        left: 50%;
        transform: translateX(-50%);
        background: #e7f0fa;
        border: 1px solid #e7f0fa;
        border-radius: 8px;
        padding: 12px 20px;
        box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.15);
        z-index: 10000;
        display: flex;
        align-items: center;
        gap: 15px;
        min-width: 350px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      }

      #toast-container.show {
        visibility: visible;
        -webkit-animation: slideDown 0.4s ease-out;
        animation: slideDown 0.4s ease-out;
      }

      /* Slide Down Animation */
      @keyframes slideDown {
        from {
          top: -100px;
          opacity: 0;
        }

        to {
          top: 30px;
          opacity: 1;
        }
      }

      /* Icon Section */
      .toast-icon-box {
        display: flex;
        flex-direction: column;
        align-items: center;
        background: #ffffff;
        padding: 8px;
        border-radius: 6px;
        border: 1px solid #eee;
      }

      /* Success & Message Styles */
      .toast-details {
        flex-grow: 1;
      }

      .toast-status {
        color: #444;
        font-weight: 600;
        font-size: 14px;
        margin-bottom: 2px;
      }

      .toast-text {
        color: #666;
        font-size: 13px;
        margin: 0;
      }

      /* Close Button (X) */
      .toast-close-btn {
        background: none;
        border: none;
        font-size: 20px;
        color: #999;
        cursor: pointer;
        padding: 0;
        line-height: 1;
      }

      .toast-close-btn:hover {
        color: #333;
      }
    </style>


    <div class="commitment-section">
      <div style="text-align: center; margin: 30px 0;">
        <h2 class="brochure-heading">Click here to download brochure</h2>
        <button type="button" class="download_btn_red" data-toggle="modal" data-target="#downloadModal">
          ⬇️ Course Details
        </button>
      </div>
    </div>

    <div class="modal fade" id="downloadModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 15px; overflow: hidden; border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.2);">
          <div class="modal-header" style="background: #7b2cbf; color: white; border: none; padding: 20px;">
            <h5 class="modal-title" style="font-weight: 600;">Brochure Download</h5>
            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form id="brochureLeadForm" method="POST" action="">
            <div class="modal-body" style="padding: 30px;">
              <!-- <p class="text-muted mb-4" style="font-size: 14px;">Enter your details to download the brochure.</p> -->
           <div class="form-group mb-3">
  <label style="font-weight: 600; font-size: 14px; color: #333;">Email Address</label>

  <input 
    type="email" 
    name="dl_email" 
    class="form-control" 
    placeholder="example@gmail.com" 
    required 
    style="border-radius: 8px;"

    oninput="
      let emailVal = this.value;

      let emailPattern = /^[^@\s]+@[^@\s]+\.[^@\s]{2,}$/;

      if (!emailVal.includes('@')) {
        this.setCustomValidity('Email must contain @ (Example: example@gmail.com)');
      } 
      else if (!emailVal.includes('.')) {
        this.setCustomValidity('Email must contain dot (.) (Example: example@gmail.com)');
      }
      else if (!emailPattern.test(emailVal)) {
        this.setCustomValidity('Enter valid email (Example: example@gmail.com)');
      } 
      else {
        this.setCustomValidity('');
      }
    "

    onblur="this.reportValidity();"
  >
</div>
              <div class="form-group mb-4">
                <label style="font-weight: 600; font-size: 14px; color: #333;">Phone Number</label>
                <input type="tel"
                  name="dl_phone"
                  class="form-control"
                  style="border-radius: 8px;"
                  value="+91 "
                  required
                  minlength="14"
                  maxlength="14"
                  pattern="^\+91 \d{10}$"
                  title="Please enter exactly 10 digits"
                  onfocus="if(this.value === '+91 ') this.setSelectionRange(this.value.length, this.value.length);"
                  oninput="
               if (!this.value.startsWith('+91 ')) {
                   this.value = '+91 ' + this.value.replace(/[^0-9]/g, '');
               }
               let numbers = this.value.replace('+91 ', '').replace(/[^0-9]/g, '').slice(0,10);
               this.value = '+91 ' + numbers; 
           ">
              </div>
              <input type="hidden" name="action" value="brochure_download">
            </div>
            <div class="modal-footer" style="border: none; padding: 0 30px 30px;">
              <button type="submit" class="btn w-100" style="background: #7b2cbf; color: white; border-radius: 8px; padding: 12px; font-weight: bold; transition: 0.3s;">
                Submit & Download PDF
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div id="toast-container">
      <div class="toast-icon-box">
        <img src="https://img.icons8.com/color/48/adobe-acrobat.png" width="24" height="24" alt="logo">
      </div>
      <div class="toast-details">
        <p class="toast-text">PDF downloaded successfully!</p>
      </div>
      <button class="toast-close-btn" onclick="closeToast()">&times;</button>
    </div>

    <script>
      let toastTimer;

      function showToast() {
        var toast = document.getElementById("toast-container");
        clearTimeout(toastTimer);
        toast.className = "show";
        toastTimer = setTimeout(function() {
          closeToast();
        }, 5000);
      }

      function closeToast() {
        var toast = document.getElementById("toast-container");
        toast.className = toast.className.replace("show", "");
      }

      // Handle the redirect and download trigger
      <?php if (isset($_GET['download']) && $_GET['download'] == 'success'): ?>
        window.onload = function() {
          showToast();
          var link = document.createElement('a');
          link.href = 'img/Brochure.pdf';
          link.download = 'Cynture_Global_Brochure.pdf';
          document.body.appendChild(link);
          link.click();
          document.body.removeChild(link);

          // Cleanup URL after download start
          setTimeout(function() {
            window.history.replaceState({}, document.title, window.location.pathname);
          }, 1000);
        };
      <?php endif; ?>
    </script>

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

  <!-- Statistics Section -->
  <div class="stats_section">
    <div class="container">
      <div class="stats_inner">
        <h2 class="stats_title">Our aspects</h2>
        <p class="stats_subtitle">Best Clinical Research, SW & PV Training Providers</p>

        <div class="stats_grid">
          <div class="stat_item">
            <div class="stat_label">Participants from different countries</div>
          </div>

          <div class="stat_item">
            <div class="stat_label">Multiple locations across India and Other countries</div>
          </div>
          <div class="stat_item">
            <div class="stat_label">Course materials from industrial experts having 10+ years experience</div>
          </div>

        </div>
      </div>
    </div>
  </div>

  </div>
</section>


<section class="achievements_area">
  <div class="container">
    <div class="main_title text-center">
      <h2>Potential Opportunities In</h2>
    </div>
    <div class="logo_slider">
      <div class="logo_track">
        <img src="img/team/image (0).png" alt="Achievement 1">
        <img src="img/team/image (1).png" alt="Achievement 2">
        <img src="img/team/image (2).png" alt="Achievement 3">
        <img src="img/team/image (3).png" alt="Achievement 4">
        <img src="img/team/image (4).png" alt="Achievement 5">
        <img src="img/team/image (5).png" alt="Achievement 6">
        <img src="img/team/image (6).png" alt="Achievement 7">
        <img src="img/team/image (7).png" alt="Achievement 8">
        <img src="img/team/image (8).png" alt="Achievement 9">
        <img src="img/team/image (9).png" alt="Achievement 11">
        <img src="img/team/image (10).png" alt="Achievement 12">
        <img src="img/team/image (11).png" alt="Achievement 13">
        <img src="img/team/image (12).png" alt="Achievement 14">
        <img src="img/team/image (13).png" alt="Achievement 15">
        <img src="img/team/image (14).jfif" alt="Achievement 16">
        <img src="img/team/image (15).jfif" alt="Achievement 17">
        <img src="img/team/image (16).jfif" alt="Achievement 18">
        <img src="img/team/image (17).jfif" alt="Achievement 18">
      </div>
    </div>
  </div>
</section>
<script>
  const track = document.querySelector('.logo_track');
  const logos = Array.from(track.children);

  logos.forEach(logo => {
    const clone = logo.cloneNode(true);
    track.appendChild(clone);
  });
</script>

<!--================End Courses Area =================-->



<!--================Packages Area=================-->
<section class="packages_area p_120">
  <div class="container">
    <div class="row packages_inner">

      <!-- Section Text -->
      <div class="col-lg-4">
        <div class="packages_text">
        </div>
      </div>
      <!-- Package 1 -->
      <style>
        /* Course Cards Styling Only */
        .course_card {
          background: #fff;
          border-radius: 12px;
          box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
          transition: all 0.3s ease;
          overflow: hidden;
          height: 100%;
        }

        .course_card:hover {
          transform: translateY(-5px);
          box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .course_image img {
          width: 100%;
          height: 200px;
          object-fit: cover;
          transition: transform 0.3s ease;
        }

        .course_card:hover .course_image img {
          transform: scale(1.03);
        }

        .course_badge {
          background: white;
          color: #7b2cbf;
          padding: 5px 10px;
          border-radius: 15px;
          font-size: 11px;
          font-weight: 600;
        }

        .course_content {
          padding: 20px;
        }

        .course_content h4 {
          color: #2c3e50;
          font-size: 17px;
          font-weight: 700;
          margin-bottom: 12px;
        }

        .course_content ul.list li {
          color: #666;
          font-size: 13px;
          margin-bottom: 6px;
          padding-left: 15px;
          position: relative;
        }

        .course_content ul.list li:before {
          content: '✓';
          position: absolute;
          left: 0;
          color: #28a745;
          font-weight: bold;
        }

        .course_btn {
          background: white;
          color: #7b2cbf;
          padding: 10px 20px;
          border-radius: 20px;
          text-decoration: none;
          font-weight: 600;
          font-size: 13px;
          transition: all 0.3s ease;
          display: inline-block;
          margin-top: 10px;
        }

        /* .course_btn:hover {
      background: #7b2cbf;
      transform: translateY(-2px);
      color: white;
      text-decoration: none;
  } */
        /* Packages fee styling */
        .packages_item .pack_body ul.list li {
          font-size: 14px;
          font-weight: 500;
          margin-bottom: 6px;
          color: #333;
          list-style: none;
        }

        .packages_item .pack_body ul.list li:first-child {
          font-weight: 700;
          margin-top: 0;
          margin-bottom: 10px;
          color: #007bff;
        }

        .packages_item .pack_footer .main_btn {
          padding: 6px 12px;
          font-size: 14px;
          line-height: 1.2;
          display: inline-block !important;
          opacity: 1 !important;
          visibility: visible !important;
          transition: none !important;
        }

        .pack_body ul.list li span.star {
          color: red;
          font-weight: 700;
          font-size: 16px;
        }
      </style>


      <!--================ Placement Area =================-->


    </div>
  </div>
</section>
<!--================End Packages Area =================-->

<?php include 'includes/footer.php'; ?>