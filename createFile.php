<!-- Create File -->

<?php
    // firstly, this file is not exist
    // if you run this .php file, "testing.txt" is auto create
    $fileName = "testing.txt";

    fopen($fileName,mode:'w');
    // mode:'w' -> write mode//
    // mode:'r' -> read mode//
    // mode:'a' -> append mode//
?>