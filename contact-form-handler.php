<?php

    $visitor_email = $_POST['email'];

    $email_from = 'villesalosteam@gmail.com';

    $email_subject = 'New Subscription';

    $email_body = "User Email: $visitor_email.\n".

    $to = "ville.salo91@gmail.com";

    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html"); 

?>