<!-- 
    create_function('arguments','code string to do');  in PHP
    create_function() is one time use and then, it is auto break fun()
    
    ('','echo "Hello"')
-->
<?php
    // $gre = create_function('$para1,$para2','echo "Hello <br> First person is " . $para1 . 
    //                         " and <br> Second person is " . $para2 ');
    // $gre("Mg Mg","Su Su");
?>

<!-- Anonymous function -->
<?php
    $num = 20;

    // create annoymous function and assign it in one variable
    $har = function($data){
        $data = 50;
        echo "I am Mr. Annoymous and value is {$data} <br>";
    };

    echo $num . "<br>";

    $har($num); // call this annoymous function

    echo $num . "<hr>";

    // next example is 
    $val = 20;

    $mar = function($data,$con){
        $data = 50;
        echo "I am Mr. Annoymous and value is {$data} and {$con} <br>";
    };

    echo $val . "<br>";

    $mar($val,"What the hack are doing ? "); // call this annoymous function

    echo $val . "<hr>";
?>