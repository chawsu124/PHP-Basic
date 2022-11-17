<!-- Interface
// interface name must be start with Uppercase
// In interface, all methods() are must not having body or statements {working statements} because its all are overwriting by class methods
// In interface, all methods() should be public access modifier
// In inherface, you can set const property [eg; const $name;]
// and must not set var property 
 -->

<?php
    
    interface GameRules{ // create interface
        public function createGameScence();
        public function createVegetables();
        public function createHousing();
        public function createActors();
    }

    // create class implements from interface
    class Index implements GameRules{
        public function createGameScence(){
            echo "I am createGameScence . <br>";
        }
        public function createVegetables(){
            echo "I am createVegatables . <br>";
        }
        public function createHousing(){
            echo "I am createHousing . <br>";
        }
        public function createActors(){
            echo "I am createActors . <br>";
        }
    }

    // create instance obj and call class's methods()
    $game = new Index();
    $game -> createGameScence();
    $game -> createVegetables();
    $game -> createHousing();
    $game -> createActors();

    echo "<hr>";
?>

<?php
    interface SheInter{
        public function setWeapon($weapon);
    }

    class Weap implements SheInter {
        private $weapon; // variable should be private

        public function setWeapon($weapon){
            $this -> weapon = $weapon;
        }
        public function Kill(){
            echo "Kill enemy with " . $this -> weapon;
        }
    }

    $actor = new Weap();
    $actor -> setWeapon("Knife");
    $actor -> Kill();

    echo "<hr>";
?>

<?php
    interface She{// create interface
        public function shegoschool($data);
    }
    interface He{ // create interface
        public function hegoschool($data);
    }

    class Student implements She, He {
        private $data; // variable should be private

        public function shegoschool($data){
            $this -> data = $data;
        }

        public function hegoschool($data) {
            $this -> data = $data;
        }

        public function output(){
            echo "<pre>" . print_r($this -> data,true) . "</pre>";
        }

        public function busy(){
            echo "This person is busy with " . $this -> data[count($this -> data) - 1];
        }
    }

    $stu = new Student();
    $sheArr = ['book','pen','bag','cosmetic'];
    $heArr = ['book','pen','bag','rubber'];

    $stu -> shegoschool($sheArr);
    $stu -> output();
    $stu -> busy();

    $stg = new Student();
    $stg -> hegoschool($heArr);
    $stg -> output();
    $stg -> busy();

    echo "<hr>";
?>