<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address= $_POST['address'];
    $message=$_POST['message'];

    $to = 'info@snfcleaning.net.au'; // Change this to your email address
    $subject = 'New Enquiry from ' . $name;
    $body = "Name: $name\nEmail: $email\n Phone no: $phone\n Address: $address\n Message: $message";

    // Send email
    if (mail($to, $subject, $body)) {
        header("Location: thank-you.html");
    } else {
        echo 'Failed to send email. Please try again later.';
    }
} else {
    echo 'Invalid request';
}
?>
