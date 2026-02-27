<?php

echo "<h2>Pharmacovigilance Student Email Test (PHP mail)</h2>";

$toEmail = 'vigneshvijay2704@gmail.com'; // change to your email
$subject = "Test Email from Pharmacovigilance Site";
$message = "This is a plain test email from the Pharmacovigilance project.\nTime: " . date('Y-m-d H:i:s');

$fromEmail = 'kamalragu5@gmail.com';

$headers  = "From: Cynture Global <{$fromEmail}>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

echo "<p>Sending test email to {$toEmail}...</p>";

if (@mail($toEmail, $subject, $message, $headers)) {
    echo "<p style='color: green;'>Email sent successfully. Check inbox/spam.</p>";
} else {
    echo "<p style='color: red;'>Email failed to send. Your hosting may have disabled PHP mail().</p>";
}
