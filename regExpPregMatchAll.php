<!-- preg_match_all(pattern,subject,matches,flags) 
        pattern => reg pattern to search for
        subject => string or paragraph to match
        matches => Array where all matches are assigned
        flags => Define result order
-->

<?php
    //------PREG_SET_ORDER-----
    $str = "We start learning PHP at 7:00 am and finish learning at 5:30 pm";

    preg_match_all("/(\d+:\d+)\s*(am|pm)/",$str,$matches,PREG_SET_ORDER);// match (digit:digit)space and (am or pm)

    echo "<pre>" . print_r($matches,true) . "</pre>";

    echo "<hr>";// Array
                    // (
                    //     [0] => Array
                    //         (
                    //             [0] => 7:00 am
                    //             [1] => 7:00
                    //             [2] => am
                    //         )
                    
                    //     [1] => Array
                    //         (
                    //             [0] => 5:30 pm
                    //             [1] => 5:30
                    //             [2] => pm
                    //         )
                    
                    // )


    //-------PREG_PATTERN_ORDER-------
    $str = "We start learning PHP at 7:00 am and finish learning at 5:30 pm";

    preg_match_all("/(\d+:\d+)\s*(am|pm)/",$str,$matches,PREG_PATTERN_ORDER);// match (digit:digit)space and (am or pm)

    echo "<pre>" . print_r($matches,true) . "</pre>";

    echo "<hr>";// Array
                        // (
                        //     [0] => Array
                        //         (
                        //             [0] => 7:00 am
                        //             [1] => 5:30 pm
                        //         )
                        
                        //     [1] => Array
                        //         (
                        //             [0] => 7:00
                        //             [1] => 5:30
                        //         )
                        
                        //     [2] => Array
                        //         (
                        //             [0] => am
                        //             [1] => pm
                        //         )
                        
                        // )
    
?>

<?php
    //------------------------------------------------------------------------
    // preg_quote(string,optional)
    // add slash / in front of non word characters(!$[]^&*\()_+?=-:)

    $str = "There is $40 per bag?";
    echo $str . "<br>";//There is $40 per bag?

    $res = preg_quote($str);
    echo $res . "<br>";//There is \$40 per bag\?

    $ans = preg_quote($str,'e');// add / in front of e and non word characters(!$[]^&*\()_+?=-:)
    echo $ans . "<hr>";// Th\er\e is \$40 p\er bag\?
?>

<?php
    //-------------------------------------------------------------------------
    // preg_match() with positive look ahead
    $str =  "ABC";
    $bol = preg_match('/A(?=B)/',$str);// check if A and followed by B // if AB...
    echo $bol ? "true" : "false"; // true    
    
    $str =  "A2BC";
    $bol = preg_match('/A(?=\d)/',$str);// check if A and followed by any digit 

    $str =  "A2BC";
    $bol = preg_match('/A(?=\w)/',$str);// check if A and followed by any word characters (a-z, A-Z, 0-9)

    // eg: password testing // Hilight Point
    $pw = "mgmg123mgA@";
    $res = preg_match("/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w]))/",$pw);
    // check if zero or more(a to z) and zero or more(A to Z)
    //   and zero or more(any digit) and zero or more( _ or not any word characters)
    echo $res ? "true" : "false"; // true                       


    // preg_match() with positive look behind
    $str =  "A@BC";
    $bol = preg_match('/(?<=@)B/',$str);// check if @ sign in front of B// if @B
    echo $bol ? "true" : "false"; // true 
    

    //--------------------------------------------------
    // preg_match() with negative look ahead
    $str =  "ABC";
    $bol = preg_match('/A(?!B)/',$str);// check if B followed by A// if AB
    echo $bol ? "true" : "false"; // true 

    // preg_match() with negative look behind
    $str =  "ABC";
    $bol = preg_match('/(?<!B)C/',$str);// check if not B in front of C// if BC
    echo $bol ? "true" : "false"; // false // "AVB1C // true
?>