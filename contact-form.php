<?php
// Get data from form
$name = $_POST['name'];
$email= $_POST['email'];  
$phone= $_POST['phone'];    
$message= $_POST['message'];

$to = "info@exaccountic.com";
$subject = "New Message from Website";

// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message
$txt ="Name = ". $name . "\r\n Email = "
    . $email . "\r\n Phone =" . $phone . "\r\n Message =" . $message;

$headers = "From: info@exaccountic.com" . "\r\n" .
            "CC: rhlrjn2202@gmail.com";
if($email != NULL) {
    mail($to, $subject, $txt, $headers);
}

// Redirect to
header("Location:index.html");
?>
