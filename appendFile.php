<!-- Appending File -->

<?php
    $file = 'mine.txt';// this file is also exist

    $handler = fopen($file,mode:'a');// open file

    fwrite($handler,'72 Coder');// append add this string(72 Coder) in this file// so, Brighter Myanmar 72 Coder

    fclose($handler);// close
?>