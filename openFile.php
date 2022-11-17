<!------------ Open File ------------->

<!-- First, you must create 'fileName.txt' file -->
<!-- And then, write down something text in this file -->

<!-- Last, you can code here -->
<?php
    $fileName = 'text.txt';// file name

    $handler = fopen($fileName,mode:'r');// file open with read mode// fopen(fileName,mode:'r')

    $size = filesize($fileName);// get file size// filesize(fileName)

    $data = fread($handler,$size);// read file// fread(handler,filesize)

    echo $data;
?>