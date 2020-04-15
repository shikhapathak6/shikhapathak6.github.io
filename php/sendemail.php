<?php
session_start(); 
$site_name = "Shikha Pathak Github";

    $email_to = "shikha.pathak6@gmail.com";
    $email_subject = "Message from : ".$site_name;


    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Subject: ".clean_string($subject)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
    // email header
  
    $headers = 'From: '.$email;
    $result=mail($email_to, $email_subject, $email_message, $headers);  


    if($result){
        echo "Thanks ".clean_string($name)." We'll get back to you soon.";
    }
	else
	{
		echo "Error";
	}

 
exit();

?>