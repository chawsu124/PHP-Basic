<!-- Table Joining -->
<?php
    require_once "dbconnect.php";
?>

<?php
    // $createQuery = "CREATE TABLE IF NOT EXISTS tutorials(
    //     id INT(10) NOT NULL AUTO_INCREMENT,
    //     subject_id INT(4) NOT NULL,
    //     title VARCHAR(100) NOT NULL,
    //     created_by INT(4) NOT NULL,
    //     PRIMARY KEY (id)
    // );";

    // $createView = "CREATE TABLE IF NOT EXISTS tutorial_views(
    //     id INT(10) NOT NULL PRIMARY KEY,
    //     static_view INT(10) NOT NULL,
    //     unique_view INT(10) NOT NULL
       
    // );";

    // $result = mysqli_query($connect,$createView);

    // echo $result ? "Table created successfully" : "Created fail";



    //-----------How to insert into new user table which get from users.json file data---------//
    $users = json_decode(file_get_contents("users.json"));

    foreach($users as $user){
        $insertQ = "INSERT INTO users VALUES ($user->id,'$user->name',$user->creator,'$user->email','$user->pass')";

        mysqli_query($connect,$insertQ);
    }
    //----------------------end



    //-----------How to get name from subject table which equal to from users.json file data---------//
    $tuto = json_decode(file_get_contents("tuto.json"));

    foreach($tuto as $t){
        $qry = "SELECT name FROM subjects WHERE id=$t->subject_id";
        $result = mysqli_query($connect,$qry);
        $name = "";
        foreach($result as $row){
            $name = $orw['name'];
        }

        echo $name . "<br>";
    }
    //------------------end
?>