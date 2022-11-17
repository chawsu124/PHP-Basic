<?php
    session_start();

    $_SESSION['sessionCreate'] = "Hello World";

    echo $_SESSION['sessionCreate'];
?>