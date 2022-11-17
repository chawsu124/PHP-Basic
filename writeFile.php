<?php
    // this file is no exist// auto create
    $file = 'mine.txt'; // create fileName

    $handler = fopen($file,mode:'w');// open file

    fwrite($handler,'Brighter Myanmar');// write this string(Brighter Myanmar) in this file

    fclose($handler);// close
?>