<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"] ?? '';
    $email = $_POST["email"] ?? '';
    $subject = $_POST["subject"] ?? '';
    $city = $_POST["city"] ?? '';
    $message = $_POST["message"] ?? '';
    $phone = $_POST["phone"] ?? '';

    // Construct email message
    $to = "asutoshpayasi2001@gmail.com"; 
    $email_subject = "New Form Submission - " . $subject;
    $messageBody = "Name: $name\nEmail: $email\nSubject: $subject\nCity: $city\nContact: $phone\nMessage: $message";

    $headers = "From: $email";

    $success = mail($to, $email_subject, $messageBody, $headers);

    if ($success) {
        $response = [
            "success" => true,
            "message" => "Thank you for contacting us. We will contact you as soon as possible."
        ];
    } else {
        $response = [
            "success" => false,
            "message" => "Something went wrong. Please try again."
        ];
    }

    // Send JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
} else {
    // Handle non-POST requests
    header('HTTP/1.1 405 Method Not Allowed');
    header('Allow: POST');
    exit;
}
?>