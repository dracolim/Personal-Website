<?php
$message_sent= false;
if(isset($_POST['email']) ? $_POST['email'] : ''){

    if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email= isset($_POST['email']) ? $_POST['email'] : '';
    $project = isset($_POST['project']) ? $_POST['project'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    $email_header = "From: ".$name."<".$email.">\r\n";
    $email_subject = 'Personal Website Form'; 
    $email_body = "Name: $name.\n".
                    "Email: $email.\n".  
                        "Project: $project.\n".   
                            "Message: $message.\n";

    $to = "cheryllimbeiling@gmail.com";

    mail($to,$email_subject,$email_body,$email_header) or die("Error!");

    $message_sent = true;

    header('Location: http://localhost/Personal-Website/');
    exit;
    }
    else{
        $message_sent= false;
    }
}


?>