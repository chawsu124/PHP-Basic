<!-- Change Array To Object -->

<?php

    $arr = ["one" => 1,"two" => 2,"three" => 3,"four" => 4,"five" => 5];

    var_dump($arr);
    echo "<br>";
    echo $arr["one"] . "<hr>";
 
    $obj = (object) $arr; // change array to object

    var_dump($obj);
    echo "<br>";
    echo $obj -> one;
    echo "<hr>";
?>