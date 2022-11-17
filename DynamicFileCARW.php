<!-- File Create / Append / Read / write -->

<?php
    function createFile($fileName){
        $handler = fopen($fileName,mode:'w');
        fclose($handler);
    }

    //createFile('best.txt');

    function writeFile($fileName,$data){
        $handler = fopen($fileName,mode:'w');
        fwrite($handler,$data);
        fclose($handler);
    }

    //writeFile('hey.txt','I am good. ');

    function appendFile($fileName,$data){
        $handler = fopen($fileName,mode:'a');
        fwrite($handler,$data);
        fclose($handler);
    }

    //appendFile('hey.txt','You are bad.'); // i am good You are bad -> in hey.txt file


    //----------with fread() function
    function readFile($fileName){
        if(file_exists($fileName)){
            $handler = fopen($fileName,mode:'r');
            $size = filesize($fileName);
            $data = fread($handler,$size);// fread() 
            fclose($handler);

            return $data;

        }else{
            echo "File not found";
        }
        
    }

    // or

     //----------with file_get_contents() function
     function readMyFile($fileName){
        if(file_exists($fileName)){
            
            $data = file_get_contents($fileName);// file_get_contents()

            return $data;

        }else{
            echo "File not found";
        }
        
    }

    readFile('hey.txt');
?>