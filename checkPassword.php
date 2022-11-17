<?php
    require_once "dbconnect.php";
?>

<?php
    $sql = "SELECT password FROM users WHERE id = 13";
    $result = mysqli_query($connect,$sql);

    if(!$result){
        die("Result Fail");
    }

    $row = mysqli_fetch_assoc($result);

    $db_password = $row['password'];
    $user_password = '123';

    if(password_verify($user_password,$db_password)){
        echo "Password Successfully";
    }else{
        echo "Wrong Password";
    }
?>