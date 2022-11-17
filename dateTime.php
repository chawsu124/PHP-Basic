<!-- Data Time -->

<?php
    // time() // start count from Jan 1,1970
    echo time();
    echo "<hr>";

    // getdate()
    date_default_timezone_set('Asia/Rangoon');
    $arr = getdate();
    echo "<pre>" . print_r($arr,true) . "</pre> <hr>";

    // Using date() function
    date_default_timezone_set('Asia/Rangoon');
    $date = date('d-m-Y H/m/s',time());
    echo $date . "<hr>";

    // date() function parameters
    // a is lowercase 'am' or 'pm' 
    // A is Uppercase 'AM' or 'PM'
    // F is month name (January)
    // h is hour, 12 hour format (leading zero) 
    // H is hour, 24 hour format (leading zero)
    // g is hour, 12 hour format (no leading zero) 
    // G is hour, 24 hour format (no leading zero)
    // i is for minutes (0 to 59)

    // d is day of month, a number with (leading zeros) 08
    // j is day of month, a number with (no leading zeros) 8
    // D is day of week, three letters form (Thu)
    // l (lower L) is day of week, (Thursday)
    // L is 'Leap' year, 1 for 'yes', 0 for 'no'
    // m is month of year, number form (leading zero) 04
    // n is month of year, number form (no leading zero) 4
    // M is month of year, letter form April
    // r is RFC format date (Thu,21 Dec 2000 16:01:07 +0200)
    // s is seconds of hour 
    // U is Unix Time stamp 948372444
    // y is year, two digit 22
    // Y is year, four digit 2022
    // z is day of year, (between 1 to 365) 206
    // Z is offset in seconds from GMT + 5
?>