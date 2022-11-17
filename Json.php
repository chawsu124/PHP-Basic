<!-- JSON encode & datefmt_get_error_code -->

<!-- JSON encode -->
<?php
    // $arr = array(
    //     [
    //         "name" => "WaiferKolar",
    //         "age" => "35",
    //         "subject" => "Java,PHP,C#",
    //         "married" => "Yes"
    //     ],
    //     [
    //         "name" => "Thu Yein Soe",
    //         "age" => "35",
    //         "subject" => "Java,PHP,C#",
    //         "married" => "Yes"
    //     ]
    //     );

    //     echo json_encode($arr);
?>

<!-- ------------------------------------------------------ -->

<!-- JSON Decode -->
<?php
    //[
        $file = "teach.json";
        $handler = fopen($file,'r');

        $json = fread($handler,filesize($file));
        
        $arys = json_decode($json);
    //]
    // or
    
    //$arys = json_decode(file_get_contents("teach.json"));

    foreach($arys as $key => $vals){
        foreach($vals as $val){
            echo "Key is => " . $key . "and value is => " . $val . "<br>";
        }
    }

?> 