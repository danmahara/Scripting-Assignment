<?php
$conn = mysqli_connect("localhost", "root", "", "crud"); // mysqli_connect to connect with database
if (!$conn) {
    die ("database not connected");
}

$select = "SELECT * FROM users"; //
$sResponse = mysqli_query($conn, $select);

// print_r(mysqli_fetch_all($response)); // to print all  database data
// print_r(mysqli_fetch_assoc($response));




if (!empty ($_POST)) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $sql = "INSERT INTO users(fullname,email,country) VALUES('$fullname','$email','$country')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        // echo "Data is inserted";
        header("Location:users.php");

    } else {
        echo "Data is not inserted";

    }
}
?>
<style>

</style>

<div class="body">

    <form action="" method="post">

        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" required><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required><br>

        <label for="country">Country:</label>
        <input type="text" id="country" name="country" required><br>


        <button style="color:white; background-color:blue; border-radius:10px; ">Add record</button>

    </form>

    <h3>Table</h3>
    <table width="50%" border="1">
        <tr>
            <th>Sn.</th>
            <th>Full name</th>
            <th>Email</th>
            <th>Country</th>
            <td>Action </td>
        </tr>
        <?php foreach ($sResponse as $key => $value) { ?>
            <tr>
                <td>
                    <?= ++$key ?>
                </td>
                <td>
                    <?= $value['fullname']; ?>
                </td>
                <td>
                    <?= $value['email'] ?>
                </td>
                <td>
                    <?= $value['country']; ?>
                </td>
                <td>
                    <a href="usersedit.php?id=<?= $value['id']; ?>">Edit</a>
                    <a href="usersview.php?id=<?= $value['id']; ?>">View</a>
                    <a href="usersdelete.php?id=<?= $value['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>