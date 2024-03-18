<?php
$conn = mysqli_connect("localhost", "root", "", "crud"); // mysqli_connect to connect with database
if (!$conn) {
    die("database not connected");
}

$id = $_GET['id']; 
$sql = "SELECT * FROM users WHERE id='$id'";
$res = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($res);


if (!empty($_POST)) {
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $country = $_POST['country'];

    $updateSql = "UPDATE users SET fullname='$name',email='$email',country='$country'  where id='$id'";

    $response = mysqli_query($conn, $updateSql);

    if ($response) {
        header("Location:users.php");
    } else {
        echo "Error";
    }
}

// print_r(mysqli_fetch_all($response)); // to print all  database data
// print_r(mysqli_fetch_assoc($response));

?>
<style>
    .body {
        justify-content: center;
        align-items: center;
    }

    table,
    tr,
    td {
        /* color: white; */
        /* color: red; */
        color: white;
        text-align: center;
    }

    a {
        text-decoration: none;
        color: blueviolet;
    }

    #fullname {
        color: white;
        background-color: blue;
        border-radius: 20px;
        border-color: red;
        margin: 10px;
    }

    #email {
        color: white;
        background-color: blue;
        border-radius: 20px;
        border-color: red;
        margin: 10px;
    }

    #country {
        color: white;
        background-color: blue;
        border-radius: 20px;
        border-color: red;
        margin: 10px;
    }
</style>

<div class="body">

    <form action="" method="post">

        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" value=" <?= $user['fullname']; ?>" required><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="<?= $user['email']; ?>" required><br>

        <label for="country">Country:</label>
        <input type="text" id="country" name="country" value="<?= $user['country']; ?>" required><br>

        <h1>Update Record</h1>
        <button style="color:white; background-color:blue; border-radius:10px; ">Updaate Record</button>

    </form>


</div>