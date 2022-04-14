<?php include 'db.php'; 

$query = "SELECT * FROM Users";
$result = mysqli_query($connection, $query);

if(!$result) {
    die('Query selection failed');
}



if(isset($_POST['submit'])) {
    //echo "yes, we received the data";
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $id = $_POST['id'];


    //update the database;
    $query = "UPDATE Users SET ";
    $query .= "username = '$user',";
    $query .= "password = '$pass'";
    $query .= "WHERE id = '$id'";

    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("Update query failed");
    }
 } 
 ?>

<form action="blank.php" method="post">
<label for="username">Username</label>
<input type="text" name="username">
<label for="password">Password</label>
<input type="password" name="password">
<select name="id" id="">
<?php
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
    ?>    
</select>
<input type="submit" name="submit" value="Submit">
</form>


