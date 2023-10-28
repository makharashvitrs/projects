<?php 
    $name = $_POST['name'];
    $visitorEmail = $_POST['email'];
    $message = $_POST['message'];

    $email_from = "demo@tristani.com";

    $email_subject = "New Feedback Form Submission";

    $email_body = "User Name: $name.\n". 
                  "User Email: $visitorEmail.\n". 
                   "User Message: $message.\n";

    
    $to = "makharashvili.tristani@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-to: $visitorEmail \r\n";

    if(mail($to, $email_subject, $email_body, $headers))
        echo "success";
    else 
        echo "not sent";
    

    header("Location: home.php");


?>