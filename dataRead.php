<?php
    require_once "dbconnect.php";
?>

<!-- In php form -->
<?php
    // $sql = "SELECT * FROM users";
    // $result = mysqli_query($connect,$sql);

    // echo "<table>";
    // echo "<tr>";
    // echo "<th>ID</th>";
    // echo "<th>UserName</th>";
    // echo "<th>Password</th>";
    // echo "</tr>";

    // while($row = mysqli_fetch_assoc($result)){
    //     echo "<tr>";
    //     echo "<td>{$row['id']}</td>";
    //     echo "<td>{$row['username']}</td>";
    //     echo "<td>{$row['password']}</td>";
    //     echo "</tr>";
    // }

    // echo "</table>";
?>

<!-- or -->

<!-- In Html form -->
<?php
    $sql = "SELECT * FROM users";
    $result = mysqli_query($connect,$sql);
?>

    <table border = "1px">
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>Password</th>
        </tr>

<?php
    while($row = mysqli_fetch_assoc($result)){
?>

        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['password']; ?></td>
        </tr>

<?php
    }
?>

</table>