<?php
    //------checkbox
    // if(isset($_POST['submit'])){
    //     if(isset($_POST['color'])){
    //         $colors = $_POST['color'];

    //     if(count($colors) > 0){
    //         foreach($colors as $color){
    //             echo $color . "<br>";
    //         }
    //     }
        
    //     }
        
    // }


    //------radio
        if(isset($_POST['submit'])){
            $color = $_POST['color'];

            echo "You choose : " . $color;
        }

?>

<!-- For multipe choice -->
<h2>Checkbox</h2>
<form action="" method = "post">
    <input type="checkbox" name = "color[]" value = "red">Red <br>
    <input type="checkbox" name = "color[]" value = "green">Green <br>
    <input type="checkbox" name = "color[]" value = "blue">Blue <br>

    <input type="submit" name = "submit" value = "Submit"> 
</form>

<!-- For single choice -->
<h2>Radio</h2>
<form action="" method = "post">
    <input type="radio" name = "color" value = "red">Red <br>
    <input type="radio" name = "color" value = "green">Green <br>
    <input type="radio" name = "color" value = "blue">Blue <br>

    <input type="submit" name = "submit" value = "Submit"> 
</form>