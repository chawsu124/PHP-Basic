<!-- Error Handling -->

<?php
    $file = "su.txt";

    // exit()
    if(file_exists($file)){
        echo "File exist";
    }else{
        exit("File not exist");// exit("") is stop and not work the following code 
    }

    echo "Hey, I am good" . "<br>";

    //-------------------------------------

    // try catch
    try{
        if(file_exists($file)){
            echo "File exist";
        }else{
            throw new Exception("File not found");
        }
    }catch(Exception $e){
        echo $e->getMessage();
    }

    //-------------------------------------
?>