<!-- Regular Expression -->

<!-- preg_replace(wantToReplace,withReplace,string); function -->
<!-- [[:alpha:]] => containing alphabetic characters aA to zZ
[[:digit:]] => containing numeric digit 0 to 9
[[:alnum:]] => containing alphabetic characters aA to zZ and numeric digit 0 to 9
[[:space:]] => match any string containing space -->

<?php
    // alpha
    $var = "Brighter Myanmar";

    $result = preg_replace('/[[:alpha:]]/',"@",$var);

    echo $result;//@@@@@@@@ @@@@@@@

    $result = preg_replace('/[[:alpha:]]/',"#",$var);

    echo $result;//######## #######


    // digit
    $var = "Brighter 12456 Myanmar";

    $result = preg_replace('/[[:digit:]]/',"",$var);

    echo $result;//Brighter Myanmar


    // space
    $var = "Brighter 12456 Myanmar";
    $result = preg_replace('/[[:space:]]/',"_",$var);
    echo $result;//Brighter_12456_Myanmar
    //or
    $var = "Brighter Myanmar copyright @ 2009";
    $bol = preg_replace("/\s/","_",$var);// _ will replace in space 
    echo $bol;// Brighter_Myanmar_copyright_@_2009

?>

<?php
    // preg_match
    $bol = preg_match("/p.p/",$var);// p.p // Containing p, followed by any characters, and another p
    $bol = preg_match("/^.{2}$/",$var);// ^.{2}$ // Containing exactly 2 characters
    $bol = preg_match("/<b>(.*)</b>/",$var);// <b>(.*)</b> // Match enclosed within <b> and </b>
    $bol = preg_match("/p{hp}*/",$var);// p{hp}* // Containing a p, followed by zero or more sequence hp


    /./ // match any characters
    / */ // zero or more characters
    /^$/ // match empty string
    \d // exactly only digit
    \D // Non digit
    \s // white space
    \S // Non white space
    \w // only a word characters (a-z, A-Z, 0-9, underscore _ )
    \W // only a non word characters (!$[]^&*\()+?=-:)

    $bol = preg_match("/\d/",$var);
    $bol = preg_match("/\D/",$var);
    $bol = preg_match("/\s/",$var);
    $bol = preg_match("/\S/",$var);
    $bol = preg_match("/\w/",$var);
    $bol = preg_match("/\W/",$var);


    $var = "pHpP";
    $bol = preg_match("/p\w{2}p/i",$var);// non case sensitive// match p and 2 word characters and p
    echo $bol ? "true" : "false";

    // Hightlight
    $var = "php@gmail.com";
    $bol = preg_match("/^[a-zA-Z]+@[a-z]\.[a-z]{3}$/i",$var);// non case sensitive// match p and 2 word characters and p
    echo $bol ? "true" : "false";

    // Hightlight
    $str = "Your breakfast will include some rice and boil bean and palatar";
    
    if(preg_match("/rice/",$res)){
        echo "Rice include in this sentence. " . "<hr>";
    }
    if(preg_match("/bean/",$res)){
        echo "bean include in this sentence. " . "<hr>";
    }


    $var = "postingaemnaon";
    $bol = preg_match("/(.+)/",$var);
    echo $bol ? "true" : "false";

    //----------------------------------------------
    $var = "Brighter Myanmar copyright @ 2009";
    $bol = preg_replace("/[[:digit:]]/","2022",$var);// 2022 will replace in 2009 until all digit seen
    echo $bol;// Brighter Myanmar copyright @ 2022202220222022

    $var = "Brighter Myanmar copyright @ 2009";
    $bol = preg_replace("/[[:digit:]]+/","2022",$var);// + sign is one pair of 2009
    echo $bol;// Brighter Myanmar copyright @ 2022

    // -------search in multiple array form--------//
    $var = "Brighter Myanmar copyright @ 2009";
    $res = preg_replace(
        array('/copyright/i','[0-9]+'),
        array('computer class','2022'),
        $var
    );// + sign is one pair of 2009
    echo $res;// Brighter Myanmar computer class @ 2022

    //-----------cut all alphabetic characters and replace with "" empty string-------//
    $var = "My phone Number is 097952314565";
    $res = preg_replace("/[[:alpha:]]/","",$var);// empty string replace in all alphabetic characters 
    echo $res;// 097952314565
    // or
    $var = "My phone Number is 097952314565";
    $res = preg_replace("/[[:digit:]]/","",$var);// empty string replace in all digit
    echo $res;// My phone Number is

    //-------with twice testing---------
    $var = "My phone Number is 097 95231 4565";
    $str = preg_replace("/[[:alpha:]]/","",$var); // cut all alphabetic characters //097 95231 4565
    $res = preg_replace("/[[:space:]]/","",$str);// empty string replace in all space
    echo $res;// 097952314565 // Finally, get it no space number//

    $str = "asf<span style = 'color:red'>WaiferKolar</span>";
    $res = preg_replace("/<span style = 'color:red'>.*<\/span>/","",$str);// .* sign is any all characters // cut all alphabetic characters in <span></span> tag
    echo $res;// asf
?>