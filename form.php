<?php


if (!empty ($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    echo "Welcome " . $name;

}
?>

<!DOCTYPE html>
<html>

<body>

    <h2>HTML Forms</h2>

    <form action="" method="post" id="myForm">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br><br>
        <input type="submit" value="Submit">
        <!-- Add a button to clear the result -->
        <input type="button" value="Clear" onclick="clearResult()">

    </form>
    <script>
        function clearResult() {
            // Reset the form fields
            document.getElementById("myForm").reset();
            // Redirect to the same page to clear the displayed result
            window.location.href = window.location.href;
        }
    </script>

</body>

</html>