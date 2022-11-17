<?php
    require_once "dbconnect.php";
?>

<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "DELETE FROM users WHERE id = $id";

        mysqli_query($connect,$sql);
    }
?>

    <table border = "1px" bordercolor = "black" width = "800px">
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>Password</th>
            <th>Delete</th>
        </tr>

<?php
    $sql = "SELECT * FROM users";
    $result = mysqli_query($connect,$sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['username']}</td>";
            echo "<td>{$row['password']}</td>";
            echo "<td><a href = 'CRUD.php?id={$row['id']}'>Delete</a></td>";
            echo "</tr>";
            
        }
    }
?>

</table>
