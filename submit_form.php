<?php
include ("admin/includes/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $service = $_POST['service'];
    $contact_method = $_POST['contact_method'];
    $preferred_date = isset($_POST['date']) ? $_POST['date'] : NULL;
    $preferred_time = isset($_POST['time']) ? $_POST['time'] : NULL;
    $message = $_POST['message'];

    if ($conn->connect_error) {
        die(json_encode(['status' => 'error', 'message' => 'Database connection failed: ' . $conn->connect_error]));
    }

    $sql = "INSERT INTO appointments (name, email, phone, subject, service, contact_method, preferred_date, preferred_time, message)
            VALUES ('$name', '$email', '$phone', '$subject', '$service', '$contact_method', '$preferred_date', '$preferred_time', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Prepare email details
        $to = "info@pinalandco.com";
        $subject = "New Appointment Request";
        $body = "
            <html>
            <head>
                <title>New Appointment Request</title>
            </head>
            <body>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Phone:</strong> $phone</p>
                <p><strong>Subject:</strong> $subject</p>
                <p><strong>Service:</strong> $service</p>
                <p><strong>Contact Method:</strong> $contact_method</p>
                <p><strong>Preferred Date:</strong> $preferred_date</p>
                <p><strong>Preferred Time:</strong> $preferred_time</p>
                <p><strong>Message:</strong><br/>$message</p>
            </body>
            </html>
        ";

        // Set content-type for HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // Additional headers
        $headers .= 'From: <' . $email . '>' . "\r\n";

        // Send email
        if (mail($to, $subject, $body, $headers)) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Email sending failed']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error: ' . $conn->error]);
    }

    $conn->close();
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
