<!-- Useful String function -->

<?php
    $num = 5000000;
    $city = "Yangon";

    // this printf() function is for print out
    // printf("There are %u of people in %s.",$num,$city);
    // printf("string %u string %s",firstValuefor%u,secondValuefor%s);

    $fileName = 'test.txt';
    $handler = fopen($fileName,mode:'w');

    // this fprintf() function is for print out and format write in which create file
    //fprintf($handler,"There are %u of people in %s.",$num,$city);

    //--------------------------------------

    // lcfirst();// convert the first character of a string to lowercase
    // ucwords();// convert each first character of each word to uppercase
    // strtoupper();// convert all character to uppercase
    // strtolower();// conver all character to lowercase

    $str = "There are 50000 people in Yangon.";

    echo lcfirst($str) . "<br>";
    echo ucwords($str) . "<br>";
    echo strtoupper($str) . "<br>";
    echo strtolower($str) . "<hr>";

    //-----------------------------------------

    // ltrim();//convert whitespace or other predefined characters from left side of a string
    // rtrim();//convert whitespace or other predefined characters from right side of a string
    // trim();//convert whitespace or other predefined characters from both side of a string

    $str1 = " Hello ";

    // strlen() is count all string place include special character and space
    echo "string original length value is : " . strlen($str1) . "<br>";

    $lstr = ltrim($str1);
    echo "ltrim value is : " . strlen($lstr) . "<br>";

    $rstr = rtrim($str1);
    echo "rtrim value is : " . strlen($rstr) . "<br>";

    $bstr = trim($str1);
    echo "Both trim value is : " . strlen($bstr) . "<hr>";

    //---------------------------------------------

    // password encrypt function
    $pass = "123123123";

    $passwithMd5 = md5($pass);
    echo "password encrypt md5 method : " . $passwithMd5 . "<br>";

    $passwithsha1 = sha1($pass);
    echo "password encrypt sha1 method : " . $passwithsha1 . "<br>";

    $passwithcrypt = crypt($pass,$pass);
    echo "password encrypt crypt method : " . $passwithMd5 . "<hr>";

    //---------------------------------------------

    // number format function
    $num2 = 50000000;

    echo "Original number : " . $num2 . "<br>";

    echo "number format : " . number_format($num2) . "<br>";

    echo "number format with .00 : " . number_format($num2,"2") . "<br>";

    echo "number format with .000 : " . number_format($num2,"3") . "<hr>";

    //-----------------------------------------------

    // strcmp(string1,string2) function is compare firstString and secondString
    // if string1 length is more greater, output is positive value
    // if string2 length is more greater, output is negative value
    $st1 = "Whatareyoudoing";
    $st2 = "WhatareyoudoingHello";

    $comp = strcmp($st1,$st2);

    if($comp == 0){
        echo "They are same string length with " . $comp . "<br>";
    }

    echo $comp . "string length greater" . "<hr>";

    //-----------------------------------------------------
    // strlen(string) is find length of string

    // case sensitive.
    // strpos(string,"searchValue") is find index number of searchValue from the start of string
    // strrpos(string,"searchValue") is find index number of searchValue from the last of string
    
    // not case sensitive.
    // stripos(string,"searchValue") is find index number of searchValue from the start of string
    // strripos(string,"searchValue") is find index number of searchValue from the last of string

    $stringl = "convert the whitespace or the other predefined characters from both side of a string";

    echo "string length is " . strlen($stringl) . "<br>";

    echo "Find 'the' with strpos() fun: is " . strpos($stringl,"the") . " in string .<br>";

    echo "Find 'The' with strrpos() fun: is  " . strrpos($stringl,"The") . " in string .<br>";

    echo "Find 'The' with stripos() fun: is " . stripos($stringl,"The") . " in string .<br>";

    echo "Find 'The' with strripos() fun: is " . strripos($stringl,"The") . " in string .<hr>";

    //------------------------------------------------------
    // str_word_count() fun: is count the number of word in string
    // substr(string,startToCut,endToCut) fun: is cut string
    // chunk_split(string,howmanyCharacters,"sign") fun: is split/ divide string
    $str2 = "A the whitespace or the other predefined characters from both side of a string";

    $res = str_word_count($str2);
    echo "Word count is " . $res . "<br>";

    $sub = substr($str2,0,16);
    //$sub = substr($str2,10,strlen($str2));
    echo "cut result is -> " . $sub . "<br>";

    $chu = chunk_split($str2,10,"-");
    echo "Divide string with - sign after 10 characters -> " . $chu . "<br>";


?>