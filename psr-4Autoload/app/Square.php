<?php
    namespace app;// In app folder

    use app\gem\Shape;// use this "use" keyword and put folder name having Shape.php 
    // because this class implements Shape

    class Square implements Shape{
        
        private $width,$height;

        public function __construct($width,$height){
            $this-> width = $width;
            $this-> height = $height;
        }

        public function getArea(){
            return $this-> width * $this-> height;
        }
    }
?>