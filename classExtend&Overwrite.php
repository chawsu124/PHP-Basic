<!-- class Extends and Overwrite -->
<?php
    class User {
        var $firstName;
        var $lastName;
        var $userName;

        function full_name() {
            return $this -> firstName . " " . $this -> lastName;
        }
    }

    class Customer extends User {
        var $city;
        var $country;
        var $email;

        function location() {
            return $this -> city . " " . $this -> country . " " .$this -> email;
        }
    }

    $p = new User();
    $p -> firstName = "Thu Yein";
    $p -> lastName = "Soe";

    $c = new Customer();
    $c -> firstName = "Mg Mg"; // overwrite firstName of Thu Yein
    $c -> lastName = "Gyi"; // overwrite lastName of Soe
    $c -> city = "Yangon";
    $c -> country = "Myanmar";
    $c -> email = "mgmg@gmail.com";

    echo $p -> full_name();
    echo "<br>";
    echo "<hr>";

    echo $c -> full_name();
    echo "<br>";
    echo $c -> location();
    echo "<hr>";

?>