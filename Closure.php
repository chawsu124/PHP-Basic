<!-- Closure 
    closure can use global variable with use() keyword -->
<?php

    $num = 20;

    // Closure with global variable use($globalVariable) keyword
    $clo = function() use($num) {
        echo "I am Closure function with global value of {$num}";
    };
    
    $clo();
?>