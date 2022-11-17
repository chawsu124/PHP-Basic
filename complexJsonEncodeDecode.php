<!-- Complex Json Encode Decode -->

<?php
    $ary = [
        ["one" => 1, "two" => 2, "three" => 3,"four" => 4],
        ["one" => 1, "two" => 2, "three" => 3,"four" => 4],
        ["one" => 1, "two" => 2, "three" => 3,"four" =>
            ["one" => 1, "two" => 2, "three" => 3,"four" => 4],
            ["one" => 1, "two" => 2, "three" => 3,"four" => 4],
            ["one" => 1, "two" => 2, "three" => 3,"four" => 4]
        ]
    ];

    $encode = json_encode($ary);
    echo $encode;// sample data and informations from other websites
    echo "<hr>";

    $decode = json_decode($encode,true);
    foreach($decode as $val){
        foreach($val as $key => $data){
            if(!is_array($data)){
                echo "key is " . $key . " value is " . $data . "<br>";
            }else{
                foreach($data as $key => $item){
                    echo "key is " . $key . " value is " . $item . "<br>";
                }
            }
            echo "<hr>";
        }
    }


?>