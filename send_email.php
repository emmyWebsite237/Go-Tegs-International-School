<?php
// Define the recipient email address
$to = 'gotegs622@gmail.com';

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $program = $_POST['program'];

    // Create the email content
    $subject = 'Enrollment Form Submission';
    $message = "Name: $name\nEmail: $email\nPhone: $phone\nProgram: $program";

    // Set basic headers
    $headers = "From: $email\r\nContent-Type: text/plain\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        // Success message
        echo '<h1>Thank you for enrolling!</h1>';
        echo '<p>We will contact you soon. Return to <a href="index.html">Home Page</a></p>';
    } else {
        // Error message
        echo '<h1>Error sending email!</h1>';
    }
}
?>