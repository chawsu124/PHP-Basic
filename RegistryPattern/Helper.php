<?php
    class Helper{
        public function __construct(){
            echo "I am " . __CLASS__ . " class and start working <br>";
        }

        public function doJob($job){
            echo "I am doing " . $job . "<br>";
        }
    }
?>