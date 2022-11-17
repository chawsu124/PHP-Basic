<!-- PolyMorphism 
    Polymorphism can use downcasting method, it can be use implements Shape class as a object
    because this all class use Shape implements
-->

<?php
    // use Psr-4 autoload file
    require_once "vendor/autoload.php";// require this vendor folder -> autoload.php file

    use app\Square;// use this "use" keyword and put folder and file name 
    // because this class use Square.php
    use app\Circle;// use this "use" keyword and put folder and file name 
    // because this class use Circle.php
    use app\gem\Shape;// use this "use" keyword and put folder and file name 
    // because this class implements Shape.php

    class Index{

        public function __construct(){
            $square = new Square(20,20);
            //echo "Square area is " . $square-> getArea();
            $this-> getPrice($square); // give Square obj

            echo "<br>";

            $circle = new Circle(30);
            //echo "Circle area is " . $circle-> getArea();
            $this-> getPrice($circle); // give Circle obj
        }


        // create a fun() that accept only Shape object type 
        public function getPrice(Shape $shape){ // Shape obj only accept the class that implements 
            
            $area = $shape-> getArea();
            echo "Your Total Price is " . ($area * 5) . " $ <br>"; // 1 area = 5 $ // __ area = ? $

        }
    }

    new Index();
?>