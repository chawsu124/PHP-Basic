<!-- Abstract Factory Method -->
<?php
    // abstract class AutoGearFactory
    abstract class AutoGearFactory{

    }
    class MarcedeeAuto extends AutoGearFactory{
        public function getName(){
            echo __CLASS__ . " Auto Gear <br>";
        }
    }
    class ToyotaAuto extends AutoGearFactory{
        public function getName(){
            echo __CLASS__ . " Auto Gear <br>";
        }
    }

    // abstract class ManualGearFactory
    abstract class ManualGearFactory{

    }
    class MarcedeeManual extends ManualGearFactory{
        public function getName(){
            echo __CLASS__ . " Manual Gear <br>";
        }
    }
    class ToyotaManual extends ManualGearFactory{
        public function getName(){
            echo __CLASS__ . " Manual Gear <br>";
        }
    }

    // abstract class CarFactory
    abstract class CarFactory{
        abstract function createCar1();
        abstract function createCar2();
    }
    // Auto
    class AutoCarMaker extends CarFactory{
        public function createCar1(){
            return new MarcedeeAuto();
        }
        public function createCar2(){
            return new ToyotaAuto();
        }
    }

    // Manual
    class ManualCarMaker extends CarFactory{
        public function createCar1(){
            return new MarcedeeManual();
        }
        public function createCar2(){
            return new ToyotaManual();
        }
    }

    // create instance obj
    $carAuto = new AutoCarMaker();
    $marcedeeAuto = $carAuto-> createCar1();
    $toyotaAuto = $carAuto-> createCar2();

    $carManual = new ManualCarMaker();
    $marcedeeManual = $carManual-> createCar1();
    $toyotaManual = $carManual-> createCar2();

    $marcedeeAuto-> getName();
    $toyotaAuto-> getName();

    $marcedeeManual-> getName();
    $toyotaManual-> getName();
?>