<?php
    require_once "dbconnect.php";
?>

<?php
    if(isset($_POST['update'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['selectId'];

        $sql = "UPDATE users SET username = '$username', password = '$password' WHERE id = $id";

        $result = mysqli_query($connect,$sql);

        if($result){
            echo "Update Successfully";
        }else{
            echo "Update Fail";
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
        <select name="selectId" id="">
            <?php
                $sql = "SELECT id,username FROM users";
                $result = mysqli_query($connect,$sql);

                while($row = mysqli_fetch_assoc($result)){
                    echo "<option value='{$row['id']}'>{$row['username']}</option>";
                }
            ?>
            <!-- <option value=""></option> -->
        </select>
    </p>
    <p>
        <input type="submit" name = "update" value = "Update">
    </p>
</form>