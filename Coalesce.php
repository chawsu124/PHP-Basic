<!-- Coalesce in PHP 
    Coalesce is mean if you call fun() with no parameter, it can assign with right value of ?? 
-->
<?php

    function doIt(...$parm){

        //echo $parm[0]; // it cause error

        // so, we use Coalesce ??
        // if $parm[0] is no value or null , it can output right value of ?? operator
        echo $parm[0] ?? "Hello World, you call this fun() with no argument .";
    }

    doIt();// call doIt() with no parameter or argument
?>