<!-- Regular Expression -->

<!-- preg_match(/searchValue/,string); function -->

<?php
    // Non alphanumeric characters can be used as delimeter(instead of "/search/")
    // "/search/"
    // "#search#"
    // "+search+"
    // "%search%"
    //"!search!"

    $var = "Brighter 102 Myanmar";

    $bol = preg_match("/mar$/",$var);

    echo $bol ? "TRUE" : "FALSE";


    //------delimeter is case sensitive
    $bol = preg_match("/mar/",$var);//Check if "mar" contain in string// result is true or false
    $bol = preg_match("/^Bri/",$var);//Check if "Bri" at the start of string// sign ^ is start of string
    $bol = preg_match("/mar$/",$var);// Check if "mar" at the end of string// sign $ is end of string


    //------delimeter("/search/i") is consisting of "/search/i" is non case sensitive
    $bol = preg_match("/mya/i",$var);
    $bol = preg_match("/^bri/i",$var);
    $bol = preg_match("/Mar$/i",$var);

    
    $bol = preg_match("/[0-9]/",$var);//check if between 0 to 9 in string
    $bol = preg_match("/[a-z]/",$var);//check if between a to z in string
    $bol = preg_match("/[A-Z]/",$var);//check if between A to Z in string


    $var = "BAX.a";
    $bol = preg_match("/([^a-z]+)\.([a-z])/",$var);// not between a to z and . and must between a to z
    //$bol = preg_match("/([^a-z]+)\.([a-z]*)/",$var);// not between a to z and . and zero or more between a to z
    //$bol = preg_match("/([^a-z]+)\.([a-z]+)/",$var);// not between a to z and . and must one or more between a to z
    echo $bol ? "TRUE" : "FALSE"; // TRUE

    $bol = preg_match("/^[0-9]/",$var);//check if between 0 to 9 starting with string
    $bol = preg_match("/[^0-9]/",$var);//check if not (between 0 to 9 starting with string)
    $bol = preg_match("/^[a-z]/",$var);//check if between a to z starting with string
    $bol = preg_match("/[^a-z]/",$var);//check if not (between a to z starting with string)
    $bol = preg_match("/^[A-Z]/",$var);//check if between A to Z starting with string
    $bol = preg_match("/[^A-Z]/",$var);//check if not (between A to Z starting with string)
    $bol = preg_match("/[@]/",$var);//check if @ in string


    $bol = preg_match("/p+/",$var);//p+// match any string containing at least one p
    $bol = preg_match("/p*/",$var);//p*// match any string containing zero or more p
    $bol = preg_match("/p?/",$var);//p?// match any string containing zero or more p
    $bol = preg_match("/p{2}/",$var);//p{2}// match any string containing a sequence Number of p//eg: at least two or more sequence of p
    $bol = preg_match("/p{2,3}/",$var);//p{2,3}// match any string containing a sequence of two of three p
    $bol = preg_match("/p{2,}/",$var);//p{2,}// match any string containing a sequence of at least two p

    $bol = preg_match("/\s/",$var);// Check if space containing in string
?>