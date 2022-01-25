<?php 
if(isset($_POST['submit'])){
    $to = "vivek@maxlence.com.au"; 
    $from = $_POST['email']; 
    $fname = $_POST['fname'];
    $phone = $_POST['phone'];
    $services = $_POST['services'];
    $message = $_POST['message'];
    $subject = "Form submission";
    $subject2 = "your form submitted sucessfully";
    $message = $fname . " " . $email . " ".$phone." ".$services." wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Form submited fully" . $fname . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends the message to the sender
    echo "Mail Sent. Thank you " . $fname . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>