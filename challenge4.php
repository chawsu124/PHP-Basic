<!-- Final Challenge -->
<?php
    class Bicycle {
        public $brand;
        public $model;
        public $year;
        public $description = "Used Bicycle";
        public $weight_kg = 0.0;
        protected static $wheels = 2;
        // Hilight Point
        public static $instance_count = 0;

        public const CATEGORIES = ['Road','Mountain','City','BMX'];

        public $category;

        public static function created() {
            $class_name = get_called_class();
            $obj = new $class_name;
            self :: $instance_count ++;// increase $instance_count per 1

            return $obj;
        }//

        public function set_weight_kg($value){
            $this -> weight_kg = $value;
        }

        public function get_weight_kg(){
            return $this -> weight_kg . "kg";
        }

        public function weight_lbs() {
            $weight_lb = floatval($this -> get_weight_kg()) * 2.2046;
            return $weight_lb;
        }

        public function set_weight_lbs($value){
            return $this -> weight_kg = floatval($value) / 2.2046;
        }

        public function name() {
            return $this -> brand . " " . $this -> model . " " . $this -> year;
        }

        public function weight_to_lb() {
            return floatval($this -> weight_kg) * 2.20462262;
        }

        public static function wheel_detail() {
            $wheel_string = static :: $wheels == 1 ? '1 Wheel' : static :: $wheels . 'Wheel';
            return "It has " . $wheel_string;
        }
    }

    class Unicycle extends Bicycle {
        protected static $wheels = 1;

        public function bug_test(){
            return $this -> weight_kg;
        }
    }

     $bicycle1 = new Bicycle();

    // $bicycle1 -> brand = "Mg Bamar";
    // $bicycle1 -> model = "man";
    // $bicycle1 -> year = 2022;
    // $bicycle1 -> weight_kg = 3;

    // echo $bicycle1 -> name();

    // echo "<br>";

    // echo $bicycle1 -> weight_lbs();

    // echo "<hr>";

    
    // echo Bicycle :: wheel_detail() . "<br>";
    // echo Unicycle :: wheel_detail();

    // echo "<hr>";

    // Hilight Point
    echo "Bicycle count : " . Bicycle :: $instance_count . "<br>";
    echo "Unicycle count : " . Unicycle :: $instance_count . "<br>";

    echo "<hr>";

    $bike = Bicycle :: created();
    $uni = Unicycle :: created();

    echo "Bicycle count : " . Bicycle :: $instance_count . "<br>";
    echo "Unicycle count : " . Unicycle :: $instance_count . "<br>";

    echo "<hr>";

    echo "Categories : " . implode(',',Bicycle :: CATEGORIES) . "<br>";

    echo "Category : " . $bicycle1 -> category = Bicycle :: CATEGORIES[0];

    echo "<hr>";
?>