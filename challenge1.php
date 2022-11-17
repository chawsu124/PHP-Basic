<?php
    class Bicycle {
        var $brand;
        var $model;
        var $year;
        var $description = "Used Bicycle";
        var $weight_kg = 0.0;

        function name() {
            return $this -> brand . " " . $this -> model . " " . $this -> year;
        }
        function weight_to_lb() {
            return floatval($this -> weight_kg) * 2.20462262;
        }
    }

    $bicycle1 = new Bicycle();

    $bicycle1 -> brand = "Mg Bamar";
    $bicycle1 -> model = "man";
    $bicycle1 -> year = 2022;
    $bicycle1 -> weight_kg = 3;

    echo $bicycle1 -> name();

    echo "<br>";

    echo $bicycle1 -> weight_to_lb();
?>