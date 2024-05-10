<?php
$to_email = "rahulkashyap17250@gmail.com";
$from_email = "admnsecrc1@ignou.ac.in";
$sender_name = "Admission Section RC 1";
$subject = "Project Viva Voce Schedule for BAVTM 0713, Jesus and Mary College-July 2023 session";
$message = "Dear Learner,\r\n\r\n" .
    "Kindly attend your Project Viva Voce as per the details given below.\r\n\r\n" .
    "The schedule is also attached to this email.\r\n\r\n" .
    "Note: Attendance in Project Viva Voce is mandatory.\r\n\r\n" .
    "With regards.\r\n\r\n" .
    "--\r\n" .
    "Dr. Arshia Hussain\r\n" .
    "Assistant Regional Director\r\n" .
    "IGNOU Regional Centre, Delhi-I\r\n" .
    "J-2/1, Block B-1\r\n" .
    "Mohan Cooperative Industrial Estate\r\n" .
    "Mathura Road, New Delhi - 110044\r\n" .
    "Website: www.rcdelhi1.ignou.ac.in\r\n" .
    "Facebook: www.facebook.com/ignourcdelhi1\r\n" .
    "IGNOU RC Delhi-1 Email: rcdelhi1@ignou.ac.in\r\n" .
    "IGNOU RC Delhi-1 Instagram: https://www.instagram.com/ignourcdelhi1/";

// Path to the PDF file
$pdf_attachment = "./BAVTM PROJ VIVA TEE MAY24.pdf";

// Read the PDF file content
$pdf_content = file_get_contents($pdf_attachment);

// Base64 encode the PDF data
$pdf_data = chunk_split(base64_encode($pdf_content));

// Boundary for multipart/mixed MIME type
$boundary = md5(uniqid());

// Headers
$headers = "From: $sender_name <$from_email>\r\n";
$headers .= "Reply-To: $from_email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

// Message Body
$body = "--$boundary\r\n";
$body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
$body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
$body .= "$message\r\n\r\n";

// Attachment
$body .= "--$boundary\r\n";
$body .= "Content-Type: application/pdf; name=\"attachment.pdf\"\r\n";
$body .= "Content-Disposition: attachment; filename=\"attachment.pdf\"\r\n";
$body .= "Content-Transfer-Encoding: base64\r\n\r\n";
$body .= "$pdf_data\r\n\r\n";
$body .= "--$boundary--";

// Sending email
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Email sending failed.";
}
?>