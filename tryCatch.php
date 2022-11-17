<!-- try catch in PHP -->
<?php
    error_reporting(0); // hide system eror message 
    try{
        if(fopen('ttt.txt','r')){
            echo "Yes, File read ";
        }else{
            throw new Exception("File can't be read "); // throw error message to catch()
        }
    }catch(Exception $e){
        echo $e -> getMessage(); // show error message
    }

    // do something after try catch 
    echo "<br> Finally you done ";
?>