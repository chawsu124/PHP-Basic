<!-- Facade Pattern 3 -->
<?php
    class ShapeFacade{
        // create private
        private $circle;
        private $square;
        private $rect;

        public function __construct(){

            $this-> circle = new Circle();
            $this-> square = new Square();
            $this-> rect = new Rectangle();

        }

        public function drawCircle(){

            $this-> circle-> draw();
        }

        public function drawSquare(){

            $this-> square-> draw();
        }

        public function drawRect(){

            $this-> rect-> draw();
        }
    }
?>