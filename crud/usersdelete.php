<?php
require_once 'connection.php';

// $conn = mysqli_connect("localhost", "root", "", "crud"); // mysqli_connect to connect with database
// if (!$conn) {
//     die("database not connected");
// }

$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id='$id' ";
$result = mysqli_query($conn, $sql);
header("Location:index.php");
?>