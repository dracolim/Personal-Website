<?php
    $name = (isset($_POST['name']) ? $_POST['name'] : '');
    $visitor_email = (isset($_POST['email']) ? $_POST['email'] : '');
    $message = (isset($_POST['message']) ? $_POST['message'] : '');
    $project = (isset($_POST['project']) ? $_POST['project'] : '');

    $email_from = 'lancelimzuyong9@gmail.com';
    $email_subject = 'Personal Website Form';

    $email_body = "Name: $name.\n".
                    "Email: $visitor_email.\n".  
                        "Project: $project.\n".   
                            "Message: $message.\n";

    $to = "cheryllimbeiling@gmail.com";

    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    
    mail($to,$email_subject,$email_body,$headers);

    header("Location: /Personal-Website/home.html");
?>