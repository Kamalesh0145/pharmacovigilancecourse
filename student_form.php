<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// PHPMailer files-a connect panrom
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mail = new PHPMailer(true);

    try {
        // --- 1. Server Settings (Gmail SMTP) ---
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'kamalragu5@gmail.com';
        $mail->Password   = 'xfyi zfck grpk ngfu';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // --- 2. Recipients ---
        $mail->setFrom('kamalragu5@gmail.com', 'Cynture Global');
        $mail->addAddress('vigneshvijay2704@gmail.com');

        // --- 3. Email Content
        $mail->isHTML(true); 
        $mail->Subject = 'New Student Registration: ' . ($_POST['name'] ?? 'No Name');

        // Professional Email Body
        $bodyContent = '
        <div style="font-family: Arial, sans-serif; max-width: 600px; margin: auto; border: 1px solid #eee; border-radius: 10px; overflow: hidden;">
            <div style="background-color: #7b2cbf; color: white; padding: 8px; text-align: center;">
                <h2 style="margin: 0;">Cynture Global Registration Portal</h2>
            </div>
            <div style="padding: 20px; background-color: #ffffff;">
                <table style="width: 100%; border-collapse: collapse; margin-top: 10px;">
                    <tr style="background-color: #f9f9f9;">
                        <td style="padding: 12px; border: 1px solid #eee; font-weight: bold; width: 40%;">Student Name</td>
                        <td style="padding: 12px; border: 1px solid #eee;">'.htmlspecialchars($_POST['name'] ?? '').'</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px; border: 1px solid #eee; font-weight: bold;">Studies</td>
                        <td style="padding: 12px; border: 1px solid #eee;">'.htmlspecialchars($_POST['studies'] ?? '').'</td>
                    </tr>
                    <tr style="background-color: #f9f9f9;">
                        <td style="padding: 12px; border: 1px solid #eee; font-weight: bold; color: #eee;">Course Interest</td>
                        <td style="padding: 12px; border: 1px solid #eee;">'.htmlspecialchars($_POST['course'] ?? '').'</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px; border: 1px solid #eee; font-weight: bold;">College Name</td>
                        <td style="padding: 12px; border: 1px solid #eee;">'.htmlspecialchars($_POST['college'] ?? '').'</td>
                    </tr>
                    <tr style="background-color: #f9f9f9;">
                        <td style="padding: 12px; border: 1px solid #eee; font-weight: bold;">Pass Out Year</td>
                        <td style="padding: 12px; border: 1px solid #eee;">'.htmlspecialchars($_POST['passout_year'] ?? '').'</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px; border: 1px solid #eee; font-weight: bold;">Email ID</td>
                        <td style="padding: 12px; border: 1px solid #eee;"><a href="mailto:'.htmlspecialchars($_POST['email'] ?? '').'">'.htmlspecialchars($_POST['email'] ?? '').'</a></td>
                    </tr>
                    <tr style="background-color: #f9f9f9;">
                        <td style="padding: 12px; border: 1px solid #eee; font-weight: bold;">Phone Number</td>
                        <td style="padding: 12px; border: 1px solid #eee;">'.htmlspecialchars($_POST['phone'] ?? '').'</td>
                    </tr>
                </table>
                <div style="margin-top: 25px; text-align: center;">
                    <a href="tel:'.htmlspecialchars($_POST['phone'] ?? '').'" style="background-color: #7b2cbf; color: white; padding: 12px 30px; text-decoration: none; border-radius: 8px; font-weight: bold; display: inline-block;">Call Student Now</a>
                </div>
            </div>
            <div style="background-color: #f4f4f4; color: #888; padding: 15px; text-align: center; font-size: 12px;">
                * This is an automated alert from your website registration form.
            </div>
        </div>';

        $mail->Body = $bodyContent;
        $mail->AltBody = "New Registration: " . ($_POST['name'] ?? 'No Name'); // For non-HTML clients

        // --- 4. Send and Redirect ---
        $mail->send();

        header("Location: index.php?form=success");
        exit();
    } catch (Exception $e) {
        $errorMessage = "Error: Mail send aagala. Reason: {$mail->ErrorInfo}";
    }
}

include 'includes/header.php';
?>

<style>
    .form-section { background-color: #f8f9fa; }
    .card { border-radius: 15px; border: none; overflow: hidden; }
    .bg-violet { background-color: #7b2cbf !important; padding-top: 40px !important; padding-bottom: 5px !important; }
    .enroll-desc { opacity: 0.95; font-size: 1.1rem; font-weight: 500; margin-top: 25px; }
    .btn-submit { background-color: #7b2cbf; color: white; border: none; border-radius: 8px; padding: 10px 40px; font-weight: bold; transition: 0.3s; display: inline-block; }
</style>

<section class="py-5 form-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9">
                <div class="card shadow-lg">
                    <div class="card-header bg-violet text-white text-center">
                        <i class="fas fa-graduation-cap" style="font-size: 2.5rem; margin-bottom: 5px;"></i>
                        <p class="enroll-desc mb-0">Course Inquiry & Registration Form</p>
                    </div>
                    <div class="card-body p-4 p-md-5">
                        <?php if ($errorMessage): ?>
                            <div class="alert alert-danger border-0 shadow-sm">
                                <i class="fas fa-exclamation-triangle me-2"></i> <?php echo $errorMessage; ?>
                            </div>
                        <?php endif; ?>

                        <form method="POST" action="" id="studentForm" novalidate>
                            <div class="mb-3">
                                <label class="form-label font-weight-bold">Students Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label font-weight-bold">Studies</label>
                                    <input type="text" name="studies" class="form-control" placeholder="Enter Your Studies" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label font-weight-bold">Course Interest</label>
                                    <input type="text" name="course" class="form-control" placeholder="Enter Course Interest" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label font-weight-bold">College Name</label>
                                <input type="text" name="college" class="form-control" placeholder="Enter your college/university" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label font-weight-bold">Passed Out Year</label>
                                    <input type="number" name="passout_year" class="form-control" value="<?php echo date('Y'); ?>" min="2000" max="<?php echo date('Y') + 5; ?>" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label font-weight-bold">Phone Number</label>
                                    <input type="tel" name="phone" class="form-control" placeholder="Enter Your Phone Number" pattern="[0-9]{10}" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="form-label font-weight-bold">Email Address</label>
                                <input type="email" name="email" class="form-control" placeholder="example@gmail.com" required>
                            </div>
                            <div class="text-center mt-2">
                                <button type="submit" class="btn btn-submit shadow-sm">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    (function() {
        'use strict'
        var forms = document.querySelectorAll('#studentForm')
        Array.prototype.slice.call(forms).forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>

<?php include 'includes/footer.php'; ?>