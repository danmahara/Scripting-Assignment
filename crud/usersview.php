<?php
$conn = mysqli_connect("localhost", "root", "", "crud"); // mysqli_connect to connect with database
if (!$conn) {
    die("database not connected");
}

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id='$id' ";

$result = mysqli_query($conn, $sql); //check connection with database and  select all data from table users
// header("Location:users.php");

$students = mysqli_fetch_assoc($result);

?>
<h1>Welcome:
    <?= $students['fullname']; ?>
</h1>
<h1>Email:
    <?= $students['email']; ?>
</h1>
<h1>Country:
    <?= $students['country']; ?>
</h1>