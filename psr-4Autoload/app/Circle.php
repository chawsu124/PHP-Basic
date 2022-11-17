<?php
    namespace app;// In app folder

    use app\gem\Shape; // use this "use" keyword and put folder name having Shape.php 
    // because this class implements Shape

    class Circle implements Shape{
        
        private $radius;

        public function __construct($radius){
            $this-> radius = $radius;
        }

        public function getArea(){
            return $this-> radius * $this-> radius * pi();
        }
    }
?>