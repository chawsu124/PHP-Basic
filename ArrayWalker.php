<!-- Array_Walker -->
<!-- array_walk with simple fun() -->
<?php

    $arr = ["1" => "One", "2" => "Two", "3" => "Three"];

    function fonky($value, $key){ // value is first argument 
        echo "I am simple function with key is " . $key . " value is " . $value . "<br>";
    }

    // use array_walk() built-in function
    // array_walk( , " ");
    // array_walk(arrayName,"workToDo") // (arrayName you want to split, fun() you want to do)
    array_walk($arr,"fonky");

    echo "<hr>";
?>

<!-- array_walk with Anonymous fun() -->
<?php

    $arr1 = ["1" => "One", "2" => "Two", "3" => "Three"];

    array_walk($arr1, function($value,$key){
        echo "I am Anonymous function with key is " . $key . " value is " . $value . "<br>";
    });

    echo "<hr>";
?>

<!-- array_walk with Closure fun() -->
<?php

    $num = 20; // global variable

    $arr2 = ["1" => "One", "2" => "Two", "3" => "Three"];

    // none is mean accept value from global variable
    // & is mean accept reference from global variable
    array_walk($arr1, function($value,$key) use(&$num){ // use(&and$value) 
        $num = ++$num;// each plus one to $num per one fun: loop
        echo "I am Closure function with key is " . $key . " value is " . $value .
                 " and Current value is " . $num . "<br>";
    });

    echo "<hr>";
?>