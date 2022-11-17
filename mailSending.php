<!-- Mail Sending -->
<?php
    // Firstly, you make 3 account in xampp Mercury and Thunderbird app
    // sending plain text mail 
    $arr = ["waifer@localhost","biber@localhost","tester@localhost"];// if you want to send mail to 3 people
    // or you want to send 1 people
    //$to = "waifer@localhost";
    $to = implode(',',$arr);// save array data by , from $arr
    $subject = "PHP mail test";
    $message = "I am just testing to make sure my PHP mailing system is work or not, please don't take serious";
    $header = "From: mmTuto@gmail.com";

    mail($to,$subject,$message,$header);

    // if mail is successfully, get mail in Thunderbird app and read it all
?>