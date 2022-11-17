<?php
    class Furniture {
        var $width;
        var $height;
        var $depth;

        var $is_seating = false;
        var $is_sleeper = false;
        var $upholstered = false;

        function area(){
            return floatval($this -> width) * floatval($this -> depth);
        }
        function volume(){
            return $this -> area() * floatval($this -> height); 
        }
    }

    class Bed extends Furniture {
        var $is_sleeper = true;
    }

    class Sofa extends Furniture {
        var $is_seating = true;
        var $upholstered = true;
        
        var $seats = 3;
        var $has_backcushions = true;
        var $has_seatcushions = true;
        var $arm = 2;

        var $depth_opened;

        function area_opened(){
            if(!$this -> is_sleeper){
                return $this -> area();
            }else{
                return floatval($this -> width) * floatval($this -> depth_opened);
            }
        }
    }

    class Couch extends Sofa {
        var $arm = 0;
    }

    class Loveseat extends Sofa {
        var $arm = 2;
    }

    class Bench extends Couch {
        var $has_backcushions = false;
    }

    // inspect_class() function
    function inspect_class($class_name){
        $output = "";
        $output .= $class_name;
        $parent_class = get_parent_class($class_name);

        if($parent_class != ""){
            $output .= " extends {$parent_class}";
        }

        $output .= "\n"; // backlash sign // \ \ \

        $class_var = get_class_vars($class_name);
        ksort($class_var); // ksort() is sorting alphabetically
        $output .= "Properties : \n";
        
        foreach($class_var as $k => $v){
            $output .= "-{$k} : {$v} \n";
        }

        $class_methods = get_class_methods($class_name);
        sort($class_methods);
        $output .= "Methods : \n";
        
        foreach($class_methods as $k => $v){
            $output .= "-{$k} : {$v} \n";
        }

        return $output;
    }

    $class_names = ['Furniture','Bed','Couch','Loveseat','Bench'];
    foreach($class_names as $class_name){
        echo nl2br(inspect_class($class_name)); // call inspect_class() function
        echo "<br>";// nl2br() is next line after each statement
    }

    echo "<hr>";
    // echo get_parent_class('Furniture');
    $sofa = new Sofa();
    $sofa -> width = 4;
    $sofa -> depth = 2;
    $sofa -> height = 3;

    echo "Sofa area : " . $sofa -> area() . "<br>"; 
    echo "Sofa volume : " . $sofa -> volume() . "<br>";
    echo "Sofa area_opened : " . $sofa -> area_opened() . "<br>";

    echo "<hr>";

    $sofa -> is_sleeper = true;
    $sofa -> depth_opened = 7;

    echo "Sofa area opened : " . $sofa -> area_opened() . "<br>";

    echo "<hr>";

    $bench = new Bench();
    $bench -> width = 3;
    $bench -> height = 1.5;
    $bench -> depth = 1;
    
    echo "Bench Area : " . $bench -> area() . "<br>";
    echo "Seating : " . ($bench -> is_seating ? 'true' : 'false') . "<br>";
    echo "Sleeping : " . ($bench -> is_sleeper ? 'true' : 'false') . "<br>";
    echo "Has backcushions : " . ($bench -> has_backcushions ? 'true' : 'false') . "<br>";
?>