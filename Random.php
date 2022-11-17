<!-- Random -->

<!-- rand();// simple
rand(start,end);// between start value and end value -->

<?php
    //----example 1
    // $player1 = rand(0,6);
    // $player2 = rand(0,6);

    // if($player1 > $player2){
    //     echo "player1 win";
    // }else{
    //     echo "player2 win";
    // }

    // ------example 2
    $p1 = 0;
    $p2 = 0;
    $same = 0;

    for($i = 0; $i < 100; $i++){

        $player1 = rand(0,6);
        $player2 = rand(0,6);

        if($player1 > $player2){
            $p1++;
        }else if($player1 == $player2){
            $same++;
        }else{
            $p2++;
        }
    }

    echo "player 1 win " . $p1 . " times " . "<br>";
    echo "player 2 win " . $p2 . " times " . "<br>";
    echo "They are " . $p1 . " same times " . "<hr>";
?>