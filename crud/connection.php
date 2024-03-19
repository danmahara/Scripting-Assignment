<?php
$conn = mysqli_connect("localhost", "root", "", "crud"); // mysqli_connect to connect with database
if (!$conn) {
    die ("database not connected");
}