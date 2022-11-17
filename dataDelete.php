<?php
    require_once "dbconnect.php";
?>

<?php
    if(isset($_POST['delete'])){
        $id = $_POST['selectId'];

        $sql = "DELETE FROM users WHERE id = $id";

        $result = mysqli_query($connect,$sql);

        if($result){
            echo "Delete Successfully";
        }else{
            echo "Delete Fail";
        }
    }
?>

<form action="" method= "post">
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
        <input type="submit" name = "delete" value = "Delete">
    </p>
</form>
