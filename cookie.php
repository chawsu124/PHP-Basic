<?php
    $name = 'username';
    $content = 'ChawSuAung';
    $expe = time() + (60 * 60);// for 1 hour

    setcookie($name,$content,$expe);

    // $expe = time() + (10); // For 10 second
    // $expe = time() + (60); // For 60 second (or) 1 minute
    // $expe = time() + (60 * 60 * 24); // For 1 day
    // $expe = time() + (60 * 60 * 24 * 365); // For 1 year

    // if(setcookie($name,$content,$expe)){
    //     echo "Cookie Create Successfully";
    // }else{
    //     echo "Cookie create Fail";
    // }

    echo $_COOKIE['username']; // output is content value of this cookie content name

    // if(isset($_COOKIE['username'])){
    //     $cookieValue = $_COOKIE['username'];
    //     echo $cookieValue;
    // }else{
    //     echo "No cookie";
    // }
?>