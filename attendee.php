<?php
    $location = $_POST['location'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $job = $_POST['job'];
    $company = $_POST['company'];

    $formcontent = "A Form Submitted to : $location \n Name: $name \n Phone: $phone \n Email: $email \n Job Title: $job \n Company Name: $company ";
    $recipient = "netnexgroup@gmail.com";
    $subject = "CfO Next 2022 - Attendee Form Submission";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo "" . "" . "<div style='margin:auto;display:flex;flex-direction:column;align-items:center;justify-content:center;width:400px;height:300px;text-align:center;'>
    <a href='https://cfostratech.com/cfonext2022/' style='text-decoration:none;color:black;font-size:55px;margin:auto;'> Thank You</a><p style='text-align:center;color:black;font-size:30px'>We will contact you shortly! <br> <a target='_blank' style='color:black;font-size:15px;margin:auto;text-align:center;' href='https://cfostratech.com/cfonext2022/' >Go Back</a> </p></div>";
?>