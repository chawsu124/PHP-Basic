<!-- Variadic in PHP 
        Variadic is not limit argument size
        It can be accept with all type of value
        It can be accept in array form 
-->
<?php

    function doIt(...$val){ // use Variadic form (...$name)
        // accept in this form ->  $val = ["Mg Mg","123","Hello"];
        //echo $val[2]; // accept in array form

        // accept in this form -> $val = [['One','Two','Three'], ["Waht's up ?"]];
        //echo $val[0][2];

        // accept in this form -> $val = [['One','Two','Three'], ["Waht's up ?"], [1,2,3,4,5]];
        echo $val[2][4];
    }

    //doIt("Mg Mg","123","Hello");

    //doIt(['One','Two','Three'],"Waht's up ?");

    doIt(['One','Two','Three'],"Waht's up ?",[1,2,3,4,5]);
?>