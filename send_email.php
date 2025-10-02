<?php
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "swetha2001as@gmail.com"; 
    $headers = "From: " . $email;

    if(mail($to, $subject, $message, $headers)){
        echo "success";
    } else {
        echo "error";
    }
}
?>
