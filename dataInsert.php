<?php
    require_once "dbconnect.php";
?>
<?php
    if(isset($_POST["submit"])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        // To accept ' in username // eg : mama's
         $username = mysqli_real_escape_string($connect,$username);
         $password = mysqli_real_escape_string($connect,$password);

        // To Encrypt Password in *0 Form
        // $password = crypt($password,'$2y$10iusesomecrazystrings22');

        // To Encrypt Password in Random $2y$aghr5hrh655shrt6aa Form
        $password = password_hash($password,PASSWORD_BCRYPT,array('cost' => 12,'abc' => 123));

        $sql = "INSERT INTO users(username,password) VALUES('$username','$password')";

        $result = mysqli_query($connect,$sql);

        if(isset($result)){
            echo "Successfully Data entry";
        }else{
            echo "404 Error";
        }
    }
?>

<form action="" method= "post">
    <p>
        <input type="text" name = "username" placeholder = "Name">
    </p>
    <p>
        <input type="password" name = "password" placeholder = "Password">
    </p>
    <p>
        <input type="submit" name = "submit" value = "Submit">
    </p>
</form>