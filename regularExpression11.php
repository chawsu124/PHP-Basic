<!-- Regular Expression -->

<!-- preg_split(pattern,subject,limit,flags); function -->
<!-- (limit and flags) are avaiable with no value -->
<!-- -1 and NULL is no limit value -->

<?php
    $str = "There is a need, there is a way";
    $res = preg_split("/\s/",$str); // split all word with space
    echo "<pre>" . print_r($res,true) . "</pre>";// Array
                                                        // (
                                                        //     [0] => There
                                                        //     [1] => is
                                                        //     [2] => a
                                                        //     [3] => need
                                                        //     [4] => there
                                                        //     [5] => is
                                                        //     [6] => a
                                                        //     [7] => way
                                                        // )

    $str = "There is a need, there is a way";
    $res = preg_split("/\s/",$str,3); // split 3 word with space
    echo "<pre>" . print_r($res,true) . "</pre>";// Array
                                                        // (
                                                        //     [0] => There
                                                        //     [1] => is
                                                        //     [2] => a need there is a way
    
    $str = "There is a need, there is a way";
    $res = preg_split("/\s,/",$str); // split all word with space and comma(,)
    echo "<pre>" . print_r($res,true) . "</pre>";// Array
                                                        // (
                                                        //     [0] => There
                                                        //     [1] => is
                                                        //     [2] => a
                                                        //     [3] => need
                                                        //     [4] => 
                                                        //     [5] => there
                                                        //     [6] => is
                                                        //     [7] => a
                                                        //     [8] => way
                                                        // )

    $str = "There is a need, there is a way";
    $res = preg_split("/,/",$str,NULL,PREG_SPLIT_NO_EMPTY); // split all word with comma(,)
    echo "<pre>" . print_r($res,true) . "</pre>";// Array (
                                                        //     [0] => There is a need
                                                        //     [1] => there is a way
                                                        // )                                                        
?>