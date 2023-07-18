<!DOCTYPE html>
<!--Embeding php logic into html-->
<html>
<head>
    <title>Complex PHP Form Handling</title>
</head>
<body>
    <?php

    // Define variables and set to empty values
    $name = $email = "";
    $nameErr = $emailErr = "";

    // Form submission and validation
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Name validation
        if (empty($_POST['name'])) {
            $nameErr = "Name is required";
        } else {
            $name = $_POST['name'];
        }

        // Email validation
        if (empty($_POST['email'])) {
            $emailErr = "Email is required";
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        } else {
            $email = $_POST['email'];
        }

        // Display form data if there are no errors
        if (empty($nameErr) && empty($emailErr)) {
            echo "<h2>Form Data:</h2>";
            echo "Name: $name<br>";
            echo "Email: $email";
        }
    }
    ?>

    <h1>Complex PHP Form Handling</h1>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>">
        <span style="color: red;"><?php echo $nameErr; ?></span><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>">
        <span style="color: red;"><?php echo $emailErr; ?></span><br>

        <input type="submit" value="Submit">
    </form>

</body>
</html>
