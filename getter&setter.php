<?php
    // class Car {
    //     private $wheel = 20;

    //     function getting(){
    //         return $this -> wheel; // return value of wheel
    //     }
    //     function setting($value){
    //         return $this -> wheel = $value;
    //     }
    // }

    // $bmw = new Car();

    // echo $bmw -> getting(); // 20 // value of wheel // declare assign value

    // echo "<br>";

    // echo $bmw -> setting(100); // 100 // setting dynamic value to wheel // overwrite value

    // echo "<hr>";
?>

<?php
    class Product {
        private $name;

        public function set_name($value) {
            $this -> name = $value;
        }

        public function get_name() {
            return $this -> name;
        }
    }

    $shampoo = new Product();
    $shampoo -> set_name("Parmolive");
    echo $shampoo -> get_name();

    echo "<hr>";
?>

<?php
    class Currency {
        private $price;

        public function set_price($value){
            $valueFormat = preg_replace('[$]','',$value);
            $floatValue = floatval($valueFormat);

            if($floatValue <= 0){
                trigger_error("Price must be greater than 0");
                return;
            }

            $this -> price = $floatValue;
        }

        public function get_price() {
            return $this -> price;
        }
    }

    $dollar = new Currency();
    $dollar -> set_price(100);
    echo "$" . $dollar -> get_price();
?>