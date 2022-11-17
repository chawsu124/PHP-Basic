<!-- Complex Type Sample -->
<?php
    class Rent {
        public $car, $driver;

        public function __construct(Car $car, Driver $driver){ // constructor
            $this -> car = $car;
            $this -> driver = $driver;
        }
        public function getCar() : Car { // return type must be Car type
            return $this -> car;
        }
        public function getDriver() : Driver { // return type must be Driver type
            return $this -> driver;
        }
    }

    class Driver {

        public $name, $age, $family, $hourlyRate, $martialStatus;

        // create setter and getter fun()
        public function setName(string $name){
            $this -> name = $name;
        }
        public function getName() : string {
            return $this -> name;
        }
    
        public function setAge(int $age){
            $this -> age = $age;
        }
        public function getAge() : int {
            return $this -> age;
        }

        public function setFamily(array $family){
            $this -> family = $family;
        }
        public function getFamily() : array {
            return $this -> family;
        }

        public function setHourlyRate(float $rate){
            $this -> hourlyRate = $rate;
        }
        public function getHourlyRate() : float {
            return $this -> hourlyRate;
        }

        public function setMartialStatus(bool $martialStatus){
            $this -> martialStatus = $martialStatus;
        }
        public function getMartialStatus() : bool {
            return $this -> martialStatus;
        }
    }

    class Car{

        public $brand, $model, $price, $spares, $available ;

        // create constructor instead of setter fun() // it is start to do while invoke this class
        public function __construct(string $brand, int $model, float $price, array $spares, bool $available){
            $this -> brand = $brand;
            $this -> model = $model;
            $this -> price = $price;
            $this -> spares = $spares;
            $this -> available = $available;
        }

        // create getter fun()
        public function getBrand() : string {
            return $this -> brand;
        }
        public function getModel() : int {
            return $this -> model;
        }
        public function getPrice() : float {
            return $this -> price;
        }
        public function getSpares() : array {
            return $this -> spares;
        }
        public function getAvailable() : bool {
            return $this -> available;
        }
    }

    $dmg = new Driver();
    $dmg -> setName("Mg Mg");
    $dmg -> setAge(20);
    $dmg -> setFamily(["Father"=>"U Ba","Mother"=>"Daw Nu","Sister"=>"Su"]);
    $dmg -> setHourlyRate(8.5);
    $dmg -> setMartialStatus(false);

    $dko = new Driver();
    $dko -> setName("Ko Ko");
    $dko -> setAge(25);
    $dko -> setFamily(["Father"=>"U Hla","Mother"=>"Daw Mya","Sister"=>"Ni"]);
    $dko -> setHourlyRate(10.5);
    $dko -> setMartialStatus(true);

    $toyata = new Car("Alphbert",2017,30.5,["Tissues","PurifiedDK","Cupon"],true);
    $marcedee = new Car("Marcedee",2016,45.5,["Tissues","PurifiedDK"],false);

    // create instance obj from Rent class
    $rent1 = new Rent($toyata,$dmg);
    $rent2 = new Rent($marcedee,$dko);

    $list = [$rent1,$rent2];

    $serializeData = serialize($list);
    echo $serializeData; // In database report form
    echo "<hr>";

    $ary = unserialize($serializeData);
    echo "<pre>" . print_r($ary,true) . "</pre>"; // from database into array form
    echo "<hr>";

    echo $list[0] -> getCar() -> getBrand();
    echo $list[1] -> getCar() -> getBrand();

    echo $list[0] -> getDriver() -> getName();
    echo $list[1] -> getDriver() -> getName();
?>
