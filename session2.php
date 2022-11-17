<?php
    session_start();// if you want to use session at anywhere, you must declare session_start() firstly

    echo $_SESSION['sessionCreate'];

    // if you want to delete all session which you create in browser
    //session_destroy();

    // if you want to delete this session -> $_SESSION['sessionCreate'], use unset() 
   // unset($_SESSION['sessionCreate']);
?>