<?php

    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $number = $_POST['number'];
    $user_message = $_POST['message'];



    $email_from = 'alfonso.juarezkelly@gmail.com';

    $email_subject = "New Form Submission";
   
    $email_body = "User Name: $name.\n".
                    "User Email $visitor_email.\n".
                     "User Number: $number.\n".
                        "User Message: $user_message.\n";


    
    $to_email = "alfonso.juarezkelly@gmail.com";

    $headers = "From: $email_from \r\n";
    $headers .="Reply-To: $visitor_email \r\n";



        mail($to_email,$email_subject,$email_body,$headers);


    headers("Location: index.php");


?>  