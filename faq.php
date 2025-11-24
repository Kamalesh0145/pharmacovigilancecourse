<?php include 'includes/header.php'; ?> 

<!--================ Start FAQ Area =================-->
<section class="faq_area p_120">
  <div class="container">
    <div class="main_title">
      <h2>Frequently Asked Questions (FAQs)</h2>
      <p>Find answers to the most common questions about our training programs.</p>
    </div>

    <div class="accordion" id="faqAccordion">

      <!-- Q1 -->
      <div class="card">
        <div class="card-header" id="heading1">
          <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1">
              Who can join the courses?
              <i class="lnr lnr-chevron-down"></i>
              <i class="lnr lnr-chevron-up"></i>
            </button>
          </h2>
        </div>
        <div id="collapse1" class="collapse show" data-parent="#faqAccordion">
          <div class="card-body">
            Any healthcare professionals or students from any healthcare course (including but not limited to 
            Medical (Allopathy, Ayurvedha, Sidha, Unani, etc.), Pharmacy, Nursing, Paramedical courses, and Allied Health Sciences/Services).
          </div>
        </div>
      </div>

      <!-- Q2 -->
      <div class="card">
        <div class="card-header" id="heading2">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse2">
              How to join the course?
              <i class="lnr lnr-chevron-down"></i>
              <i class="lnr lnr-chevron-up"></i>
            </button>
          </h2>
        </div>
        <div id="collapse2" class="collapse" data-parent="#faqAccordion">
          <div class="card-body">
            Go to the <strong>Courses</strong> page, click <strong>Enrol</strong>, provide the requested details, and pay the course fee.
          </div>
        </div>
      </div>

      <!-- Q3 -->
      <div class="card">
        <div class="card-header" id="heading3">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse3">
              What is the course duration?
              <i class="lnr lnr-chevron-down"></i>
              <i class="lnr lnr-chevron-up"></i>
            </button>
          </h2>
        </div>
        <div id="collapse3" class="collapse" data-parent="#faqAccordion">
          <div class="card-body">
            The course duration is <strong>6 months</strong>.
          </div>
        </div>
      </div>

      <!-- Q4 -->
      <div class="card">
        <div class="card-header" id="heading4">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse4">
              Do I have exams?
              <i class="lnr lnr-chevron-down"></i>
              <i class="lnr lnr-chevron-up"></i>
            </button>
          </h2>
        </div>
        <div id="collapse4" class="collapse" data-parent="#faqAccordion">
          <div class="card-body">
            No. You need to complete the assignments. After evaluation, we will provide grades and certificates.
          </div>
        </div>
      </div>

      <!-- Q5 -->
      <div class="card">
        <div class="card-header" id="heading5">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse5">
              Will you provide job assistance?
              <i class="lnr lnr-chevron-down"></i>
              <i class="lnr lnr-chevron-up"></i>
            </button>
          </h2>
        </div>
        <div id="collapse5" class="collapse" data-parent="#faqAccordion">
          <div class="card-body">
            Yes, we will provide job assistance after successful course completion.
          </div>
        </div>
      </div>

      <!-- Q6 -->
      <div class="card">
        <div class="card-header" id="heading6">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse6">
              Do you provide any classroom or online training?
              <i class="lnr lnr-chevron-down"></i>
              <i class="lnr lnr-chevron-up"></i>
            </button>
          </h2>
        </div>
        <div id="collapse6" class="collapse" data-parent="#faqAccordion">
          <div class="card-body">
            No, it’s a self-readable course. For any doubts or queries, you can contact us, and our team will provide the necessary clarifications.
          </div>
        </div>
      </div>

      <!-- Q7 -->
      <div class="card">
        <div class="card-header" id="heading7">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse7">
              Why should I choose Cynture Global?
              <i class="lnr lnr-chevron-down"></i>
              <i class="lnr lnr-chevron-up"></i>
            </button>
          </h2>
        </div>
        <div id="collapse7" class="collapse" data-parent="#faqAccordion">
          <div class="card-body">
            Our course materials are prepared by industrial experts having 10+ years of experience. Unlike others, our materials are up-to-date and easy to understand. Whenever you have a query, you will receive clarifications directly from our industrial experts.
          </div>
        </div>
      </div>

      <!-- Q8 -->
      <div class="card">
        <div class="card-header" id="heading8">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse8">
              What about the opportunities?
              <i class="lnr lnr-chevron-down"></i>
              <i class="lnr lnr-chevron-up"></i>
            </button>
          </h2>
        </div>
        <div id="collapse8" class="collapse" data-parent="#faqAccordion">
          <div class="card-body">
            You will have a wide range of opportunities in Pharmaceutical companies, CROs, Hospitals, and Government organizations.
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!--================ End FAQ Area =================-->

<style>
/* ==== FAQ Page Styling ==== */
.faq_area {
  background: #f9f9f9;
  padding: 80px 0;
}

.faq_area .main_title h2 {
  font-size: 32px;
  font-weight: 700;
  color: #002147;
  margin-bottom: 15px;
  text-transform: uppercase;
}

.faq_area .main_title p {
  font-size: 17px;
  color: #555;
  margin-bottom: 40px;
}

.faq_area .accordion .card {
  border: none;
  margin-bottom: 15px;
  border-radius: 10px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
  background: #fff;
  transition: all 0.3s ease;
}

.faq_area .accordion .card:hover {
  transform: translateY(-3px);
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
}

.faq_area .card-header {
  background: #ffffff;
  border-bottom: 1px solid #eee;
  padding: 15px 20px;
}

.faq_area .card-header button {
  font-size: 18px;
  font-weight: 600;
  color: #007bff;
  text-decoration: none;
  width: 100%;
  text-align: left;
}

.faq_area .card-header button:hover {
  color: #0056b3;
}

.faq_area .card-body {
  background: #fff;
  color: #444;
  font-size: 16px;
  line-height: 1.8;
  padding: 20px;
}

.faq_area .btn-link:focus {
  box-shadow: none;
  text-decoration: none;
}

/* Arrow icon styling */
.faq_area .card-header button i {
  float: right;
  transition: all 0.3s ease;
  color: #000;
}

.faq_area .card-header button .lnr-chevron-up {
  display: none;
  color: #dc3545 !important;
}
/* OPEN state → arrow WHITE */
.accordion .card-header .btn i.lnr {
    color: #7b2cbf !important;
	font-size: larger;
}
.faq_area .card-header button[aria-expanded="true"] .lnr-chevron-down {
  display: none;
}

.faq_area .card-header button[aria-expanded="true"] .lnr-chevron-up {
  display: inline-block;
  color: #7b2cbf !important;
}

/* Default open FAQ (Q1) arrow color */
#heading1 button .lnr-chevron-up {
  color: #7b2cbf !important;
}

@media (max-width: 768px) {
  .faq_area {
    padding: 60px 0;
  }
  .faq_area .main_title h2 {
    font-size: 24px;
  }
  .faq_area .card-header {
    padding: 12px 15px;
  }
  .faq_area .card-header button {
    font-size: 16px;
    line-height: 1.4;
    padding: 0;
    white-space: normal;
    word-wrap: break-word;
  }
  .faq_area .card-body {
    padding: 15px;
    font-size: 15px;
    line-height: 1.6;
  }
  .faq_area .accordion .card {
    margin-bottom: 10px;
  }
}
</style>

<?php include 'includes/footer.php'; ?> 
