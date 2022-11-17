<!-- Facade Pattern 2 -->
<?php

    require_once "Shape.php";
    require_once "Circle.php";
    require_once "Square.php";
    require_once "Rectangle.php";

    // Facade Pattern 3
    require_once "ShapeFacade.php";

    class User2{

        // Facade Pattern 2
        // public function __construct(){

        //     $circle = new Circle();
        //     $square = new Square();
        //     $rect = new Rectangle();

        //     $circle-> draw();
        //     echo "<br>";
        //     $square-> draw();
        //     echo "<br>";
        //     $rect-> draw();
        // }


        // Facade Pattern 3
        public function __construct(){

            $obj = new ShapeFacade();// Create instance obj from ShapeFacade() class

            $obj-> drawCircle();// call drawCircle() fun: in ShapeFacade class

            echo "<br>";

            $obj-> drawSquare();// call drawSquare() fun: in ShapeFacade class

            echo "<br>";

            $obj-> drawRect();// call drawRect() fun: in ShapeFacade class

        }
    }

    new User2();
?>